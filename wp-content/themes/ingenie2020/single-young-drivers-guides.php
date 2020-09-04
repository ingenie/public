Ima 'Single young driver guide'
<?php get_header('ydg'); ?>

<?php if( have_posts() ): while( have_posts() ): the_post();?>

<div class="container">

    <?php the_terms( $post->ID, 'topics', 'Topics: ', ', ', ' ' ); ?>

    <?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>">
    <?php endif;?>

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>
</div>

<?php endwhile; else: endif;?>

<?php get_footer(); ?>
