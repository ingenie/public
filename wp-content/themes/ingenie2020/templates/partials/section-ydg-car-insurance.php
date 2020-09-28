<!-- 
=============================
YDG Car insurance posts
============================= 
-->

<!-- Start flex -->
<div class="flex flex-wrap p-1 md:w-1/2 ig-break">

    <div class="w-full">
        <!-- Topic headings view -->
        <?php
		\ingenie2020Theme\View::render( 'YdgCatHeadingsView', [
			'heading' => 'Car Insurance',
            'text' => 'View more >',
            'class' => 'w-auto',
            'bgColor' => 'from-ydg-car-insurance-500 via-ydg-car-insurance-600 to-ydg-car-insurance-700',
            'txtColor' => 'text-ydg-car-insurance-800 hover:text-ydg-car-insurance-600',
            'hiddenSm' => '' // false show heading only hidden in some partials
		] ); ?>
    </div>

    <!-- Start actual grid -->
    <div class="w-full grid px-0 md:grid-rows-1 md:grid-cols-2 md:gap-2">

        <!-- Loop car insurance -->
        <?php
        $args = array(
            'post_type' => 'young-drivers-guides',
            'posts_per_page' => 2,
            "orderby"=>"date",
            "order"=>"DESC",
            'tax_query' => array(
                array (
                    'taxonomy' => 'topics',
                    'field' => 'slug',
                    'terms' => 'car-insurance',
                )
            ),
        );
        $featured_query = new WP_Query( $args );
        if( $featured_query->have_posts() ): while( $featured_query->have_posts() ): $featured_query->the_post();?>

        <div class="md:pb-6 relative mb-5 md:mb-0 justify-center text-center md:row-span-1 md:col-span-1 bg-gray-200">

            <!-- md:flex-col md:h-full -->
            <div class="flex md:flex-wrap md:mb-0">
                <div class="flex-none w-32 md:w-full">
                    <?php if(has_post_thumbnail()):?>
                    <img class="object-cover object-center w-32 h-32 md:w-full md:h-32"
                        src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">
                    <?php endif;?>
                </div>
                <div class="flex-auto p-2 pl-4 text-left bg-gray-200 md:pl-2">
                    <h3 class="md:h-10 mb-2 text-sm font-bold leading-tight text-gray-900 uppercase md:text-xs">
                        <?php 
                        echo wp_trim_words( get_the_title(), 6, '...' );
                    ?>
                    </h3>

                    <p class="block pr-3 text-sm leading-snug md:hidden">
                        <?php
                        $excerpt = get_the_excerpt();
                        
                        $excerpt = substr($excerpt, 0, 75);
                        $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                        echo "$result..";
                        ?>
                    </p>

                    <!-- Could do the same with non heiractical taxonomy for tags if needed -->
                    <span class="hidden md:block">
                        <?php echo ig_get_custom_terms( $post->ID, 'topics' ) ?>
                    </span>

                    <!-- Add author info -->
                    <div class="absolute bottom-0 hidden md:inline-block">
                        <?php get_template_part( 'templates/partials/section', 'ydg-author-info' ); ?>
                    </div>

                    <?php
                $terms = get_the_terms($post->ID, 'topics');
                $slug_out = array();
                foreach($terms as $term){
                    $slug_out[] = $term->slug;
                } ?>

                    <?php echo
                '<span class="text-ydg-'.implode(' ', $slug_out).'-500 right-0 bottom-0 pb-1 pr-1 absolute">'; ?>
                    <a href="<?php the_permalink()?>">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    </span>
                </div>
            </div>

        </div>
        <?php endwhile; else: endif;?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
