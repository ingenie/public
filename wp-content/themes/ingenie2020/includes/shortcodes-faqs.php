<?php

/* 
    =================================
    FAQs sections
    =================================
*/

// FAQs - pass in secitons to display - defaults to black box
// TODO: Pass in a amount if needed
function get_faqs($atts)
{
    extract(shortcode_atts(array(
        'section' => 'black-box',
    ), $atts));

    ob_start();
    set_query_var('section', $section); // pass var to template
    get_template_part('./templates/partials/faqs/section-yd-faq', $section);
    return ob_get_clean();
}
add_shortcode('get-faqs', 'get_faqs');
