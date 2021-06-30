<!-- 
=============================
Press release card
============================= 
-->
<div class="flex flex-wrap justify-center">

    <?php
    $args = array(
        'post_type' => 'press-release',
        'posts_per_page' => 3,
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

    <?php endwhile;
    else : endif; ?>
    <?php wp_reset_postdata(); ?>

</div>

<div class="pb-2 px-4 pt-0 text-right">
    <a class="primary-link-xs inline-flex" href="/press-release">
        View more
        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg></a>
</div>
