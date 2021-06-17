<?php
/* 
    =================================
    Custom Post Types
    =================================
*/

function custom_post_type()
{

    $learnerFaqLabels = array(
        'name'                => _x('Learner - FAQs', 'Post Type General Name'),
        'singular_name'       => _x('Learner - FAQ', 'Post Type Singular Name'),
        'menu_name'           => __('Learner - FAQs'),
        'parent_item_colon'   => __('Parent FAQ'),
        'all_items'           => __('View all'),
        'view_item'           => __('View Learner - FAQ'),
        'add_new_item'        => __('Add New'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Learner - FAQ'),
        'update_item'         => __('Update Learner - FAQ'),
        'search_items'        => __('Search Learner - FAQ'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $learnerFaqArgs = array(
        'label'               => __('Learner - faqs'),
        'description'         => __('Learner - FAQs for ingenie Insurance'),
        'labels'              => $learnerFaqLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('learner-sections'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-megaphone',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    $ydFaqLabels = array(
        'name'                => _x('YD - FAQs', 'Post Type General Name'),
        'singular_name'       => _x('YD - FAQ', 'Post Type Singular Name'),
        'menu_name'           => __('YD - FAQs'),
        'parent_item_colon'   => __('Parent FAQ'),
        'all_items'           => __('View all'),
        'view_item'           => __('View YD - FAQ'),
        'add_new_item'        => __('Add New'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit YD - FAQ'),
        'update_item'         => __('Update YD - FAQ'),
        'search_items'        => __('Search YD - FAQ'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $ydFaqArgs = array(
        'label'               => __('YD - faqs'),
        'description'         => __('YD - FAQs for ingenie Insurance'),
        'labels'              => $ydFaqLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('yd-sections'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-megaphone',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    $quoteLabels = array(
        'name'                => _x('Quotes', 'Post Type General Name'),
        'singular_name'       => _x('Quote', 'Post Type Singular Name'),
        'menu_name'           => __('IG Quotes'),
        'parent_item_colon'   => __('Parent Quote'),
        'all_items'           => __('View all Quotes'),
        'view_item'           => __('View Quote'),
        'add_new_item'        => __('Add New Quote'),
        'add_new'             => __('Add New Quote'),
        'edit_item'           => __('Edit Quote'),
        'update_item'         => __('Update Quote'),
        'search_items'        => __('Search Quote'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $quoteArgs = array(
        'label'               => __('quotes'),
        'description'         => __('ingenie Insurance customer Quotes'),
        'labels'              => $quoteLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array(''),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-format-quote',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    $ydgAdsLabels = array(
        'name'                => _x('YDG Adverts', 'Post Type General Name'),
        'singular_name'       => _x('YDG Advert', 'Post Type Singular Name'),
        'menu_name'           => __('YDG Advert'),
        'parent_item_colon'   => __('Parent Advert'),
        'all_items'           => __('View all adverts'),
        'view_item'           => __('View advert'),
        'add_new_item'        => __('Add New advert'),
        'add_new'             => __('Add New advert'),
        'edit_item'           => __('Edit advert'),
        'update_item'         => __('Update advert'),
        'search_items'        => __('Search advert'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $ydgAdsArgs = array(
        'label'               => __('adverts'),
        'description'         => __('ingenie adverts for site'),
        'labels'              => $ydgAdsLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('placement'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-carrot',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    $ydgLabels = array(
        'name'                => _x('YDG Posts', 'Post Type General Name'),
        'singular_name'       => _x('YDG Post', 'Post Type Singular Name'),
        'menu_name'           => __('YDG Posts'),
        'parent_item_colon'   => __('Parent YDG Post'),
        'all_items'           => __('View all YDG Posts'),
        'view_item'           => __('View YDG Post'),
        'add_new_item'        => __('Add New YDG Post'),
        'add_new'             => __('Add New YDG Post'),
        'edit_item'           => __('Edit YDG Post'),
        'update_item'         => __('Update YDG Post'),
        'search_items'        => __('Search YDG Post'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $ydgArgs = array(
        'label'               => __('young-drivers-guides'),
        'description'         => __('YDG blog for ingenie Insurance'),
        'labels'              => $ydgLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('topics'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-book',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    register_post_type('young-drivers-guides', $ydgArgs);
    register_post_type('adverts', $ydgAdsArgs);
    register_post_type('yd-faqs', $ydFaqArgs);
    register_post_type('learner-faqs', $learnerFaqArgs);
    register_post_type('quotes', $quoteArgs);
}

add_action('init', 'custom_post_type', 0);
