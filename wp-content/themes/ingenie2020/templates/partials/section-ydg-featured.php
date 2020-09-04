<!-- 
=============================
YDG featured latest post
============================= 
-->


<?php
$feat_args = array(
    'post_type' => 'young-drivers-guides',
	'posts_per_page' => 1,
);

    $featured_query = new WP_Query( $feat_args);
    if( $featured_query->have_posts() ): while( $featured_query->have_posts() ): $featured_query->the_post();

    if(has_post_thumbnail()):?>
<!-- IE11 support if needed -->
<!-- <div class="h-64 bg-center bg-cover" style="background-image:url('<?php the_post_thumbnail_url('blog-medium');?>');">
</div> -->
<img class="object-cover w-full h-64" src="<?php the_post_thumbnail_url('blog-medium');?>" alt="<?php the_title();?>">
<?php endif;?>

<?php
$terms = get_the_terms($post->ID, 'topics');
$slug_out = array();
foreach($terms as $term){
    $slug_out[] = $term->slug;
}
//add class and path from taxonomy -->
echo '<div class="h-12 bg-left bg-cover md:h-18 '.implode(' ', $slug_out).'"  style="background-image:url('.get_template_directory_uri().'/assets/img/ydg/shapes/'.implode(' ', $slug_out).'.svg)">';
?>

<h3 class="p-2 pl-4 font-bold text-white uppercase"><?php the_terms( $post->ID, 'topics', '', ', ', ' ' ); ?>
</h3>

</div>

<div class="relative p-3 pb-7 mb-3 text-gray-900">
    <h2><?php the_title()?></h2>

    <!-- Add author info -->
    <?php get_template_part( 'templates/partials/section', 'ydg-author-info' ); ?>

    <?php echo
        '<span class="text-ydg-'.implode(' ', $slug_out).'-500 right-0 pr-4 absolute bottom-0 pb-1">'; ?>
    <a href="<?php the_permalink()?>">
        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
    </a>
    </span>

    <p class="pr-6">
        <?php
        $excerpt = get_the_excerpt();
        
        $excerpt = substr($excerpt, 0, 150);
        $result = substr($excerpt, 0, strrpos($excerpt, ' '));
        echo "$result...";
        ?>
    </p>
</div>

<?php endwhile; else: endif;?>

<!-- /* Restore original Post Data
* NB: Because we are using new WP_Query we aren't stomping on the
* original $wp_query and it does not need to be reset.
*/ -->
<?php wp_reset_postdata(); ?>
