<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- <?php the_title(); ?> -->
<?php the_date('F j, Y'); ?><br />
<?php the_content(); ?>

<p><?php the_author(); ?> is the author</p>


<p><?php
            $fname = get_the_author_meta('first_name');
            $lname = get_the_author_meta('last_name'); ?>

    <?php echo $fname; ?> - <?php echo $lname; ?></p>

<?php if (has_tag()) { ?>
Tags are:
<?php
            $tags = get_the_tags();
            foreach ($tags as $tag) : ?>
<a href="<?php echo get_tag_link($tag->term_id); ?>">
    <?php echo $tag->name; ?>
</a>
<?php endforeach;
        } elseif (has_category()) { ?>
Categories are:
<?php
            $categories = get_the_category();
            foreach ($categories as $cat) : ?>
<a href="<?php echo get_category_link($cat->term_id); ?>">
    <?php echo $cat->name; ?>
</a>
<?php endforeach;
        } else {
                ?>NO tag or catergories!<?php
                                    }

                                endwhile;
                            else : endif; ?>
