<!-- 
=============================
YDG Author information
============================= 
-->
<?php
$terms = get_the_terms($post->ID, 'topics');
$slug_out = array();
foreach($terms as $term){
    $slug_out[] = $term->slug;
} ?>

<small class="pb-1 block pt-2 text-sm md:text-xxs"><span class="italic">by</span>
    <!-- add class from taxonomy -->
    <?php 
        $author_id = get_the_author_meta( 'ID' );
        $author_link = get_author_posts_url( $author_id );
        
        echo '<a class="text-ydg-'.implode(' ', $slug_out).'-500 font-bold uppercase" href="' . esc_url( $author_link ) . '">' . get_the_author_meta('first_name'). '</a> |';
        ?>

    <?php echo '<span class="uppercase">' .get_the_date('M j, Y'). '</span>'; ?>
</small>
