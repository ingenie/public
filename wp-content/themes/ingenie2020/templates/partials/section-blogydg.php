<?php
/*
 * Loop through Categories and Display Posts within
 */
$post_type = 'post';
 
// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
 
foreach( $taxonomies as $taxonomy ) :
 
    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms( $taxonomy );
 
    foreach( $terms as $term ) : ?>

<?php
        $args = array(
                'post_type' => $post_type,
                'posts_per_page' => -1,  //show all posts
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term->slug,
                    )
                )
 
            );
        $posts = new WP_Query($args);
 
        if( $posts->have_posts() ): ?>

<?php echo $term->name; ?>

<?php while( $posts->have_posts() ) : $posts->the_post(); ?>

<?php if(has_post_thumbnail()) { ?>
<?php the_post_thumbnail('blog-small'); ?>
<?php }
                    /* no post image so show a default img */
                    else { ?>
<img src="<?php bloginfo('template_url'); ?>/assets/img/ingenie-logo.svg" alt="<?php echo get_the_title(); ?>"
    title="<?php echo get_the_title(); ?>" width="112" height="auto" />
<?php } ?>

<?php  echo get_the_title(); ?>

<?php the_excerpt(); ?>
<a href="<?php the_permalink();?>">Read more...</a>


<?php endwhile; endif; ?>

<?php endforeach;
 
endforeach; ?>
