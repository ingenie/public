<?php

/* 
    =================================
    Notifications
    =================================
*/

  // Custom banner notification
function get_message($atts) {
    extract( shortcode_atts( array(
        'color' => 'success',
        'message' => 'Hope you having a lovely day!',
        'link' => false,
    ), $atts ) );

    ob_start();
    set_query_var( 'color', $color); 
    set_query_var( 'message', $message); 
    set_query_var( 'link', $link); // pass var to template
    get_template_part('./templates/partials/notifications/message', 'banner');
    return ob_get_clean();
  }
  add_shortcode('get-message', 'get_message');
