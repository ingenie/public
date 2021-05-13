<?php

/* 
    =================================
    Quote Buttons
    =================================
*/

// Journey yd quote button
function get_yd_quote_button($atts) {
    extract( shortcode_atts( array(
        'text' => 'Get a young driver quote',
        'size' => '',
        'type' => 'primary',
        ), $atts ) );

    ob_start();
    set_query_var( 'text', $text); // pass var to template
    set_query_var( 'size', $size); // pass var to template
    set_query_var( 'type', $type); // pass var to template
    get_template_part('./templates/partials/section', 'yd-quote-button');
    return ob_get_clean();
  }
  add_shortcode('yd-quote-button', 'get_yd_quote_button');


  // Journey learner quote button
  function get_learner_quote_button($atts) {
    extract( shortcode_atts( array(
        'text' => 'Get a learner quote',
        'size' => '',
        'type' => 'primary',
        ), $atts ) );

    ob_start();
    set_query_var( 'text', $text); // pass var to template
    set_query_var( 'size', $size); // pass var to template
    set_query_var( 'type', $type); // pass var to template
    get_template_part('./templates/partials/section', 'learner-quote-button');
    return ob_get_clean();
  }
  add_shortcode('learner-quote-button', 'get_learner_quote_button');
