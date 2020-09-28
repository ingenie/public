<!-- 
=============================
YDG parents guide posts desktop only
============================= 
-->
<section id="slider">
    <div class="flexslider">
        <ul class="slides">
            <?php  $feat_args = array(
                    'post_type' => 'young-drivers-guides',
                    'posts_per_page' => 2,
                    'tax_query' => array(
                    array (
                        'taxonomy' => 'topics',
                        'field' => 'slug',
                        'terms' => 'parents-guide',
                    )
                ),
            );
            $featured_query = new WP_Query( $feat_args);
            if( $featured_query->have_posts() ): while( $featured_query->have_posts() ): $featured_query->the_post();?>
            <li class="slide">
                <div class="w-full">
                    <!-- Topic headings view -->
                    <?php
                    \ingenie2020Theme\View::render( 'YdgCatHeadingsView', [
                        'heading' => 'Parents Guide',
                        'termUrlPath' => ig_get_custom_terms_url( $post->ID, 'topics' ),
                        'text' => 'View more >',
                        'class' => 'w-auto',
                        'bgColor' => 'from-ydg-parents-guide-500 via-ydg-parents-guide-600 to-ydg-parents-guide-700',
                        'txtColor' => 'text-ydg-parents-guide-800 hover:text-ydg-parents-guide-600',
                        'hiddenSm' => '' // false show heading only hidden in some partials
                    ] ); ?>
                </div>
                <div class="grid grid-cols-2 gap-4">

                    <?php if(has_post_thumbnail()):?>
                    <!-- IE11 support if needed -->
                    <!-- <div class="h-64 bg-center bg-cover" style="background-image:url('<?php the_post_thumbnail_url('blog-small');?>');">
</div> -->
                    <div>
                        <img class="object-cover h-64" src="<?php the_post_thumbnail_url('blog-small');?>"
                            alt="<?php the_title();?>">
                    </div>
                    <?php endif;?>


                    <div class="relative p-3">
                        <h3 class="leading-tight pb-2"><?php the_title()?></h3>
                        <!-- Could do the same with non heiractical taxonomy for tags if needed -->
                        <span class="hidden md:inline-block">
                            <?php echo ig_get_custom_terms( $post->ID, 'topics' ) ?>
                        </span>

                        <!-- Add author info -->
                        <div class="bottom-0 hidden md:inline-block">
                            <?php get_template_part( 'templates/partials/section', 'ydg-author-info' ); ?>
                        </div>

                        <p class="pt-2 pr-6">
                            <?php
                                $excerpt = get_the_excerpt();
                                
                                $excerpt = substr($excerpt, 0, 100);
                                $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                echo "$result...";
                                ?>
                        </p>

                        <?php
                            $terms = get_the_terms($post->ID, 'topics');
                            $slug_out = array();
                            foreach($terms as $term){
                                $slug_out[] = $term->slug;
                            } ?>

                        <?php echo
        '<span class="text-ydg-'.implode(' ', $slug_out).'-500 right-0 pr-4 absolute bottom-0 pb-1">'; ?>
                        <a href="<?php the_permalink()?>">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        </span>



                    </div>

                </div>
            </li>

            <?php endwhile; endif;?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div>
</section>
