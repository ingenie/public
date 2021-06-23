<?php

/* 
    =================================
    Menus
    =================================
*/
register_nav_menus(
    array(

        'main-menu' => 'Main Menu Location',
        'main-yd-menu' => 'Main YD Menu Location',
        'main-learner-menu' => 'Main learner Menu Location',
        'burger-menu' => 'Mobile Menu Location',
        'ydg-menu' => 'Young Drivers Guide Menu Location',
        'side-menu' => 'Side Menu Location',
    )
);


// Adding classes to the menu to use tailwind
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
