<?php

/**
 * PostMeta Model. Helper methods in handling postmeta entries
 * @package: WPSiteSync
 * @author: Dave Jesch
 */

class SyncPostMetaModel
{
	/**
	 * Gets all postmeta entries for a specific key
	 * @param int $post_id The post ID for the postmeta entries to be retrieved
	 * @param string $meta_key The meta_key value of the postmeta entries to be retrieved
	 * @return array An array of objects representing the postmeta enries. If none were found an empty array is returned.
	 */
	public function get_post_meta($post_id, $meta_key)
	{
		global $wpdb;

		$sql = "SELECT * FROM `{$wpdb->postmeta}`
			WHERE `post_id`=%d AND `meta_key`=%s";
		$data = $wpdb->get_results($query = $wpdb->prepare($sql, $post_id, $meta_key), OBJECT);
		$wpdb->get_results();
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' q=' . $query . ' meta_key="' . $meta_key . '" res=' . var_export($data, TRUE));
		if (NULL === $data)
			$data = array();
		return $data;
	}

	/**
	 * Updates the postmeta entry. The object's meta_id property is used in order to reuse as many database entries as possible
	 * @param object $entry The database object (array element) returned from get_post_meta() method
	 * @param multi $new_value The new value to update the current postmeta entry
	 * @return boolean TRUE if updated; FALSE on error
	 */
	public function update_post_meta($entry, $new_value)
	{
		global $wpdb;
		// don't need the meta_key but it helps to narrow the scope of the match
		$sql = "UPDATE `{$wpdb->postmeta}`
			SET `meta_value`=%s
			WHERE `meta_id`=%d AND `meta_key`=%s
			LIMIT 1";
		$res = $wpdb->query($query = $wpdb->prepare($sql, $new_value, $entry->meta_id, $entry->meta_key));
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' q=' . $query . ' res=' . var_export($res, TRUE));
		if (1 !== $res)
			return FALSE;
		return TRUE;
	}

	/**
	 * Removes a postmeta entry
	 * @param object $entry The database object (array lement) returned from get_post_meta() method
	 */
	public function remove_post_meta($entry)
	{
		global $wpdb;
		$sql = "DELETE FROM `{$wpdb->postmeta}`
			WHERE `meta_id`=%d
			LIMIT 1";
		$res = $wpdb->query($query = $wpdb->prepare($sql, $entry->meta_id));
SyncDebug::log(__METHOD__.'():' . __LINE__ . ' q=' . $query . ' res=' . var_export($res, TRUE));
	}
}

// EOF
