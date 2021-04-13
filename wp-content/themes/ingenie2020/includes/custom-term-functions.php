<?php

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
