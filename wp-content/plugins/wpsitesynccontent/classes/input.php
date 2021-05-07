<?php

class SyncInput
{
	const SANITIZE_EMAIL = 0x01;
	const SANITIZE_FILENAME = 0x02;
	const SANITIZE_HEXCOLOR = 0x04;
	const SANITIZE_KEY = 0x08;
	const SANITIZE_URL = 0x10;

	/*
	 * Return the named element for a given get variable
	 * @param string $name The name of the form element and array element within $_GET[]
	 * @param mixed $default The default value to return if no value found
	 * @return mixed The named get parameter if found, otherwise the $default value provided.
	 */
	public function get($name, $default = '', $sanitize = 0)
	{
		$ret = $default;
		if (isset($_GET[$name]))
			$ret = sanitize_text_field($_GET[$name]);
		if (self::SANITIZE_EMAIL & $sanitize)
			$ret = sanitize_email($ret);
		if (self::SANITIZE_FILENAME & $sanitize)
			$ret = sanitize_file_name($ret);
		if (self::SANITIZE_HEXCOLOR & $sanitize)
			$ret = sanitize_hex_color($ret);
		if (self::SANITIZE_KEY & $sanitize)
			$ret = sanitize_key($ret);
		if (self::SANITIZE_URL & $sanitize)
			$ret = esc_url_raw($ret);
		return $ret;
#		sanitize_html_class($class);
#		sanitize_mime_type($mime_type);
#		sanitize_user($username);
	}


	/*
	 * Return the named element for a given get variable as an integer
	 * @param string $name The name of the form element and array element within $_GET[]
	 * @param mixed $default The default value to return if no value found
	 * @return int The integer value of the named get parameter if found, otherwise the $default value provided.
	 */
	public function get_int($name, $default = 0)
	{
		$get = $this->get($name, $default);
		return intval($get);
	}

	/*
	 * Check if a GET array element exists
	 * @return Boolean TRUE if GET variable exists otherwise FALSE
	 */
	public function get_exists($name)
	{
		if (isset($_GET[$name]))
			return TRUE;
		return FALSE;
	}


	/*
	 * Return the named element for a given $_POST variable
	 * @param string $name The name of the form element and array element within $_POST[]
	 * @param mixed $default The default value to return if no value found
	 * @return mixed The named form element if found, otherwise the $default value provided.
	 */
	public function post($name, $default = '')
	{
		if (isset($_POST[$name])) {
			if (is_array($_POST[$name])) {
				$data = array_map('stripslashes', $_POST[$name]);
				$data = array_map('strip_tags', $data);
				return $data;
			}
			return strip_tags(stripslashes($_POST[$name]));
		}
		return $default;
	}


	/*
	 * Return the named element for a given POST variable as an integer
	 * @param string $name The name of the form element and array element within $_GET[]
	 * @param mixed $default The default value to return if no value found
	 * @return int The integer value of the named POST element if found, otherwise the $default value provided.
	 */
	public function post_int($name, $default = 0)
	{
		$post = $this->post($name, $default);
		return intval($post);
	}


	/*
	 * Return raw POST data for a given form field
	 * @param string $name The name of the form element and array element within $_POST[]
	 * @param mixed $default The default value to return if no value found
	 * @return mixed The named form element if found, otherwise the $default value provided.
	 */
	public function post_raw($name, $default = '')
	{
		if (isset($_POST[$name]))
			return $_POST[$name];
		return $default;
	}

	/*
	 * Check if a POST array element exists
	 * @return Boolean TRUE if POST variable exists otherwise FALSE
	 */
	public function post_exists($name)
	{
		if (isset($_POST[$name]))
			return TRUE;
		return FALSE;
	}
}

// EOF