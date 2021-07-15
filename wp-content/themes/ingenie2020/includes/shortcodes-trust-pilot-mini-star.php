<?php

/* 
    =================================
    Trust Pilot
    =================================
*/

// TP mini star
function get_trust_pilot_mini_star($atts)
{
    ob_start();
    get_template_part('./templates/partials/thirdparty/trustpilot', 'mini-star');
    return ob_get_clean();
}
add_shortcode('trust-pilot-mini-star', 'get_trust_pilot_mini_star');
