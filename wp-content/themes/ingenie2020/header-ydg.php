<?php get_template_part( 'templates/partials/document-open' ); ?>

<header class="md:mb-4 bg-gradient-to-r from-ydg-ingenie-blog-400 via-ydg-ingenie-blog-800 to-ydg-ingenie-blog-900">
    <div class="flex flex-wrap items-center justify-between h-24 p-3">

        <div class="flex-1/5">
            <?php get_template_part( 'templates/partials/navbar', 'main' ); ?>
        </div>

        <div class="flex-3/5">
            <a href="/">
                <!-- <span class="text-xl font-bold">ingenie</span> -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ingenie-logo-ydg.svg"
                    alt="ingenie Insurance" width="112" height="auto">
            </a>
        </div>

        <div class="text-right flex-1/5">
            <a href="#"
                class="inline-block px-4 py-2 mt-0 text-sm leading-none text-white border rounded border-ig-orange-500 hover:border-transparent hover:text-white bg-ig-orange-500 hover:bg-ig-orange-600">Get
                a quote</a>
        </div>
    </div>

    <div class="flex">
        <div class="z-50 w-full -mt-6 absolute md:static">
            <img class="object-center mx-auto"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/ydg-masthead-logo.svg"
                alt="ingenie Insurance" width="280" height="auto">
        </div>
    </div>

    <div class="hidden md:block lg:container lg:mx-auto">
        <div class="flex mt-4">
            <div class="flex-grow-0 text-xs uppercase mt-0 px-2">
                <a href="/young-drivers-guide/" class="text-white hover:text-ig-orange-500">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                </a>
            </div>

            <div class="flex-grow"><?php get_template_part( 'templates/partials/navbar', 'ydg' ); ?></div>
        </div>
    </div>

</header>
