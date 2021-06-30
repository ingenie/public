<?php

/* 
=================================
Change custom post titles if needed
=================================
*/
function change_quote_title($title, $post)
{
    if ('quotes' == $post->post_type) {
        $title = 'Who made quote?'; // The text you want to be shown
    }

    return $title;
}
add_filter('enter_title_here', 'change_quote_title', 10, 2);
