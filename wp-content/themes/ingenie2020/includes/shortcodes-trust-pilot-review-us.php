<?php

/* 
    =================================
    Trust Pilot
    =================================
*/

// TP horizontal bar
function get_trust_pilot_review_us($atts)
{
    ob_start();
    get_template_part('./templates/partials/thirdparty/trustpilot', 'review-us');
    return ob_get_clean();
}
add_shortcode('trust-pilot-review-us', 'get_trust_pilot_review_us');
