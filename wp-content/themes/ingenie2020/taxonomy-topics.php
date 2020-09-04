<?php 

$term = get_queried_object();
$taxonomyCat =  $term->slug;
// switch ($taxonomyCat):
//     case 'lifestle':
//         $taxColor = "red";
//         break;
//         case 'lifestle':
//         $taxColor = "blue";
//         break;
//         case 'lifestle':
//         $taxColor = "green";
//         break;
//     default:
//         echo "God know what color the topic is??";
// endswitch;

get_header('ydg'); ?>

<div class="">
    YDG TOPICS archive AWESOME
    <h1><?php echo single_cat_title();?></h1>
    <h2><?php echo $taxonomyCat; ?></h2>


    <?php get_template_part( 'templates/partials/section', 'archive' ); ?>

    <?php previous_posts_link();?>
    <?php next_posts_link();?>

</div>

<?php get_footer(); ?>
