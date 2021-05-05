<?php

/* 
    =================================
    Sliders
    =================================
*/

// Customer Quotes Slider 
function get_quotes($atts) {
    extract( shortcode_atts( array(
        'number' => 3,
        ), $atts ) );

    ob_start();
    set_query_var( 'number', $number); // pass var to template
    get_template_part('./templates/partials/section', 'slider-quotes');
    return ob_get_clean();
  }
  add_shortcode('customer-quotes', 'get_quotes');
