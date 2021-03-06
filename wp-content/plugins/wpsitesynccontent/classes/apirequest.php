<?php

/**
 * Sends requests to the API on the Target
 */
class SyncApiRequest implements SyncApiHeaders
{
	const ERROR_CANNOT_CONNECT = 1;
	const ERROR_UNRECOGNIZED_REQUEST = 2;
	const ERROR_NOT_INSTALLED = 3;
	const ERROR_BAD_CREDENTIALS = 4;
	const ERROR_SESSION_EXPIRED = 5;
	const ERROR_CONTENT_EDITING = 6;  // deprecated
	const ERROR_CONTENT_LOCKED = 7;
	const ERROR_POST_DATA_INCOMPLETE = 8;
	const ERROR_USER_NOT_FOUND = 9;
	const ERROR_FILE_UPLOAD = 10;
	const ERROR_PERMALINK_MISMATCH = 11;
	const ERROR_WP_VERSION_MISMATCH = 12;
	const ERROR_SYNC_VERSION_MISMATCH = 13;
	const ERROR_EXTENSION_MISSING = 14;
	const ERROR_INVALID_POST_TYPE = 15;
	const ERROR_REMOTE_REQUEST_FAILED = 16;
	const ERROR_BAD_POST_RESPONSE = 17;
	const ERROR_MISSING_SITE_KEY = 18;
	const ERROR_POST_CONTENT_NOT_FOUND = 19;
	const ERROR_BAD_NONCE = 20;
	const ERROR_UNRESOLVED_PARENT = 21;
	const ERROR_NO_AUTH_TOKEN = 22;
	const ERROR_NO_PERMISSION = 23;
	const ERROR_INVALID_IMG_TYPE = 24;
	const ERROR_POST_NOT_FOUND = 25;
	const ERROR_CONTENT_UPDATE_FAILED = 26;
	const ERROR_CANNOT_WRITE_TOKEN = 27;
	const ERROR_UPLOAD_NO_CONTENT = 28;
	const ERROR_PHP_ERROR_ON_TARGET = 29;
	const ERROR_SSL_PROTOCOL_ERROR = 30;
	const ERROR_WORDFENCE_BLOCKED = 31;
	const ERROR_MODSECURITY_BLOCKED = 32;
	const ERROR_INVALID_RESPONSE_TYPE = 33;
	const ERROR_UNRECOGNIZED_OPERATION = 34;
	const ERROR_CLOUDFLARE_BLOCKED = 35;
	const ERROR_CLOUDFRONT_BLOCKED = 36;
	const ERROR_MISSING_TOKEN = 37;
	const ERROR_MISSING_USER = 38;
	const ERROR_GB_ATTACHMENT_ID = 39;
	const ERROR_GB_TAX_ID = 40;

	const NOTICE_FILE_EXISTS = 1;
	const NOTICE_CONTENT_SYNCD = 2;
	const NOTICE_INTERNAL_ERROR = 3;

	// TODO: rename to $target
	public $host = NULL;	  // URL of the host site we're pushing to
	public $id_refs = array();	 // list if image/content references that need to be adjusted
	public $post_children = array();   // list of post children to be adjusted during push_complete API handling
	public $gutenberg_queue = array();   // list of Gutenberg post IDs that need to be parsed for references
	public $gutenberg_processed = array();  // list of Gutenberg post IDs that have been processed (used to skip duplicate references)
	public $gutenberg_obj = NULL;	// the current Gutenberg block data as an object
	public $post_id = 0;	  // post ID being processed
	public $thumbnail_id = 0;	 // the post's thumbnail ID
	private $_post_data = NULL;	 // reference to the $post_data array being constructed
	private $_source_domain = NULL;	// domain sending the post information
	private $_response = NULL;	 // the SyncApiResponse instance for the current request
	private $_user_id = 0;
	private $_target_data = array();
	private $_auth_cookie = '';
	private $_queue = array();
	private $_processing = FALSE;	// set to TRUE when processing the $_queue
	private $_sent_images = array();   // list of image attachments/references within post
	private $_trigger_push_complete = FALSE; // set to TRUE when 'spectrom_sync_push_queue_complete' needs to be triggered
	private $_triggered_push_complete = FALSE; // set to TRUE when 'spectrom_sync_push_queue_complete' action has been triggered

	/**
	 * Initializes the cookies and nonce, throws an exception if it fails any of the validations.
	 * @param array $target_data A set of options data with credentials for Target system.
	 */

	public function __construct($target_data = array())
	{
		$this->_user_id = get_current_user_id();

		if (empty($target_data))
			$this->_target_data = SyncOptions::get_all();
		else
			$this->_target_data = $target_data;

		if (isset($this->_target_data['host']))
			$this->host = $this->_target_data['host'];
		$this->host = apply_filters('spectrom_sync_target_url', $this->host, $this); // helpful in handling multiple targets #50
	}

	/**
	 * Sends an API call to the target site.
	 * @param string $action The action to be performed, 'auth', 'push', etc. Extendable by add-ons.
	 * @param array $data The data to be sent. Contents of array depend on the api request type being made.
	 * @param array $remote_args Arguments to override wp_remote_post
	 * @return SyncApiResponse object; the $success property indicates success/failure of request
	 */
	public function api($action, $data = array(), $remote_args = array())
	{
SyncDebug::log(__METHOD__ . '() action="' . $action . '"');
		// TODO: check if there's a configured Target site and Source site has a key
//		if (!is_array($data))
//			$data = array();
		$this->_response = $response = new SyncApiResponse();

		// always add the authentication data to the request
		if (is_array($data)) {
			$ret = $this->_auth($data);
			// check $ret for WP_Error
			if (is_wp_error($ret)) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' error authenticating: ' . var_export($ret, TRUE));
				$response->error_code(self::ERROR_BAD_CREDENTIALS, $ret->get_error_message());
				return $response;
			}
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' current auth data: ' . SyncDebug::arr_sanitize($data));
		}

		// TODO: do some sanity checking on $data contents
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' checking action="' . $action . '"');
		switch ($action) {
		case 'auth':
			// authentication handled by _auth() above. This is here to avoid falling into 'default' case
			break;
		case 'push':
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' calling _push()');
			$data = $this->_push($data);
			// check return value to ensure Content was found #146
			if (NULL === $data)
				$response->error_code(self::ERROR_POST_CONTENT_NOT_FOUND);
			break;
		case 'upload_media':
			$data = apply_filters('spectrom_sync_api_request_media', $data, $action, $remote_args);
			$data = $this->_media($data, $remote_args);  // converts $data to a string
			break;
		case 'getinfo':
		case 'push_complete':
			// nothing to do - caller has set up $data as needed
			break;
		default:
			// allow add-ons to create the $data object for non-standard api actions
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' sending action="' . $action . '" to filter \'spectrom_sync_api_request_action\'');
			$data = apply_filters('spectrom_sync_api_request_action', $data, $action, $remote_args, $this);
			break;
		}
// reduced logging																#!#
if (is_string($data))			   #!#
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' action="' . $action . '" data=' . SyncDebug::post_sanitize($data));#!#
else				   #!#
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' action="' . $action . '" data=' . SyncDebug::arr_sanitize($data));#!#
		// check value returned from API call
		// check for filter returning a WP_Error instance
		if (is_wp_error($data)) {
			$response->error_code(abs($data->get_error_code()));
		}
		// check for any errors
		if ($response->has_errors()) {
			// an error occured somewhere along the way. report it and return
			return $response;
		}

		// allow add-ons to modify the data stream
		$data = apply_filters('spectrom_sync_api_request', $data, $action, $remote_args);

		// check if performing a Pull operation. Add image IDs to data bb#24
		if ('pull' === WPSiteSyncContent::get_instance()->get_parent_action()) {
//		if (NULL !== ($api_controller = SyncApiController::get_instance())) {
//			if ('pull' === $api_controller->get_parent_action()) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' adding id ref data to post data: ' . var_export($this->id_refs, TRUE));
			$data['id_refs'] = $this->id_refs;
//			}
		}

		// merge the body of the post with any other wp_remote_() arguments passed in
		$remote_args = array_merge($remote_args, array('body' => $data)); // new $data content should override anything in $remote_args
		// setup the API arguments arguments
		global $wp_version;
//		$model = new SyncModel();
		if (!isset($remote_args['headers']))
			$remote_args['headers'] = array();
		$remote_args['headers'][self::HEADER_SYNC_VERSION] = WPSiteSyncContent::PLUGIN_VERSION;
		$remote_args['headers'][self::HEADER_WP_VERSION] = $wp_version;
		$remote_args['headers'][self::HEADER_SOURCE] = site_url();
		$remote_args['headers'][self::HEADER_SITE_KEY] = SyncOptions::get('site_key');
		$remote_args['headers'][self::HEADER_MATCH_MODE] = SyncOptions::get('match_mode', 'title');

		if (!isset($remote_args['timeout']))
			$remote_args['timeout'] = 30;	// default to a 30 second timeout if not already specified


// send data where it's going
		$url = $this->host . '?pagename=' . WPSiteSyncContent::API_ENDPOINT . '&action=' . $action;
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' sending API request to ' . $url, TRUE);

		$remote_args = apply_filters('spectrom_sync_api_arguments', $remote_args, $action);
		$remote_args['headers'][self::HEADER_SYNC_REQUEST_ID] = substr(SyncOptions::get('site_key'), -16) . '-' . date('z.His') . '-' . rand(100, 999);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' req id=' . $remote_args['headers'][self::HEADER_SYNC_REQUEST_ID]);

		$request = wp_remote_post($url, $remote_args);
		unset($remote_args['headers']);
		if (is_wp_error($request)) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error in wp_remote_post(): ' . var_export($request, TRUE));
			// handle error
			if (isset($request->errors['http_request_failed']) &&
				FALSE !== stripos(var_export($request->errors['http_request_failed'], TRUE), 'Unknown SSL protocol error in connection'))
				$response->error_code(self::ERROR_SSL_PROTOCOL_ERROR, $request->get_error_message());
			else
				$response->error_code(self::ERROR_REMOTE_REQUEST_FAILED, $request->get_error_message());
		} else {
			$response->result = $request;
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' api result from action="' . $action . '": ' . SyncDebug::arr_sanitize($request));

			// validate the host and credentials
			$http_code = abs($request['response']['code']);
			$http_server = isset($request['headers']->data) && isset($request['headers']->data['server']) ? $request['headers']->data['server'] : '';
			$http_body = str_replace('\\', '', $request['body']);
			if ($http_code >= 400 &&
				(FALSE !== stripos($http_body, 'Wordfence') && FALSE !== stripos($http_body, 'A potentially unsafe operation has been detected'))) {
				$response->error_code(self::ERROR_WORDFENCE_BLOCKED);
			} else if ($http_code >= 400 &&
				(FALSE !== stripos($http_body, 'Attention Required! | Cloudflare') && FALSE !== stripos($http_body, 'Please complete the security check to access'))) {
				$response->error_code(self::ERROR_CLOUDFLARE_BLOCKED, __('Complete security check.', 'wpsitesynccontent'));
			} else if ($http_code >= 400 && 'cloudflare' === $http_server &&
				FALSE !== stripos($http_body, 'You don\'t have permission to access')) {
				$response->error_code(self::ERROR_CLOUDFLARE_BLOCKED, __('No permission', 'wpsitesynccontent'));
			} else if ($http_code >= 400 && 'cloudflare' === $http_server) {
				$response->error_code(self::ERROR_CLOUDFLARE_BLOCKED, sprintf(__('HTTP Response: %1$d.', 'wpsitesync'), $http_code));
			} else if ($http_code > 200 &&
				(FALSE !== stripos($http_body, 'CloudFront attempted to establish a connection') &&
				FALSE !== stripos($http_body, 'Generated by cloudfront'))) {
				$response->error_code(self::ERROR_CLOUDFRONT_BLOCKED);
			} else if (406 === $http_code && FALSE !== stripos($http_body, 'This error was generated by Mod_Security.')) {
				$response->error_code(self::ERROR_MODSECURITY_BLOCKED);
			} else if (!($http_code >= 200 && $http_code < 300)) {
				$response->error_code(self::ERROR_BAD_POST_RESPONSE, $http_code);
			} else if (!isset($request['headers'][self::HEADER_SYNC_VERSION])) {
				$response->error_code(self::ERROR_NOT_INSTALLED);
			} else if (FALSE === stripos($request['headers']['content-type'], 'application/json')) {
//			} else if ('application/json' !== $request['headers']['content-type']) {
//			} else if ('application/json' !== $request['headers']['content-type'] && 'application/json; charset=UTF-8' !== $request['headers']['content-type']) {
				$response->error_code(self::ERROR_INVALID_RESPONSE_TYPE, $request['headers']['content-type']);
			} else if (WPSiteSyncContent::PLUGIN_VERSION !== $request['headers'][self::HEADER_SYNC_VERSION]) {
				if (1 === SyncOptions::get_int('strict', 0))
					$response->error_code(self::ERROR_SYNC_VERSION_MISMATCH);
			} else if (!version_compare($wp_version, $request['headers'][self::HEADER_WP_VERSION], '==')) {
				if (1 === SyncOptions::get_int('strict', 0))
					$response->error_code(self::ERROR_WP_VERSION_MISMATCH);
			}
			// TODO: check $request['headers'][self::HEADER_SYNC_REQUEST_ID]

			if (!$response->has_errors()) {
				// API request went through, check for error_code returned in JSON results
				$request_body = $this->_adjust_response_body($request['body']);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' response body: ' . SyncDebug::arr_sanitize($request_body));
				$response->response = json_decode($request_body);
			}
			// TODO: convert error/notice codes into strings at this point.
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' received response from Target for action="' . $action . '":');
//SyncDebug::log(__METHOD__.'():' . __LINE__ .' body: ' . $request_body);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' - ' . var_export($response->response, TRUE));
			// examine the Target response's error codes and assign them to the local system's response object
			// TODO: Use SyncResponse::copy() method
			if (isset($response->response->error_code) && 0 !== abs($response->response->error_code)) {
				$msg = NULL;
				if (!empty($response->response->error_data))
					$msg = $response->response->error_data;
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error code=' . $response->response->error_code . ' msg=' . var_export($msg, TRUE));
				$response->error_code($response->response->error_code, $msg);
			} else if (isset($response->response->has_errors) && 0 !== abs($response->response->has_errors)) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error code=' . $response->response->error_code);
				$response->error_code($response->response->error_code);
			}
			do_action('spectrom_sync_api_response', $response, $action, $data);

			// copy notice codes
			if (isset($response->response->notice_codes)) {
				foreach ($response->response->notice_codes as $code)
					$response->notice_code($code);
			}
			// if Target reported a problem, make sure we send that back as our API result
			if (isset($response->response->has_errors) && $response->response->has_errors)
				$response->copy_json($response->response);

//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' response: ' . var_export($response, TRUE));
//if (isset($response->response)) {
//SyncDebug::log('- error code: ' . $response->response->error_code);
//SyncDebug::log('- timeout: ' . $response->response->session_timeout);
//SyncDebug::log('- has errors: ' . $response->response->has_errors);
//SyncDebug::log('- success: ' . $response->response->success);
//}
			if (isset($response->response)) {
				do_action('spectrom_sync_api_request_response', $action, $remote_args, $response);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' response: ' . SyncDebug::arr_sanitize($response));
				// only report success if no other error codes have been added to response object
//$response->response->error_code) { //
				if (0 === abs($response->response->error_code)) {
					$response->success(TRUE);
					// if it was an authentication request, store the auth cookies in user meta
					// TOOD: need to do this differently to support auth cookies from multiple Targets
					// perform logging
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' perform after action logging action="' . $action . '"');
					switch ($action) {
					case 'auth':  // no logging, but add to source table and set target site_key
						if (isset($response->response->data)) {
							// TODO: deprecated
							update_user_meta($this->_user_id, 'spectrom_site_cookies', $response->response->data->auth_cookie);
							update_user_meta($this->_user_id, 'spectrom_site_nonce', $response->response->data->access_nonce);
							update_user_meta($this->_user_id, 'spectrom_site_target_uid', $response->response->data->user_id);

SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' saving auth token');
							// store the returned token for later authentication uses
							$sources_model = new SyncSourcesModel();
							$source = array(
								'domain' => $data['host'],
								'site_key' => '', // indicates that it's a Target's entry on the Source
								'auth_name' => $data['username'],
								'token' => $response->response->data->token,
							);
							$added = $sources_model->add_source($source);
							if (FALSE === $added) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error storing in database');
								$response->error_code(SyncApiRequest::ERROR_CANNOT_WRITE_TOKEN);
							}
						}
						break;

					case 'push':
						// perform logging
						$log_data = array(
							'post_id' => abs($data['post_id']),
							'post_title' => $data['post_data']['post_title'],
							'operation' => 'push',
							'source_user' => get_current_user_id(),
							'source_site' => parse_url(SyncOptions::get('target'), PHP_URL_HOST), // post('origin'),
							'source_site_key' => SyncOptions::get('site_key'),
							'target_user' => 0,
							'type' => 'send',
						);
						$log_model = new SyncLogModel();
						$log_model->log($log_data);
					// intentionally fall through to 'upload_media' case

					case 'upload_media':
						// TODO: get post ID for pdf attachments
						if (isset($data['post_id']) && isset($response->response->data->post_id)) {
							$sync_data = array(
								'site_key' => SyncOptions::get('site_key'),
								'source_content_id' => abs($data['post_id']),
								'target_content_id' => $response->response->data->post_id,
								'target_site_key' => SyncOptions::get('target_site_key'),
							);
//SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' logging data ' . var_export($sync_data, TRUE));

							$model = new SyncModel();
							$model->save_sync_data($sync_data);
						}
						break;

					case 'push_complete':
						// no logging needed: 'push_complete' does not create any
						// new post entries it only adjusts existing ones
						break;

					default:
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' - triggering "spectrom_sync_action_success" on action="' . $action . '" data=' . SyncDebug::arr_sanitize($data));
						if (isset($data['post_id']))
							do_action('spectrom_sync_action_success', $action, abs($data['post_id']), $data, $response);
					}
				}
else SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error code=' . $response->get_error_code());#!#
			}

			// initial API call complete- check for anything in the queue
			if (!$this->_processing && apply_filters('spectrom_sync_process_queue', TRUE, $action, $this)) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' starting queue processing');
				$this->_process_queue($remote_args, $response);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' done processing queue');
			}
		}

		// API request complete. Return results to caller.
		return $response;
	}

	/**
	 * Strips any error messages contained withing JSON response content
	 * @param string $body The response body of a JSON API request
	 * @return string The response body with any error messages stripped off
	 */
	private function _adjust_response_body($body)
	{
		$body = trim($body);
		if ('{' !== $body[0]) {
SyncDebug::log(__METHOD__ . '() found extra data in response content: ' . var_export($body, TRUE));
			// checks to see that the JSON payload starts with '{"error_code":' - which is the initial data send in a SyncApiResponse object
			$pos = strpos($body, '{"error_code":');
			if (FALSE !== $pos)
				$body = substr($body, $pos);

			// make sure that a '}' is the last character of the response data
			$pos = strrpos($body, '}');
			if ($pos !== strlen($body) - 1)
				$body = substr($body, 0, $pos + 1);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' response body=' . var_export($body, TRUE));
		}
		if (FALSE === strpos($body, '{')) {
			// no JSON data present in response
			$body = '{"error_code":' . self::ERROR_PHP_ERROR_ON_TARGET . ',"has_errors":1,"success":0,"data":{"error":"none"}}';
		}
		return $body;
	}

	/**
	 * Sends any additional API requests that were queued up during the first API call. These are mostly from images associated with the post
	 * @param array $remote_args Arguments being passed to wp_remote_post()
	 * @param SyncApiResponse $response The response instance that will be returned from api()
	 */
	private function _process_queue($remote_args, $response)
	{
SyncDebug::log(__METHOD__ . '()');
		if ($this->_processing || $response->has_errors()) {
SyncDebug::log(__METHOD__ . '() queue already being processed');
			return;
		}
		$this->_processing = TRUE;

SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' queue has ' . count($this->_queue) . ' entries');
		do_action('spectrom_sync_push_queue_start');
		foreach ($this->_queue as $queue) {
			$action = $queue['action'];
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found action ' . $action);
			$res = $this->api($action, $queue['data'], $remote_args);
			// exit processing if one of the queued API calls has an error
			if ($res->has_errors()) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' got an error from the Target: ' . var_export($res, TRUE));
				$response->error_code($res->get_error_code(), $res->get_error_data());
				break;
			}
		}
		// signal end of queue. has to be done before setting _processing to FALSE
		do_action('spectrom_sync_push_queue_complete', $this);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' queue processing complete');

		$this->_processing = FALSE;
	}

	/**
	 * Adds items to the post processing queue
	 * @param string $action The API action. This is something handled in the api() method, or via the 'spectrom_sync_api_request_action' filter
	 * @param array $data Data used in processing the request; passed to api()
	 */
	private function _add_queue($action, $data)
	{
		// TODO: deprecate this
SyncDebug::log(__METHOD__ . '() adding "' . $action . '" to queue'); // with ' . var_export($data, TRUE));
		$this->_queue[] = array('action' => $action, 'data' => $data);
	}

	public function add_queue($action, $data)
	{
		$this->_add_queue($action, $data);
	}

	public function get_queue()
	{
		return $this->_queue;
	}

	public function clear_queue()
	{
		$this->_queue = array();
	}

	/**
	 * Returns the current user's auth cookie provided by auth()
	 * @return string The auth cookie to be used on api requests
	 */
	private function _get_auth_cookie()
	{
//SyncDebug::log(__METHOD__.'() user id=' . $this->_user_id);
		$this->_auth_cookie = get_user_meta($this->_user_id, 'spectrom_site_cookies', TRUE);

		// TODO: check for error and return WP_Error instance

		return $this->_auth_cookie;
	}

	/**
	 * Validates the target settings and sets the proper nonces
	 * @return mixed WP_Error on failure | The auth cookie on success
	 */
	public function auth()
	{
		// TODO: deprecate this method. only used by SyncAjax
SyncDebug::log(__METHOD__ . '()', TRUE);
		$current_user_id = get_current_user_id();
		// spoof the referer header
		$args = array('headers' => 'Referer: ' . $this->host);
SyncDebug::log(__METHOD__ . '() target data=' . var_export($this->_target_data, TRUE));

		$auth_args = $this->_target_data;
		$request = $this->api('auth', $this->_target_data /* $auth_args */, $args);
SyncDebug::log(__METHOD__ . '() target data: ' . var_export($auth_args, TRUE));

		if (!is_wp_error($request)) {
			$reqdata = json_decode($request->__toString());
			// TODO: check response- getting "trying to get property of non-object"
			update_user_meta($current_user_id, 'spectrom_site_cookies', $reqdata->data->auth_cookie /* $request->data->auth_cookie */);
			update_user_meta($current_user_id, 'spectrom_site_nonce', $reqdata->data->access_nonce /* $request->data->access_nonce */);
			update_user_meta($current_user_id, 'spectrom_site_target_uid', $reqdata->data->user_id /* $request->data->user_id */);

			return $request->data->auth_cookie;
		}

		return $request;
	}

	/**
	 * Perform push operation
	 * @param int $post_id The post ID to be pushed
	 * @return SyncApiResponse result data
	 */
	// TODO: remove this method- all functionality needs to be in _push()
	private function push($post_id)
	{
		// TODO: refactor to call $this->api('push')
		$model = new SyncModel();
		$response = new SyncApiResponse();

		// TODO: $this->_target_data created in constructor
		$settings = SyncOptions::get_all();

		// TODO: site_key needs to be present before calling push()
		if (!isset($this->_target_data['site_key'])) {
			$response->error_code(self::ERROR_MISSING_SITE_KEY);
			return $response;
		}

		// build array of data that will be sent to Target via the API
		$push_data = $model->build_sync_data($post_id);

		// Check if this is an update
		$sync_data = $model->get_sync_data($post_id);
		if (NULL !== $sync_data)
			$push_data['target_post_id'] = $sync_data->target_content_id;

// TODO: move into build_sync_data() and add filtering
		// serialize the data into a JSON string.
//		$push_data = json_encode($push_data);
		// use the wp_remote_post() API to perform a connection/authenticate operation on the Target site using the Target site's configured credentials and send the JSON data.
//		$target = new SyncApiRequest();

		$result = $this->api('push', $push_data); // $target->api('push', $push_data); // send data
/////;here;
		// the response from the Target site will indicate success or failure of the operation via an error code.
		// this error code will be used to look up a translatable string to display a useful error message to the user.
		// the success or error message will be returned as part of the response for the AJAX request and displayed just
		// above the ( Push to Target ) button within the MetaBox.
//		$response = new SyncApiResponse();
		if (!is_wp_error($result)) {
			// PARSE IMAGES FROM SOURCE ONLY
			$this->_parse_media($result->data->post_id, $push_data['post_data']['post_content']); //, $target, $response);
			$response->success(TRUE);
			$response->notice_code(SyncApiRequest::NOTICE_CONTENT_SYNCD);
			$response->set('post_id', $result->data->post_id);

			global $wp_version;

			$sync_data = array(
				'site_key' => $result->data->site_key,
				'source_content_id' => $post_id,
				'target_content_id' => $result->data->post_id,
				'wp_version' => $wp_version,
				'sync_version' => WPSiteSyncContent::PLUGIN_VERSION,
			);

			$model = new SyncModel();
			$model->save_sync_data($sync_data);
		} else {
			$response->success(FALSE);
			$response->error($result->get_error_message());
		}

		$response = apply_filters('spectrom_sync_push_result', $response);

		return $response;
	}

	/**
	 * Adds authentication information to the data array
	 * @param array $data The data array being built for the current API request
	 * @return NULL | WP_Error NULL on success or WP_Error on error
	 */
	private function _auth(&$data)
	{
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' data: ' . SyncDebug::arr_sanitize($data));
		// TODO: indicate error if target system not set up
		// if no Target credentials provided, get them from the config
		if (!isset($data['username']) /* || !isset($data['password']) */ || !isset($data['host'])) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' using credentials from config');
			$source_model = new SyncSourcesModel();
			$row = $source_model->find_target(SyncOptions::get('host'));
			if (NULL === $row) {
				$this->_response->error_code(self::ERROR_NO_AUTH_TOKEN);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' target not found');
				return new WP_Error($this->error_code_to_string(self::ERROR_NO_AUTH_TOKEN));
			}
			if (!isset($this->_target_data['token']))
				$this->_target_data['token'] = $row->token;

			if (!isset($data['username']))
				$data['username'] = SyncOptions::get('username');
			if (!isset($data['token']))
				$data['token'] = $row->token;
			// TODO: change name to ['target'] to be more consistent
			if (!isset($data['host']))
				$data['host'] = SyncOptions::get('host');
		} else if (!empty($data['username']) && !empty($data['password']) && !empty($data['host'])) {
			// using passed-in credentials. add $data[] values into $this->_target_data
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' using credentials provided');
			$this->_target_data['host'] = $data['host'];
			$this->_target_data['username'] = $data['username'];
			$this->_target_data['password'] = $data['password'];
			$this->host = $data['host'];
		}

		$auth_cookie = $this->_get_auth_cookie();
		if (is_wp_error($auth_cookie)) {
//SyncDebug::log(__METHOD__.'() no authentication cookie data found');
			return $auth_cookie;
		}

//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' target data: ' . var_export($this->_target_data, TRUE));
		// check for site key and credentials
		if (!isset($this->_target_data['site_key'])) {
			// if no site key - generate one
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' missing site key...generating');
			$model = new SyncModel();
			$this->_target_data['site_key'] = $model->generate_site_key();
//			return new WP_Error(self::ERROR_MISSING_SITE_KEY);
		}
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' target username: ' . $this->_target_data['username']);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' target token: ' . (isset($this->_target_data['token']) ? substr($this->_target_data['token'], -16) : ''));
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' data token: ' . (isset($data['token']) ? substr($data['token'], -16) : ''));
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' data password: ' . (isset($data['password']) ? $data['password'] : ''));
		if (empty($this->_target_data['username']) ||
			(empty($this->_target_data['token']) && empty($data['token']) && empty($data['password']))) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' return ERROR_BAD_CREDENTIALS');
			return new WP_Error(self::ERROR_BAD_CREDENTIALS);
		}

//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' adding authentication data to array');
		// add authentication to the data array
		$data['auth'] = array(
			'cookie' => $auth_cookie,
			'nonce' => get_user_meta(get_current_user_id(), 'spectrom_site_nonce', TRUE),
			'site_key' => $this->_target_data['site_key']
		);
		// if password provided (first time authentication) then encrypt it
		if (!empty($data['password'])) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' encrypting password');
			$auth = new SyncAuth();
			$data['password'] = $auth->encode_password($data['password'], $data['host']);

//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' encoded: ' . $data['password']);
			$parts = explode(':', $data['password']);
			$this->_target_data['password'] = $data['password'] = $parts[0];
			$this->_target_data['encode'] = $data['encode'] = $parts[1];
		}
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' data: ' . SyncDebug::arr_sanitize($data));
		return NULL;
	}

	public function clear_post_data()
	{
		$this->_post_data = array();
	}

	public function set_post_data($data)
	{
		$this->_post_data = &$data;
	}

	/**
	 * Constructs the data associated with a post ID in preparation of a Push operation
	 * @param int $post_id The post ID for the Content to be Pushed
	 * @param array $data The data array to add Post Content information to
	 * @return array The updated data array or NULL if Content cannot be found or WP_Error when an error occurs
	 */
	public function get_push_data($post_id, $data)
	{
		// build array of data that will be sent to Target via the API
		$model = new SyncModel();
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' post id=' . $post_id);
		$post_data = $model->build_sync_data($post_id);
		$this->_post_data = &$post_data;		// save a copy for the gutenberg_taxonomy_block() method
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' post data: ' . var_export($post_data, TRUE));
		if (0 === count($post_data))
			return NULL;

		// Check if this is an update of a previously sync'd post
		// TODO: use a better variable name than $sync_data
		$sync_data = $model->get_sync_data($post_id, SyncOptions::get('site_key'));
//SyncDebug::log(__METHOD__.'() sync data: ' . SyncDebug::arr_sanitize($sync_data));

		if (NULL !== $sync_data)
			$data['target_post_id'] = $sync_data->target_content_id;

		// add generated post data to the content being sent via the API
		// TODO: swap this around. move the data from $post_data[] into $data[] instead of copy- then set $data['post_data']. This should reduce memory usage
		// TODO: copy all entries in $post_data array- allows for better API feature/data expansion
		if (isset($post_data['post_data']))
			$data['post_data'] = $post_data['post_data'];
		if (isset($post_data['post_meta']))
			$data['post_meta'] = $post_data['post_meta'];
		if (isset($post_data['taxonomies']))
			$data['taxonomies'] = $post_data['taxonomies'];
		if (isset($post_data['sticky']))
			$data['sticky'] = $post_data['sticky'];
		if (isset($post_data['thumbnail']))
			$data['thumbnail'] = $post_data['thumbnail'];
		$data['gmt_offset'] = get_option('gmt_offset', ''); // include GMT offset in API data #278
		$this->_post_data = &$data;	   // reset reference to new data
		$this->post_id = $post_id;
		$this->id_refs = array();	   // init list of reference IDs
		// parse images from source only
		$res = $this->_parse_media($post_id, $post_data['post_data']['post_content']);
		if (is_wp_error($res))
			return $res;
		$data['media_data'] = $res;

		// parse for Shortcodes #102
		$res = $this->parse_shortcodes($post_id, $post_data['post_data']['post_content'], $data);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' after parse_shortcodes() res=' . var_export($res, TRUE));
		if (is_wp_error($res))
			return $res;

		// parse for Gutenberg specific content and references
		$res = $this->_parse_gutenberg($post_id, $post_data['post_data']['post_content'], $data);
		if (is_wp_error($res))
			return $res;

		$data = apply_filters('spectrom_sync_api_push_content', $data, $this);
		$this->_post_data = &$data;	   // reset reference to new data
		// after all processing, check for performing 'push_complete' API call
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' all content processed; id refs=' . count($this->id_refs) . ' sent images=' . count($this->_sent_images) . ' trigger=' . ($this->_trigger_push_complete ? 'TRUE' : 'FALSE'));
		// there are IDs to update, use the 'push_complete' API to indicate completion and update IDs on Target
		// TODO: check ApiResponse instance for has_errors()
		if ($this->_trigger_push_complete ||
			(0 !== count($this->id_refs) || 0 !== count($this->_sent_images))) {
			$this->trigger_push_complete();		  // indicate that 'push_complete' API is requred
		}

		return $data;
	}

	/**
	 * Perform data manipulation for 'push' operations
	 * @param array $data The data array to be sent via the API call
	 * @return array|WP_Error return WP_Error if there was a problem; modified $data array otherwise
	 */
	private function _push($data)
	{
		$post_id = abs($data['post_id']);
		return $this->get_push_data($post_id, $data);
	}

	/**
	 * Formats input data into multipart form for file/'media_upload' operations
	 * @param array $data The data array to be sent via the API call
	 * @param array $args The arguments array to be sent to wp_remote_post();
	 * @return string|WP_Error return WP_Error if there was a problem; formatted Multipart content otherwise
	 */
	private function _media($data, &$args)
	{
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' called with ' . SyncDebug::arr_sanitize($data));
		// grab a few required items out of the data array
		$boundary = $data['boundary'];
		unset($data['boundary']);
		$img_name = $data['img_name'];
		unset($data['img_name']);
		$content = $data['contents'];
		unset($data['contents']);
		/**
		  array (
		  'username' =>
		  'password' =>
		  'host' =>
		  'auth' =>
		  array (
		  'cookie' =>
		  'nonce' =>
		  'site_key' =>
		  )
		 */
		$headers = array(
			'content-type' => 'multipart/form-data; boundary=' . $boundary
		);
		$boundary = '--' . $boundary;

		$payload = '';
		// first, add the standard POST fields:
		foreach ($data as $name => $value) {
			if (!is_array($value)) {
				$payload .= $boundary . "\r\n";
				$payload .= "Content-Disposition: form-data; name=\"{$name}\"\r\n\r\n";
				$payload .= $value;
				$payload .= "\r\n";
			}
		}

		// Upload the file
		if (!empty($content)) {
			$payload .= $boundary . "\r\n";
			$payload .= "Content-Disposition: form-data; name=\"sync_file_upload\"; filename=\"{$img_name}\"\r\n\r\n";
			$payload .= $content;
			$payload .= "\r\n";
		}
		$payload .= $boundary . '--';

		$args['headers'] = $headers;
		// TODO: remove $args['post_data'] element

		return $payload;
	}

	/**
	 * Public access method to allow Beaver Builder to parse media within Module meta data
	 * @param int $post_id Post ID of content being parsed
	 * @param string $content The content to partse
	 * @return boolean TRUE on successful addition of media to response; otherwise FALSE
	 */
	public function parse_media($post_id, $content)
	{
		return $this->_parse_media($post_id, $content);
	}

	/**
	 * Parses content, looking for image references that need to be synchronized
	 * @param int $post_id The post id
	 * @param string $content The post content to be parsed
	 * @param SyncApiRequest $target instances indicating the target
	 * @param SyncApiResponse $response The response object being built
	 * @return boolean TRUE on successful addition of media to response; otherwise FALSE
	 */
	private function _parse_media($post_id, $content) // , $target, SyncApiResponse $response)
	{
		$post_id = abs($post_id);
SyncDebug::log(__METHOD__ . '() id #' . $post_id);
		// TODO: we'll need to add the media sizes on the Source to the data being sent so the Target can generate image sizes

		if (empty($content)) { // need to continue even with empty content. otherwise featured image doesn't get processed
			$xml = NULL;  // use this to denote empty content and skip looping through <img> and <a> tags #180
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' content is empty, not searching <img> and <a> tags');
		} else {
			// sometimes the insert media into post doesn't add a space...this will hopefully fix that
			$content = str_replace('alt="', ' alt="', $content);

			try {
				// TODO: can we use get_media_embedded_in_content()?
				libxml_clear_errors();
				libxml_use_internal_errors(TRUE);  // disable the error messages generated from unrecognized DOM elements
				$xml = new DOMDocument();

				// TODO: this is throwing errors on BB content:
				// PHP Warning: DOMDocument::loadHTML(): Tag svg invalid in Entity, line: 9 in wpsitesynccontent/classes/apirequest.php on line 675
				// PHP Warning: DOMDocument::loadHTML(): Tag circle invalid in Entity, line: 10 in wpsitesynccontent/classes/apirequest.php on line 675
				// PHP Warning: DOMDocument::loadHTML(): Tag circle invalid in Entity, line: 11 in wpsitesynccontent/classes/apirequest.php on line 675
				$xml->loadHTML($content);
			} catch (Exception $ex) {
				$xml = NULL; // any errors in parsing; mark it as empty content so processing continues #180
			}
		}

		// set up some things before processing content
		$post_thumbnail_id = abs(get_post_thumbnail_id($post_id));
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' post thumb id=' . $post_thumbnail_id);
		$this->_sent_images = array();  // list of images already sent. Used by _send_image() to not send the same image twice
		// set source domain; used to detect media elements to be added to push queue
		$this->set_source_domain();

		// used in processing <a> tags. Don't need to do this if content is empty #180
		// get all known children of the post
		$args = array(
			'post_parent' => $post_id,
			'post_status' => 'any',
			'post_type' => 'attachment',
		);
		$post_children = get_children($args, OBJECT);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' children=' . var_export($post_children, TRUE));
		if (!is_array($post_children) || 0 === count($post_children))
			$post_children = NULL;
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' children=' . var_export($post_children, TRUE));
		// only used in processing <img> tags. Don't need to do this if content is empty #180
		$attach_model = new SyncAttachModel();


		// search for <img> tags within content
		if (NULL !== $xml) {  // don't look for <img> elements if content is empty #180
			$tags = $xml->getElementsByTagName('img');
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found ' . $tags->length . ' <img> tags');

			// loop through each <img> tag and send them to Target
			for ($i = $tags->length - 1; $i >= 0; $i--) {
				$media_node = $tags->item($i);
				$src_attr = $media_node->getAttribute('src');
				$class_attr = $media_node->getAttribute('class');
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' <img src="' . $src_attr . '" class="' . $class_attr . '" ...>');

				$classes = explode(' ', $class_attr);
				$img_id = 0;
				$img_file = NULL;

				// try to use class= attribute to get original image id and send that
				foreach ($classes as $class) {
					if ('wp-image-' === substr($class, 0, 9)) {
						$img_id = abs(substr($class, 9));
						$img_post = get_post($img_id, OBJECT);
						// make sure it's a valid post and 'attachment ' type #162
						if (NULL !== $img_post && 'attachment' === $img_post->post_type) {
							// TODO: check image name as well?
							$img_file = $img_post->guid;
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' guid=' . $img_file);
							if ($this->send_media($img_file, $post_id, $post_thumbnail_id, $img_id))
								$src_attr = NULL;
						} else {
							$img_id = 0; // if not valid, clear id to indicate use of fallback method below #162
						}
						break;
					}
				}

				// if the class= attribute didn't work use the src= attribute
				if (0 === $img_id && !empty($src_attr)) {
					// look up attachment id by name
					$attach_posts = $attach_model->search_by_guid($src_attr, TRUE); // do deep search #162
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' attachments: ' . var_export($attach_posts, TRUE));
					if (NULL !== $attach_posts) {
						foreach ($attach_posts as $attach_post) {
							if ($attach_post->guid === $src_attr) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' guid=' . $attach_post->guid);
								$img_id = $attach_post->ID;
								break;
							}
						}

						// didn't find the original name, see if it's a known image size
						if (0 === $img_id && 1 === count($attach_posts)) {
							$src_attr = $attach_posts[0]->guid;
							$img_id = abs($attach_posts[0]->ID);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' img_id=' . $img_id . ' src_attr=' . $src_attr);
						}

SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' calling send_media("' . $src_attr . '", ' . $post_id . ', ' . $post_thumbnail_id . ', ' . $img_id . ')');
//						if ($this->send_media($src_attr, $post_id, $post_thumbnail_id, $img_id))
//							return FALSE;
						$this->send_media($src_attr, $post_id, $post_thumbnail_id, $img_id);
					}
				}

				if (0 === $img_id) {
					// need other mechanism to match image reference to the attachment id
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' img id does not match attachment');
				}
			}
		}

		// search through <a> tags within content
		if (NULL !== $xml) {  // don't look for <img> elements if content is empty #180
			$tags = $xml->getElementsByTagName('a');
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found ' . $tags->length . ' <a> tags');

//SyncDebug::log(' - url = ' . $this->_source_domain);
			// loop through each <a> tag and send them to Target
			for ($i = $tags->length - 1; $i >= 0; $i--) {
				$anchor_node = $tags->item($i);
				$href_attr = $anchor_node->getAttribute('href');
//SyncDebug::log(__METHOD__.'() <a href="' . $href_attr . '"...>');
				// verify that it's a reference to this site and it's a PDF
				if (FALSE !== stripos($href_attr, $this->_source_domain) && 0 === strcasecmp(substr($href_attr, -4), '.pdf') &&
					NULL !== $post_children) {
//SyncDebug::log(__METHOD__.'() sending pdf attachment');
					// look up attachment id
					$attach_id = 0;
					foreach ($post_children as $child_id => $child_post) {
						if ($child_post->guid === $href_attr) {
							$attach_id = $child_id;
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' - found pdf attachment id ' . $attach_id);
							break;
						}
					}
					if (0 !== $attach_id) // https://wordpress.org/support/topic/bugs-68/
						$this->send_media($href_attr, $post_id, $post_thumbnail_id, $attach_id);
				} else {
//SyncDebug::log(' - no attachment to send');
				}
			}
		}

		// handle post children
		if (NULL !== $post_children) {
			foreach ($post_children as $attachment) {
				$this->send_media_by_id($attachment->ID);
				$this->post_children[] = $attachment->ID;
			}
			$this->trigger_push_complete();	// need to force push_complete API to handle attaching post children
		}

		// handle the featured image
		if (0 !== $post_thumbnail_id) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' featured image: ' . $post_thumbnail_id);
			$img = wp_get_attachment_image_src($post_thumbnail_id, 'full');
if (FALSE === $img) SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' wp_get_attachment_image_src() failed');#!#
			// check image URL and see if it doesn't match Source domain. #131
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' source domain: ' . $this->_source_domain);
			if (FALSE === stripos($img[0], $this->_source_domain)) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' image file not on Source domain');
				// image is not from Source domain- stored on CDN or S3? Get image source from GUID
				$att_post = get_post($post_thumbnail_id);
				if (NULL !== $att_post) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' post guid: ' . $att_post->guid . ' type=' . $att_post->post_type);
					$img[0] = $att_post->guid;
				}
			}
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' src=' . var_export($img, TRUE));
			// convert site url to relative path
			if (FALSE !== $img) {
				$src = $img[0];
SyncDebug::log(' src=' . var_export($src, TRUE));
SyncDebug::log(' siteurl=' . site_url());
SyncDebug::log(' ABSPATH=' . ABSPATH);
SyncDebug::log(' DOCROOT=' . $_SERVER['DOCUMENT_ROOT']);
				// use send_media() to add img to queue #210
				$this->send_media($src, $post_id, $post_thumbnail_id, $post_thumbnail_id);
			}
		}

		// use regex to find any remaining URLs
		$pattern = '#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#';
		$matches = array();
		if (isset($attach_model) && FALSE !== preg_match_all($pattern, $content, $matches)) {
			// make sure there were URLs found in the content
			if (0 !== count($matches[0])) {
				foreach ($matches[0] as $url) {
					if (FALSE !== ($pos = stripos($url, '"')))
						$url = substr($url, 0, $pos);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' checking URL [' . $url . ']');

					$img_id = 0;
					$attach_posts = $attach_model->search_by_guid($url, TRUE); // do deep search #162
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found ' . count($attach_posts) . ' results ' . var_export($attach_posts, TRUE));
					foreach ($attach_posts as $attach_post) {
						if ($attach_post->guid === $url) {
							$img_id = abs($attach_post->ID);
							break;
						}
					}
					if (0 !== $img_id) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found attachment id ' . $img_id);
						// found an attachment ID that matches the URL- add to queue #210
						$this->send_media($url, $post_id, $post_thumbnail_id, $img_id);
					} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' no attachment id found');
					}
				} // foreach
			} // 0 !== count
		} // isset
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' done processing media');
		return TRUE;
	}

	/**
	 * Parses content for shortcodes that refer to IDs or other content that needs to be included in Push API request
	 * @param int $post_id The post ID of the Content being sync'd.
	 * @param string $content The content being sync'd.
	 * @param array $data The data array being assembed for the API call
	 * @return boolean|WP_Error return boolean TRUE or WP_Error instance with more information
	 */
	public function parse_shortcodes($post_id, $content, &$data)
	{
		// get a list of all shortcodes to be processed
		$shortcodes = SyncShortcodes::get_shortcodes();
		$known_shortcodes = array_keys($shortcodes);
		// get_shortcode_regex() returns an expression to search for all shortcodes
		$pattern = '\\[(\\[?)(' . implode('|', $known_shortcodes) . ')(?![\\w-])([^\\]\\/]*(?:\\/(?!\\])[^\\]\\/]*)*?)(?:(\\/)\\]|\\](?:([^\\[]*+(?:\\[(?!\\/\\2\\])[^\\[]*+)*+)\\[\\/\\2\\])?)(\\]?)';

		$num = preg_match_all('/' . $pattern . '/s', $content, $matches);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' matches=' . var_export($matches, TRUE));
		if ($num > 0 && array_key_exists(2, $matches)) {
			// one or more of the shortcodes is found within the content
			$idx = 0;
			foreach ($matches[2] as $shortcode) {	   // examine each shortcode
				$sce = new SyncShortcodeEntry($shortcode, $matches[0][$idx], $matches[3][$idx]);

				// check all known attributes to see if they need processing
				foreach ($sce->parse_attributes($shortcodes[$shortcode]) as $type_name => $type_code) {
					if ($sce->has_attribute($type_name)) {	// if the current shortcode has the mentioned attribute
						// TODO: the [gallery include= exclude=] list to do nothing on Source, update IDs on Target
						switch ($type_code) {
						case SyncShortcodeEntry::TYPE_IMAGE_ID:
						case SyncShortcodeEntry::TYPE_POST_ID:
						// TODO: push all attachments of this post ID
						case SyncShortcodeEntry::TYPE_IMAGE_LIST:
						case SyncShortcodeEntry::TYPE_POST_LIST:
							$ids = $sce->get_attribute($type_name);
							$ids = trim($ids, '"\'');
							$id_list = explode(',', $ids);
							foreach ($id_list as $id) {	// look up all IDs referenced by the attribute
								$id = abs($id);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found post reference: ' . $id);
								if (0 !== $id) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' handling post ID ' . $id);
									if (SyncShortcodeEntry::TYPE_IMAGE_ID === $type_code || SyncShortcodeEntry::TYPE_IMAGE_LIST === $type_code) {
										// id refers to an image- make sure image gets pushed
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' calling send_media_by_id(' . $id . ')');
										$this->send_media_by_id($id);
									} else if (SyncShortcodeEntry::TYPE_POST_ID === $type_code || SyncShortcodeEntry::TYPE_POST_LIST === $type_code) {
										// id refers to a post- give Target site a change to update them
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' signaling "push_complete" is required');
										$this->_trigger_push_complete = TRUE;  // signal 'push_complete' is required
									} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' type code=' . $type_code);
									}
								}
							}
							break;

						case SyncShortcodeEntry::TYPE_POST_ATTACH:
							$id = abs($sce->get_attribute($type_name));   // post ID to use for gallery
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' check gallery id reference ' . $id);
							if (0 !== $id) {
								$model = new SyncModel();
								$sync_data = $model->get_sync_data($id);
								if (NULL === $sync_data) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' dependent post id ' . $id . ' has not been pushed');
									$this->_response->error_code(self::ERROR_UNRESOLVED_PARENT, $id);
								} else {
									// make sure all images associated with the post ID
									// are sent to the Target
									$attachments = get_children($id, OBJECT);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' attachments: ' . var_export($attachments, TRUE));
									foreach ($attachments as $attachment) {
										$attach_id = $attachment->ID;
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' adding attachment id #' . $attach_id . ': ' . var_export($attachment, TRUE));
										$this->send_media_by_id($attach_id);
									}
								}
							}
							break;

						case SyncShortcodeEntry::TYPE_ATTACHMENT:
							$id = $sce->get_attachment_id($type_name);
							if (0 !== $id) {
								// TODO: check that ID refers to an attachment ID
								$this->send_media_by_id($id);
							}
							break;

						case SyncShortcodeEntry::TYPE_EXCLUSIVE:
							// no need to do anything on Source. Updates are performed on Target only
							break;

						case SyncShortcodeEntry::TYPE_TAXONOMY:
							// TODO: include taxonomy ID (and ancestors for hierarchical) in post data
							break;

						default:
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' unrecognized attribute type code: ' . $type_code);
							break;
						} // switch ($type_code)
					} // if (has_attribute())

					// check for any error and exit early if found. if there is an error,
					// we don't want to allow the content to be pushed.
					if ($this->_response->has_errors()) {
						return new WP_Error('parse_shortocde', $this->_response->get_error_message());
					}
				} // foreach (parse_attributes())

				do_action('spectrom_sync_parse_shortcode', $shortcode, $sce, $this->_response);
				++$idx;
			} // foreach ($matches...)
		}

		return TRUE;
	}

	/**
	 * Parses content for markers of Blocks that refer to IDs and adds them to the API data
	 * @param int $post_id Post ID of Content being Pushed
	 * @param string $content The Content being Pushed
	 * @param array $data The data array being assembled for the API call
	 */
	private function _parse_gutenberg($post_id, $content, &$data)
	{
		// look for Gutenberg Block Markers in the form of:
		// <!-- wp:block {"ref":{post_id}} /-->
		// <!-- wp:cover {"url":"http://domain.com/wp-content/uploads/{year}/{month}/{imagename}","id":{post_id}} -->
		// <!-- wp:audio {"id":{post_id}} -->
		// <!-- wp:video {"id":{post_id}} -->
		// <!-- wp:image {"id":{post_id}} -->
		// <!-- wp:gallery {"ids":[{post_id1},{post_id2},{post_id3}]} -->
		// <!-- wp:file {"id":{post_id},"href":"{file-uri}"} -->
		// <!-- wp:media-text {"mediaId":{post_id},"mediaType":"video"} -->
		// don't bother processing if there's no Gutenberg content
		if (function_exists('has_blocks') && !has_blocks($content))
			return;
		if (FALSE === strpos($content, '<!-- wp:'))
			return;

		if (NULL === $this->_source_domain)
			$this->set_source_domain();

		$post_thumbnail_id = abs(get_post_thumbnail_id($post_id)); // needed for send_media() calls
		$attach_model = new SyncAttachModel();  // used for regex image search #211

		$this->gutenberg_queue = array();   // init work queueu
		$this->gutenberg_processed = array();  // init processed queue
		$this->gutenberg_add_queue($post_id);
		$error = FALSE;	// set initial error condition
		// Process all items in queue. During processing Shared Blocks are added to queue
		// so that image references within those Blocks can also be checked.
		while (NULL !== ($work_post_id = array_shift($this->gutenberg_queue))) {
			if ($post_id !== $work_post_id) {
				$work_post = get_post($work_post_id);
				$content = $work_post->post_content;
			}
			$len = strlen($content);  // length of content
			$offset = 0;   // pointer into string for where search currently is
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' starting work on ID ' . $work_post_id . ' with ' . $len . ' bytes of content');
			do {
				$pos = strpos($content, '<!-- wp:', $offset);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' pos=' . $pos . ' [' . substr($content, $pos, 20) . ']');
				if (FALSE !== $pos) {
					// found a beginning marker: "<!-- wp:"
					$ref_id = 0;   // initialize reference ID value

					$pos_space = strpos($content, ' ', $pos + 5); // space after block name
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' space=' . $pos_space . ' [' . substr($content, $pos_space - 3, 10) . ']');
					$block_name = substr($content, $pos + 5, $pos_space - $pos - 5);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' block_name=[' . $block_name . ']');
					// find start and end points of the json data within the block marker
					$start = $pos_space + 1;
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ': start=' . $start . ' [' . substr($content, $start - 3, 10) . ']');
					// look for json object after block name
					if ('{' === substr($content, $start, 1)) {
						// there is json data within the Block Marker - decode it
						$end = strpos($content, '-->', $start);
						// this looks for an self-ending block marker: '/-->'
						if (FALSE !== $end && '/' === substr($content, $end - 1, 1))
							--$end;
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' end=' . $end . ' [' . substr($content, $end - 3, 10) . ']');
						$json = NULL;  // initialize decoded json object
						if (FALSE !== $end) {
							$end -= 2;
							$json = substr($content, $start, $end - $start + 1);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' json=[' . $json . ']');
							if (empty($json))  // if json string is empty
								$json = NULL;  // reset to NULL
						} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' could not find end of block marker. off=' . $offset . ' data=' . substr($content, $start, 30));
						}
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' json=[' . $json . ']');
						// if there is json data, decode and process it
						if (NULL !== $json) {
							$obj = $this->gutenberg_obj = json_decode($json);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found json string: "' . $json . '"');

							$process = TRUE;
							// check .url property and skip if it references s.w.org #279
							if (property_exists($obj, 'url')) {
								$url_host = parse_url($obj->url, PHP_URL_HOST);
								// TODO: check if host !== Source host
								if ($url_host !== $this->_source_domain)
								// the URL refers to s.w.org or some other non-Source domain
								// skip these so we don't update Patterns, etc.
									$process = FALSE;
								// TODO: check for additional references that need to be skipped
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' process block=' . ($process ? 'TRUE' : 'FALSE'));
							}
//$process = TRUE;
							// TODO: how does Gutenberg deal with these ID references if they've been deleted after the ID is written to the Block Marker?
							// check to see if this block should be processed
							if ($process) {
								// handle each Block Marker individually
								switch ($block_name) {
								case 'wp:block':  // Shared Block reference - post reference
									$ref_id = isset($obj->ref) ? abs($obj->ref) : 0;
									if (0 !== $ref_id) {
										$this->gutenberg_add_queue($ref_id); // add Shared Block post ID to the work queue
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' found shared block reference: ' . $ref_id . ' at pos ' . ($pos + 21));
										if (0 !== $ref_id && !isset($this->id_refs[$ref_id])) {
											// ID has not already been processed (no duplicates)
											$ref_post = get_post($ref_id, ARRAY_A);
											$this->id_refs[$ref_id] = array($block_name, $ref_post);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found reference to post id ' . $ref_id . ' "' . $ref_post['post_title'] . '"');
										}
									}
									// TODO: error recovery
									break;

								case 'wp:cover':  // Cover Block - image reference
									// check for NULL references in "Pattern" blocks. these can be skipped #280
									if (isset($obj->id) && NULL !== $obj->id) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' wp:cover id=' . $obj->id . ' post id=' . $word_post_id);
										if (FALSE === $this->gutenberg_attachment_block($obj->id, $work_post_id, $post_thumbnail_id, $block_name)) {
											// attachment not found, report error
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error handling cover block id ' . $obj->id . ' in block "' . $block_name . '"');
											$this->_response->error_code(self::ERROR_GB_ATTACHMENT_ID, $block_name);
										}
									}
									break;

								case 'wp:audio':  // Audio Block- resource reference
								case 'wp:video':  // Video Block- resource reference
								case 'wp:image':  // Image Block- resource reference
									// check for NULL references in "Pattern" blocks. these can be skipped #280
									$obj_id = isset($obj->id) ? abs($obj->id) : 0;
									if (0 !== $obj_id) {
										if (FALSE === $this->gutenberg_attachment_block($obj_id, $work_post_id, $post_thumbnail_id, $block_name)) {
											// attachment not found, report error
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error handling attachment block id ' . $obj_id . ' in block "' . $block_name . '"');
											$this->_response->error_code(self::ERROR_GB_ATTACHMENT_ID, $block_name);
										}
									}
									break;

								case 'wp:media-text':
									// check for NULL references in "Pattern" blocks. these can be skipped #280
									if (isset($obj->mediaId) && NULL !== $obj->mediaId) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' mediaID=' . $obj->mediaId);
										if (FALSE === $this->gutenberg_attachment_block($obj->mediaId, $work_post_id, $post_thumbnail_id, $block_name)) {
											// attachment not found, report error
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error handling attachment block id ' . $obj->mediaID . ' in block "' . $block_name . '"');
											$this->_response->error_code(self::ERROR_GB_ATTACHMENT_ID, $block_name);
										}
									}
									break;

								case 'wp:gallery':  // Gallery Block- multiple image references
									$ref_ids = isset($obj->ids) ? $obj->ids : array();
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found reference ids=' . var_export($ref_ids, TRUE)); // implode(', ', $ref_ids));
									foreach ($ref_ids as $ref_id) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' checking id=' . var_export($ref_id, TRUE));
										// check for NULL references in "Pattern" blocks. these can be skipped #280
										if (NULL !== $ref_id) {
											if (FALSE === $this->gutenberg_attachment_block($ref_id, $work_post_id, $post_thumbnail_id, $block_name)) {
												// attachment not found, report error
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error findling attachment block id ' . $ref_id . ' in block "' . $block_name . '"');
												$this->_response->error_code(self::ERROR_GB_ATTACHMENT_ID, $block_name);
											}
										}
									}
									break;

								case 'wp:file':   // File Block- resource reference
									$ref_id = isset($obj->id) ? abs($obj->id) : 0;
									if (0 !== $ref_id && $this->gutenberg_attachment_block($ref_id, $work_post_id, $post_thumbnail_id, $block_name)) {
										$ref_post = get_post($ref_id);
										if (NULL !== $ref_post) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' adding reference id ' . $ref_id . ' post ' . var_export($ref_post, TRUE));
											$this->id_refs[$ref_id] = array($block_name, $ref_post);
										}
									} else {
										// attachment not found, report error
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error finding attachment block id ' . $ref_id . ' in block "' . $block_name . '"');
										$this->_response->error_code(self::ERROR_GB_ATTACHMENT_ID, $block_name);
									}
									break;

								case 'wp:latest-posts':
									$cat_id = isset($obj->categories) ? abs($obj->categories) : 0;
									if (0 !== $cat_id) {
										if (FALSE === $this->gutenberg_taxonomy_block($cat_id, $post_id, $block_name)) {
											// taxonomy not found, report error
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error finding taxonomy id ' . $cat_id . ' in "' . $block_name . '"');
											$this->_response->error_code(self::ERROR_GB_TAX_ID, $block_name);
										}
										$this->trigger_push_complete(); // indicate that 'push_complete' API is requred
									}
									break;

								default:
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' calling do_action "spectrom_sync_parse_gutenberg_block"');
									// give other add-ons a chance to process this block
									do_action('spectrom_sync_parse_gutenberg_block', $block_name, $json, $post_id, $data, $pos, $this);
									break;
								} // switch ($block_name)
							} // $process
						} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' could not parse json object');
						} // NULL !== $json
						$offset = $end + 3; // move offset to the end of the Block Marker comment
					} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' no json object in block');
						$end = $pos_space + 2;
						$offset = $pos_space + 2;
					} // '{' === substr($content, $start, 1) - there's json data in the Block Marker
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' offset=' . $offset . ' [' . substr($content, $offset - 3, 10) . ']');
				} else {
					$offset = $len + 1;
				} // FALSE !== $pos
			} while ($offset < $len && !$error);

			// use regex to search for any remaining images, such as Inline Image references #211
			$pattern = '#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#';
			$matches = array();
			if (FALSE !== preg_match_all($pattern, $content, $matches)) {
				// make sure there were URLs found in the content
				if (0 !== count($matches[0])) {
					foreach ($matches[0] as $url) {
						if (FALSE !== ($pos_quote = stripos($url, '"')))
							$url = substr($url, 0, $pos_quote);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found image reference: ' . $url);
						$img_id = 0;
						$attach_posts = $attach_model->search_by_guid($url, TRUE); // do deep search #162
						foreach ($attach_posts as $attach_post) {
							if ($attach_post->guid === $url) {
								$img_id = abs($attach_post->ID);
								break;
							}
						}
						if (0 !== $img_id) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' found attachment id ' . $img_id);
							// found an attachment ID that matches the URL- add to queue
							$this->send_media($url, $work_post_id, $post_thumbnail_id, $img_id);
						}
					}
				}
			}
		} // while gutenberg_queue has posts

SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' done processing Gutenberg content');
	}

	/**
	 * handles work for Gutenberg Blocks that reference a post_id, such as wp:file or wp:video, etc.
	 * @param int $ref_id The post ID of the content being referenced
	 * @return boolean TRUE on successful processing of new ID reference; otherwise FALSE
	 */
	public function gutenberg_attachment_block($ref_id, $post_id, $thumb_id, $block_name)
	{
		$ref_id = abs($ref_id);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' found resource reference ' . $ref_id . ' for block "' . $block_name . '"');
		if (0 !== $ref_id && !isset($this->id_refs[$ref_id])) {
			// ID has not already been processed (no duplicates)
			$ref_post = get_post($ref_id);
			if (NULL !== $ref_post) {
				$ref_att = $this->url_to_path($ref_post->guid);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' att=' . $ref_att . ' source domain=' . $this->_source_domain);
				if ($this->send_media($ref_post->guid, $post_id, $thumb_id, $ref_id)) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' added media file "' . $ref_att . '" to queue');
					// add to list of references to be fixed up via 'push_complete' API call
					$this->id_refs[$ref_id] = array($block_name, $ref_post->guid); // include image url #212
					return TRUE;
				} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' ERROR adding media file "' . $ref_att . '" to queue');
					// TODO: add to id_refs[] anyway?
//					return FALSE;
				}
			} else {
				// TODO: error recovery
//				return FALSE;
			}
		}
		return FALSE;
	}

	/**
	 * Handles work for Gutenberg blocks that reference a taxonomy term id
	 * @param int $term_id The Taxonomy Term ID
	 * @param int $post_id The post ID referencing the Taxonomy
	 * @param string $block_name The block name referencing the taxonomy term
	 * @return bool TRUE on success; FALSE on failure
	 */
	public function gutenberg_taxonomy_block($term_id, $post_id, $block_name)
	{
SyncDebug::log(__METHOD__ . "({$term_id}, {$post_id}, '{$block_name}')");
		$term = get_term($term_id);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' term=' . var_export($term, TRUE));
		if (NULL !== $term && !is_wp_error($term)) {
			$tax = get_taxonomy($term->taxonomy);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' tax=' . var_export($tax, TRUE));
			if (FALSE !== $tax) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' term=' . var_export($term, TRUE));
				if ($tax->hierarchical) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' hierarchical taxonomy');
					// handle the hierarchical taxonomy stuff
					$term->ref_only = 1; // signifies it's a term reference, not to be assigned to the post via wp_add_object_terms()
					$this->_post_data['taxonomies']['hierarchical'][] = $term;

					$tax_name = $term->taxonomy;
					$parent = $term->parent;
					while (0 !== $parent) {
						$term = get_term_by('id', $parent, $tax_name, OBJECT);
						$this->_post_data['taxonomies']['lineage'][$tax_name][] = $term;
						$parent = $term->parent;
					}
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' added term to [taxonomy][hierarchical] list: ' . var_export($this->_post_data['taxonomies']['hierarchical'], TRUE));
				} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' non-hierarchical taxonomy');
					$term->ref_only = 1; // signifies it's a term reference, not to be assigned to the post via wp_add_object_terms()
					$this->_post_data['taxonomies']['flat'][] = $term;
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' add term to [taxonomy][flat] list: ' . var_export($this->_post_data['taxonomies']['flat'], TRUE));
				}
				return TRUE;
			}
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' tax data=' . var_export($this->_post_data['taxonomies'], TRUE));
		}
		return FALSE;
	}

	/**
	 * Adds a post ID to the work queue for Gutenberg parsing
	 * @param int $post_id The post ID to add to the Queue
	 */
	public function gutenberg_add_queue($post_id)
	{
		$post_id = abs($post_id);
		if (!in_array($post_id, $this->gutenberg_processed) && !in_array($post_id, $this->gutenberg_queue)) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' adding post ID #' . $post_id . ' to Gutenberg work queue');
			$this->gutenberg_queue[] = $post_id;
		}
	}

	/**
	 * Used to trigger 'push_complete' API call when IDs need to be adjusted on Target site
	 */
	public function trigger_push_complete()
	{
		// make sure callback is setup only one time
		if (!$this->_triggered_push_complete) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' adding "push_complete" callback');
			add_action('spectrom_sync_push_queue_complete', array($this, 'push_complete_api'), 10, 1);
			$this->_triggered_push_complete = TRUE;		// indicate this has been triggered
		}
	}

	/**
	 * Callback for when all queue processing has been complated. Used to send final API request to tell Target to update referenced IDs.
	 * @param SyncApiResponse $resp
	 */
	public function push_complete_api($resp)
	{
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' sending "push_complete" API call');
		// we've sent image/content references to the Target- need to send process compelte API call to Target
		$api_data = array(
			'post_id' => $this->post_id, // the Source Post ID to be updated
			'id_refs' => $this->id_refs, // data and Source IDs to update
			'children' => $this->post_children, // list of attachments as post children
		);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' data=' . var_export($api_data, TRUE));
		$this->api('push_complete', $api_data);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' done with "push_complete" API call');
	}

	/**
	 * Sets the source domain name. Used by add-ons to set the domain used to validate media elements.
	 * @param string $domain The domain name to set. Use domain only, no protocol or slashes
	 */
	public function set_source_domain($domain = NULL)
	{
		if (NULL === $domain)
			$domain = site_url('url');	// assume current site's domain name

//SyncDebug::log(__METHOD__.'() domain=' . $domain);
		// sanitize value to remove protocol and slashes
		if (FALSE !== stripos($domain, 'http') || FALSE !== strpos($domain, '/'))
			$domain = parse_url($domain, PHP_URL_HOST);

//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' domain: ' . $domain);
		$this->_source_domain = $domain;
	}

	/**
	 * Helper function for send_media() that only requires the image's ID
	 * @param int $image_id The post ID referring to an image
	 * @param boolean $add_ref Indicates whether or not the attachment ID to the 'id_refs' list sent via 'push_complete' API
	 * @return boolean TRUE on success or FALSE on failure
	 */
	public function send_media_by_id($image_id, $add_ref = FALSE)
	{
		$image_id = abs($image_id);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' image reference ' . $image_id);
		if (0 !== $image_id) {
			$post = get_post($image_id);
			if ('attachment' !== $post->post_type) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' post id ' . $image_id . ' is not an image (' . $post->post_type . ')');
			}
			if (NULL !== $post) {
				$attach = $this->url_to_path($post->guid);
				$thumb_id = abs(get_post_thumbnail_id($this->post_id));
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' att=' . $attach . ' source domain=' . $this->_source_domain);
				if ($this->send_media($post->guid, $this->post_id, $thumb_id, $image_id)) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' added media file "' . $ref_att . '" to queue');
					// add to list of references to be fixed up via 'push_complete' API call
					if ($add_ref)
						$this->id_refs[$image_id] = array('', $post->guid); // include image url #212
					return TRUE;
				} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' ERROR adding media file "' . $attach . '" to queue');
//					return FALSE;
				}
			} else {
				// TODO: error recovery
//				return FALSE;
			}
		}
		return FALSE;
	}

	/**
	 * Checks that image is unique (in queue) and sends file information for image to Target
	 * @param string $url The full path to the image
	 * @param int $post_id The post id being Sync'd
	 * @param int $thumbnail_id The id of the post's current thumbnail, if any
	 * @param int $attach_id The post ID of the attachment being sent
	 * @return boolean TRUE on successful add to API queue; otherwise FALSE
	 */
	public function send_media($url, $post_id, $thumbnail_id, $attach_id)
	{
SyncDebug::log(__METHOD__ . "('{$url}', {$post_id}, {$thumbnail_id}, {$attach_id})");
		// check to see if the media file should be sent to Target. Gives add-ons a chance to refuse sending specific images.
		if (FALSE === apply_filters('spectrom_sync_send_media_attachment', TRUE, $url, $attach_id))
			return;

		if (in_array($url, $this->_sent_images)) {
SyncDebug::log(__METHOD__ . '() already sent this image');
			return TRUE;
		}
		$this->_sent_images[] = $url;
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' added image #' . count($this->_sent_images) . ': ' . $url);

		$src_parts = parse_url($url);
		if (empty($src_parts['host']))	 // allow for empty host with relative urls #250
			$src_parts['host'] = '';
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' url=' . $url . ' parts=' . var_export($src_parts, TRUE));
//		$path = substr($src_parts['path'], 1); // remove first "/"
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' path=' . $path);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' siteurl=' . site_url());
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' ABSPATH=' . ABSPATH);
//		$path = str_replace(trailingslashit(site_url()), ABSPATH, $url);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' new path=' . $path);
		// return data array
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' sending image: ' . $url);
		$path = $this->url_to_path($url);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' path: ' . $path);
SyncDebug::log(__METHOD__ . '() src_parts[host]=' . $src_parts['host'] . ' source_domain=' . $this->_source_domain);
//		if ($src_parts['host'] === $this->_source_domain &&
//			is_wp_error($this->upload_media($post_id, $path, NULL, $thumbnail_id == $post_id, $attach_id))) {
		// allow for empty host when referencing relative urls #250
		if (empty($src_parts['host']) || $src_parts['host'] === $this->_source_domain) {
			$res = $this->upload_media($post_id, $path, NULL, ($thumbnail_id == $attach_id && 0 !== abs($attach_id/* #250 */)) /* $post_id #217 */, $attach_id);
			if (is_wp_error($res)) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' error on upload_media() returning FALSE');
				return FALSE;
			} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' upload_media() successful');
			}
		} else if (FALSE !== stripos($src_parts['host'], 'amazonaws.com') || FALSE !== stripos($src_parts['host'], 'cloudfront.net')) {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' hosted on CDN: ' . $src_parts['host']);
			$att_post = get_post($attach_id);
			if (NULL !== $att_post)
				$url = $att_post->guid;
SyncDebug::log(__METHOD__ . '():' . __LINE__ . " upload_media({$post_id}, '{$url}', NULL, _, {$attach_id})");
			if (is_wp_error($this->upload_media($post_id, $url, NULL, $thumbnail_id === $attach_id /* $post_id #217 */, $attach_id)))
				return FALSE;
		} else {
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' *** no image file sent to target url=' . $url);
		}

		return TRUE;
	}

	/**
	 * Uploads a found image to the Target site by adding it to the work queue.
	 * @param int $post_id The post ID returned from the target site.
	 * @param string $file_path Path to the file.
	 * @param SyncApiRequest $target Request object.
	 * @param boolean $featured Flag if the image/media is the featured image
	 * @param int $attach_id The post ID of the attachment being uploaded
	 */
	public function upload_media($post_id, $file_path, $target, $featured = FALSE, $attach_id = 0)
	{
		// TODO: remove $target parameter
SyncDebug::log(__METHOD__ . '() post_id=' . $post_id . ' path=' . $file_path . ' featured=' . ($featured ? 'TRUE' : 'FALSE') . ' attach_id=' . $attach_id, TRUE);

		if (!file_exists($file_path) && FALSE !== strpos($file_path, '%')) {
			// TODO: fix url encoding in file path bb#11
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' file exists=' . (file_exists($file_path) ? 'TRUE' : 'FALSE'));
		}

		if (!file_exists($file_path)) {
			// no image - no need to send update_media API request #167
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' ERROR: file "' . $file_path . '" not found');
			return;
		}
		$attach_post = get_post($attach_id, OBJECT);
		$attach_alt = get_post_meta($attach_id, '_wp_attachment_image_alt', TRUE);
		$img_date = filemtime($file_path);
		$img_date_year = date('Y', $img_date);
		$img_date_month = date('m', $img_date);
		// if provided, use the year/month from the url #250
		if (FALSE !== ($pos = strpos($file_path, '/uploads/'))) {
			// TODO: if $img_date_year or $img_data_month != digits, use file date
			$img_date_year = substr($file_path, $pos + 9, 4);
			$img_date_month = substr($file_path, $pos + 14, 2);
		}
		$post_fields = array(
//			'name' => 'value',
			'post_id' => $post_id,
			'attach_id' => $attach_id,
			'featured' => abs($featured),
			// TODO: remove and generate when formatting POST content in _media()
			'boundary' => wp_generate_password(24),
			'img_path' => dirname($file_path),
			'img_name' => basename($file_path),
			'img_year' => $img_date_year,
			'img_month' => $img_date_month,
			'img_url' => (NULL !== $attach_post) ? $attach_post->guid : '',
			'contents' => $this->_get_image_contents($file_path), // file_get_contents($file_path),
			'attach_desc' => (NULL !== $attach_post) ? $attach_post->post_content : '',
			'attach_title' => (NULL !== $attach_post) ? $attach_post->post_title : '',
			'attach_caption' => (NULL !== $attach_post) ? $attach_post->post_excerpt : '',
			'attach_name' => (NULL !== $attach_post) ? $attach_post->post_name : '',
			'attach_alt' => (NULL !== $attach_post && !empty($attach_alt)) ? $attach_alt : '',
		);
		// allow extensions to include data in upload_media operations
		$post_fields = apply_filters('spectrom_sync_upload_media_fields', $post_fields);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' image post ' . $post_fields['img_path'] . '/' . $post_fields['img_name']);
//var_export($post_fields, TRUE));
//$post_fields['content-len'] = strlen($post_fields['contents']);
//$post_fields['content-type'] = gettype($post_fields['contents']);
//$post_fields['img-name'] = $file_path;
//$d = file_exists($file_path);
//$post_fields['img-exists'] = var_export($d, TRUE);
//$post_fields['img-time'] = date('Y-m-d H:i:s', filemtime($file_path));
//$post_fields['img-size'] = filesize($file_path);
//SyncDebug::log(__METHOD__.'() post data=' . var_export($post_fields, TRUE));
		// add file upload operation to the API queue
		$this->_add_queue('upload_media', $post_fields);
	}

	/**
	 * Grabs the contents of the image file using a couple of different mechanisms
	 * @param string $file_path
	 * @return string A binary string containing the image file's contents
	 */
	private function _get_image_contents($file_path)
	{
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' path=' . $file_path);

		// adjust file path if running within multisite #167
		if (is_multisite()) {
			$to_dir = '/wp-content/blogs.dir/' . get_current_blog_id() . '/';
			$file_path = str_replace('/wp-content/files/', $to_dir, $file_path);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' adjusted multisite file path to ' . $file_path);
		}

SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' reading file contents: ' . $file_path);
		// TODO: rework to use CURLFile class and @filename specifier (for PHP < 5.5) to save memory on large files #165
		// first, try file_get_contents()
		$contents = file_get_contents($file_path);

		// try using wp_remote_get()
		if (FALSE === $contents) {
			$args = array(
				'timeout' => 15,
				'sslverify' => FALSE,
			);
			$res = wp_remote_get($file_path, $args);
			$body = wp_remote_retrieve_body($res);
			if (!empty($body))
				$contents = $body;
		}

		if (FALSE === $contents)				 #!#
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' ERROR: unable to obtain image contents');#!#
		// TODO: try using filesystem

		return $contents;
	}

	/**
	 * Convert a URL reference to a resource to a filesystem path based reference to the resource
	 * @param string $url The URL reference
	 * @return string The filesystem path reference to the same resource
	 */
	public function url_to_path($url)
	{
SyncDebug::log(__METHOD__ . "('{$url}'):" . __LINE__);
//		$domain = parse_url(site_url(), PHP_URL_HOST);				// local install's domain name
		$parts = parse_url($url);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' url parts=' . var_export($parts, TRUE));
		$site_url = site_url();
		// check for empty elements when referencing relative urls #250
		if (empty($parts['host']))
			$parts['host'] = parse_url($site_url, PHP_URL_HOST);
		if (empty($parts['scheme']))
			$parts['scheme'] = parse_url($site_url, PHP_URL_SCHEME);
		$domain = $parts['host'];
//SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' url parts=' . var_export($parts, TRUE));

		// adjust path to account for subdirectory installs #223
		if (0 !== ($pos = stripos($parts['path'], '/wp-content'))) {
#226911			$parts['path'] = substr($parts['path'], $pos);
		}
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' domain=' . $domain . ' site=' . $site_url . ' parts=' . var_export($parts, TRUE));

		// if it's a URL reference and on the same host, convert to filesystem path
		if (('http' === $parts['scheme'] || 'https' === $parts['scheme']) &&
			0 === strcasecmp($domain, $parts['host'])) { // compare case insignificant #170
//			if (!function_exists('get_home_path')) {
//				require_once ABSPATH . '/wp-admin/file.php';
//			}
			$home = $this->get_home_path(); // get directory of WP install #187
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' home=' . $home);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' path=' . $parts['path']);
			$path = $home . ltrim($parts['path'], '\\/');
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' converting "' . $url . '" to "' . $path . '"');
		} else {
			$path = $url;
		}

		return $path;
	}

	/**
	 * Get the absolute filesystem path to the root of the WordPress installation. Adopted from wp-admin/includes/file.php
	 * @return string Full filesystem path to the root of the WordPress installation
	 */
	public function get_home_path()
	{
		$home = get_option('home');
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' home=' . $home);
		if (FALSE !== ($pos = strpos($home, '://')))
			$home = substr($home, $pos + 3);
		$siteurl = get_option('siteurl');
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' site=' . $siteurl);
		if (FALSE !== ($pos = strpos($siteurl, '://')))
			$siteurl = substr($siteurl, $pos + 3);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' home=[' . $home . '] site=[' . $siteurl . ']');
		if (!empty($home) && 0 !== strcasecmp($home, $siteurl)) {
			// TODO: check adjustments if WP_CONTENT_DIR is set
			$wp_path_rel_to_home = str_ireplace($home, '', $siteurl); /* $siteurl - $home */
			$pos = strripos(str_replace('\\', '/', $_SERVER['SCRIPT_FILENAME']), trailingslashit($wp_path_rel_to_home));
			$home_path = substr($_SERVER['SCRIPT_FILENAME'], 0, $pos);
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' home path=' . $home_path);
			$home_path = trailingslashit($home_path);
		} else {
			$home_path = ABSPATH;
SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' home=ABSPATH');
		}

SyncDebug::log(__METHOD__ . '():' . __LINE__ . ' returning "' . $home_path . '"');
		return str_replace('\\', '/', $home_path);
	}

	/**
	 * Converts an error code to a language translated string
	 * @param int $code The integer error code. One of the `ERROR_*` values.
	 * @return strint The text value of the error code, translated to the current locale
	 */
	// TODO: move to SyncApiResponse
	public static function error_code_to_string($code, $data = NULL)
	{
//SyncDebug::log(__METHOD__."({$code}, '" . var_export($data, TRUE) . "')", TRUE);
		$error = '';
		switch ($code) {
		case self::ERROR_CANNOT_CONNECT: $error = __('Unable to connect to Target site.', 'wpsitesynccontent'); break;
		case self::ERROR_UNRECOGNIZED_REQUEST: $error = __('The requested action is not recognized. Is plugin activated on Target?', 'wpsitesynccontent'); break;
		case self::ERROR_NOT_INSTALLED: $error = __('WPSiteSync for Content is not installed and activated on Target site.', 'wpsitesynccontent'); break;
		case self::ERROR_BAD_CREDENTIALS: $error = __('Unable to authenticate on Target site.', 'wpsitesynccontent'); break;
		case self::ERROR_SESSION_EXPIRED: $error = __('User session has expired.', 'wpsitesynccontent'); break;
		case self::ERROR_CONTENT_EDITING: $error = __('A user is currently editing this Content on the Target site.', 'wpsitesynccontent'); break;
		case self::ERROR_CONTENT_LOCKED:
			if (NULL !== $data)
				$error = sprintf(__('The User "%1$s", is currently editing this Content on the Target site.', 'wpsitesynccontent'), $data);
			else
				$error - __('A user is currently editing this Content on the Target site.', 'wpsitesynccontent');
			break;
		case self::ERROR_POST_DATA_INCOMPLETE: $error = __('Some or all of the data for the request is missing.', 'wpsitesynccontent'); break;
		case self::ERROR_USER_NOT_FOUND: $error = __('The username does not exist on the Target site.', 'wpsitesynccontent'); break;
		case self::ERROR_FILE_UPLOAD: $error = __('Error while handling file upload.', 'wpsitesynccontent'); break;
		case self::ERROR_PERMALINK_MISMATCH: $error = __('The Permalink settings are different on the Target site.', 'wpsitesynccontent'); break;
		case self::ERROR_WP_VERSION_MISMATCH: $error = __('The WordPress versions are different on the Source and Target sites.', 'wpsitesynccontent'); break;
		case self::ERROR_SYNC_VERSION_MISMATCH: $error = __('The WPSiteSync versions are different on the Source and Target sites.', 'wpsitesynccontent'); break;
		case self::ERROR_EXTENSION_MISSING:
			if (NULL === $data && !empty($data))
				$error = __('The required WPSiteSync extension is not active on the Target site.', 'wpsitesynccontent');
			else
				$error = sprintf(__('The required WPSiteSync extension, %1$s, is not active on the Target site.', 'wpsitesynccontent'), $data);
				break;
		case self::ERROR_INVALID_POST_TYPE: $error = __('The post type is not allowed.', 'wpsitesynccontent'); break;
		case self::ERROR_REMOTE_REQUEST_FAILED: $error = __('Unable to make API request to Target system.', 'wpsitesynccontent'); break;
		case self::ERROR_BAD_POST_RESPONSE:
			if (NULL !== $data)
				$error = sprintf(__('Target system did not respond with success code. Error: %d', 'wpsitesynccontent'), $data);
			else
				$error = __('Target system did not respond with success code.', 'wpsitesynccontent');
			break;
		case self::ERROR_MISSING_SITE_KEY: $error = __('Site Key for Target system has not been obtained.', 'wpsitesynccontent'); break;
		case self::ERROR_POST_CONTENT_NOT_FOUND: $error = __('Unable to determine post content.', 'wpsitesynccontent'); break;
		case self::ERROR_BAD_NONCE: $error = __('Unable to validate AJAX request.', 'wpsitesynccontent'); break;
		case self::ERROR_UNRESOLVED_PARENT:
			if (NULL === $data)
				$error = __('Content has a dependent Page that has not been Sync\'d. Please Push the Parent page.', 'wpsitesynccontent');
			else {
				$post_id = abs($data);
				$post = get_post($post_id, OBJECT);
				$error = sprintf(__('Content has a dependent Page that has not been Sync\'d. Please push the #%1$d "%2$s" Content first.', 'wpsitesynccontent'),
					$post_id, (NULL !== $post ? $post->post_title : ''));
			}
			break;
		case self::ERROR_NO_AUTH_TOKEN: $error = __('Unable to authenticate with Target site. Please re-enter credentials for this site.', 'wpsitesynccontent'); break;
		case self::ERROR_NO_PERMISSION: $error = __('User does not have permission to perform Sync. Check configured user on Target.', 'wpsitesynccontent'); break;
		case self::ERROR_INVALID_IMG_TYPE: $error = __('The image uploaded is not a valid image type.', 'wpsitesynccontent'); break;
		case self::ERROR_POST_NOT_FOUND: $error = __('Requested post cannot be found on Target.', 'wpsitesynccontent'); break;
		case self::ERROR_CONTENT_UPDATE_FAILED:
			if (NULL === $data)
				$error = __('Content update on Target failed.', 'wpsitesynccontent');
			else
				$error = sprintf(__('Content update on Target failed: %1$s.', 'wpsitesynccontent'), $data);
			break;
		case self::ERROR_CANNOT_WRITE_TOKEN: $error = __('Cannot write authentication token.', 'wpsitesynccontent'); break;
		case self::ERROR_UPLOAD_NO_CONTENT: $error = __('Attachment upload failed. No content found; is there a broken link?', 'wpsitesynccontent'); break;
		case self::ERROR_PHP_ERROR_ON_TARGET: $error = __('A PHP error occurred on Target while processing your request. Examine log files for more information.', 'wpsitesynccontent'); break;
		case self::ERROR_SSL_PROTOCOL_ERROR: $error = __('Unknown SSL protocol error on Target. Check DNS settings on Target domain.', 'wpsitesynccontent'); break;
		case self::ERROR_WORDFENCE_BLOCKED: $error = __('Wordfence has blocked the Push operation. Try Learning Mode.', 'wpsitesyncontent'); break;
		case self::ERROR_MODSECURITY_BLOCKED: $error = __('Mod_Security has blocked the Push operation. Try adding Source site to white list.', 'wpsitesynccontent'); break;
		case self::ERROR_CLOUDFLARE_BLOCKED: $error = __('Cloudflare has blocked the Push operation. Try adding Source site to white list.', 'wpsitesynccontent'); break;
		case self::ERROR_CLOUDFRONT_BLOCKED: $error = __('CloudFront has blocked the Push operation. Try adding Source site to white list.', 'wpsitesynccontent'); break;
		case self::ERROR_INVALID_RESPONSE_TYPE: $error = sprintf(__('Target site responded with non-JSON content type: %1$s.', 'wpsitesynccontent'), $data); break;
		case self::ERROR_UNRECOGNIZED_OPERATION: $error = __('WPSiteSync operation is not recognized.', 'wpsitesynccontent'); break;
		case self::ERROR_MISSING_TOKEN: $error = __('Missing Authentication Token.', 'wpsitesynccontent'); break;
		case self::ERROR_MISSING_USER: $error = __('Athenticating user does not exist.', 'wpsitesynccontent'); break;
		case self::ERROR_GB_ATTACHMENT_ID: $error = sprintf(__('Attachment ID could not be found in block "%1$s".', 'wpsitesynccontent'), $data); break;
		case self::ERROR_GB_TAX_ID: $error = sprintf(__('Taxonomy ID could not be found in block "%1$s".', 'wpsitesynccontent'), $data); break;
		default:
			$error = apply_filters('spectrom_sync_error_code_to_text', sprintf(__('Unrecognized error: %d', 'wpsitesynccontent'), $code), $code, $data);
			break;
		}

		return $error;
	}

	/**
	 * Converts a notice code to a language translated string
	 * @param int $code The integer error code. One of the `NOTICE_*` values.
	 * @param multi $data Data associated with notice
	 * @return strint The text value of the notice code, translated to the current locale
	 */
	public static function notice_code_to_string($code, $data = NULL)
	{
		$notice = '';
		switch ($code) {
		case self::NOTICE_FILE_EXISTS: $notice = __('The file name already exists.', 'wpsitesynccontent'); break;
		case self::NOTICE_CONTENT_SYNCD: $notice = __('Content Synchronized.', 'wpsitesynccontent'); break;
		case self::NOTICE_INTERNAL_ERROR: $notice = __('Internal error:', 'wpsitesynccontent'); break;
		default:
			$notice = apply_filters('spectrom_sync_notice_code_to_text',
				sprintf(__('Unknown action; code: %d', 'wpsitesynccontent'), $code), $code, $data);
			break;
		}

		return $notice;
	}

	/**
	 * Return a translated error message.
	 * @param int $error_code The error code.
	 * @deprecated Use error_code_to_string() instead
	 * @return WP_Error Instance describing the error
	 */
	// TODO: replace with error_code_to_string()
	public static function get_error($error_code, $error_data = NULL)
	{
		$error_code = abs($error_code);
		$msg = self::error_code_to_string($error_code);
		if (NULL !== $error_data)
			$msg = sprintf($msg, $error_data);

		return new WP_Error($error_code, $msg);
	}

	/**
	 * Returns the SyncApiResponse instance used to reply to the current API request
	 * @return SyncApiResponse instance
	 */
	public function get_response()
	{
		return $this->_response;
	}

}

// EOF
