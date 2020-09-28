!YOUNG DRIVER GUIDE TEMPLATE!
<?php
/*
 * Template Name: Young Driver Guide Home Template
 * Template Post Type: page
 */

get_header('ydg'); ?>

<div class="lg:container lg:mx-auto">

    <div class="relative sm:hidden">
        <!-- Featured latest YDG post NOTE: outside grid only on mobile -->
        <?php get_template_part( 'templates/partials/section', 'ydg-featured' ); ?>
    </div>

    <!-- Latest YDG posts NOTE: includes featured inside the grid -->
    <?php get_template_part( 'templates/partials/section', 'ydg-latest' ); ?>

    <div class="hidden md:inline-block">
        <!-- YDG Parent guide posts NOTE: Not currently on mobile? -->
        <?php get_template_part( 'templates/partials/section', 'ydg-parents-guide' ); ?>
    </div>

    <div class="flex flex-wrap pb-3 mb-3">

        <!-- YDG Car insurance posts -->
        <?php get_template_part( 'templates/partials/section', 'ydg-car-insurance' ); ?>

        <!-- YDG Learning to drive posts -->
        <?php get_template_part( 'templates/partials/section', 'ydg-learning-to-drive' ); ?>

        <!-- YDG On the road posts -->
        <?php get_template_part( 'templates/partials/section', 'ydg-on-the-road' ); ?>

        <!-- YDG Tips and Support posts -->
        <?php get_template_part( 'templates/partials/section', 'ydg-tips-support' ); ?>

        <!-- YDG ingenie blog posts -->
        <?php get_template_part( 'templates/partials/section', 'ydg-blog' ); ?>

        <!-- YDG Lifestyle posts -->
        <?php get_template_part( 'templates/partials/section', 'ydg-lifestyle' ); ?>

    </div>

    <!-- <?php previous_posts_link();?>
    <?php next_posts_link();?> -->

</div>



<?php get_footer('ydg'); ?>
