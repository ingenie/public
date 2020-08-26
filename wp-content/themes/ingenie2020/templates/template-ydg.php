<?php
/*
 * Template Name: Young Driver Guide
 * Template Post Type: post, page, whatever
 */

get_header('ydg');
?>

<p>This is the YDG templete with YDG header</p>

<div class="container">
    <?php get_template_part( 'templates/partials/section', 'blogydg' ); ?>
</div>

<?php
get_footer();
