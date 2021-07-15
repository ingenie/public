<?php

/* 
    =================================
    Trust Pilot
    =================================
*/

// TP footer mini
function get_trust_pilot_footer_mini($atts)
{
    ob_start();
    get_template_part('./templates/partials/thirdparty/trustpilot', 'footer-mini');
    return ob_get_clean();
}
add_shortcode('trust-pilot-footer-mini', 'get_trust_pilot_footer_mini');
