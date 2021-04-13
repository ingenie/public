<?php
/* 
    =================================
    Custom Post Types
    =================================
*/
 
function custom_post_type() {

    $faqLabels = array(
        'name'                => _x( 'FAQs', 'Post Type General Name'),
        'singular_name'       => _x( 'FAQ', 'Post Type Singular Name'),
        'menu_name'           => __( 'FAQs'),
        'parent_item_colon'   => __( 'Parent FAQ'),
        'all_items'           => __( 'View all FAQs'),
        'view_item'           => __( 'View FAQ'),
        'add_new_item'        => __( 'Add New FAQ'),
        'add_new'             => __( 'Add New FAQ'),
        'edit_item'           => __( 'Edit FAQ'),
        'update_item'         => __( 'Update FAQ'),
        'search_items'        => __( 'Search FAQ'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash'),
    );
        
    $faqArgs = array(
        'label'               => __( 'faqs'),
        'description'         => __( 'FAQs for ingenie Insurance'),
        'labels'              => $faqLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'sections' ),
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

    $adsLabels = array(
        'name'                => _x( 'Ingenie Adverts', 'Post Type General Name'),
        'singular_name'       => _x( 'Ingenie Advert', 'Post Type Singular Name'),
        'menu_name'           => __( 'IG Advert'),
        'parent_item_colon'   => __( 'Parent Advert'),
        'all_items'           => __( 'View all adverts'),
        'view_item'           => __( 'View advert'),
        'add_new_item'        => __( 'Add New advert'),
        'add_new'             => __( 'Add New advert'),
        'edit_item'           => __( 'Edit advert'),
        'update_item'         => __( 'Update advert'),
        'search_items'        => __( 'Search advert'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash'),
    );

    $adsArgs = array(
        'label'               => __( 'adverts'),
        'description'         => __( 'ingenie adverts for site'),
        'labels'              => $adsLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'placement' ),
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
        'name'                => _x( 'YDG Posts', 'Post Type General Name'),
        'singular_name'       => _x( 'YDG Post', 'Post Type Singular Name'),
        'menu_name'           => __( 'YDG Posts'),
        'parent_item_colon'   => __( 'Parent YDG Post'),
        'all_items'           => __( 'View all YDG Posts'),
        'view_item'           => __( 'View YDG Post'),
        'add_new_item'        => __( 'Add New YDG Post'),
        'add_new'             => __( 'Add New YDG Post'),
        'edit_item'           => __( 'Edit YDG Post'),
        'update_item'         => __( 'Update YDG Post'),
        'search_items'        => __( 'Search YDG Post'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash'),
    );

    $ydgArgs = array(
        'label'               => __( 'young-drivers-guides'),
        'description'         => __( 'YDG blog for ingenie Insurance'),
        'labels'              => $ydgLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'topics' ),
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
        
    register_post_type( 'young-drivers-guides', $ydgArgs );
    register_post_type( 'adverts', $adsArgs );
    register_post_type( 'faqs', $faqArgs );

}
    
add_action( 'init', 'custom_post_type', 0 );
