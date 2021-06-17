<?php

use ingenie2020Theme\AutoLoader;
use ingenie2020Theme\View;

/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */
require get_stylesheet_directory() . '/app/AutoLoader.php';
$loader = new AutoLoader();
$loader->register();
$loader->addNamespace( 'ingenie2020Theme', get_stylesheet_directory() . '/app' );

View::$view_dir = get_stylesheet_directory() . '/templates/views';

/* 
=================================
Load Javascript and Styles
=================================
*/
require get_stylesheet_directory() . '/includes/scripts-and-styles.php';

/* 
=================================
Theme Options
=================================
*/
add_theme_support('menus');
add_theme_support('post-thumbnails');

/* 
=================================
Custom Image Sizes
=================================
*/
add_image_size( 'blog-large', 750, 450, true);
add_image_size( 'blog-small', 400, 200, true);
add_image_size( 'ingenie-ads', 350, 350, true);
add_image_size( 'quote_thumbnails', 120, 120, true);


require_once( __DIR__ . '/includes/register-and-add-classes-on-nav-menu.php');
require_once( __DIR__ . '/includes/custom-post-types.php');
require_once( __DIR__ . '/includes/custom-post-restrict-search.php');
require_once( __DIR__ . '/includes/custom-taxonomies.php');
require_once( __DIR__ . '/includes/custom-term-functions.php');
require_once( __DIR__ . '/includes/custom-post-titles.php');
require_once( __DIR__ . '/includes/shortcodes-sliders.php');
require_once( __DIR__ . '/includes/shortcodes-quote-button.php');
require_once( __DIR__ . '/includes/shortcodes-notifications.php');
require_once( __DIR__ . '/includes/shortcodes-hero-img.php');
require_once( __DIR__ . '/includes/shortcodes-trust-pilot.php');

/* 
=================================
Hide Basic Posts to avoid confusion
=================================
*/

remove_filter('the_content', 'wpautop');

// function post_remove ()      //creating functions post_remove for removing menu item
// { 
//    remove_menu_page('edit.php');
// }

// add_action('admin_menu', 'post_remove');   //adding action for triggering function call
