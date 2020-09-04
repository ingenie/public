!YOUNG DRIVER GUIDE TEMPLATE!
<?php
/*
 * Template Name: Young Driver Guide Home Template
 * Template Post Type: page
 */

get_header('ydg'); ?>

<div class="sm:hidden relative">
    <!-- Featured latest YDG post -->
    <?php get_template_part( 'templates/partials/section', 'ydg-featured' ); ?>
</div>

<!-- YDG Latest posts / excluding first/featured -->
<?php get_template_part( 'templates/partials/section', 'ydg-latest' ); ?>

<!-- YDG ingenie blog posts -->
<?php get_template_part( 'templates/partials/section', 'ydg-blog' ); ?>

<!-- YDG Car insurance posts -->
<?php get_template_part( 'templates/partials/section', 'ydg-car-insurance' ); ?>

<!-- YDG Learning to drive posts -->
<?php get_template_part( 'templates/partials/section', 'ydg-learning-to-drive' ); ?>

<!-- YDG On the road posts -->
<?php get_template_part( 'templates/partials/section', 'ydg-on-the-road' ); ?>

<!-- YDG Tips and Support posts -->
<?php get_template_part( 'templates/partials/section', 'ydg-tips-support' ); ?>

<!-- YDG Lifestyle posts -->
<?php get_template_part( 'templates/partials/section', 'ydg-lifestyle' ); ?>


<!-- <?php previous_posts_link();?>
    <?php next_posts_link();?> -->



<?php get_footer(); ?>
