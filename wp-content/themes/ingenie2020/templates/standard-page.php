<?php
/*
 * Template Name: Standard Page Template
 * Template Post Type: post, page, whatever
 */

get_header();

?>

<div class="container mx-auto">

    <!-- <h1><?php the_title(); ?></h1> -->
    <div>
        <?php the_content(); ?>
    </div>
    <!-- <?php get_template_part( 'templates/partials/section', 'content' ); ?> -->

</div>

<?php get_footer(); ?>