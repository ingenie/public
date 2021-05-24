<?php

/* 
    =================================
    Hero/Banner images
    =================================
*/

  // Hero
function get_hero($atts) {
    $defaultImage = 'ig-homepage-desktop.svg';
    $defaultImageMobile = 'ig-homepage-mobile.svg';
        extract( shortcode_atts( array(
        'src' => $defaultImage, // Default image if none passed in
        'mobilesrc' => $defaultImageMobile, // Default image if none passed in
        'alt' => 'Always put alt text here please', // Alt text for sure!
    ), $atts ) );

    ob_start();
    set_query_var( 'src', $src); // pass var to template
    set_query_var( 'mobilesrc', $mobilesrc); // pass var to template
    set_query_var( 'alt', $alt); // pass var to template
    get_template_part('./templates/partials/hero-banner/hero', 'banner');
    return ob_get_clean();
  }
  add_shortcode('get-hero', 'get_hero');
