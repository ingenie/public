<?php

class SyncGutenbergEntry
{
	// list of Gutenberg property types used for $prop_type value
	const PROPTYPE_IMAGE = 1;					// :i (default)
	const PROPTYPE_POST = 2;					// :p - post
	const PROPTYPE_USER = 3;					// :u - user
	const PROPTYPE_LINK = 4;					// :l - link
	const PROPTYPE_TAX = 5;						// :t - taxonomy
	const PROPTYPE_TAXSTR = 6;					// :T - taxonomy ID as a string
	const PROPTYPE_TAXSLUG = 7;					// :S - taxonomy as a slug
	const PROPTYPE_ATTRIB = 8;					// :a - DOM attributes
	const PROPTYPE_GF = 90;						// :gf gravity form
	const PROPTYPE_CF = 91;						// :cf contact form 7

	public $prop_type = self::PROPTYPE_IMAGE;			// int		Type of property- one of the PROPTYPE_ constant values
//	public $prop_name = NULL;							// string	Name of the property within JSON object
	public $prop_list = NULL;							// array	list of names to access property within JSON object
	public $prop_array = FALSE;							// bool		TRUE for property denotes an array of data

	private static $_sync_model = NULL;						// model used for Target content lookups
	private static $_source_site_key = NULL;				// source site's Site Key; used for Content lookups

	/**
	 * Parses Gutenberg property codes, setting the type, name and list from the property name
	 * @param string $prop The property name to be parsed
	 * @return stdClass instance with the property string parsed into the class's properties
	 */
	public function __construct($prop)
	{
		// property is in the form: '[name.name:type'
		//		a '[' at the begining indicates that the property is an array of items
		//		'name' is the name (or names) of the properties within the JSON object
		//		':type' is the type of property
		//			:i or nothing - indicates a reference to an image id
		//			:a - indicates a reference to a Product Attribute used by WooCommerce
		//			:l - indicates a reference to a link. the link can include a post id: /wp-admin/post.php?post={post_id}\u0026action=edit
		//			:p - indicates a reference to a post id
		//			:t - indicates a reference to a taxonomy id
		//			:T - indicates a reference to a Taxonomy String
		//			:u - indicates a reference to a user id

		// check for the suffix and set the _prop_type from that
		if (FALSE !== ($pos = strpos($prop, ':'))) {
			switch (substr($prop, $pos)) {
			default:
			case ':i':			$this->prop_type = self::PROPTYPE_IMAGE;		break;
			case ':l':			$this->prop_type = self::PROPTYPE_LINK;			break;
			case ':p':			$this->prop_type = self::PROPTYPE_POST;			break;
			case ':t':			$this->prop_type = self::PROPTYPE_TAX;			break;
			case ':T':			$this->prop_type = self::PROPTYPE_TAXSTR;		break;
			case ':u':			$this->prop_type = self::PROPTYPE_USER;			break;
			case ':a':			$this->prop_type = self::PROPTYPE_ATTRIB;		break;
			case ':cf':			$this->prop_type = self::PROPTYPE_CF;			break;
			case ':gf':			$this->prop_type = self::PROPTYPE_GF;			break;
			}
			$prop = substr($prop, 0, $pos);			// remove the suffix
		}

		// check for array references
		if (FALSE !== strpos($prop, '[')) { // ('[' === substr($prop, 0, 1)) {
			$this->prop_array = TRUE;
//			$prop = substr($prop, 1);
		}

		if (FALSE !== strpos($prop, '.')) {
			$this->prop_list = explode('.', $prop);
		} else {
			$this->prop_list = array($prop);
		}
SyncDebug::log(__METHOD__.'():' . __LINE__ . $this->__toString());					#!#
	}

	public function __toString()
	{
		$ret = ' type=' . $this->prop_type . ' arr=' . ($this->prop_array ? 'T' : 'F');
		$ret .= ' list=' . (NULL === $this->prop_list ? '(NULL)' : implode('->', $this->prop_list));
		return $ret;
	}

	/**
	 * Obtains a property's value
	 * @param stdClass $obj JSON object reference
	 * @param int $ndx Index into array, if current property references an array
	 * @return multi the value from the object referenced by the current property
	 */
	public function get_val($obj, $ndx = 0)
	{
		$val = 0;
		$idx = 0;						// this is the index within the _prop_list array to use for property references
#		$prop_name = '';
		$ref = $obj;														// make a reference to what we're working on
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' ref=' . var_export($ref, TRUE));

		$props = $this->prop_list;
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' props=' . implode('->', $props) . ' ndx=' . var_export($ndx, TRUE));

		$last_prop = array_pop($props);
		$arr_count = 0;		// usage count for array references. current max == 1
		// move the $ref pointer down the chain of property references
		foreach ($props as $prop) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' following property "' . $prop . '"');
			if ('[' === $prop[0]) {					// array reference
				if (++$arr_count > 1)
					throw new Exception('too many array references in line ' . __LINE__);
				$prop = substr($prop, 1);
				if (count($ref->$prop) > $ndx) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' getting element [' . $ndx . '] of property "' . $prop . '"');
					$ref = $ref->{$prop}[$ndx];
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' ref=' . var_export($ref, TRUE));
				} else
					throw new Exception('invalid array index ' . $ndx . ' in property "' . $prop . '[' . $ndx . '] in line ' . __LINE__);
			} else {								// scaler reference
				$ref = $ref->$prop;
			}
		}

		// get the value of the last property reference
		$val = 0;
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' looking up last property "' . $last_prop . '"');
		if ('[' === $last_prop[0]) {				// array reference
			if (++$arr_count > 1)
				throw new Exception('too many array references in line ' . __LINE__);
			$last_prop = substr($last_prop, 1);
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' "' . $last_prop . '=' . var_export($ref->{last_prop}, TRUE) . ' has ' . count($ref->{last_prop}) . ' elements');
			if (count($ref->$last_prop) > $ndx)
				$val = $ref->{$last_prop}[$ndx];
			else
				throw new Exception('invalid array index ' . $ndx . ' in property "' . $last_prop . '[' . $ndx . '] in line' . __LINE__);
		} else {									// scaler reference
			$val = $ref->$last_prop;
		}
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' returning val=' . $val);
		return $val;
	}

	/**
	 * Sets a property's value
	 * @param stdClass $obj JSON object reference
	 * @param multi $val The value to set for the current property
	 * @param int $ndx Index into array, if current property references an array
	 */
	public function set_val($obj, $val, $ndx = 0)
	{
		if (self::PROPTYPE_TAXSTR === $this->prop_type)
			$val = strval($val);

		$ref = $obj;														// make a reference to what we're working on
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' ref=' . var_export($ref, TRUE));

		$props = $this->prop_list;
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' props=' . implode('->', $props) . ' ndx=' . $ndx);

		$last_prop = array_pop($props);
		$arr_count = 0;		// usage count for array references. current max == 1
		// move the $ref pointer down the chain of property references
		foreach ($props as $prop) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' folling property "' . $prop . '"');
			if ('[' === $prop[0]) {					// array reference
				if (++$arr_count > 1)
					throw new Exception('too many array references in line ' . __LINE__);
				$prop = substr($prop, 1);
				if (count($ref->$prop) > $ndx) {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' getting element [' . $ndx . '] of property "' . $prop . '"');
					$ref = $ref->{$prop}[$ndx];
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' ref=' . var_export($ref, TRUE));
				} else
					throw new Exception('invalid array index ' . $ndx . ' in property "' . $prop . '[' . $ndx . '] in line ' . __LINE__);
			} else {								// scaler reference
				$ref = $ref->$prop;
			}
		}

		// set the value of the last property reference
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' setting last property "' . $last_prop . '" to ' . $val);
		if ('[' === $last_prop[0]) {				// array reference
			if (++$arr_count > 1)
				throw new Exception('too many array references in line ' . __LINE__);
			$last_prop = substr($last_prop, 1);
			if (count($ref->$last_prop) > $ndx)
				$ref->{$last_prop}[$ndx] = $val;
			else
				throw new Exception('invalid array index ' . $ndx . ' in property "' . $last_prop . '[' . $ndx . '] in line' . __LINE__);
		} else {									// scaler reference
			$ref->$last_prop = $val;
		}
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' modified obj: ' . var_export($obj, TRUE));
		return;
	}

	/**
	 * Checks to see if the current Entry refers to an array
	 * @param string $name Property name to match or NULL to check any property for an array
	 * @return boolean TRUE if the named property is an array. If no named property provided returns TRUE for any property being an array
	 */
	private function is_array($name = NULL)
	{
		$props = $this->prop_list;

		foreach ($props as $prop) {
			if (NULL === $name) {
				if ('[' === $prop[0])
					return TRUE;
			} else {
				if ('[' === $prop[0] && name === substr($prop, 1))
					return TRUE;
			}
		}
		return FALSE;
	}

	/**
	 * Return the number of elements in an array represented by the current instance
	 * @param stdClass $obj The JSON object reference
	 * @return int The number of elements in the array
	 */
	public function array_size($obj)
	{
//SyncDebug::log(__METHOD__.'():' . __LINE__);
		$ref = $obj;
		if (!$this->prop_array) {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' property does not refer to an array ' . $this->__toString());
			return 0;
		}
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' prop array: ' . var_export($this->prop_list, TRUE));

		$props = $this->prop_list;
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' props=' . implode('->', $props));

//		$last_prop = array_pop($props);
//		$arr_count = 0;		// usage count for array references. current max == 1
		// move the $ref pointer down the chain of property references
		foreach ($props as $prop) {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' prop=' . $prop);
			if ('[' === $prop[0]) {					// array reference
				// TODO: check property to ensure it refers to an array
				$prop = substr($prop, 1);
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' return array size ' . count($ref->{$prop}));
				return count($ref->{$prop});
			} else {
//SyncDebug::log(__METHOD__.'():' . __LINE__ . ' following property "' . $prop . '"');
				$ref = $ref->$prop;
			}
		}
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' ERROR: property does not refer to an array');
		return 0;
	}

	/**
	 * Gets the Target Content's ID from the Source site's Content ID
	 * @param int $source_ref_id The post ID of the Content on the Source site
	 * @return int|FALSE The Target site's ID value if found, otherwise FALSE to indicate not found
	 */
	public function get_target_ref($source_ref_id)
	{
		if (NULL === self::$_sync_model)
			self::$_sync_model = new SyncModel();
		if (NULL === self::$_source_site_key)
			self::$_source_site_key = SyncApiController::get_instance()->source_site_key;

		$type = 'post';				// used to indicate to SyncModel->get_sync_data() what type of content
		switch ($this->prop_type) {
		case self::PROPTYPE_IMAGE:		$type = 'post';			break;		// images and posts both stored in posts table
		case self::PROPTYPE_POST:		$type = 'post';			break;
		case self::PROPTYPE_USER:		$type = 'user';			break;
		case self::PROPTYPE_LINK:
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' link');
			break;
		case self::PROPTYPE_TAX:
		case self::PROPTYPE_TAXSTR:		$type = 'term';			break;
		case self::PROPTYPE_ATTRIB:		$type = NULL;			break;
		default:
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' unrecognized type "' . $this->prop_type . '"');
			break;
		}

		if (NULL === $type)					// DOM Attributes do not have a type
			return FALSE;

		$source_ref_id = abs($source_ref_id);
		if (0 !== $source_ref_id) {
			$sync_data = self::$_sync_model->get_sync_data($source_ref_id, self::$_source_site_key, $type);
			if (NULL !== $sync_data) {
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' source ref=' . $source_ref_id . ' target=' . $sync_data->target_content_id);
				return abs($sync_data->target_content_id);
			}
		}
		return FALSE;
	}
}

// EOF
