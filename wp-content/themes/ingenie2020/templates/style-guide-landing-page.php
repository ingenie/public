<?php
/*
 * Template Name: Style Guide Landing Page Template
 * Template Post Type: page
 */

get_header('styleguides');
?>

<!-- START: Highlight the code examples -->
<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/highlight.min.js"></script>
<script>
hljs.highlightAll();
</script> -->
<!-- END: Highlight the code examples -->

<!-- <div class="fixed right-0 top-0 show-source z-100">
    <div
        class="absolute text-xs text-white font-semibold pre z-100 transform rotate-45 h-40 pt-4 text-center leading-none">
        <span class="text-2xl">[</span>
        <span id="toggle">View Code</span>
        <span class="text-2xl">]</span>
    </div>
    <div class="w-32 overflow-hidden inline-block">
        <div class="h-52 bg-ig-blue-600 -rotate-45 transform origin-top-left"></div>
    </div>
</div> -->

<div class="bg-ig-li-blue-500 text-center p-8 my-4">
    <h1 class="pt-4 text-center">Styleguide - Landing Page Templates</h1>
    <h3 class="heading-3 max-w-3xl mx-auto">Choice of templates when creating landing pages</h3>
    <h5>NOTE: Sticking closely to these template will speed up development time considerably!</h5>

    <div class="max-w-3xl m-auto py-10">
        <a class="inline-block filter primary-btn my-1" href="#001">LP - 001</a>
        <a class="inline-block filter primary-btn my-1" href="#002">LP - 002</a>
        <a class="inline-block filter primary-btn my-1" href="#003">LP - 003</a>
        <a class="inline-block filter primary-btn my-1" href="#004">LP - 004</a>
        <a class="inline-block filter primary-btn-clear my-1" href="#current-list">LP List</a>

        <a class="inline-flex filter secondary-btn my-1" href="/styleguide">
            <span>Back</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
        </a>

    </div>

</div>

<div class="container mx-auto">

    <!-- 
-------------------------
Landing Pages

SECTION - WIP
-------------------------	
-->

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto">
            <div id="001" class="standard-card flex">
                <div class="flex-1 p-4">
                    <h3 class="heading-3">Landing Page - 001</h3>
                    <h5 class="heading-5">Features:</h5>
                    <ul class="standard-list">
                        <li>2, 3, 3 column layout</li>
                        <li>Bullet lists</li>
                        <li>Trustpilot integration</li>
                        <li>Links to the 'i-Hub' (blogs)</li>
                        <li>Landing page specifc header/footer</li>
                    </ul>

                    <div class="py-3">
                        <a href="/landing-page-001" class="inline-flex primary-btn">
                            <span>View demo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    </div>

                    <span class="block w-full h-0 my-5 border-t border-gray-300"></span>

                    <div class="py-3">
                        <a href="/resources/documents/landing-page-templates/landing-page-001.pdf"
                            class="inline-flex secondary-btn-clear-sm" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span>PDF</span>
                        </a>
                        <a download='landing-page-001.jpg' id='landing-page-001'
                            href="/resources/img/landing-pages/templates/landing-page-001.jpg"
                            class="inline-flex secondary-btn-clear-sm" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>JPG</span>
                        </a>
                    </div>

                </div>
                <div class="flex-1 p-4">
                    <img class="object-cover mx-auto" src="/resources/img/landing-pages/templates/landing-page-001.jpg"
                        alt="placeholder" width="320" height="auto">
                </div>

            </div>

            <span id="cards" class="block w-full h-0 my-20 border-t border-gray-300"></span>

            <div id="002" class="standard-card flex">
                <div class="flex-1 p-4">
                    <h3 class="heading-3">Landing Page - 002</h3>
                    <h5 class="heading-5">Features:</h5>
                    <ul class="standard-list">
                        <li>1, 2, 3, 3 column layout</li>
                        <li>Trustpilot slider and bar integration</li>
                        <li>Product interchangable</li>
                        <li>Landing page specifc header/footer</li>
                    </ul>

                    <div class="py-3">
                        <a href="/landing-page-002" class="inline-flex primary-btn">
                            <span>View demo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    </div>

                    <span class="block w-full h-0 my-5 border-t border-gray-300"></span>

                    <div class="py-3">
                        <a href="/resources/documents/landing-page-templates/landing-page-002.pdf"
                            class="inline-flex secondary-btn-clear-sm" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span>PDF</span>
                        </a>
                        <a download='landing-page-001.jpg' id='landing-page-001'
                            href="/resources/img/landing-pages/templates/landing-page-002.jpg"
                            class="inline-flex secondary-btn-clear-sm" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>JPG</span>
                        </a>
                    </div>

                </div>
                <div class="flex-1 p-4">
                    <img class="object-cover mx-auto" src="/resources/img/landing-pages/templates/landing-page-002.jpg"
                        alt="placeholder" width="320" height="auto">
                </div>

            </div>

            <span id="cards" class="block w-full h-0 my-20 border-t border-gray-300"></span>

            <div id="003" class="standard-card flex">
                <div class="flex-1 p-4">
                    <h3 class="heading-3">Landing Page - 003</h3>
                    <h5 class="heading-5">Features:</h5>
                    <ul class="standard-list">
                        <li>2, 3, 3 column layout with jux header</li>
                        <li>Trustpilot bar integration</li>
                        <li>Image enhanced 'what people say' TP slider</li>
                        <li>Landing page specifc header/footer</li>
                    </ul>

                    <div class="py-3">
                        <a href="/landing-page-003" class="inline-flex primary-btn">
                            <span>View demo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    </div>

                    <span class="block w-full h-0 my-5 border-t border-gray-300"></span>

                    <div class="py-3">
                        <a href="/resources/documents/landing-page-templates/landing-page-003.pdf"
                            class="inline-flex secondary-btn-clear-sm" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span>PDF</span>
                        </a>
                        <a download='landing-page-001.jpg' id='landing-page-001'
                            href="/resources/img/landing-pages/templates/landing-page-003.jpg"
                            class="inline-flex secondary-btn-clear-sm" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>JPG</span>
                        </a>
                    </div>

                </div>
                <div class="flex-1 p-4">
                    <img class="object-cover mx-auto" src="/resources/img/landing-pages/templates/landing-page-003.jpg"
                        alt="placeholder" width="320" height="auto">
                </div>

            </div>

            <span id="cards" class="block w-full h-0 my-20 border-t border-gray-300"></span>

            <div id="004" class="standard-card flex">
                <div class="flex-1 p-4">
                    <h3 class="heading-3">Landing Page - 004</h3>
                    <h5 class="heading-5">Features:</h5>
                    <ul class="standard-list">
                        <li>2, 3, 3 column layout with jux header</li>
                        <li>Trustpilot bar integration</li>
                        <li>Image enhanced 'what people say' TP slider</li>
                        <li>Landing page specifc header/footer</li>
                    </ul>

                    <div class="py-3">
                        <a href="/landing-page-004" class="inline-flex primary-btn">
                            <span>View demo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </a>
                    </div>

                    <span class="block w-full h-0 my-5 border-t border-gray-300"></span>

                    <div class="py-3">
                        <a href="/resources/documents/landing-page-templates/landing-page-004.pdf"
                            class="inline-flex secondary-btn-clear-sm" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <span>PDF</span>
                        </a>
                        <a download='landing-page-004.jpg' id='landing-page-004'
                            href="/resources/img/landing-pages/templates/landing-page-004.jpg"
                            class="inline-flex secondary-btn-clear-sm" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>JPG</span>
                        </a>
                    </div>

                </div>
                <div class="flex-1 p-4">
                    <img class="object-cover mx-auto" src="/resources/img/landing-pages/templates/landing-page-004.jpg"
                        alt="placeholder" width="320" height="auto">
                </div>

            </div>
        </div>
    </div>

    <div id="current-list" class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto">

            <h3 class="heading-3">Landing Pages in the wild</h3>

            <ul class="standard-list ml-1 list-decimal">

                <?php
                $wpcpt = new WP_Query(
                    array(
                        'post_type' => 'page', // Change this to the slug of your Custom Post Type (cpt)
                        'posts_per_page' => -1, // -1 shows all cpt posts
                        'post_status' => 'publish', // only shows published cpt pages
                        'orderby' => 'title', // orders by cpt post title
                        'order' => 'ASC', // orders cpt posts title alphabetically
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'landing-pages',
                            )
                        ),
                    )
                );
                ?>

                <?php while ($wpcpt->have_posts()) : $wpcpt->the_post(); ?>


                <li>
                    <a href="<?php echo get_permalink($post->ID); ?>" rel="dofollow" title="<?php the_title(); ?>"
                        class="primary-link text-xs" target="_blank" rel="nofollow">
                        <?php the_title(); ?>
                    </a>
                </li>

                <?php endwhile;
                wp_reset_query(); ?>

        </div>
    </div>

</div>

<?php get_footer(); ?>
