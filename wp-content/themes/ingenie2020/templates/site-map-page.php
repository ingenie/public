<?php
/*
 * Template Name: Site Map Template
 * Template Post Type: post, page, whatever
 */

get_header(); ?>

<div class="sitemap">

    <h1 class="heading-1 text-center">Site map</h1>

    <!-- <div class="container text-sm mt-0 mb-4 p-2 mx-auto">
    <p class="py-1 text-center ">
        To contact our PR department please email us at <a href="mailto:press@ingenie.com"
            class="primary-link text-sm">press@ingenie.com</a>.
    </p>
</div> -->

    <!-- WordPress Posts Loop -->

    <!-- <div class="sitemap-posts">

        <h3 class="subtitle">Posts</h3>

        <ul class="standard-list">

            <?php
            $wpposts = new WP_Query(
                array(
                    'post_type' => 'post', // slug of posts
                    'posts_per_page' => -1, // -1 shows all posts
                    'post_status' => 'publish', // only shows published posts
                    'orderby' => 'title', // orders by post title
                    'order' => 'ASC' // orders post title alphabetically
                )
            );
            ?>

            <?php while ($wpposts->have_posts()) : $wpposts->the_post(); ?>

            <li>
                <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>" class="primary-link text-xs">
                    <?php the_title(); ?>
                </a>
            </li>

            <?php endwhile;
            wp_reset_query(); ?>

        </ul>

    </div> -->

    <div class="container mx-auto mt-6 mb-12">
        <div class="flex flex-wrap">

            <div class="sitemap-young-driver w-1/3">

                <h3 class="heading-3">Young Driver Insurance</h3>

                <ul class="standard-list">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'young-driver-insurance',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>


                    <li>
                        <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>"
                            class="primary-link text-xs">
                            <?php
                                $removeYD = array(
                                    'YD' => '',
                                );
                                echo str_replace(array_keys($removeYD), $removeYD, get_the_title());
                                ?>
                        </a>
                    </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>
            <div class="sitemap-learner-driver w-1/3">

                <h3 class="heading-3">Learner Driver Insurance</h3>

                <ul class="standard-list">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'learner-driver-insurance',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>

                    <li>
                        <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>"
                            class="primary-link text-xs">
                            <?php
                                $removeLD = array(
                                    'LD' => '',
                                );
                                echo str_replace(array_keys($removeLD), $removeLD, get_the_title());
                                ?>
                        </a>
                    </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>

            <div class="sitemap-utilities w-1/3">

                <h3 class="heading-3">Utility Pages</h3>

                <ul class="standard-list">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'page', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC', // orders cpt posts title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'utilities',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>

                    <li>
                        <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>"
                            class="primary-link text-xs">
                            <?php the_title(); ?>
                        </a>
                    </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>

            <div class="sitemap-pages w-1/2">

                <h3 class="heading-3">Home Pages</h3>

                <ul class="standard-list">

                    <?php
                    $wppages = new WP_Query(
                        array(
                            'post_type' => 'page', // slug of pages
                            'posts_per_page' => -1, // -1 shows all pages
                            'post_status' => 'publish', // only shows published pages
                            'orderby' => 'title', // orders by page title
                            'order' => 'ASC', // orders page title alphabetically
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'home-pages',
                                )
                            ),
                        )
                    );
                    ?>

                    <?php while ($wppages->have_posts()) : $wppages->the_post(); ?>

                    <li>
                        <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>"
                            class="primary-link text-xs">
                            <?php the_title(); ?>
                        </a>
                    </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>

            <div class="sitemap-press-releases w-1/2">

                <h3 class="heading-3">Press releases</h3>

                <ul class="standard-list">

                    <?php
                    $wpcpt = new WP_Query(
                        array(
                            'post_type' => 'press-release', // Change this to the slug of your Custom Post Type (cpt)
                            'posts_per_page' => -1, // -1 shows all cpt posts
                            'post_status' => 'publish', // only shows published cpt pages
                            'orderby' => 'title', // orders by cpt post title
                            'order' => 'ASC' // orders cpt posts title alphabetically
                        )
                    );
                    ?>

                    <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>

                    <li>
                        <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>"
                            class="primary-link text-xs">
                            <?php the_title(); ?>
                        </a>
                    </li>

                    <?php endwhile;
                    wp_reset_query(); ?>

                </ul>

            </div>


        </div>
    </div>







</div><!-- sitemap -->


<?php get_footer(); ?>
