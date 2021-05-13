<?php
/*
Plugin Name: ingenie Business Stats
Plugin URI: http://ingenie.com
Description: ingenie Business stats to change / keep all stats in check across environments. Can be used in all pages, posts, and templates.
Version: 1.0
Author: ingenie
Author URI: http://ingenie.com
*/

/*
// ------------------------
// USAGE

For use in landing pages/templates etc:
<?php echo do_shortcode("[learner_get_a_quote_url]"); ?>

For use in WYSIWYG Editor:
[learner_get_a_quote_url]

// ------------------------
*/

// ------------------------
//
// LEARNER DRIVER STATS
//
// ------------------------

if ( ! defined('ABSPATH')) {
echo 'What you after the stats for, dummy!';
die;
}

function learner_get_a_quote_url($atts) {
$learner_get_a_quote_url = "https://learner.ingenie.com/?Brand=DEFAULT&referrer=ingenie";
return $learner_get_a_quote_url;
}
function learner_quotes_start_from_txt($atts) {
$learner_quotes_start_from_txt = "£1.49";
return $learner_quotes_start_from_txt;
}
function learner_low_excess_txt($atts) {
$learner_low_excess_txt = "£250";
return $learner_low_excess_txt;
}
function learner_sp_dates_discount_txt($atts) {
$learner_sp_dates_discount_txt = "Average daily price based on all policies sold between July 2020 - Oct 2020.";
return $learner_sp_dates_discount_txt;
}
// ------------------------
//
// YOUNG DRIVER STATS
//
// ------------------------
function yd_get_a_quote_url($atts) {
$yd_get_a_quote_url = "https://myquote.ingenie.com/?Brand=DEFAULT&referrer=ingenie";
return $yd_get_a_quote_url;
}
function yd_up_front_txt($atts) {
$yd_up_front_txt = "£260";
return $yd_up_front_txt;
}
function yd_drive_safe_discount_txt($atts) {
$yd_drive_safe_discount_txt = "21%";
return $yd_drive_safe_discount_txt;
}
function yd_renewal_discount_txt($atts) {
$yd_renewal_discount_txt = "£401";
return $yd_renewal_discount_txt;
}
function yd_renewal_percentage_txt($atts) {
$yd_renewal_percentage_txt = "33%";
return $yd_renewal_percentage_txt;
}
function yd_frac_cus_discount_txt($atts) {
$yd_frac_cus_discount_txt = "7";
return $yd_frac_cus_discount_txt;
}
function yd_sp_dates_up_front_txt($atts) {
$yd_sp_dates_up_front_txt = "Aug 2020 - April 2021";
return $yd_sp_dates_up_front_txt;
}
function yd_sp_dates_renewals_txt($atts) {
$yd_sp_dates_renewals_txt = "Based on all ingenie renewals at end of first year, May 2020 - April 2021.";
return $yd_sp_dates_renewals_txt;
}
function yd_sp_premium_increases_txt($atts) {
$yd_sp_premium_increases_txt = "Premium increases could apply for poor driving.";
return $yd_sp_premium_increases_txt;
}


// ------------------------
//
// OBD STATS
//
// ------------------------
function obd_help_number($atts) {
$obd_help_number = "0333 2309 272";
return $obd_help_number;
}
function obd_trakm8_email($atts) {
$obd_trakm8_email = "telematics@trakm8.com";
return $obd_trakm8_email;
}

// ------------------------
//
// INGENIE CONTACT STATS
//
// ------------------------
function ig_main_number($atts) {
$ig_main_number = "<span class='MAIN-TEL'>0330 678 0652</span>";
return $ig_main_number;
}


// ------------------------
//
// Shortcodes
// Will make editiable from wordpress admin when have time
//
// ------------------------

add_shortcode('learner_get_a_quote_url', 'learner_get_a_quote_url');
add_shortcode('learner_quotes_start_from_txt', 'learner_quotes_start_from_txt');
add_shortcode('learner_low_excess_txt', 'learner_low_excess_txt');
add_shortcode('learner_sp_dates_discount_txt', 'learner_sp_dates_discount_txt');

add_shortcode('yd_up_front_txt', 'yd_up_front_txt');
add_shortcode('yd_drive_safe_discount_txt', 'yd_drive_safe_discount_txt');
add_shortcode('yd_renewal_discount_txt', 'yd_renewal_discount_txt');
add_shortcode('yd_renewal_percentage_txt', 'yd_renewal_percentage_txt');
add_shortcode('yd_frac_cus_discount_txt', 'yd_frac_cus_discount_txt');
add_shortcode('yd_get_a_quote_url', 'yd_get_a_quote_url');
add_shortcode('yd_sp_dates_up_front_txt', 'yd_sp_dates_up_front_txt');
add_shortcode('yd_sp_dates_renewals_txt', 'yd_sp_dates_renewals_txt');
add_shortcode('yd_sp_premium_increases_txt', 'yd_sp_premium_increases_txt');

add_shortcode('obd_help_number', 'obd_help_number');
add_shortcode('obd_trakm8_email', 'obd_trakm8_email');

add_shortcode('ig_main_number', 'ig_main_number');
