<?php
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
   
