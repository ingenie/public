<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="mt-0 bg-ig-li-blue-500 sm:mt-10">
    <div class="container flex flex-wrap-reverse max-w-6xl py-0 mx-auto sm:flex-nowrap">

        <div class="flex-grow sm:m-5 sm:ml-0 text-right sm:relative">
            <h1
                class="sm:inline w-auto px-3 py-1 my-0 sm:my-1 leading-normal text-white sm:rounded bg-ig-blue-500 decoration-clone heading-1">
                <?php the_title(); ?></h1>

            <p class="text-right text-sm sm:absolute right-1 bottom-1 p-2 sm:px-0">

                <span class="mt-2 text-xs font-bold uppercase"><?php the_date('F j, Y'); ?></span><br />
                <span class="text-xs font-semibold">by</span> <?php
                                                                        $fname = get_the_author_meta('first_name');
                                                                        $lname = get_the_author_meta('last_name'); ?>
                <span class="text-ig-orange-500"><?php echo $fname; ?> - <?php echo $lname; ?></span>
            </p>

            <!-- <p class="text-sm font-semibold text-right"><?php if (has_tag()) { ?>
                Tags are: <?php
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
                                                                        } ?>
            </p> -->
        </div>

        <div class="flex-grow-0">
            <?php if (has_post_thumbnail()) : ?>
            <img class="object-cover object-top w-full h-full sm:h-56"
                src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>


    </div>
</div>




<div class="container mx-auto">

    <div class="text-xs sm:text-sm p-4"><?php
                                                if (function_exists('yoast_breadcrumb')) {
                                                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                                                }
                                                ?></div>

    <div class="py-8 px-4">
        <?php the_content(); ?>
    </div>
</div>




<?php endwhile;
else : endif; ?>
