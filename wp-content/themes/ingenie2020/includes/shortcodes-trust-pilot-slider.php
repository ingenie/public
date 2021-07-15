<?php

/* 
    =================================
    Trust Pilot
    =================================
*/

// TP horizontal bar
function get_trust_pilot_slider($atts)
{
    ob_start();
    get_template_part('./templates/partials/thirdparty/trustpilot', 'slider');
    return ob_get_clean();
}
add_shortcode('trust-pilot-slider', 'get_trust_pilot_slider');
