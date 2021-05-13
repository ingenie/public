<?php
/*
 * Template Name: Standard Page Template
 * Template Post Type: post, page, whatever
 */

get_header();

?>

<!-- <h1><?php the_title(); ?></h1> -->

<?php the_content(); ?>

<!-- no loop thanks -->
<!-- <?php get_template_part( 'templates/partials/section', 'content' ); ?> -->


<?php get_footer(); ?>
