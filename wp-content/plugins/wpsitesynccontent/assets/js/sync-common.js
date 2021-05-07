/*
 * @copyright Copyright (C) 2015-2020 WPSiteSync.com. - All Rights Reserved.
 * @author WPSiteSync.com <hello@WPSiteSync.com>
 * @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
 * @url https://wpsitesync.com
 * The PHP code portions are distributed under the GPL license. If not otherwise stated, all images, manuals, cascading style sheets, and included JavaScript *are NOT GPL, and are released under the SpectrOMtech Proprietary Use License v1.0
 * More info at https://WPSiteSync.com/downloads/
 */

/**
 * Outputs debug messages to the Javascript Console
 * @param {string} msg The message to be output
 * @param {multi} val an optional value to be appended to the message
 * @param {string} component And optional component to be added to message prefix. This can be used to identify console messages from different add-ons
 * @param {string} fn Optional name of the function calling wpss_debug_out()
 */
function wpss_debug_out(msg, val, component, fn)
{
return;
	if ('undefined' === typeof(console.log))
		return;

	if ('undefined' === typeof(fn)) {
		var fn = '';
//console.log('debug.caller');
//console.log(wpsitesync_common.debug.caller);
//console.log('this.caller');
//console.log(this.caller);
//console.log('callee');
//console.log(wpss_debug_out.caller.toString());
//console.log(arguments.callee.caller.name);
//console.log(arguments.callee.caller.name);
		if (null !== wpss_debug_out.caller)
			fn = wpss_debug_out.caller.name + '';
	}
	if (0 !== fn.length)
		fn += '() ';
	if ('undefined' !== typeof(val)) {
		switch (typeof(val)) {
		case 'string':		msg += ' "' + val + '"';						break;
		case 'object':		msg += ' {' + JSON.stringify(val) + '}';		break;
		case 'number':		msg += ' #' + val;								break;
		case 'boolean':		msg += ' `' + (val ? 'true' : 'false') + '`';	break;
		}
//		if (null === val)
//			msg += ' `null`';
	}
	if ('undefined' === typeof(component))
		component = '';
	else
		component = ' ' + component;
	console.log('wpss' + component + ': ' + fn + msg);
};

function WPSiteSyncContent_Common()
{
	this.target_post_id = 0;							// post ID of Target Content
	this.content_dirty = false;							// true when unsaved changes exist; otherwise false

	this.message_container = '#sync-message-container';	// jQuery selector for the message container to be .show()n after message contents adjusted
	this.message_selector = '#sync-ui-message';			// jQuery selector for the message area
	this.anim_selector = '#sync-ui-anim';				// jQuery selector for the animation image
	this.dismiss_selector = '#sync-ui-dismiss';			// jQuery selector for the dismiss button
	this.success_msg_selector = '#sync-message-success';// jQuery selector for the "Push to Target" success message
	this.fatal_error_selector = '#sync-ui-fatal-error';	// jQuery selector for the fatal error message

	this.position_message = false;						// true to position the message element near the Push to Target button
	this.push_button = '#sync-ui-push';					// jQuery selector for the "Push to Target" button
	this.pull_button = '#sync-ui-pull';					// jQuery selector for the "Pull from Target" button

	this.api_success = false;							// set to true when API call is successful; otherwise false
	this.api_callback = null;							// allows filtering of API content before AJAX request
	this.api_success_callback = null;					// callback for successful API requests
	this.api_failure_callback = null;					// callback for failed API requests
};

/**
 * Initializes the Common class and let's add-ons know that they can make modifications to the instance if necessary
 */
WPSiteSyncContent_Common.prototype.init = function()
{
wpss_debug_out('init');
	jQuery(window).trigger('wpsitesync.init_ui');
};

/**
 * Disables the Sync Push and Pull buttons after Content is edited
 */
WPSiteSyncContent_Common.prototype.disable_sync = function()
{
wpss_debug_out('disable_sync() - turning off the button');
	this.content_dirty = true;
	jQuery(this.push_button).addClass('sync-button-disable');
	jQuery(this.pull_button).addClass('sync-button-disable');
};

/**
 * Enable the Sync Push and Pull buttons after Content changes are abandoned
 */
WPSiteSyncContent_Common.prototype.enable_sync = function()
{
wpss_debug_out('enable_sync() - turning on the button');
	this.content_dirty = false;
	jQuery(this.push_button).removeClass('sync-button-disable');
	jQuery(this.pull_button).removeClass('sync-button-disable');
};

/**
 * Determines if the state of the Content editor has unsaved data
 * @returns {boolean} true if content is dirty (unsaved); otherwise false
 */
WPSiteSyncContent_Common.prototype.is_content_dirty = function()
{
wpss_debug_out('is_content_dirty() before = ' + (this.content_dirty ? 'TRUE': 'FALSE'));
	// TODO: use trigger
	jQuery(window).trigger('wpsitesync.content_dirty', this);
wpss_debug_out('is_content_dirty() after = ' + (this.content_dirty ? 'TRUE': 'FALSE'));

	return this.content_dirty;
};

/**
 * Common method to perform API operations
 * @param {int} post_id The post ID being sync'd
 * @param {string} operation The API operation name
 */
WPSiteSyncContent_Common.prototype.api = function(post_id, operation)
{
	// gives add-ons a chance to update the Target's post ID if desired
	jQuery(window).trigger('wpsitesync.target_post_id', this);
	this.post_id = post_id;
	var data = {
		action: 'spectrom_sync',
		operation: operation,
		post_id: post_id,
		target_id: this.target_post_id,
		_sync_nonce: jQuery('#_sync_nonce').html()
	};

	jQuery(window).trigger('wpsitesync.api_data', data);
console.log('.api() sending AJAX request');	// ##
console.log(data);

	var api_xhr = {
		type: 'post',
		async: true,
		data: data,
		url: ajaxurl,
		success: function(response) {
wpss_debug_out('.api() success response:', response);
			wpsitesync_common.clear_message();
			if (response.success) {
wpss_debug_out('.api() AJAX response shows success');
//				jQuery('#sync-message').text(jQuery('#sync-success-msg').text());
wpss_debug_out('.api() setting message "' + jQuery(wpsitesync_common.success_msg_selector).html() + '"');
				wpsitesync_common.set_message(jQuery(wpsitesync_common.success_msg_selector).html(), false, true);
wpss_debug_out('.api()  message set');
				if ('undefined' !== typeof(response.notice_codes) && response.notice_codes.length > 0) {
					for (var idx = 0; idx < response.notice_codes.length; idx++) {
wpss_debug_out('.api() adding message "' + response.notices[idx] + '"');
						wpsitesync_common.add_message(response.notices[idx]);
					}
				}
wpss_debug_out('.api() done');
			} else {
wpss_debug_out('.api() AJAX response shows failure');
				var msg = 'Request failed.';
				if ('undefined' !== typeof(response.error_message)) {
					var msg = '';
//					if ('undefined' !== typeof(response.error_data) && '' !== response.error_data)
//						msg += ' - ' + response.error_data;
					wpsitesync_common.set_message(response.error_message + msg, false, true);
				} else if ('undefined' !== typeof(response.data.message))
//					jQuery('#sync-message').text(response.data.message);
					wpsitesync_common.set_message(response.data.message, false, true);
			}

wpss_debug_out('.api() done processing api request');
			if (null !== wpsitesync_common.api_success_callback) {
wpss_debug_out('.api() calling the success callback');
				wpsitesync_common.api_success_callback(response);
			}
		},
		error: function(response) {
wpss_debug_out('.api() failure response:', response);
			var msg = '';
			if (500 === response.status) {
				msg = jQuery(wpsitesync_common.fatal_error_selector).html();
				if ('undefined' === typeof msg)
					msg = 'Fatal error while processing request';
			} else if ('undefined' !== typeof(response.error_message))
				msg =  response.error_message;
			wpsitesync_common.set_message('<span class="error">' + msg + '</span>', false, true);
//			jQuery('#sync-content-anim').hide();
		}
	};

	// Allow other plugins to alter the ajax request
	jQuery(document).trigger('wpsitesync.api_call', operation, api_xhr);
//wpss_debug_out('api() calling jQuery.ajax');
	jQuery.ajax(api_xhr);
//wpss_debug_out('api() returned from ajax call');
};

/**
 * Sets the contents of the message <div>
 * @param {string} message The message to display
 * @param {boolean} anim true to enable display of the animation image; otherwise false.
 * @param {boolean} dismiss true to enable display of the dismiss icon; otherwise false.
 */
WPSiteSyncContent_Common.prototype.set_message = function(message, anim, dismiss)
{
wpss_debug_out('.set_message("' + message + '")');

	// needed by Beaver Builder to position message near the Push button
	if (this.position_message) {
		var pos = jQuery(this.push_button).offset();
wpss_debug_out(pos);
		jQuery(this.message_selector).css('left', (pos.left - 10) + 'px').css('top', (Math.min(pos.top, 7) + 30) + 'px');
	}

	jQuery(this.message_selector).html(message);

	if ('undefined' !== typeof anim && anim)
		jQuery(this.anim_selector).show();
	else
		jQuery(this.anim_selector).hide();

	if ('undefined' !== typeof dismiss && dismiss) {
		jQuery(this.dismiss_selector).show();
		jQuery(this.dismiss_selector).attr('onclick', 'javascript:wpsitesync_common.clear_message(); return false;');
	} else
		jQuery(this.dismiss_selector).hide();

	jQuery(this.message_container).show();
};

/**
 * Adds some message content to the current success/failure message in the Sync metabox
 * @param {string} msg The message to append
 */
WPSiteSyncContent_Common.prototype.add_message = function(msg)
{
//wpss_debug_out('add_message() ' + msg);
	jQuery(this.message_selector).append('<br/>' + msg);
};

/**
 * Hides the message container. Used in response to the dismiss button or by callers of .api()
 */
WPSiteSyncContent_Common.prototype.clear_message = function()
{
	jQuery(this.message_container).hide();
};

/**
 * Registers a callback function to be called, allowing extensions to modify API data before AJAX request
 * @param {function} fn The callback function to call
 */
WPSiteSyncContent_Common.prototype.set_api_callback = function(fn)
{
//console.log('.set_apicallback()');
	// TODO: verify that parameter is a function
	this.api_callback = fn;
};

/**
 * Set a callback function to be called after successful AJAX request.
 * Note: In this context, "success" means an HTTP 200 response from the Server with
 * a valid JSON return. Not necessarily that the AJAX request was successful in
 * performing its operations. The contents of the response are used to display an
 * error message if there were any errors in processing the API request.
 * @param {function} fn The function to use as a callback after receiving a successful response
 */
WPSiteSyncContent_Common.prototype.set_success_callback = function(fn)
{
	// TODO: verify that parameter is a function
	this.api_success_callback = fn;
};

/**
 * Set a callback function to be called after a failed AJAX request.
 * Note: In this context, "failure" is determined by the AJAX call and the .error
 * property passed to it. If the .error proerpty is called then the request failed.
 * @param {type} fn The function to use as a callback after receiving a failure response
 */
WPSiteSyncContent_Common.prototype.set_failure_callback = function(fn)
{
	// TODO: verify that parameter is a function
	this.api_failure_callback = fn;
};

// create the instance of the WPSiteSync Common class
wpsitesync_common = new WPSiteSyncContent_Common();

// initialize the WPSiteSync operation on page load
jQuery(document).ready(function()
{
	wpsitesync_common.init();
wpss_debug_out('initialization complete');
});
