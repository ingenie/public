<?php

class SyncSourcesModel
{
	const TABLE_NAME = 'spectrom_sync_sources';

	private $_sources_table = NULL;

	public function __construct()
	{
		global $wpdb;

		$this->_sources_table = $wpdb->prefix . self::TABLE_NAME;
	}

	/**
	 * Finds Target site entry from host name
	 * @param string $target Domain name of Target site
	 * @return object The found row or NULL if no Target site found
	 */
	public function find_target($target)
	{
		$target = $this->_fix_domain($target);		// ensure it's just the domain name
		global $wpdb;
		$sql = "SELECT *
				FROM `{$this->_sources_table}`
				WHERE `site_key`='' AND `domain`=%s";
		$res = $wpdb->get_row($wpdb->prepare($sql, $target), OBJECT);
		return $res;
	}

	/**
	 * Looks up authenticated source
	 * @param string $source The Source site's domain name
	 * @param string $site_key The Source site's Site Key
	 * @param string $name The username to authenticate
	 * @param string $token The user's Token to authenticate against
	 * @return WP_User|WP_Error The user associated with the found row if the user is authenticated; otherwise WP_Error
	 */
	public function check_auth($source, $site_key, $name, $token)
	{
SyncDebug::log(__METHOD__.'()');
		global $wpdb;
		$source = $this->_fix_domain($source);
		$sql = "SELECT *
				FROM `{$this->_sources_table}`
				WHERE `allowed`=1 AND `domain`=%s AND ((`site_key`=%s AND `auth_name`=%s AND `token`=%s) OR
					(`auth_name`=%s AND `token`=%s))";
		$prep = $wpdb->prepare($sql, $source, $site_key, $name, $token, $name, $token);
//				WHERE `site_key`=%s AND `allowed`=1 AND `domain`=%s AND `auth_name`=%s AND `token`=%s";
//$prep = $wpdb->prepare($sql, $site_key, $source, $name, $token);
		$res = $wpdb->get_row($prep, OBJECT);
//SyncDebug::log(__METHOD__.'() sql=' . str_replace($token, substr($token, -16), str_replace($site_key, substr($site_key, -16), $prep)) . PHP_EOL . ' - res=' . var_export($res, TRUE));
//SyncDebug::log(__METHOD__.'() wpdb query: ' . str_replace($token, substr($token, -16), str_replace($site_key, substr($site_key, -16), $wpdb->last_query)));
		if (NULL !== $res) {
			$username = $res->auth_name;
			$user = get_user_by('login', $username);
			// if lookup by login name failed, try email address #118
			if (FALSE === $user)
				$user = get_user_by('email', $username);
			if (FALSE !== $user)
				return $user;
			return new SyncAuthError(SyncAuthError::TYPE_INVALID_USER);		// better error messages #142
		}

		// validation failed. check to see that the token still exists
		$sql = "SELECT *
			FROM `{$this->_sources_table}`
			WHERE `token`=%s
			LIMIT 1";
		$prep = $wpdb->prepare($sql, $token);
		$res = $wpdb->get_row($prep, OBJECT);
		if (NULL === $res)
			return new SyncAuthError(SyncAuthError::TYPE_MISSING_TOKEN);	// better error messages #142
		return new SyncAuthError(SyncAuthError::TYPE_VALIDATION_FAILED);
//		return new WP_Error(__('Token validation failed.', 'wpsitesynccontent'));
//		return $res;
	}

	/**
	 * Looks up a source site by Site Key and Domain - no authentication is performed
	 * @param string $source The domain name of the Source site
	 * @param string $site_key The Site Key to match with the Source's domain name
	 * @return object The Source site's information that matches the $domain and $site_key; or NULL if not found
	 */
	public function find_source($source, $site_key, $auth_name = NULL)
	{
		global $wpdb;
		$source = $this->_fix_domain($source);

		if (NULL !== $auth_name) {
			$sql = "SELECT *
					FROM `{$this->_sources_table}`
					WHERE `site_key`=%s AND `domain`=%s AND `auth_name`=%s";
			$res = $wpdb->get_row($prep = $wpdb->prepare($sql, $site_key, $source, $auth_name));
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' sql=' . str_replace($site_key, substr($site_key, -16), $prep) . ' res=' . var_export($res, TRUE));
			if (NULL !== $res)
				return $res;
		}

		$sql = "SELECT *
				FROM `{$this->_sources_table}`
				WHERE `site_key`=%s AND `domain`=%s";
		$res = $wpdb->get_row($prep = $wpdb->prepare($sql, $site_key, $source), OBJECT);
//SyncDebug::log(__METHOD__.'() sql=' . str_replace($site_key, substr($site_key, -16), $prep) . ' res=' . var_export($res, TRUE));
		return $res;
	}

	/**
	 * Adds an entry to the sources table, generating a unique token to authenticate this site
	 * @param array $data The data to add
	 * @return string The token that was generated for this site
	 */
	public function add_source($data)
	{
		global $wpdb;
//SyncDebug::log(__METHOD__.'() data=' . var_export($data, TRUE), TRUE);
		$error = FALSE;
		$token = '';
		$data['domain'] = $this->_fix_domain($data['domain']);
		// TODO: remove after SyncApiController ensures presence of Site Key
		if (!isset($data['site_key']) || empty($data['site_key']))
			$data['site_key'] = '';

//SyncDebug::log(__METHOD__.'() domain=' . $data['domain']);

		if ('' === $data['site_key']) {
			// no site_key, we're adding a record for a Target Site on the Source site
//SyncDebug::log(__METHOD__.'() - adding target');
			// first, check to see if the domain already exists
			$row = $this->find_target($data['domain']);
			if (NULL === $row) {
//SyncDebug::log(__METHOD__.'() - adding');
				// no record found, add it
				if (FALSE === ($token = $this->_insert_source($data)))
					$error = TRUE;
			} else {
//SyncDebug::log(__METHOD__.'() - existing');
				// update existing source token
				if (empty($data['token']))
					$data['token'] = $this->_make_token();
				if ($row->token !== $data['token']) {
					$update = $wpdb->update($this->_sources_table, array('token' => $data['token']), array('id' => $row->id));
					if (FALSE === $update) {
						// check for errors
						$error = TRUE;
					}
				}
				if (!$error)
					$token = $data['token']; // $row->token
			}
		} else {
			// there is a site_key. we're adding a record for a Source site on the Target site
//SyncDebug::log(__METHOD__.'() - adding source');
			// first, check to see if the domain already exists
			$row = $this->find_source($data['domain'], $data['site_key'], $data['auth_name']);
			if (NULL === $row || $row->auth_name !== $data['auth_name']) {
//SyncDebug::log(__METHOD__.'() - adding ' . __LINE__);
				// no record found, add it
				if (FALSE === ($token = $this->_insert_source($data)))
					$error = TRUE;
			} else {
//SyncDebug::log(__METHOD__.'() - existing ' . __LINE__);
				// update existing source
//SyncDebug::log(__METHOD__.'() updating id ' . $row->id . ' with token '); // . $data['token']);
				if (empty($data['token']) || $row->token !== $data['token']) {
					// TODO: ensure no duplicate tokens
					$data['token'] = $this->_make_token();
					$update = $wpdb->update($this->_sources_table, array('token' => $data['token']), array('id' => $row->id));
					if (FALSE === $update) {
						// check for errors
						$error = TRUE;
					}
				}
				if (!$error)
					$token = $data['token']; // $row->token
			}
		}

//SyncDebug::log(__METHOD__.'() last query: ' . str_replace($token, substr($token, -16), $wpdb->last_query));
//SyncDebug::log(__METHOD__.'() returning token ' . substr($token, -16));
		if ($error)
			return FALSE;
		return $token;
	}

	/**
	 * Removes a Token from the `spectrom_sync_source` table
	 * @param string $domain The domain name that the Token is associated with
	 * @param string $site_key The Site Key. If empty will assume a Target Token, if provided will assume a Source Token.
	 */
	public function remove_token($domain, $site_key = NULL)
	{
		global $wpdb;
		$domain = $this->_fix_domain($domain);
		$sql = "DELETE FROM `{$this->_sources_table}`
			WHERE `domain`=%s AND `site_key`=%s
			LIMIT 1";
		if (NULL === $site_key)
			$site_key = '';
		$query = $wpdb->prepare($sql, $domain, $site_key);
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' running ' . empty($site_key) ? $query : str_replace($site_key, substr($site_key, -16), $query));
		$wpdb->query($query);
	}

	/**
	 * Inserts a new record into the sources table, creating a unique token
	 * @param array $data The data to add
	 * @return string|boolean The token that was generated for this site or FALSE if there was an error
	 */
	private function _insert_source($data)
	{
		global $wpdb;
		$wpdb->query('START TRANSACTION');

		$count = 1;
		$error = FALSE;
		if (empty($data['token'])) {
			do {
				$token = $this->_make_token();
//SyncDebug::log(__METHOD__ . '() looking for token ' . substr($token, -16));
				// this finds a match, regardless of the value of `allowed`
				$sql = "SELECT `id`
						FROM `{$this->_sources_table}`
						WHERE `token`=%s";
				$res = $wpdb->get_results($prep = $wpdb->prepare($sql, $token));
//SyncDebug::log('sql=' . str_replace($token, substr($token, -16), $prep) . ' res=' . var_export($res, TRUE));
				if (NULL === $res) {
					// check for db errors and exit the loop
					$error = TRUE;
					break;
				}
				if (0 !== count($res))
					$token = NULL;	// found matching token, continue this process until we have unique token
//if (++$count > 20) die;
			} while (NULL === $token);
//SyncDebug::log(' - token is unique');
		} else {
			$token = $data['token'];
		}

		if (!$error) {
			// TODO: update existing site by site_key/auth_name
			$row = array(
				'domain' => $this->_fix_domain($data['domain']),
				'site_key' => $data['site_key'],
				'auth_name' => $data['auth_name'],
				'token' => $token,
				'allowed' => 1,
			);
//SyncDebug::log(__METHOD__ . '() inserting: ' . SyncDebug::arr_sanitize($row));
			$res = $wpdb->insert($this->_sources_table, $row);
			// check for errors
			if (FALSE === $res)
				$error = TRUE;
		}
//SyncDebug::log(' - res: ' . var_export($res, TRUE));
		$wpdb->query('COMMIT');

		if ($error)
			return FALSE;
		return $token;
	}

	/**
	 * Fixes the domain name, removing the schema and slashes if present
	 * @param string $domain The domain name to normalize
	 * @return string The modified domain name with schema, etc. removed
	 */
	private function _fix_domain($domain)
	{
		// TODO: probably need to keep the path in case WP is installed in subdirectory
		if (FALSE !== strpos($domain, '://'))
			$domain = parse_url($domain, PHP_URL_HOST);
		return trim($domain, '/');
	}

	/**
	 * Marks a Source site as not allowed to authenticate on the Target
	 * @param string $site_key The Site Key to update
	 * @param string $user The user name associated with the Site Key to disallow
	 */
	public function disallow_source($site_key, $user)
	{
		global $wpdb;
		$wpdb->update($this->_sources, array('allowed' => 0), array('site_key' => $site_key, 'auth_name' => $user));
	}

	/**
	 * Marks a Source site as allowed to authenticate on the Target
	 * @param string $site_key The Site Key to update
	 * @param string $user The user name associated with the Site Key to allow
	 */
	public function allow_source($site_key, $user)
	{
		global $wpdb;
		$wpdb->update($this->_sources, array('allowed' => 1), array('site_key' => $site_key, 'auth_name' => $user));
	}

	private function _make_token()
	{
		return wp_generate_password(48, FALSE);
	}
}

// EOF
