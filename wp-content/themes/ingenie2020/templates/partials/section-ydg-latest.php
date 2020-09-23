<!-- 
=============================
YDG Latest posts 3/4??
============================= 
-->

<div class="ig-break mb-3 pb-3">

    <!-- Latest bar show on md up -->
    <div class="hidden py-0 mx-1 md:block">
        <div class="flex flex-wrap pt-3 pb-0">
            <div class="flex-auto sm:flex-1">
                <div class="flex pb-0">
                    <div class="w-40">
                        <h2
                            class="inline-block w-full px-4 py-1 text-base font-bold text-white uppercase bg-gradient-to-r from-ydg-blue-600 via-ydg-blue-700 to-ydg-blue-800">
                            Latest
                        </h2>
                    </div>
                    <div class="flex-auto self-center text-right">
                        <a class="pr-2 text-xs underline text-ydg-blue-800 hover:text-ydg-blue-600"
                            href="<?php echo get_post_type_archive_link( 'young-drivers-guides' ); ?>">View more ></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Start main grid -->
    <div class="grid px-1 md:grid-rows-4 md:grid-cols-8 md:gap-2">

        <!-- Featured latest YDG post -->
        <div class="md:row-span-4 md:col-start-1 md:col-end-5">
            <div class="hidden sm:block">

                <?php get_template_part( 'templates/partials/section', 'ydg-featured' ); ?>
            </div>
        </div>

        <!-- Topic headings view -->
        <?php
		\ingenie2020Theme\View::render( 'YdgCatHeadingsView', [
			'heading' => 'Latest',
            'text' => 'View more >',
            'class' => 'w-auto min-w-1/4',
            'bgColor' => 'from-ydg-blue-500 via-ydg-blue-600 to-ydg-blue-700',
            'txtColor' => 'text-ydg-blue-800 hover:text-ydg-blue-600',
            'hiddenSm' => 'sm:hidden'
		] ); ?>

        <!-- Loop latest post minus featured -->
        <?php
        $args = array(
            'post_type' => 'young-drivers-guides',
            'offset' => 1,
            'posts_per_page' => 3,
            "orderby"=>"date",
            "order"=>"DESC"
        );
        $featured_query = new WP_Query( $args );
        if( $featured_query->have_posts() ): while( $featured_query->have_posts() ): $featured_query->the_post();?>

        <div class="pb-6 relative mb-5 md:mb-0 justify-center text-center md:row-span-2 md:col-span-2 bg-gray-200">

            <!-- md:flex-col md:h-full -->
            <div class="flex md:flex-wrap md:mb-0">
                <div class="flex-none w-32 md:w-full">
                    <?php if(has_post_thumbnail()):?>
                    <img class="object-cover object-center w-32 h-32 md:w-full md:h-32"
                        src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">
                    <?php endif;?>
                </div>
                <div class="flex-auto p-2 pl-4 text-left bg-gray-200 md:pl-2">
                    <h3 class="mb-2 text-sm font-bold text-gray-900 uppercase md:text-xs"><?php the_title()?></h3>

                    <!-- Could do the same with non heiractical taxonomy for tags if needed -->
                    <?php echo ig_get_custom_terms( $post->ID, 'topics' ) ?>

                    <!-- Add author info -->
                    <div class="absolute bottom-0">
                        <?php get_template_part( 'templates/partials/section', 'ydg-author-info' ); ?>
                    </div>

                    <!-- <p><?php the_excerpt()?></p> -->

                    <?php
                $terms = get_the_terms($post->ID, 'topics');
                $slug_out = array();
                foreach($terms as $term){
                    $slug_out[] = $term->slug;
                } ?>

                    <?php echo
                '<span class="text-ydg-'.implode(' ', $slug_out).'-500 right-0 bottom-0 pb-1 pr-2 absolute">'; ?>
                    <a href="<?php the_permalink()?>">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
                    'terms' => 'latest',
                )
            ),
        );
        $featured_query = new WP_Query( $args );
        if( $featured_query->have_posts() ): while( $featured_query->have_posts() ): $featured_query->the_post();?>

        <div class="relative mb-5 md:mb-0 justify-center text-center md:row-span-2 md:col-span-2 bg-gray-200">

            <!-- md:flex-col md:h-full -->
            <div class="flex md:flex-wrap md:mb-0">
                <div class="flex-none w-32 md:w-full">
                    <?php if(has_post_thumbnail()):?>
                    <img class="object-cover object-center w-32 h-32 md:w-full md:h-32"
                        src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>">
                    <?php endif;?>
                </div>
                <div class="flex-auto p-2 pl-4 text-left bg-gray-200 md:pl-2">
                    <h3 class="mb-2 text-sm font-bold text-gray-900 uppercase md:text-xs"><?php the_title()?></h3>

                    <p><?php the_excerpt()?></p>

                </div>
            </div>

        </div>
        <?php endwhile; else: endif;?>
        <?php wp_reset_postdata(); ?>
    </div>

</div>
