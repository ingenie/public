<?php
$data = isset($data) ? $data : new stdClass();
$location = isset($data->location) ? $data->location : '';
$twClasses = isset($data->twClasses) ? $data->twClasses : '';

?>

<!-- Loop adverrts for latest placement ad -->
<?php
$args = array(
    'post_type' => 'advertise',
    'posts_per_page' => 1,
    "orderby" => "date",
    "order" => "DESC",
    'tax_query' => array(
        array(
            'taxonomy' => 'locations',
            'field' => 'slug',
            'terms' => $location,
        )
    ),
);

$featured_query = new WP_Query($args);
if ($featured_query->have_posts()) : while ($featured_query->have_posts()) : $featured_query->the_post(); ?>
<!-- <div class="<?= $twClasses ?>"> -->

<div
    class="absolute bg-ig-blue-900 bg-opacity-75 border-box bottom-0 box-border p-4 left-0 text-white text-right right-0">
    <h4 class="heading-4"><?php the_title(); ?></h4>
    <?php the_content(); ?>
</div>

<?php if (has_post_thumbnail()) : ?>
<img class="object-cover object-center" width="410px" height="auto"
    src="<?php the_post_thumbnail_url('ingenie-ads'); ?>">
<!-- <img class="object-cover object-center"
    src="https://lorempixel.com/350/300/people/" alt="<?php the_title(); ?>"> -->

<?php endif; ?>
<!-- </div> -->
<?php endwhile;
else : endif; ?>
<?php wp_reset_postdata(); ?>
