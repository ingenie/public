<?php get_header('ydg'); ?>
Ima 'Search YDG template'
<div class="container">

    <h1><?php echo single_cat_title();?></h1>

    <?php get_template_part( 'templates/partials/search/search-results', 'ydg' ); ?>

    <?php previous_posts_link();?>
    <?php next_posts_link();?>


</div>

<?php get_footer(); ?>
