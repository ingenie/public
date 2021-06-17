<!-- 
=============================
Learner - faqs - learner app
============================= 
-->
<ul class="learner-app">
    <h3 class="heading-3 mb-1 ml-0 border-l-4 pl-2 border-ig-orange-500">Learner App</h3>

    <?php
    $args = array(
        'post_type' => 'learner-faqs',
        // 'posts_per_page' => 10,
        // "orderby"=>"date",
        // "order"=>"DESC",
        'tax_query' => array(
            array(
                'taxonomy' => 'learner-sections',
                'field' => 'slug',
                'terms' => 'learner-app',
            )
        ),
    );
    $featured_query = new WP_Query($args);
    if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>

    <li class="list-items flex-auto w-full">
        <span class="accordian flex heading-4 border-b p-2 mx-0">
            <h4 class="flex-auto heading-4 pr-4 py-3">
                <?php the_title(); ?>
            </h4>
            <span class="flex-none pointer m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 align-baseline" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </span>
        <div class="accordian-pane flex-wrap  p-3 pt-2 text-xs">
            <?php the_content(); ?>
        </div>
    </li>

    <?php endwhile;
    else : endif; ?>
    <?php wp_reset_postdata(); ?>
</ul>
