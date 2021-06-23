<?php
/* 
    =================================
    Custom Taxonomies
    =================================
*/

function create_custom_hierarchical_taxonomy()
{

    // Add new taxonomy, make it hierarchical or like tags [false]

    $learnerFaqTaxlabels = array(
        'name' => _x('Sections', 'taxonomy general name'),
        'singular_name' => _x('Section', 'taxonomy singular name'),
        'search_items' =>  __('Search Sections'),
        'all_items' => __('All Sections'),
        'parent_item' => __('Parent Section'),
        'parent_item_colon' => __('Parent Section:'),
        'edit_item' => __('Edit Section'),
        'update_item' => __('Update Section'),
        'add_new_item' => __('Add New Section'),
        'new_item_name' => __('New Section Name'),
        'menu_name' => __('Sections'),
    );

    register_taxonomy('learner-sections', array('learner-faqs'), array(
        'hierarchical' => true,
        'labels' => $learnerFaqTaxlabels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'section'),
    ));

    $ydFaqTaxlabels = array(
        'name' => _x('Sections', 'taxonomy general name'),
        'singular_name' => _x('Section', 'taxonomy singular name'),
        'search_items' =>  __('Search Sections'),
        'all_items' => __('All Sections'),
        'parent_item' => __('Parent Section'),
        'parent_item_colon' => __('Parent Section:'),
        'edit_item' => __('Edit Section'),
        'update_item' => __('Update Section'),
        'add_new_item' => __('Add New Section'),
        'new_item_name' => __('New Section Name'),
        'menu_name' => __('Sections'),
    );

    register_taxonomy('yd-sections', array('yd-faqs'), array(
        'hierarchical' => true,
        'labels' => $ydFaqTaxlabels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'section'),
    ));

    $igAdsTaxlabels = array(
        'name' => _x('Locations', 'taxonomy general name'),
        'singular_name' => _x('Location', 'taxonomy singular name'),
        'search_items' =>  __('Search Locations'),
        'all_items' => __('All Locations'),
        'parent_item' => __('Parent Location'),
        'parent_item_colon' => __('Parent Location:'),
        'edit_item' => __('Edit Location'),
        'update_item' => __('Update Location'),
        'add_new_item' => __('Add New Location'),
        'new_item_name' => __('New Location Name'),
        'menu_name' => __('Locations'),
    );

    register_taxonomy('locations', array('advertise'), array(
        'hierarchical' => true,
        'labels' => $igAdsTaxlabels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'location'),
    ));



    $adsTaxlabels = array(
        'name' => _x('Placements', 'taxonomy general name'),
        'singular_name' => _x('Placement', 'taxonomy singular name'),
        'search_items' =>  __('Search Placements'),
        'all_items' => __('All Placements'),
        'parent_item' => __('Parent Placement'),
        'parent_item_colon' => __('Parent Placement:'),
        'edit_item' => __('Edit Placement'),
        'update_item' => __('Update Placement'),
        'add_new_item' => __('Add New Placement'),
        'new_item_name' => __('New Placement Name'),
        'menu_name' => __('Placements'),
    );

    register_taxonomy('placements', array('adverts'), array(
        'hierarchical' => true,
        'labels' => $adsTaxlabels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'placement'),
    ));

    $ydgTaxlabels = array(
        'name' => _x('Topics', 'taxonomy general name'),
        'singular_name' => _x('Topic', 'taxonomy singular name'),
        'search_items' =>  __('Search Topics'),
        'all_items' => __('All Topics'),
        'parent_item' => __('Parent Topic'),
        'parent_item_colon' => __('Parent Topic:'),
        'edit_item' => __('Edit Topic'),
        'update_item' => __('Update Topic'),
        'add_new_item' => __('Add New Topic'),
        'new_item_name' => __('New Topic Name'),
        'menu_name' => __('YDG Topics'),
    );

    register_taxonomy('topics', array('young-drivers-guides'), array(
        'hierarchical' => true,
        'labels' => $ydgTaxlabels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'young-drivers-guide/topics', 'with_front' => false),
    ));
}

//hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'create_custom_hierarchical_taxonomy', 0);
