<?php

class SyncDebug
{
	const DEBUG = TRUE;

	public static $_debug = FALSE;

	public static $_debug_output = FALSE;
	private static $_id = NULL;

	/**
	 * Array dump - removes "array(" and ")," lines from the output
	 * @param array $arr The data array to dump
	 * @return string The var_export() results with "array(" and ")," lines removed
	 */
	public static function arr_dump($arr)
	{
		$out = var_export($arr, TRUE);
		$data = explode("\n", $out);
		$ret = array();
		foreach ($data as $line) {
			if ('array (' !== trim($line) && '),' !== trim($line))
				$ret[] = $line;
		}
		return implode("\n", $ret) . PHP_EOL;
	}

	/**
	 * Sanitizes array content before it gets logged, removing any tokens, passwords, and reducing large content
	 * @param array $arr Array to be dumped
	 * @param int $ops Optional bit mask containing sanitizing options
	 * @return string Array contents dumped to a string
	 */
	public static function arr_sanitize($arr, $ops = 0)
	{
		if (is_object($arr))
			$arr = get_object_vars ($arr);
		if (is_array($arr)) {
			// if it's an array, sanitize/remove specific items so they are not logged
			if (isset($arr['username']))
				$arr['username'] = 'target-user';								// no target usernames
			if (isset($arr['password']))
				$arr['password'] = 'target-password';							// no passwords
			if (isset($arr['encode']))
				$arr['encode'] = strlen($arr['encode']) . ' characters...';		// no encoded data in authentication checks
			if (isset($arr['token']))
				$arr['token'] = 'xxx';											// remove tokens used for auth checks
			if (isset($arr['customer_email']))
				$arr['customer_email'] = 'mail@domain.com';						// no customer email addresses
			if (isset($arr['license']))
				$arr['license'] = substr($arr['license'], 16);					// don't show full license key, but enough so we can find it
			// call with $ops | 0x01 to ignore replacing ['contents']
			if (isset($arr['contents']) && !($ops & 0x01) && strlen($arr['contents']) > 1024)
				$arr['contents'] = strlen($arr['contents']) . ' bytes...truncated';	// truncate attachment contents to reduce logging

			if (isset($arr['site_key']))
				$arr['site_key'] = substr($arr['site_key'], -16);
			if (isset($arr['target_site_key']))
				$arr['target_site_key'] = substr($arr['target_site_key'], -16);
			if (isset($arr['source_site_key']))
				$arr['source_site_key'] = substr($arr['source_site_key'], -16);
			if (isset($arr['auth']) && isset($arr['auth']['site_key']))
				$arr['auth']['site_key'] = substr($arr['auth']['site_key'], -16); // truncate the site key
			if (isset($arr['auth']) && isset($arr['auth']['cookie'])) {			// obscure cookie data
				$cookie = $arr['auth']['cookie'];
				$parts = explode('|', $cookie);
				$parts[2] = $parts[3] = 'xxx';
				$arr['auth']['cookie'] = implode('|', $parts);
			}
			if (isset($arr['auth']) && isset($arr['auth']['nonce']))
				$arr['auth']['nonce'] = 'xxx';									// obscure cookie nonce

			if (isset($arr[0]) && isset($arr[0]->post_password)) {
				$idx = 0;
				foreach ($arr as $obj) {
					if (!empty($obj->post_password))
						$arr[$idx]->post_password = 'xxx';						// no passwords
				}
			}
		}
		// all other types, object, WP_Error, etc. are allowed and will be stringified by var_export()

		$ret = var_export($arr, TRUE);
		$site_key = SyncOptions::get('site_key');
		if (!empty($site_key))
			$ret = str_replace($site_key, substr($site_key, -16), $ret);
		$target_site_key = SyncOptions::get('target_site_key');
		if (!empty($target_site_key))
			$ret = str_replace($target_site_key, substr($target_site_key, -16), $ret);

		return $ret;
	}

	/**
	 * Escapes a string to make whitespace characters more visible in debug logs.
	 * This is not intended as a tool for escaping data for SQL use. This is only
	 * intended for debugging and display purposes
	 * @param string $sql The SQL data to be escaped.
	 * @return string The modified data with whitespace escaped for better visibility.
	 */
	public static function esc_sql($sql)
	{
		$res = str_replace(array('\\\'', '\''), array('~syncesquote~', '~syncsquote~'), $sql);
		$res = esc_sql($res);
		$res = str_replace(array("\r", "\n", "\t", '~syncesquote~', '~syncsquote~'), array('\\r', '\\n', '\\t', '\\\'', '\\\''), $res);
		return $res;
	}

	/**
	 * Sanitizes/shortens the POST data for upload_media API calls, removing the image content
	 * @param string $data The POST data that will be Pushed
	 * @return string
	 */
	public static function post_sanitize($data)
	{
		$pos = strpos($data, 'name="sync_file_upload"');						// truncates file upload content to reduce logging
		if (FALSE !== $pos) {
			$eol = strpos($data, "\n", $pos);
			if (FALSE !== $eol) {
				$data = substr($data, 0, $eol + 2);
			}
		}

		$pos = strpos($data, 'name="token"');									// obscure security token
		if (FALSE !== $pos) {
			$eol = strpos($data, "\n", $pos + 15);
			$data = substr($data, 0, $pos + 14) . '{target-token}' . substr($data, $eol);
		}
		return $data;
	}

	/**
	 * Perform logging
	 * @param string $msg The message to log
	 * @param boolean TRUE if a backtrace is to be logged after the message is logged
	 */
	public static function log($msg = NULL, $backtrace = FALSE)
	{
		if (!self::$_debug && (!defined('WP_DEBUG') || !WP_DEBUG) && !defined('WPSITESYNC_DEBUG'))
			return;

		if (self::$_debug_output)
			echo $msg, PHP_EOL;

		if (NULL === self::$_id)
			self::$_id = rand(10, 99);

		// remove any logging that might contain a password
		if (isset($_SERVER['HTTP_HOST']) && FALSE !== stripos($_SERVER['HTTP_HOST'], '.loc') && FALSE !== ($pos = stripos($msg, 'password=')))
			$msg = substr($msg, 0, $pos);

		$file = dirname(__DIR__) . '/~log.txt';
		if (defined('WPSITESYNC_DEBUG') && is_string(WPSITESYNC_DEBUG))
			$file = WPSITESYNC_DEBUG;
		$fh = @fopen($file, 'a+');
		if (FALSE !== $fh) {
			if (NULL === $msg)
				fwrite($fh, current_time('Y-m-d H:i:s'));
			else
				fwrite($fh, current_time('Y-m-d H:i:s') . '#' . self::$_id . ' - ' . $msg . "\r\n");

			if ($backtrace) {
				// arguments can potentially add more data to the log and contain passwords. don't include them if possible
				$callers = debug_backtrace(defined('DEBUG_BACKTRACE_IGNORE_ARGS') ? DEBUG_BACKTRACE_IGNORE_ARGS : FALSE);
				array_shift($callers);
				// path of plugins directory. used to obscure full file path from being logged
				$path = dirname(dirname(dirname(plugin_dir_path(__FILE__)))) . DIRECTORY_SEPARATOR;

				$n = 1;
				foreach ($callers as $caller) {
					$func = $caller['function'] . '()';
					if (isset($caller['class']) && !empty($caller['class'])) {
						$type = '->';
						if (isset($caller['type']) && !empty($caller['type']))
							$type = $caller['type'];
						$func = $caller['class'] . $type . $func;
					}
					$file = isset($caller['file']) ? $caller['file'] : '';
					$file = str_replace('\\', '/', str_replace($path, '', $file));
					$file = str_replace(ABSPATH, '', $file);
					if (isset($caller['line']) && !empty($caller['line']))
						$file .= ':' . $caller['line'];
					$frame = $func . ' - ' . $file;
					$out = '    #' . ($n++) . ': ' . $frame . PHP_EOL;
					fwrite($fh, $out);
					if (self::$_debug_output)
						echo $out;
				}
			}

			fclose($fh);
		}
	}
}

// EOF