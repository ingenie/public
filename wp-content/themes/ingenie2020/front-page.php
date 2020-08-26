 Ima 'Front Page/Home'
 <?php get_header(); ?>

 <div class="container">

     <h1><?php the_title(); ?></h1>
     <?php get_template_part( 'templates/partials/section', 'content' ); ?>

 </div>

 <?php get_footer(); ?>
