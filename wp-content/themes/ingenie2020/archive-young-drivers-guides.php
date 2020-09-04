<?php 

get_header('ydg'); ?>

<div class="">
    YDG Archive
    <h1><?php echo single_cat_title();?></h1>

    <?php get_template_part( 'templates/partials/section', 'archive' ); ?>

    <?php previous_posts_link();?>
    <?php next_posts_link();?>

</div>

<?php get_footer(); ?>
