<?php get_header(); ?>
Ima 'Archive faq'
<div class="container">



    <h1><?php echo single_cat_title();?></h1>

    <?php get_template_part( 'templates/partials/section', 'faq' ); ?>

    <?php previous_posts_link();?>
    <?php next_posts_link();?>


</div>

<?php get_footer(); ?>
