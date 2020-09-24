<?php
$data = isset( $data ) ? $data : new stdClass();
$location = isset( $data->location ) ? $data->location : '';
$gridClasses = isset( $data->gridClasses ) ? $data->gridClasses : '';

?>

<!-- Loop adverrts for latest placement ad -->
<?php
        $args = array(
            'post_type' => 'adverts',
            'posts_per_page' => 1,
            "orderby"=>"date",
            "order"=>"DESC",
            'tax_query' => array(
                array (
                    'taxonomy' => 'placements',
                    'field' => 'slug',
                    'terms' => $location,
                    )   
                ),
            );
            
$featured_query = new WP_Query( $args );
if( $featured_query->have_posts() ): while( $featured_query->have_posts() ): $featured_query->the_post();?>
<div class="<?= $gridClasses ?>">

    <?php if(has_post_thumbnail()):?>
    <img class="object-cover object-center h-full w-full" src="<?php the_post_thumbnail_url('ingenie-ads');?>"
        alt="<?php the_title();?>">
    <?php endif;?>
</div>
<?php endwhile; else: endif;?>
<?php wp_reset_postdata(); ?>
