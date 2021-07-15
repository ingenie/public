<?php
/*
 * Template Name: Style Guide Landging Page Template
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

        <!-- External guides -->
        <a class="inline-flex filter secondary-btn my-1" href="/styleguide-stats" target="_blank">
            <span>Site Stats</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
            </svg>
        </a>

        <a class="inline-flex filter secondary-btn my-1" href="/styleguide-components" target="_blank">
            <span>Components</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
            </svg>
        </a>

        <a class="inline-flex filter secondary-btn my-1" href="/styleguide-layouts" target="_blank">
            <span>Layouts/Blocks</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
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
                        <li>2, 2, 3 column layout</li>
                        <li>Trustpilot integration</li>
                        <li>Links to the 'i-Hub'</li>
                    </ul>

                    <div class="py-3">
                        <a href="/landing-page-001" class="inline-flex primary-btn-clear" target="_blank">
                            <span>View demo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex-1 p-4">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/320x500/878787/d1d1d1"
                        alt="placeholder" width="320" height="auto">
                </div>

            </div>

            <span id="cards" class="block w-full h-0 my-20 border-t border-gray-300"></span>

            <div id="002" class="standard-card flex">
                <div class="flex-1 p-4">
                    <h3 class="heading-3">Landing Page - 002</h3>
                    <h5 class="heading-5">Features:</h5>
                    <ul class="standard-list">
                        <li>2, 2, 3 column layout</li>
                        <li>Trustpilot integration</li>
                        <li>Links to the 'i-Hub'</li>
                    </ul>

                    <div class="py-3">
                        <a href="/landing-page-001" class="inline-flex primary-btn-clear" target="_blank">
                            <span>View demo</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex-1 p-4">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/320x500/878787/d1d1d1"
                        alt="placeholder" width="320" height="auto">
                </div>

            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
