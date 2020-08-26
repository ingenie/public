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

// Load Javascript and Styles
require get_stylesheet_directory() . '/includes/scripts-and-styles.php';

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Menus
register_nav_menus(
    array(

        'main-menu' => 'Main Menu Location',
        'side-menu' => 'Side Menu Location',
    )
);

// Adding classes to the menu to use tailwind
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Custom image sizes
add_image_size( 'blog-large', 800, 400, true);
add_image_size( 'blog-small', 300, 200, true);


// Custom post type
