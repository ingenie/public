<?php
/*
 * Template Name: Style Guide Home Template
 * Template Post Type: page
 */

get_header('styleguides');
?>

<div class="bg-ig-li-blue-500 text-center p-2 my-3">
    <h1 class="pt-2 text-center">ingenie - Styleguides</h1>
    <h3 class="heading-3 max-w-3xl mx-auto">Reusable UI blocks, code snippets, variables and more...</h3>
</div>

<div class="container mx-auto">
    <section class="flex flex-wrap justify-center py-10">

        <div class="w-full sm:w-1/2">
            <div class="standard-card m-1 h-80 p-0 relative">

                <a href="/styleguide-components"><img class="object-cover object-center w-full h-40"
                        src="/resources/img/pages/misc/components.jpg" alt="alt text">
                </a>

                <div class="p-4 pt-1">
                    <div class="h-12">
                        <h4 class="heading-4 my-2 min-h-full p-0">Components</h4>
                    </div>

                    <p class="block leading-snug text-sm pr-3">
                        General ingenie styleguide. Contains UI compoents and other snippets to use in your worklflow
                        creating new or making changes to exisiting pages/posts.
                    </p>

                    <span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
                        <a href="/styleguide-components">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>


        <div class="w-full sm:w-1/2">
            <div class="standard-card m-1 h-80 p-0 relative">

                <a href="/styleguide-stats"><img class="object-cover object-center w-full h-40"
                        src="/resources/img/pages/misc/stats.jpg" alt="alt text">
                </a>

                <div class="p-4 pt-1">
                    <div class="h-12">
                        <h4 class="heading-4 my-2 min-h-full p-0">Statistic</h4>
                    </div>

                    <p class="block leading-snug text-sm pr-3">
                        ingenie statistics used throughout the site. Always use the shortcodes supplied to display stats
                        then everything stays in sync.
                    </p>

                    <span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
                        <a href="/styleguide-stats">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="w-full sm:w-1/2">
            <div class="standard-card m-1 h-80 p-0 relative">

                <a href="/styleguide-landing-pages"><img class="object-cover object-top w-full h-40"
                        src="/resources/img/pages/misc/landing.jpg" alt="alt text">
                </a>

                <div class="p-4 pt-1">
                    <div class="h-12">
                        <h4 class="heading-4 my-2 min-h-full p-0">Landing Pages</h4>
                    </div>

                    <p class="block leading-snug text-sm pr-3">
                        Landing pages used for quick templating and temporary pages. Also has list of existing landing
                        pages which are live.
                    </p>

                    <span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
                        <a href="/styleguide-landing-pages">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="w-full sm:w-1/2">
            <div class="standard-card m-1 h-80 p-0 relative">

                <a href="/styleguide-misc"><img class="object-cover object-center w-full h-40"
                        src="/resources/img/pages/misc/misc.jpg" alt="alt text">
                </a>

                <div class="p-4 pt-1">
                    <div class="h-12">
                        <h4 class="heading-4 my-2 min-h-full p-0">Misc</h4>
                    </div>

                    <p class="block leading-snug text-sm pr-3">
                        Other groups elements which are not clearly defind yet. Used for helping to purge Tailwind CSS
                        where elements are used in Wordpress content editor.
                    </p>

                    <span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
                        <a href="/styleguide-misc">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>

    </section>


</div>

<?php get_footer(); ?>
