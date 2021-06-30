<?php get_header(); ?>

<h1 class="heading-1 text-center">Press releases</h1>

<div class="container mx-auto">

    <div class="text-xs sm:text-sm p-4"><?php
                                        if (function_exists('yoast_breadcrumb')) {
                                            yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                                        }
                                        ?></div>

    <div class="flex flex-wrap justify-center">

        <?php
        $args = array(
            'post_type' => 'press-release',
            // 'posts_per_page' => 6,
            // "orderby"=>"date",
            // "order"=>"DESC",
            // 'tax_query' => array(
            //     array(
            //         'taxonomy' => 'yd-sections',
            //         'field' => 'slug',
            //         'terms' => 'coronavirus-covid-19',
            //     )
            // ),
        );
        $featured_query = new WP_Query($args);
        if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>


        <div class="flex-auto sm:w-1/2 lg:w-1/3">
            <div class="standard-card p-0 relative">

                <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink() ?>"><img class="object-cover object-center w-full h-32 md:w-full md:h-32"
                        src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>">
                    <?php endif; ?></a>

                <div class="p-4 pt-1">
                    <div class="h-12">
                        <h4 class="heading-4 my-2 min-h-full p-0"><?php the_title(); ?></h4>
                    </div>

                    <p class="block  leading-snug text-sm pr-3">
                        <?php
                                    $excerpt = get_the_excerpt();

                                    $excerpt = substr($excerpt, 0, 120);
                                    $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                    echo "$result..";
                                    ?>
                    </p>
                    <p class="p-2 sm:px-0 text-xs">
                        <span
                            class="mt-2 text-xs font-thin uppercase text-ig-orange-500"><?php the_date('F j, Y'); ?></span>
                    </p>
                    <span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
                        <a href="<?php the_permalink() ?>">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <?php endwhile;
        else : endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>

</div>

<?php get_footer(); ?>
