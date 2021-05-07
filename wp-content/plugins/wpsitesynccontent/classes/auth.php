<?php

/**
 * Utility methods for authentication
 * @package Sync
 */

class SyncAuth extends SyncInput
{
	// TODO: make this configurable between Source and Target sites so it's harder to break
	private $salt = 'Cx}@d7M#Q:C;k0GHigDFh&w^ jwIsm@Vc$:oEL+q:(%.iKp?Q*5Axfc[d_f(2#>ZZ^??4g-B|Wd>Q4NyM^;G+R`}S`fnFG?~+cM9<?V9s}UzVzW-t:x]?5)f|~EJ-NLb';

	// TODO: https://github.com/defuse/php-encryption

	/**
	 * Verifies the login information and creates a nonce to be sent back to the 'Source' that made the request.
	 * @param SyncApiResponse $resp The response object to fill in.
	 */
	public function check_credentials(SyncApiResponse $resp)
	{
//SyncDebug::log(__METHOD__.'()');
		$info = array();
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' post data=' . SyncDebug::arr_sanitize($_POST));
		$username = $this->post('username', NULL);
		$password = $this->post('password', NULL);
		$token = $this->post('token', NULL);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' user=' . $username . ' password=' . strlen($password) . ' characters token=' . substr($token, -16));
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' post= ' . SyncDebug::arr_sanitize($_POST));
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' password=' . $password);
		$source_model = new SyncSourcesModel();
		$api_controller = SyncApiController::get_instance();
		$user_signon = NULL;

		if (NULL !== $token && NULL !== $username) {
			// perform authentication via the token
			$source = $api_controller->source;
			$site_key = $api_controller->source_site_key;

//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' authenticating via token');
//SyncDebug::log(' - source: ' . $source . ' site_key: ' . substr($site_key, -16) . ' user: ' . $username . ' token: ' . substr($token, -16));
			$user_signon = $source_model->check_auth($source, $site_key, $username, $token);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' source->check_auth() returned ' . var_export($user_signon, TRUE));
		} else {
			$info['user_login'] = $username;
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' target: ' . get_bloginfo('wpurl'));

			$target = get_bloginfo('wpurl');
			if (isset($_POST['host']))
				$target = $_POST['host'];
			$info['user_password'] = $this->decode_password($password, $target);
			$info['remember'] = FALSE;

			// this is to get around the block in PeepSo that checks for the referrer
			$_SERVER['HTTP_REFERER'] = get_bloginfo('wpurl');

//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' checking credentials: ' . var_export($info, TRUE));
			// if no credentials provided, don't bother authenticating
			if (empty($info['user_login']) || empty($info['user_password'])) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' missing credentials');
				$resp->error_code(SyncApiRequest::ERROR_BAD_CREDENTIALS);
				return;
			}

			$user_signon = wp_signon($info, FALSE);
		}

if (isset($user_signon->ID))
	SyncDebug::log(__METHOD__.'():' . __LINE__ . ' checking login status ' . var_export($user_signon->ID, TRUE));
		if (is_wp_error($user_signon)) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' failed login ' . var_export($user_signon, TRUE));
			// return error message
			$error_code = 0;

			// handle nonSyncAuthError instances
			$err_type = SyncAuthError::TYPE_VALIDATION_FAILED;
			if (is_a($user_signon, 'SyncAuthError'))
				$err_type = $user_signon->type;

			// improve error messages when tokens are missing #142
			switch ($err_type) {
			// the $user_signon instance is actually a SyncAuthError not a WP_Error
			case SyncAuthError::TYPE_VALIDATION_FAILED:		$error_code = SyncApiRequest::ERROR_BAD_CREDENTIALS;		break;
			case SyncAuthError::TYPE_MISSING_TOKEN:			$error_code = SyncApiRequest::ERROR_MISSING_TOKEN;			break;
			case SyncAuthError::TYPE_INVALID_USER:			$error_code = SyncApiRequest::ERROR_MISSING_USER;			break;
			default:
				$error_code = SyncApiResponse::ERROR_BAD_CREDENTIALS;			// default to generic error
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' unrecognized exception code ' . $err_type);
			}
			$resp->error_code($error_code, NULL);
		} else {
			// we have a valid user - check additional requirements

			// check capabilities
			if (!$user_signon->has_cap('edit_posts')) {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' does not have capability: edit_posts');
				$resp->error_code(SyncApiRequest::ERROR_NO_PERMISSION);
				return;
			}

			// check to see if a token exists
			if (NULL === $token) {
				// we've just authenticated for the first time, create a token to return to Source site
				$data = array(
					'domain' => $api_controller->source,
					'site_key' => $api_controller->source_site_key,
					'auth_name' => $username,
				);
				$token = $source_model->add_source($data);
				if (FALSE === $token) {
					$resp->error_code(SyncApiRequest::ERROR_CANNOT_WRITE_TOKEN);
					return;
				}
				$resp->set('token', $token);				// return the token to the caller
			}

			// set cookies and nonce here
			$auth_cookie = wp_generate_auth_cookie($user_signon->ID, time() + 3600);
			$access_nonce = $this->generate_access_nonce($this->post('site_key'));
			$resp->set('access_nonce', $access_nonce);
			$resp->set('auth_cookie', $auth_cookie);
			$resp->set('user_id', $user_signon->ID);

			// include the site_key so the Source site can track what site the post is associated with
			$resp->set('site_key', SyncOptions::get('site_key'));

			// TODO: add API request type (auth, push, etc) to SyncApiResponse so callbacks know context
			$resp = apply_filters('spectrom_sync_auth_result', $resp);
//SyncDebug::log('Generated nonce - `' . substr($this->post('site_key'), -16) . ' = ' . $access_nonce . '`');
//SyncDebug::log('Generated auth cookie - `' . $auth_cookie . '`');
			$resp->success(TRUE);

			// save the user object in the controller for later permissions checks
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' setting user in Options');
			SyncOptions::set_user($user_signon);
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' signal others that api has been init');
			do_action('spectrom_sync_api_init');				// signal add-ons that user is initialized and API hooks can be set up
		}
	}

	/**
	 * Generate an access nonce for Sync operations
	 * @param string $site_key The site key for the current site
	 * @return string The generated nonce value
	 */
	public function generate_access_nonce($site_key)
	{
		return wp_create_nonce($site_key);
	}

	/*
	 * The following encode/decode methods are not meant to be super-secure.
	 * Just a means to avoid sending password completely in the clear.
	 */

	/**
	 * Encodes a password using Target domain to encrypt it
	 * @param string $password Clear text password that is to be encoded
	 * @param string $target Target domain name used to help obfuscate the returned string
	 * @return string The encoded password
	 */
	public function encode_password($password, $target)
	{
//SyncDebug::log(__METHOD__.'()');
		$key = $this->get_key($target);
//SyncDebug::log(' - key: ' . $key);

		$left = $right = '';
		if (function_exists('mcrypt_get_iv_size')) {
			$iv_size = @mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
			$iv = @mcrypt_create_iv($iv_size, MCRYPT_RAND);
			$encrypted = @mcrypt_encrypt(MCRYPT_BLOWFISH, $key, utf8_encode($password), MCRYPT_MODE_ECB, $iv);
			$left = base64_encode($encrypted);
		}

		$right = $this->enc_str($password, $key);

		$encoded = $left . ':' . $right;
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' encoded=[' . $encoded . ']');
		return $encoded;
	}

	/**
	 * Decodes a password using Target domain to decode it
	 * @param string $password A previously encoded password to be decoded
	 * @param string $target Target domain name used to help obfucate the encoded string
	 * @return string The password decoded and in clear text
	 */
	public function decode_password($password, $target)
	{
//SyncDebug::log(__METHOD__.'()');
		$key = $this->get_key($target);
//SyncDebug::log(' key: ' . $key);

		$left = $password;
		if (!empty($_POST['encode']))
			$right = $_POST['encode'];

//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' left=[' . $left . '] right=[' . $right . '] pass=[' . $password . ']');
		$cleartext = NULL;
		if (!empty($left) && function_exists('mcrypt_get_iv_size')) {
			$decoded = base64_decode($left);
//SyncDebug::log(' decoded: ' . $decoded);

			$iv_size = @mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
			$iv = @mcrypt_create_iv($iv_size, MCRYPT_RAND);
			$cleartext = @mcrypt_decrypt(MCRYPT_BLOWFISH, $key, $decoded, MCRYPT_MODE_ECB, $iv);
//SyncDebug::log(' cleartext: ' . var_export($cleartext, TRUE));
			$cleartext = trim($cleartext, "\0");
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' decoded left "' . $left . '" into "' . $cleartext . '"');
		}
		if (empty($cleartext) && !empty($right)) {
			$cleartext = $this->dec_str($right, $key);
//SyncDebug::log(__METHOD__.'() decoded right "' . $right . '" into "' . $cleartext . '"');
		}

		$cleartext = wp_slash($cleartext);	#277
//SyncDebug::log(' cleartext: ' . var_export($cleartext, TRUE));
		return $cleartext;
	}

	/**
	 * Encrypts a string
	 * @param type $string
	 * @param type $key
	 * @return type
	 */
	private function enc_str($string, $key)
	{
		$result = '';
		for ($i = 0; $i < strlen($string); ++$i) {
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key)) - 1, 1);
			$char = chr(ord($char) + ord($keychar));
			$result .= $char;
		}

		return base64_encode($result);
	}

	/**
	 * Decrypts a string
	 * @param type $string
	 * @param type $key
	 * @return type
	 */
	function dec_str($string, $key)
	{
		$result = '';
		$string = base64_decode($string);

		for ($i = 0; $i < strlen($string); ++$i) {
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key)) - 1, 1);
			$char = chr(ord($char) - ord($keychar));
			$result .= $char;
		}

		return $result;
	}

	/**
	 * Generates a 16 to 25 character "key" from a Target domain
	 * @param string $target The target domain name
	 * @return string A random looking string that is based on the target domain name
	 */
	private function get_key($target)
	{
		$target = trim(parse_url($target, PHP_URL_HOST), '/');
		// the encoded string needs to be fairly long so there's enough room to find our random looking string
		// so we add a long salt value to it
		$salted = $target . $this->salt;
		$encode = base64_encode($salted);

		$str = '';
		$len = strlen($encode);
		$count = 0;
		$start = min(20, strlen($target));

		for ($i = $start; $i < $len && '' === $str; ++$i) {
			if (ctype_digit($d = substr($encode, $i, 1))) {
				// when we find a digit - skip that number of characters
				$i += intval($d);
				// after the third time, take a portion of the string as our key
				if (3 === ++$count)
					$str = substr($encode, $i, 16 + intval($d));
			}
		}

		// if for some reason we didn't find a string, just grab something
		if ('' === $str)
			$str = substr($encode, 10, 20);

		return $str;
	}
}

// EOF