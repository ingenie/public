<?php

/**
 * Manages data for a specific shortcode and it's attributes
 *	The array of attributes is in the following form:
 *	{attribute_name}:{type code}
 *	Where the {attribute_name} is the name of an attribute that refers to an ID that needs updating
 *	And {type_code} is one of the recognized codes that denotes the Type of the ID that is to be updated
 * Valid type_code values are:
 *	:i - attribute refers to a single ID from the wp_posts table
 *	:l - attribute refers to a comma separated list of IDs from the wp_posts table
 *	:a - a <DIV id=> that contains a string in the form "attachment_{id}"
 *	:e - exclusive list. refers to IDs that do not need to send media on Source but update ID values on Target
 *	:t - a taxonomy id
 * Example:
 *	'id:i|ids:l|include:l|exclude:l'
 * This describes four attributes for the shortcode. The first has a single ID and the others refer to a
 * list of IDs.
 * All attributes are optional. If the shortcode does not actually use any of the IDs, things will still work.
 * Only those attributes that are used and contain valid ID references will be updated on the Target site.
 */
class SyncShortcodeEntry
{
	public $shortcode = NULL;						// the name of the shortcode, i.e. 'gallery'
	public $attrib = array();						// name-value list of attributes for the shortcode
	public $original = NULL;						// the original content of the shortcode, i.e. '[gallery id="32"]'
	public $types = NULL;							// array of attributes and their types

	const TYPE_IMAGE_ID = 1;						// i - an image ID
	const TYPE_POST_ID = 2;							// p - a post ID
	const TYPE_IMAGE_LIST = 3;						// l - a list of one or more image IDs
	const TYPE_POST_LIST = 4;						// pl - a list of one or more post IDs
	const TYPE_POST_ATTACH = 5;						// pa - a post ID, and all of it's attachments
	const TYPE_ATTACHMENT = 6;						// a - attachment reference
	const TYPE_EXCLUSIVE = 7;						// e - exclusive ID references
	const TYPE_TAXONOMY = 8;						// t - taxonomy ID
	const TYPE_TAXONOMY_LIST = 9;					// t - a list of one or more taxonomy IDs
	const TYPE_TAXONOMY_SLUG = 10;					// s - a comma separated list of taxonomy slugs

	public function __construct($shortcode, $original, $args)
	{
		$this->shortcode = $shortcode;
		$this->original = $original;
		if (!empty($args)) {					// avoids warning for empty needle in strpos() #251
			$pos = strpos($this->original, $args);
			if (FALSE !== $pos)
				$this->original = substr($this->original, 0, $pos + strlen($args) + 1);
		}
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' original shortcode=|' . $this->original . '| args=' . var_export($args, TRUE));
		$this->attrib = shortcode_parse_atts($args);
		if (!is_array($this->attrib)) {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' attrib is not an array ' . var_export($this->attrib, TRUE));
			$this->attrib = array();
		}
	}

	/**
	 * Returns the original shortcode 
	 * @return string The original shortcode string as found by preg_match_all().
	 */
	public function get_original_shortcode()
	{
		return $this->original;
	}

	/**
	 * Gets the value associated with this attribute
	 * @param string $attribute The name of the attribute to obtain
	 * @return string The value of the attribute; or NULL if it is not found
	 */
	public function get_attribute($attribute)
	{
		foreach ($this->attrib as $name => $value) {
			if ($name === $attribute)
				return $value;
		}
		return NULL;
	}

	/**
	 * Returns the ID value contained within an attribute for TYPE_ATTACHMENT attribute types
	 * @param string $value The value of the attribute
	 * @return int The ID found within the value, or 0 if no numeric value found
	 */
	public function get_attachment_id($value)
	{
		$parts = explode('_', $value);
		foreach ($parts as $part) {
			if (ctype_digit($part))
				return abs($part);
		}
		return 0;
	}

	/**
	 * Sets the named attribute to the specified value
	 * @param string $name The attribute name
	 * @param string $value The value to associate with this attribute name
	 */
	public function set_attribute($name, $value)
	{
		$this->attrib[$name] = $value;
	}

	/**
	 * Checks to see if the named attribute is recognized for this shortcode
	 * @param string $attribute The name of the attribute to search for
	 * @return boolean TRUE if the attribute is found; otherwise FALSE
	 */
	public function has_attribute($attribute)
	{
		if (isset($this->attrib[$attribute]))
			return TRUE;
		return FALSE;
	}

	/**
	 * Parses the string describing shortcode attributes and their types. See the class docblock
	 * above for a full description of how these are defined.
	 * @param string $atts A string representing the attribute names and their types
	 * @return array An associative array of attribute names and their types
	 * @throws Exception
	 */
	public function parse_attributes($atts)
	{
		$ret = array();
		$attributes = explode('|', $atts);
		foreach ($attributes as $attrib) {
			$parts = explode(':', $attrib);
			switch ($parts[1]) {
			case 'i':		$type = self::TYPE_IMAGE_ID;					break;		// image
			case 'p':		$type = self::TYPE_POST_ID;						break;		// post
			case 'pa':		$type = self::TYPE_POST_ATTACH;					break;		// post attachments
			// TODO: change to 'il' to be consistent with type/list format
			case 'l':		$type = self::TYPE_IMAGE_LIST;					break;		// list
			case 'pl':		$type = self::TYPE_POST_LIST;					break;		// post list
			case 'a':		$type = self::TYPE_ATTACHMENT;					break;		// attachment
			case 'e':		$type = self::TYPE_EXCLUSIVE;					break;		// exclude
			case 't':		$type = self::TYPE_TAXONOMY;					break;		// taxonomy
			case 'tl':		$type = self::TYPE_TAXONOMY_LIST;				break;		// taxonomy list
			case 's':		$type = self::TYPE_TAXONOMY_SLUG;				break;		// taxonomy slug

			default:
				$type = 0;
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' unrecognized short code attribute type: "' . $parts[1] . '"');
			}
			$ret[$parts[0]] = $type;
		}
		return $this->types = $ret;
	}

	/**
	 * Generates a string representation of the shortcode. This is used to reconstruct the
	 * shortcode after attribute updates have been applied
	 * @return string The modified shortcode string
	 */
	public function __toString()
	{
		$ret = '[' . $this->shortcode . ' ';
		foreach ($this->attrib as $name => $val) {
			$quote = '"';
			if (FALSE !== strpos($val, '"'))			// value contains a quote so use single quotes for attribute wrapper
				$quote = '\'';
			$ret .= $name . '=' . $quote . $val . $quote . ' ';
		}
		$ret = trim($ret) . ']';
		return $ret;
	}
}

// EOF
