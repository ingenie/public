<!-- 
=============================
YDG Lifestyle posts
============================= 
-->
<h1 class="text-teal-500">Specific topic - Lifestyle</h1>
<?php 
$feat_args = array(
    'post_type' => 'young-drivers-guides',
    'posts_per_page' => 3,
    'tax_query' => array(
        array (
            'taxonomy' => 'topics',
            'field' => 'slug',
            'terms' => 'lifestyle',
        )
    ),
);

    $featured_query = new WP_Query( $feat_args);
    if( $featured_query->have_posts() ): while( $featured_query->have_posts() ): $featured_query->the_post();
    // while ( $featured_query->have_posts() ) : $featured_query->the_post();

    if(has_post_thumbnail()):?>
<img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">
<?php endif;?>

<h3 class="text-ig-orange-500"><?php the_title()?></h3>
<?php the_terms( $post->ID, 'topics', '', ', ', ' ' ); ?>
<p><?php the_excerpt()?></p>
<a href="<?php the_permalink()?>">Read more...</a>

<?php endwhile; else: endif;?>

<!-- /* Restore original Post Data
* NB: Because we are using new WP_Query we aren't stomping on the
* original $wp_query and it does not need to be reset.
*/ -->
<?php wp_reset_postdata(); ?>
