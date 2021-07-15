<?php

/* 
    =================================
    Trust Pilot
    =================================
*/

// TP horizontal bar
function get_trust_pilot_bar($atts) {
    ob_start();
    get_template_part('./templates/partials/thirdparty/trustpilot', 'bar');
    return ob_get_clean();
  }
  add_shortcode('trust-pilot-bar', 'get_trust_pilot_bar');
