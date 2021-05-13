<!-- 
=============================
Customer quotes slider
============================= 
-->
<section id="slider-quotes" class="mx-8">
    <div class="flexslider relative bg-transparent border-0">
        <ul class="slides">

            <?php   
            $feat_args = array(
                    'post_type' => 'quotes',
                    'posts_per_page' => $number,
                //     'tax_query' => array(
                //     array (
                //         // 'taxonomy' => 'quotes',
                //         // 'field' => 'slug',
                //         // 'terms' => 'parents-guide',
                //     )
                // ),
            );
            $featured_query = new WP_Query( $feat_args);
            if( $featured_query->have_posts() ): while( $featured_query->have_posts() ): $featured_query->the_post();?>
            <li class="slide">
                <div class="grid grid-cols-1 gap-1 mx-3 bg-white">

                    <?php if(has_post_thumbnail()):?>
                    <!-- IE11 support if needed -->
                    <!-- <div class="h-64 bg-center bg-cover" style="background-image:url('<?php the_post_thumbnail_url('quote_thumbnails');?>');">
</div> -->
                    <div class="h-24 w-24 mx-auto my-2">
                        <img class="object-cover" src="<?php the_post_thumbnail_url('quote_thumbnails');?>"
                            alt="<?php the_title();?>" width="100" height="100">
                    </div>
                    <?php endif;?>

                    <div class="py-3 px-4 mx-4 text-center text-sm">
                        <?php the_content()?>
                        <h4 class="heading-4"><?php the_title()?></h4>
                    </div>

                </div>
            </li>


            <?php endwhile; endif;?>
            <?php wp_reset_postdata(); ?>

        </ul>
    </div>
</section>
