<?php

/**
 * Class manages the list of all core shortcodes:
 *	[embed width= height=]
 *	[wp_caption id="attachment_{post_id}" align= width= caption= class=]
 *	[caption id="attachment_{post_id}" align= width= caption= class=]
 *	[gallery order= orderby= id="{post_id}" itemtag= icontag= captiontag= columns= size= ids="{image id list}" include="{image id list}" exclude="{image id list}" link=]
 *	[playlist type= order= orderby= id="{post ids for playlist}" ids="{playlist ids}" exclude="{attachment ids}" style= tracklist= tracknumber= images= artists=]
 *	[audio src= loop= autoplay= preload= class= style=]
 *	[video src= height= width= poster= loop= autoplay= preload= class=]
 */
class SyncShortcodes
{
	/**
	 * Constructs an extendable list of all shortcodes that need updating
	 * @return array An associative array of shortcodes to be updated by WPSiteSync
	 */
	public static function get_shortcodes()
	{
		// construct a list of all shortcodes that need updating
		// See SyncShortcodeEntry for description of formatting for attribute data
		$shortcodes = array(
		//	'audio' => attributes do not contain any ID references
			'caption' => 'id:a',
			'wp_caption' => 'id:a',
		//	'embed' => attributes do not contain any ID references
			'gallery' => 'id:pa|ids:l|include:e|exclude:e',
			'playlist' => 'id:i|ids:l|include:e|exclude:e',
		//	'video' => attributes do not contain any ID references
		);

		// allow extensions (such as Divi or WooCommerce) to extend the list of shortcodes/attributes that can be updated
		$shortcodes = apply_filters('spectrom_sync_shortcode_list', $shortcodes);

		return $shortcodes;
	}
}

// EOF
