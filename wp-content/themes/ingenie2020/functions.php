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
    Menus
    =================================
*/
register_nav_menus(
    array(

        'main-menu' => 'Main Menu Location',
        'ydg-menu' => 'Young Drivers Guide Menu Location',
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


/* 
    =================================
    Custom Image Sizes
    =================================
*/
add_image_size( 'blog-large', 750, 450, true);
add_image_size( 'blog-small', 400, 200, true);
add_image_size( 'ingenie-ads', 350, 350, true);


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


/* 
    =================================
    Custom Taxonomies
    =================================
*/

function create_custom_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical or like tags [false]
 
  $faqTaxlabels = array(
    'name' => _x( 'Sections', 'taxonomy general name' ),
    'singular_name' => _x( 'Section', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Sections' ),
    'all_items' => __( 'All Sections' ),
    'parent_item' => __( 'Parent Section' ),
    'parent_item_colon' => __( 'Parent Section:' ),
    'edit_item' => __( 'Edit Section' ), 
    'update_item' => __( 'Update Section' ),
    'add_new_item' => __( 'Add New Section' ),
    'new_item_name' => __( 'New Section Name' ),
    'menu_name' => __( 'FAQs Sections' ),
  );    
 
  register_taxonomy('sections', array('faqs'), array(
    'hierarchical' => true,
    'labels' => $faqTaxlabels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'section' ),
  ));

  $adsTaxlabels = array(
    'name' => _x( 'Placements', 'taxonomy general name' ),
    'singular_name' => _x( 'Placement', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Placements' ),
    'all_items' => __( 'All Placements' ),
    'parent_item' => __( 'Parent Placement' ),
    'parent_item_colon' => __( 'Parent Placement:' ),
    'edit_item' => __( 'Edit Placement' ), 
    'update_item' => __( 'Update Placement' ),
    'add_new_item' => __( 'Add New Placement' ),
    'new_item_name' => __( 'New Placement Name' ),
    'menu_name' => __( 'Ad Placements' ),
  );    
 
  register_taxonomy('placements', array('adverts'), array(
    'hierarchical' => true,
    'labels' => $adsTaxlabels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'placement' ),
  ));

  $ydgTaxlabels = array(
    'name' => _x( 'Topics', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Topics' ),
    'all_items' => __( 'All Topics' ),
    'parent_item' => __( 'Parent Topic' ),
    'parent_item_colon' => __( 'Parent Topic:' ),
    'edit_item' => __( 'Edit Topic' ), 
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'menu_name' => __( 'YDG Topics' ),
  );    
 
  register_taxonomy('topics', array('young-drivers-guides') , array(
    'hierarchical' => true,
    'labels' => $ydgTaxlabels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'young-drivers-guide/topics', 'with_front' => false),
  ));
 
}

//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_custom_hierarchical_taxonomy', 0 );

/* 
    =================================
    Custom Term Function
    =================================
*/

function ig_get_custom_terms( $postID, $term ) {

    $terms_list = wp_get_post_terms( $postID, $term);
    $output = '';

    $i = 0;
    foreach($terms_list as $term) { $i++;
        if( $i > 1 ){ $output .= ', '; }
        $output .= '<a class="bg-ydg-'. $term->slug .'-500 text-white uppercase font-bold text-sm md:text-xs p-1 px-2 mb-2" href="' . get_term_link( $term ) . '">' . $term->name . '</a>';
    }
    
    return $output;
                    
}

/* 
    =================================
    Custom Term Url Function
    =================================
*/

function ig_get_custom_terms_url( $postID, $term ) {

    $terms_list = wp_get_post_terms( $postID, $term);
    $output = '';

    $i = 0;
    foreach($terms_list as $term) { $i++;
        if( $i > 1 ){ $output .= ', '; }
        $output .= get_term_link( $term );
    }
    
    return $output;
                    
}

/* 
    =================================
    Hide Basic Posts to avoid confusion
    =================================
*/

function post_remove ()      //creating functions post_remove for removing menu item
{ 
   remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');   //adding action for triggering function call


/* 
    =================================
    Restrict searches 4 custom post type YDG
    =================================
*/

if (!is_admin()) {

 function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'young-drivers-guides' )   
  {
    return locate_template('templates/search-ydg-template.php');  //  redirect to archive-search.php
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser');  
    }
