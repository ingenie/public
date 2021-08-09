<?php
/*
 * Template Name: Style Guide Components Template
 * Template Post Type: page
 */

get_header('styleguides');
?>

<!-- START: Highlight the code examples -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/highlight.min.js"></script>
<script>
hljs.highlightAll();
</script>
<!-- END: Highlight the code examples -->

<div class="fixed right-0 top-0 show-source z-100 cursor-pointer">
    <div
        class="absolute text-xs text-white font-semibold pre z-100 transform rotate-45 h-40 pt-4 text-center leading-none cursor-pointer">
        <span class="text-2xl">[</span>
        <span id="toggle">Show Code</span>
        <span class="text-2xl">]</span>
    </div>
    <div class="w-32 overflow-hidden inline-block">
        <div class="h-52 bg-ig-blue-600 -rotate-45 transform origin-top-left"></div>
    </div>
</div>

<div class="bg-ig-li-blue-500 text-center p-8 my-4">
    <h1 class="pt-4 text-center">Styleguide - Components</h1>
    <h3 class="heading-3 max-w-3xl mx-auto">Reusable UI blocks and code snippets to speed up page building</h3>
    <h5>Some shortcodes also exist for easier implementation</h5>

    <div class="max-w-3xl m-auto py-10">
        <a class="inline-block filter primary-btn my-1" href="#fonts">Fonts</a>
        <a class="inline-block filter primary-btn my-1" href="#smallprint">Small Print</a>
        <a class="inline-block filter primary-btn my-1" href="#links">Buttons/Links</a>
        <a class="inline-block filter primary-btn my-1" href="#cards">Cards</a>
        <a class="inline-block filter primary-btn my-1" href="#notifications">Notifications</a>
        <a class="inline-block filter primary-btn my-1" href="#trustpilot">Trust Pilot</a>
        <a class="inline-block filter primary-btn my-1" href="#accordians">Accordians</a>
        <a class="inline-block filter primary-btn my-1" href="#modals">Modals</a>
        <a class="inline-block filter primary-btn my-1" href="#carousels">Carousels</a>
        <a class="inline-block filter primary-btn my-1" href="#hero">Hero Banners</a>
        <a class="inline-block filter primary-btn my-1" href="#video">Video</a>
        <!-- <a class="inline-block filter primary-btn my-1" href="#misc">Misc</a> -->

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
HEADINGS

SECTION - WIP
-------------------------	
-->
    <!-- <span id="fonts" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span> -->
    <!-- Headings / Fonts -->
    <h2 id="fonts" class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Headings / Fonts
        </span>
    </h2>

    <h3 class="pt-2 pb-3 mt-5 text-sm font-semibold text-center">Web Font Family
    </h3>
    <h1 class="heading-1">"Open Sans", Helvetica, Arial, sans-serif</h1>
    <h5 class="heading-5">"Open Sans", Helvetica, Arial, sans-serif</h5>

    <p class="text-xl">Paragraph xl - 22.5px</p>
    <p class="text-lg">Paragraph lg - 20.25px</p>
    <p>Paragraph base - 18px</p>
    <p class="text-sm">Paragraph sm - 15.75px</p>
    <p class="text-xs">Paragraph xs - 13.5px</p>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;h1 class="heading-1"&gt;"Open Sans", Helvetica, Arial, sans-serif&lt;/h1&gt;
        &lt;h5 class="heading-5"&gt;"Open Sans", Helvetica, Arial, sans-serif&lt;/h5&gt;

        &lt;p class="text-xl"&gt;Paragraph xl - 22.5px&lt;/p&gt;
        &lt;p class="text-lg"&gt;Paragraph lg - 20.25px&lt;/p&gt;
        &lt;p&gt;Paragraph base - 18px&lt;/p&gt;
        &lt;p class="text-sm"&gt;Paragraph sm - 15.75px&lt;/p&gt;
        &lt;p class="text-xs"&gt;Paragraph xs - 13.5px&lt;/p&gt;
        </code>
        </pre>
    </div>
    <!-- MARKUP -->


    <h3 class="pt-2 pb-3 mt-5 text-sm font-semibold text-center">Headings
    </h3>
    <h1 class="heading-1">This is example heading 1</h1>
    <h2 class="heading-2">This is example heading 2</h2>
    <h3 class="heading-3">This is example heading 3</h3>
    <h4 class="heading-4">This is example heading 4</h4>
    <h5 class="heading-5">This is example heading 5</h5>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;h1 class="heading-1"&gt;This is example heading 1&lt;/h1&gt;
        &lt;h2 class="heading-2"&gt;This is example heading 2&lt;/h2&gt;
        &lt;h3 class="heading-3"&gt;This is example heading 3&lt;/h3&gt;
        &lt;h4 class="heading-4"&gt;This is example heading 4&lt;/h4&gt;
        &lt;h5 class="heading-5"&gt;This is example heading 5&lt;h5&gt;
        </code>
        </pre>
    </div>
    <!-- MARKUP -->

    <!-- BREAK -->


    <!-- 
-------------------------
SMALLPRINT

SECTION - WIP
-------------------------	
-->

    <span id="smallprint" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>
    <!-- Small print -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Small print
        </span>
    </h2>

    <h3 class="pt-2 pb-3 mt-5 text-sm font-semibold text-center">Young Driver Insurance stats
    </h3>

    <p class="small-print pb-1">
        * <?php echo do_shortcode("[yd_sp_dates_up_front_txt]"); ?>
    </p>
    <p class="small-print pb-1">
        ** <?php echo do_shortcode("[yd_sp_premium_increases_txt]"); ?>
    </p>
    <p class="small-print pb-1">
        *** <?php echo do_shortcode("[yd_sp_factors_renewals_txt]"); ?>
    </p>
    <p class="small-print pb-1">
        **** <?php echo do_shortcode("[yd_sp_top_up_miles_txt]"); ?>
    </p>
    <p class="small-print pb-1">
        ***** <?php echo do_shortcode("[yd_sp_dates_renewals_txt]"); ?>
    </p>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
        * [yd_sp_dates_up_front_txt]

        ** [yd_sp_premium_increases_txt]

        *** [yd_sp_factors_renewals_txt]

        **** [yd_sp_top_up_miles_txt]

        ***** [yd_sp_dates_renewals_txt]
  </code>
</pre>
    </div>
    <!-- MARKUP -->




    </p>
    <h3 class="pt-2 pb-3 mt-5 text-sm font-semibold text-center">Learner Driver Insurance stats
    </h3>
    <p class="small-print pb-1">
        * <?php echo do_shortcode("[learner_sp_dates_discount_txt]"); ?><br />
    </p>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
        * [learner_sp_dates_discount_txt]
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <?php echo do_shortcode("[get-message color='warning' message='Q. Should we be using *, †, ‡, §, ‖, etc.? See Wikipedia if interested' link='https://en.wikipedia.org/wiki/Note_(typography)']"); ?>

    <?php echo do_shortcode("[get-message color='info' message='See full list of ingenie stat variables and their usage on the ingenie <a href=\"/styleguide-stats\" class=\"primary-link-sm\" target=\"_blank\">styleguide stats</a> page.']"); ?>



    <!-- 
-------------------------
BUTTONS / LINKS

SECTION - WIP
-------------------------	
-->

    <span id="links" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Buttons / Links
        </span>
    </h2>

    <?php echo do_shortcode("[get-message color='info' message='NOTE: SVG icons compatible with tailwind css available for button/links are available here at (https://heroicons.com)' link='https://heroicons.com']"); ?>

    <!-- Button - Links -->
    <!-- <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Links</h3> -->

    <div class="flex flex-wrap">
        <div class="md:w-1/2">
            <p class="my-1">
                <a href="#" class="primary-link-xs">
                    Primary link x-small
                </a>
            </p>
            <p class="my-1">
                <a href="#" class="primary-link-sm">
                    Primary link small
                </a>
            </p>
            <p class="my-1">
                <a href="#" class="primary-link">
                    Primary link
                </a>
            </p>
            <p class="my-1">
                <a href="#" class="inline-flex primary-link">
                    Primary link (with icon)
                    <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </p>

        </div>
        <div class="md:w-1/2">
            <p class="my-1">
                <a href="#" class="inline-flex secondary-link-xs">
                    Secondary link x-small
                </a>
            </p>
            <p class="my-1">
                <a href="#" class="inline-flex secondary-link-sm">
                    Secondary link small
                </a>
            </p>
            <p class="my-1">
                <a href="#" class="inline-flex secondary-link">
                    Secondary link
                </a>
            </p>
            <p class="my-1">
                <a href="#" class="inline-flex secondary-link">
                    Secondary link (with icon)
                    <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </p>

        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
    &lt;a href="#" class="inline-flex primary-link"&gt;Primary link&lt;/a&gt;

    &lt;a href="#" class="inline-flex secondary-link-sm"&gt;Secondary link small&lt;/a&gt;

    &lt;a href="#" class="inline-flex secondary-link"&gt;
    Secondary link (with icon)
        &lt;svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
            stroke="currentColor"&gt;
            &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" /&gt;
            &lt;/svg&gt;
    &lt;/a&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <!-- <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Buttons</h3> -->

    <div class="flex flex-wrap">
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex primary-btn">Primary button</a>
            </p>
        </div>
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex primary-btn-sm">Primary small</a>
            </p>
        </div>
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex primary-btn-xs">Primary x-small</a>
            </p>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
    &lt;a href="#" class="inline-flex primary-btn"&gt;Primary button&lt;/a&gt;
    &lt;a href="#" class="inline-flex primary-btn-sm"&gt;Primary small&lt;/a&gt;
    &lt;a href="#" class="inline-flex primary-btn-xs"&gt;Primary x-small&lt;/a&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <div class="flex flex-wrap">
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex primary-btn-clear">
                    Primary button clear
                </a>
            </p>
        </div>
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex primary-btn-clear-sm">
                    Primary clear small
                </a>
            </p>
        </div>
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex primary-btn-clear-xs">
                    Primary clear x-small
                </a>
            </p>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
    &lt;a href="#" class="inline-flex primary-btn-clear"&gt;Primary button clear&lt;/a&gt;
    &lt;a href="#" class="inline-flex primary-btn-clear-sm"&gt;Primary clear small&lt;/a&gt;
    &lt;a href="#" class="inline-flex primary-btn-clear-xs"&gt;Primary clear x-small&lt;/a&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <div class="flex flex-wrap">
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex secondary-btn">
                    Secondary button
                </a>
            </p>
        </div>
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex secondary-btn-sm">
                    Secondary small
                </a>
            </p>
        </div>
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex secondary-btn-xs">
                    Secondary x-small
                </a>
            </p>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
    &lt;a href="#" class="inline-flex secondary-btn"&gt;Secondary button&lt;/a&gt;
    &lt;a href="#" class="inline-flex secondary-btn-sm"&gt;Secondary small&lt;/a&gt;
    &lt;a href="#" class="inline-flex secondary-btn-xs"&gt;Secondary x-small&lt;/a&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <div class="flex flex-wrap">
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex secondary-btn-clear">
                    Secondary button clear
                </a>
            </p>
        </div>
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex secondary-btn-clear-sm">
                    Secondary clear small
                </a>
            </p>
        </div>
        <div class="md:w-1/3">
            <p class="my-1">
                <a href="#" class="inline-flex secondary-btn-clear-xs">
                    Secondary clear x-small
                </a>
            </p>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
    &lt;a href="#" class="inline-flex secondary-btn-clear"&gt;Secondary button clear&lt;/a&gt;
    &lt;a href="#" class="inline-flex secondary-btn-clear-sm"&gt;Secondary clear small&lt;/a&gt;
    &lt;a href="#" class="inline-flex secondary-btn-clear-xs"&gt;Secondary clear x-small&lt;/a&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <div class="flex flex-wrap">
        <div class="md:w-1/2">
            <p class="my-1">
                <a href="#" class="inline-flex primary-btn">
                    <span>Primary button (with icon)</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </p>
        </div>
        <div class="md:w-1/2">
            <p class="my-1">
                <a href="#" class="inline-flex secondary-btn">
                    <span>Secondary button (with icon)</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </p>
        </div>
    </div>



    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
    &lt;a href="#" class="inline-flex primary-btn"&gt;
        &lt;span&gt;Primary button (with icon)&lt;/span&gt;
        &lt;svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
            fill="currentColor"&gt;
            &lt;path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                clip-rule="evenodd" /&gt;
        &lt;/svg&gt;
    &lt;/a&gt;

    
    &lt;a href="#" class="inline-flex secondary-btn"&gt;
        &lt;span&gt;Secondary button (with icon)&lt;/span&gt;
        &lt;svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
            fill="currentColor"&gt;
            &lt;path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                clip-rule="evenodd" /&gt;
        &lt;/svg&gt;
    &lt;/a&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->




    <!-- <h3 class="pt-2 pb-3 text-sm font-semibold text-center">YD Get a quote buttons - using shortcodes</h3> -->
    <div class="flex flex-wrap">
        <div class="md:w-1/3">
            <?php echo do_shortcode("[yd-quote-button text='Get a quote']"); ?>
        </div>
        <div class="md:w-1/3">
            <?php echo do_shortcode("[yd-quote-button type='secondary' text='Secondary QB with query' qstring='&TEST=123']"); ?>
        </div>
        <div class="md:w-1/3">
            <?php echo do_shortcode("[yd-quote-button size='-sm' text='Get a quote (small)']"); ?>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
    [yd-quote-button text='Get a quote']
    [yd-quote-button type='secondary' text='Secondary QB with query' qstring='&TEST=123']
    [yd-quote-button size='-sm' text='Get a quote (small)']
   
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <!-- <h3 class="pt-2 pb-3 text-sm font-semibold text-center">LD Get a quote buttons - using shortcodes</h3> -->
    <div class="flex flex-wrap">
        <div class="md:w-1/3">
            <?php echo do_shortcode("[learner-quote-button text='Get a quote']"); ?>
        </div>
        <div class="md:w-1/3">
            <?php echo do_shortcode("[learner-quote-button type='secondary' text='Get a quote (secondary)']"); ?>
        </div>
        <div class="md:w-1/3">
            <?php echo do_shortcode("[learner-quote-button size='-sm' text='Get a quote (small)']"); ?>
        </div>
    </div>



    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
    [learner-quote-button text='Get a quote']
    [learner-quote-button type='secondary' text='Get a quote (secondary)']
    [learner-quote-button size='-sm' text='Get a quote (small)']
  </code>
</pre>
    </div>
    <!-- MARKUP -->


    <!-- 
-------------------------
CARDS

SECTION - WIP
-------------------------	
-->

    <span id="cards" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Cards
        </span>
    </h2>


    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Cards - boxed single col</h3>
    <!-- 1 column example -->
    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1 md:max-w-lg max-w-none">
            <div class="text-center standard-card">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->
                <h3 class="my-3 heading-3">Learning in my car</h3>
                <ul class="standard-list">
                    <li>Start building up your own NCD</li>
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="flex flex-wrap justify-center mb-4"&gt;
            &lt;div class="flex-auto md:flex-1 md:max-w-lg max-w-none"&gt;
                &lt;div class="text-center standard-card"&gt;
                    &lt;h3 class="my-3 heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;ul class="standard-list"&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code>
    </pre>
    </div>
    <!-- MARKUP -->

    <!-- Cards - box -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Cards - boxed 3 col</h3>

    <!-- 3 column example -->
    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="text-center standard-card">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->
                <h3 class="my-3 heading-3">Learning in my car</h3>
                <ul class="standard-list">
                    <li>Start building up your own NCD</li>
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center standard-card">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->

                <h3 class="my-3 heading-3">Learning in another car</h3>
                <ul class="standard-list">
                    <li>Drive someone’s car from <?php echo do_shortcode("[learner_quotes_start_from_txt]"); ?> a day*
                    </li>
                    <li>Flexible cover (1 month to 6 months)</li>
                    <li>The car owner's NCD is protected</li>
                </ul>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center standard-card">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->

                <h3 class="my-3 heading-3">Passed my test</h3>
                <ul class="standard-list">
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well
                    </li>
                    <li>Save an average of <?php echo do_shortcode("[yd_renewal_discount_txt]"); ?> on renewal**</li>
                </ul>
            </div>
        </div>
    </div>


    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="flex flex-wrap justify-center mb-4"&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center standard-card"&gt;
                    &lt;h3 class="my-3 heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;ul class="standard-list"&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center standard-card"&gt;
                    &lt;h3 class="my-3 heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;ul class="standard-list"&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center standard-card"&gt;
                    &lt;h3 class="my-3 heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;ul class="standard-list"&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code>
    </pre>
    </div>
    <!-- MARKUP -->


    <!-- Cards - with button -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Cards - 2 boxed with buttons</h3>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="text-center standard-card">
                <h3 class="heading-3">Learning in my car</h3>
                <ul class="standard-list">
                    <li>Start building up your own NCD</li>
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well***
                    </li>
                </ul>
                <div class="px-1 pt-4 pb-2">
                    <a href="/young-driver-insurance/learner-car-insurance" class="inline-flex primary-link-sm">
                        <span>Find out more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
                <div class="absolute inline-flex transform -translate-x-1/2">
                    <?php echo do_shortcode("[yd-quote-button text='Get a quote']"); ?></div>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center standard-card">
                <h3 class="heading-3">Learning in another car</h3>
                <ul class="standard-list">
                    <li>Drive someone’s car from <?php echo do_shortcode("[learner_quotes_start_from_txt]"); ?> a day*
                    </li>
                    <li>Flexible cover (1 month to 6 months)</li>
                    <li>The car owner's NCD is protected</li>
                </ul>

                <div class="px-1 pt-4 pb-2">
                    <a href="/learner-driver-insurance/how-it-works" class="inline-flex primary-link-sm">
                        <span>Find out more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>

                <div class="absolute inline-flex transform -translate-x-1/2">
                    <?php echo do_shortcode("[learner-quote-button text='Get a quote']"); ?></div>

            </div>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="flex flex-wrap justify-center mb-4"&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center standard-card"&gt;
                    &lt;h3 class="heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;ul class="standard-list"&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;div class="px-1 pt-4 pb-2"&gt;
                        &lt;a href="#"&gt;
                            &lt;span&gt;Find out more&lt;/span&gt;
                            &lt;svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor"&gt;
                                &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" /&gt;
                            &lt;/svg&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="absolute inline-flex transform -translate-x-1/2"&gt;
                        [yd-quote-button text='Get a quote']
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center standard-card"&gt;
                    &lt;h3 class="heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;ul class="standard-list"&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                        &lt;li&gt;Text...&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;div class="px-1 pt-4 pb-2"&gt;
                        &lt;a href="#"&gt;
                            &lt;span&gt;Find out more&lt;/span&gt;
                            &lt;svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor"&gt;
                                &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" /&gt;
                            &lt;/svg&gt;
                        &lt;/a&gt;
                    &lt;/div&gt;
                    &lt;div class="absolute inline-flex transform -translate-x-1/2"&gt;
                        [yd-quote-button text='Get a quote']
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code>
    </pre>
    </div>
    <!-- MARKUP -->



    <!-- Cards - floating -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Cards - floating</h3>


    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:w-1/3">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/pound-icon.svg" alt="upfront savings"
                    width="48" height="48">
                <h3 class="heading-3">Save <?php echo do_shortcode("[yd_up_front_txt]"); ?> upfront</h3>
                <p>
                    Our drivers save an average of <?php echo do_shortcode(" when they insure"); ?>
                    with us.*
                </p>
            </div>
        </div>

        <div class="flex-auto md:w-1/3">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/progress-icon.svg"
                    alt="save on progress" width="48" height="48">

                <h3 class="heading-3">Earn up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> off</h3>
                <p>
                    Get discounts on your insurance 3 times a year just by driving well.**
                </p>
            </div>
        </div>

        <div class="flex-auto md:w-1/3">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/pig-icon.svg" alt="save at renewal"
                    width="48" height="48">

                <h3 class="heading-3">Save at renewal</h3>
                <p>
                    Save an average of <?php echo do_shortcode("[yd_renewal_discount_txt]"); ?> when you renew for a
                    second year.***
                </p>
            </div>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="flex flex-wrap justify-center mb-4"&gt;
            &lt;div class="flex-auto md:w-1/3"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/icons/pound-icon.svg" alt="upfront savings"
                        width="48" height="48"&gt;
                    &lt;h3 class="heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;p&gt;
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex-auto md:w-1/3"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/icons/pound-icon.svg" alt="upfront savings"
                        width="48" height="48"&gt;
                    &lt;h3 class="heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;p&gt;
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex-auto md:w-1/3"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/icons/pound-icon.svg" alt="upfront savings"
                        width="48" height="48"&gt;
                    &lt;h3 class="heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;p&gt;
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code>
    </pre>
    </div>
    <!-- MARKUP -->


    <!-- Cards - floating icons & label -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Cards - icons & label</h3>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/app-speed-icon.svg" alt="driving tips"
                    width="64" height="auto">
                <h4 class="heading-4">Speed</h4>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/app-acceleration-icon.svg"
                    alt="driving tips" width="64" height="auto">
                <h4 class="heading-4">Acceleration</h4>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/app-braking-icon.svg"
                    alt="driving tips" width="64" height="auto">
                <h4 class="heading-4">Braking</h4>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/app-cornering-icon.svg"
                    alt="driving tips" width="64" height="auto">
                <h4 class="heading-4">Cornering</h4>
            </div>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="flex flex-wrap justify-center mb-4"&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/icons/app-speed-icon.svg" alt="driving tips"
                        width="64" height="auto"&gt;
                    &lt;h4 class="heading-4"&gt;Lorem ipsum
                    &lt;/h4&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/icons/app-speed-icon.svg" alt="driving tips"
                        width="64" height="auto"&gt;
                    &lt;h4 class="heading-4"&gt;Lorem ipsum
                    &lt;/h4&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/icons/app-speed-icon.svg" alt="driving tips"
                        width="64" height="auto"&gt;
                    &lt;h4 class="heading-4"&gt;Lorem ipsum
                    &lt;/h4&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/icons/app-speed-icon.svg" alt="driving tips"
                        width="64" height="auto"&gt;
                    &lt;h4 class="heading-4"&gt;Lorem ipsum
                    &lt;/h4&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code>
    </pre>
    </div>
    <!-- MARKUP -->

    <!-- Cards - floating image & button -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Cards - floating image & button</h3>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <h3 class="heading-3">Save <?php echo do_shortcode("[yd_up_front_txt]"); ?> upfront</h3>
                <img class="object-cover mx-auto" src="/resources/img/pages/blog/driving-tips-cat.jpg"
                    alt="driving tips" width="480" height="auto">


                <p class="mt-4">
                    <a href="https://www.ingenie.com/young-drivers-guide/category/driving-tips"
                        class="inline-flex primary-btn-clear">
                        <span>Read more</span>
                    </a>
                </p>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <h3 class="heading-3">Earn up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> off</h3>
                <img class="object-cover mx-auto" src="/resources/img/pages/blog/car-insurance-cat.jpg"
                    alt="car insurance info" width="480" height="auto">

                <p class="mt-4">
                    <a href="https://www.ingenie.com/young-drivers-guide/category/car-insurance"
                        class="inline-flex primary-btn-clear">
                        <span>Read more</span>
                    </a>
                </p>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <h3 class="heading-3">Save at renewal</h3>
                <img class="object-cover mx-auto" src="/resources/img/pages/blog/running-a-car-cat.jpg"
                    alt="running a car advice" width="480" height="auto">


                <p class="mt-4">
                    <a href="https://www.ingenie.com/young-drivers-guide/category/running-a-car"
                        class="inline-flex primary-btn-clear">
                        <span>Read more</span>
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="flex flex-wrap justify-center mb-4"&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;h3 class="heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/blog/driving-tips-cat.jpg"
                        alt="driving tips" width="480" height="auto"&gt;
                    &lt;p class="mt-4"&gt;
                        &lt;a href="#"
                            class="inline-flex primary-btn-clear"&gt;
                            &lt;span&gt;Read more&lt;/span&gt;
                        &lt;/a&gt;
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;h3 class="heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/blog/driving-tips-cat.jpg"
                        alt="driving tips" width="480" height="auto"&gt;
                    &lt;p class="mt-4"&gt;
                        &lt;a href="#"
                            class="inline-flex primary-btn-clear"&gt;
                            &lt;span&gt;Read more&lt;/span&gt;
                        &lt;/a&gt;
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="flex-auto md:flex-1"&gt;
                &lt;div class="text-center border-0 shadow-none standard-card"&gt;
                    &lt;h3 class="heading-3"&gt;Heading...&lt;/h3&gt;
                    &lt;img class="object-cover mx-auto" src="/resources/img/pages/blog/driving-tips-cat.jpg"
                        alt="driving tips" width="480" height="auto"&gt;
                    &lt;p class="mt-4"&gt;
                        &lt;a href="#"
                            class="inline-flex primary-btn-clear"&gt;
                            &lt;span&gt;Read more&lt;/span&gt;
                        &lt;/a&gt;
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code>
    </pre>
    </div>
    <!-- MARKUP -->


    <!-- Cards - guides and blog -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Cards - boxed image</h3>

    <section class="flex flex-wrap justify-center py-10">

        <div class="w-full sm:w-1/2 lg:w-1/3">
            <div class="standard-card p-0 relative">

                <a href="<?php echo do_shortcode("[ig_blog_url]"); ?>"><img
                        class="object-cover object-center w-full h-40 md:w-full md:h-32"
                        src="/resources/img/pages/misc/ydg-header.jpg" alt="alt text">
                </a>

                <div class="p-4 pt-1">
                    <div class="h-12">
                        <h4 class="heading-4 my-2 min-h-full p-0">ingenie - Young Driver Guide</h4>
                    </div>

                    <p class="block leading-snug text-sm pr-3">
                        Just head to our Young Driver’s Guide for all the learner advice you need to get road-ready.
                    </p>

                    <span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
                        <a href="<?php echo do_shortcode("[ig_blog_url]"); ?>">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/3">
            <div class="standard-card p-0 relative">

                <a href="<?php echo do_shortcode("[ig_parents_guide_url]"); ?>"><img
                        class="object-cover object-center w-full h-40 md:w-full md:h-32"
                        src="/resources/img/pages/misc/pg-header.jpg" alt="alt text">
                </a>

                <div class="p-4 pt-1">
                    <div class="h-12">
                        <h4 class="heading-4 my-2 min-h-full p-0">ingenie - Parents Guide</h4>
                    </div>

                    <p class="block leading-snug text-sm pr-3">
                        Just head to our Parents Guide for all the learner advice you may need to help your budding
                        learner.
                    </p>

                    <span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
                        <a href="<?php echo do_shortcode("[ig_parents_guide_url]"); ?>">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <div class="w-full sm:w-1/2 lg:w-1/3">
            <div class="standard-card p-0 relative">

                <a href="<?php echo do_shortcode("[ig_young_drivers_guide_url]"); ?>"><img
                        class="object-cover object-center w-full h-40 md:w-full md:h-32"
                        src="/resources/img/pages/misc/blog-header.jpg" alt="alt text">
                </a>

                <div class="p-4 pt-1">
                    <div class="h-12">
                        <h4 class="heading-4 my-2 min-h-full p-0">ingenie - Lifestyle</h4>
                    </div>

                    <p class="block leading-snug text-sm pr-3">
                        Steer towards our lifestyle blog to see whats new at ingenie and insurance as a whole.
                    </p>

                    <span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
                        <a href="<?php echo do_shortcode("[ig_young_drivers_guide_url]"); ?>">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
        </div>

    </section>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">

    &lt;section class="flex flex-wrap justify-center py-10"&gt;

        &lt;div class="w-full sm:w-1/2 lg:w-1/3"&gt;
            &lt;div class="standard-card p-0 relative"&gt;

                &lt;a href="[ig_blog_url]"&gt;&lt;img
                        class="object-cover object-center w-full h-40 md:w-full md:h-32"
                        src="/resources/img/pages/misc/ydg-header.jpg" alt="alt text"&gt;
                &lt;/a&gt;

                &lt;div class="p-4 pt-1"&gt;
                    &lt;div class="h-12"&gt;
                        &lt;h4 class="heading-4 my-2 min-h-full p-0"&gt;ingenie - Young Driver Guide&lt;/h4&gt;
                    &lt;/div&gt;

                    &lt;p class="block leading-snug text-sm pr-3"&gt;
                        Just head to our Young Driver’s Guide for all the learner advice you need to get road-ready.
                    &lt;/p&gt;

                    &lt;span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute"&gt;
                        &lt;a href="[ig_blog_url]"&gt;
                            &lt;svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor"&gt;
                                &lt;path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" /&gt;
                            &lt;/svg&gt;
                        &lt;/a&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="w-full sm:w-1/2 lg:w-1/3"&gt;
            &lt;div class="standard-card p-0 relative"&gt;

                &lt;a href="[ig_parents_guide_url]"&gt;&lt;img
                        class="object-cover object-center w-full h-40 md:w-full md:h-32"
                        src="/resources/img/pages/misc/pg-header.jpg" alt="alt text"&gt;
                &lt;/a&gt;

                &lt;div class="p-4 pt-1"&gt;
                    &lt;div class="h-12"&gt;
                        &lt;h4 class="heading-4 my-2 min-h-full p-0"&gt;ingenie - Parents Guide&lt;/h4&gt;
                    &lt;/div&gt;

                    &lt;p class="block leading-snug text-sm pr-3"&gt;
                        Just head to our Parents Guide for all the learner advice you may need to help your budding
                        learner.
                    &lt;/p&gt;

                    &lt;span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute"&gt;
                        &lt;a href="[ig_parents_guide_url]"&gt;
                            &lt;svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor"&gt;
                                &lt;path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" /&gt;
                            &lt;/svg&gt;
                        &lt;/a&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="w-full sm:w-1/2 lg:w-1/3"&gt;
            &lt;div class="standard-card p-0 relative"&gt;

                &lt;a href="[ig_young_drivers_guide_url]"&gt;&lt;img
                        class="object-cover object-center w-full h-40 md:w-full md:h-32"
                        src="/resources/img/pages/misc/blog-header.jpg" alt="alt text"&gt;
                &lt;/a&gt;

                &lt;div class="p-4 pt-1"&gt;
                    &lt;div class="h-12"&gt;
                        &lt;h4 class="heading-4 my-2 min-h-full p-0"&gt;ingenie - Lifestyle&lt;/h4&gt;
                    &lt;/div&gt;

                    &lt;p class="block leading-snug text-sm pr-3"&gt;
                        Steer towards our lifestyle blog to see whats new at ingenie and insurance as a whole.
                    &lt;/p&gt;

                    &lt;span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute"&gt;
                        &lt;a href="[ig_young_drivers_guide_url]"&gt;
                            &lt;svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor"&gt;
                                &lt;path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" /&gt;
                            &lt;/svg&gt;
                        &lt;/a&gt;
                    &lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

    &lt;/section&gt;    
    </code>
    </pre>
    </div>
    <!-- MARKUP -->

    <!-- 
-------------------------
NOTIFICATIONS

SECTION - WIP
-------------------------	
-->
    <span id="notifications" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>
    <!-- Notifications -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Notifications
        </span>
    </h2>

    <!-- <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Banners - using shortcodes</h3> -->

    <?php echo do_shortcode("[get-message color='info' message='This is a info banner notification' link='cheese.html']"); ?>

    <?php echo do_shortcode("[get-message color='warning' message='This is a warning banner notification with no link passed in']"); ?>

    <?php echo do_shortcode("[get-message color='success' message='This is a success banner notification' link='#']"); ?>

    <?php echo do_shortcode("[get-message color='alert' message='This is a alert banner notification' link='#']"); ?>

    <?php echo do_shortcode("[get-message color='info' message='This message adds a <a href=\"/styleguide-stats\" class=\"primary-link-sm\">inline link</a> to the message argument for more control over link. Escape the double quotes with a backslash! Use HTML entities if using single &rsquo; quote in message.']"); ?>
    <p>

        <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
    [get-message color='info' message='This is a info banner notification' link='cheese.html']
    [get-message color='warning' message='This is a warning banner notification with no link passed in']
    [get-message color='success' message='This is a success banner notification' link='#']
    [get-message color='alert' message='This is a alert banner notification' link='#']
    [get-message color='info' message='This message adds a  &lt;a href=\"/styleguide-stats\" class=\"primary-link-sm\"&gt;inline link&lt;/a&gt; to the message argument for more control over link. Escape the double quotes with a backslash! Use HTMlL entities if using single &rsquo; quote in message.']
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <!-- 
-------------------------
ACCORDIANS

SECTION - WIP
-------------------------	
-->
    <span id="accordians" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>
    <!-- Carousels -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Accordians
        </span>
    </h2>
    <div class="max-w-xl mx-auto mt-2 mb-20">
        <div class="accordian heading-4 border-b flex p-2 mx-0">
            <!-- <span class="flex-none m-auto mx-1 mt-1">
					<svg class="h-10 w-10" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<title>cu-change-icon</title>
						<g id="cu-change-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g fill="#2980B9" fill-rule="nonzero" id="Path_3267">
								<path d="M30.5126286,39.8927118 C30.5054311,40.5723936 29.9428269,41.1178886 29.2553789,41.1117277 L15.717493,41.1117277 C15.0365657,41.1117277 14.484565,40.5659557 14.484565,39.8927118 C14.484565,39.2194679 15.0365657,38.6736959 15.717493,38.6736959 L29.2553789,38.6736959 C29.9428269,38.667535 30.5054311,39.2130301 30.5126286,39.8927118 L30.5126286,39.8927118 Z M11.2254443,22.1975583 C5.02580262,22.1975583 0,17.2284656 0,11.0987791 C0,4.96909268 5.02580262,0 11.2254443,0 C17.4250861,0 22.4508887,4.96909268 22.4508887,11.0987791 C22.4508887,14.0423584 21.2682113,16.8653763 19.1630322,18.9468011 C17.057853,21.028226 14.2026173,22.1975583 11.2254443,22.1975583 Z M6.1515435,8.81798002 L9.05332086,5.94894562 L7.36950421,4.28412875 L4.46959775,7.14946356 L6.1515435,8.81798002 Z M6.95603368,9.61524232 L14.1459308,16.7240104 L17.3582788,16.9496855 L17.0420954,13.8475768 L9.85219832,6.73880873 L6.95603368,9.61524232 Z M29.2553789,43.9918609 L15.717493,43.9918609 C15.0365657,43.9918609 14.484565,44.5376329 14.484565,45.2108768 C14.484565,45.8841207 15.0365657,46.4298927 15.717493,46.4298927 L29.2553789,46.4298927 C29.9363062,46.4298927 30.4883068,45.8841207 30.4883068,45.2108768 C30.4883068,44.5376329 29.9363062,43.9918609 29.2553789,43.9918609 Z M30.8007484,18.5479097 L24.0879326,18.5479097 C23.5530547,19.4390119 22.9260584,20.2728062 22.2170253,21.0358861 L29.6856876,21.0358861 L29.6856876,24.6392897 L33.393826,24.6392897 L33.4761459,24.7206807 L33.4761459,50.4532001 L11.7062675,50.4532001 L11.7062675,25.8250092 C11.5453695,25.8250092 11.3882133,25.8490566 11.2273152,25.8490566 C10.5435105,25.8435604 9.86089455,25.791644 9.18428438,25.6936737 L9.18428438,52.9411765 L36,52.9411765 L36,23.6884943 L30.8007484,18.5479097 Z M29.2553789,28.0392157 L15.717493,28.0392157 C15.036049,28.0392157 14.4836296,28.5854018 14.4836296,29.2591565 C14.4836296,29.9329112 15.036049,30.4790973 15.717493,30.4790973 L29.2553789,30.4790973 C29.9368228,30.4790973 30.4892423,29.9329112 30.4892423,29.2591565 C30.4892423,28.5854018 29.9368228,28.0392157 29.2553789,28.0392157 L29.2553789,28.0392157 Z M29.2553789,33.3573807 L15.717493,33.3573807 C15.036049,33.3573807 14.4836296,33.9035668 14.4836296,34.5773215 C14.4836296,35.2510762 15.036049,35.7972623 15.717493,35.7972623 L29.2553789,35.7972623 C29.9368228,35.7972623 30.4892423,35.2510762 30.4892423,34.5773215 C30.4892423,33.9035668 29.9368228,33.3573807 29.2553789,33.3573807 L29.2553789,33.3573807 Z"></path>
							</g>
						</g>
					</svg>
				</span> -->
            <h4 class="flex-auto heading-4 pr-4 py-3">
                Accordian heading
            </h4>
            <span class="flex-none pointer m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 align-baseline" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </div>
        <div class="accordian-pane flex-wrap p-3 pt-2 text-sm p-8">
            <p class="my-5">Accordian content</p>
        </div>
        <div class="accordian heading-4 border-b flex p-2 mx-0">
            <h4 class="flex-auto heading-4 pr-4 py-3">
                Accordian heading 2
            </h4>
            <span class="flex-none pointer m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 align-baseline" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </div>
        <div class="accordian-pane flex-wrap p-3 pt-2 text-sm p-8">
            <p class="my-5">Accordian content 2</p>
        </div>
        <div class="accordian heading-4 border-b flex p-2 mx-0">
            <h4 class="flex-auto heading-4 pr-4 py-3">
                Accordian heading 3
            </h4>
            <span class="flex-none pointer m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 align-baseline" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </div>
        <div class="accordian-pane flex-wrap p-3 pt-2 text-sm p-8">
            <p class="my-5">Accordian content 3</p>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
    &lt;div class="max-w-xl mx-auto mt-2 mb-20"&gt;
        &lt;div class="accordian heading-4 border-b flex p-2 mx-0"&gt;
            &lt;h4 class="flex-auto heading-4 pr-4 py-3"&gt;
                Accordian heading
            &lt;/h4&gt;
            &lt;span class="flex-none pointer m-auto"&gt;
                &lt;svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 align-baseline" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor"&gt;
                    &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /&gt;
                &lt;/svg&gt;
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="accordian-pane flex-wrap p-3 pt-2 text-sm p-8"&gt;
            &lt;p class="my-5"&gt;Accordian content&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="accordian heading-4 border-b flex p-2 mx-0"&gt;
            &lt;h4 class="flex-auto heading-4 pr-4 py-3"&gt;
                Accordian heading 2
            &lt;/h4&gt;
            &lt;span class="flex-none pointer m-auto"&gt;
                &lt;svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 align-baseline" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor"&gt;
                    &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /&gt;
                &lt;/svg&gt;
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="accordian-pane flex-wrap p-3 pt-2 text-sm p-8"&gt;
            &lt;p class="my-5"&gt;Accordian content 2&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <div class="max-w-xl mx-auto mt-2 mb-20">
        <h3 class="pt-2 pb-3 text-sm font-semibold text-center">With icons</h3>
        <div class="accordian heading-4 border-b flex p-2 mx-0">
            <span class="flex-none m-auto mx-1 mt-1">
                <svg class="h-10 w-10" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>cu-change-icon</title>
                    <g id="cu-change-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g fill="#2980B9" fill-rule="nonzero" id="Path_3267">
                            <path
                                d="M30.5126286,39.8927118 C30.5054311,40.5723936 29.9428269,41.1178886 29.2553789,41.1117277 L15.717493,41.1117277 C15.0365657,41.1117277 14.484565,40.5659557 14.484565,39.8927118 C14.484565,39.2194679 15.0365657,38.6736959 15.717493,38.6736959 L29.2553789,38.6736959 C29.9428269,38.667535 30.5054311,39.2130301 30.5126286,39.8927118 L30.5126286,39.8927118 Z M11.2254443,22.1975583 C5.02580262,22.1975583 0,17.2284656 0,11.0987791 C0,4.96909268 5.02580262,0 11.2254443,0 C17.4250861,0 22.4508887,4.96909268 22.4508887,11.0987791 C22.4508887,14.0423584 21.2682113,16.8653763 19.1630322,18.9468011 C17.057853,21.028226 14.2026173,22.1975583 11.2254443,22.1975583 Z M6.1515435,8.81798002 L9.05332086,5.94894562 L7.36950421,4.28412875 L4.46959775,7.14946356 L6.1515435,8.81798002 Z M6.95603368,9.61524232 L14.1459308,16.7240104 L17.3582788,16.9496855 L17.0420954,13.8475768 L9.85219832,6.73880873 L6.95603368,9.61524232 Z M29.2553789,43.9918609 L15.717493,43.9918609 C15.0365657,43.9918609 14.484565,44.5376329 14.484565,45.2108768 C14.484565,45.8841207 15.0365657,46.4298927 15.717493,46.4298927 L29.2553789,46.4298927 C29.9363062,46.4298927 30.4883068,45.8841207 30.4883068,45.2108768 C30.4883068,44.5376329 29.9363062,43.9918609 29.2553789,43.9918609 Z M30.8007484,18.5479097 L24.0879326,18.5479097 C23.5530547,19.4390119 22.9260584,20.2728062 22.2170253,21.0358861 L29.6856876,21.0358861 L29.6856876,24.6392897 L33.393826,24.6392897 L33.4761459,24.7206807 L33.4761459,50.4532001 L11.7062675,50.4532001 L11.7062675,25.8250092 C11.5453695,25.8250092 11.3882133,25.8490566 11.2273152,25.8490566 C10.5435105,25.8435604 9.86089455,25.791644 9.18428438,25.6936737 L9.18428438,52.9411765 L36,52.9411765 L36,23.6884943 L30.8007484,18.5479097 Z M29.2553789,28.0392157 L15.717493,28.0392157 C15.036049,28.0392157 14.4836296,28.5854018 14.4836296,29.2591565 C14.4836296,29.9329112 15.036049,30.4790973 15.717493,30.4790973 L29.2553789,30.4790973 C29.9368228,30.4790973 30.4892423,29.9329112 30.4892423,29.2591565 C30.4892423,28.5854018 29.9368228,28.0392157 29.2553789,28.0392157 L29.2553789,28.0392157 Z M29.2553789,33.3573807 L15.717493,33.3573807 C15.036049,33.3573807 14.4836296,33.9035668 14.4836296,34.5773215 C14.4836296,35.2510762 15.036049,35.7972623 15.717493,35.7972623 L29.2553789,35.7972623 C29.9368228,35.7972623 30.4892423,35.2510762 30.4892423,34.5773215 C30.4892423,33.9035668 29.9368228,33.3573807 29.2553789,33.3573807 L29.2553789,33.3573807 Z">
                            </path>
                        </g>
                    </g>
                </svg>
            </span>
            <h4 class="flex-auto heading-4 pr-4 py-3">
                Accordian heading with icon
            </h4>
            <span class="flex-none pointer m-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 align-baseline" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </span>
        </div>
        <div class="accordian-pane flex-wrap p-3 pt-2 text-sm p-8">
            <p class="my-5">Accordian content</p>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="max-w-xl mx-auto mt-2 mb-20"&gt;
        &lt;h3 class="pt-2 pb-3 text-sm font-semibold text-center"&gt;With icons&lt;/h3&gt;
        &lt;div class="accordian heading-4 border-b flex p-2 mx-0"&gt;
            &lt;span class="flex-none m-auto mx-1 mt-1"&gt;
                &lt;svg class="h-10 w-10" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"&gt;
                    &lt;title&gt;cu-change-icon&lt;/title&gt;
                    &lt;g id="cu-change-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"&gt;
                        &lt;g fill="#2980B9" fill-rule="nonzero" id="Path_3267"&gt;
                            &lt;path
                                d="M30.5126286,39.8927118 C30.5054311,40.5723936 29.9428269,41.1178886 29.2553789,41.1117277 L15.717493,41.1117277 C15.0365657,41.1117277 14.484565,40.5659557 14.484565,39.8927118 C14.484565,39.2194679 15.0365657,38.6736959 15.717493,38.6736959 L29.2553789,38.6736959 C29.9428269,38.667535 30.5054311,39.2130301 30.5126286,39.8927118 L30.5126286,39.8927118 Z M11.2254443,22.1975583 C5.02580262,22.1975583 0,17.2284656 0,11.0987791 C0,4.96909268 5.02580262,0 11.2254443,0 C17.4250861,0 22.4508887,4.96909268 22.4508887,11.0987791 C22.4508887,14.0423584 21.2682113,16.8653763 19.1630322,18.9468011 C17.057853,21.028226 14.2026173,22.1975583 11.2254443,22.1975583 Z M6.1515435,8.81798002 L9.05332086,5.94894562 L7.36950421,4.28412875 L4.46959775,7.14946356 L6.1515435,8.81798002 Z M6.95603368,9.61524232 L14.1459308,16.7240104 L17.3582788,16.9496855 L17.0420954,13.8475768 L9.85219832,6.73880873 L6.95603368,9.61524232 Z M29.2553789,43.9918609 L15.717493,43.9918609 C15.0365657,43.9918609 14.484565,44.5376329 14.484565,45.2108768 C14.484565,45.8841207 15.0365657,46.4298927 15.717493,46.4298927 L29.2553789,46.4298927 C29.9363062,46.4298927 30.4883068,45.8841207 30.4883068,45.2108768 C30.4883068,44.5376329 29.9363062,43.9918609 29.2553789,43.9918609 Z M30.8007484,18.5479097 L24.0879326,18.5479097 C23.5530547,19.4390119 22.9260584,20.2728062 22.2170253,21.0358861 L29.6856876,21.0358861 L29.6856876,24.6392897 L33.393826,24.6392897 L33.4761459,24.7206807 L33.4761459,50.4532001 L11.7062675,50.4532001 L11.7062675,25.8250092 C11.5453695,25.8250092 11.3882133,25.8490566 11.2273152,25.8490566 C10.5435105,25.8435604 9.86089455,25.791644 9.18428438,25.6936737 L9.18428438,52.9411765 L36,52.9411765 L36,23.6884943 L30.8007484,18.5479097 Z M29.2553789,28.0392157 L15.717493,28.0392157 C15.036049,28.0392157 14.4836296,28.5854018 14.4836296,29.2591565 C14.4836296,29.9329112 15.036049,30.4790973 15.717493,30.4790973 L29.2553789,30.4790973 C29.9368228,30.4790973 30.4892423,29.9329112 30.4892423,29.2591565 C30.4892423,28.5854018 29.9368228,28.0392157 29.2553789,28.0392157 L29.2553789,28.0392157 Z M29.2553789,33.3573807 L15.717493,33.3573807 C15.036049,33.3573807 14.4836296,33.9035668 14.4836296,34.5773215 C14.4836296,35.2510762 15.036049,35.7972623 15.717493,35.7972623 L29.2553789,35.7972623 C29.9368228,35.7972623 30.4892423,35.2510762 30.4892423,34.5773215 C30.4892423,33.9035668 29.9368228,33.3573807 29.2553789,33.3573807 L29.2553789,33.3573807 Z"&gt;
                            &lt;/path&gt;
                        &lt;/g&gt;
                    &lt;/g&gt;
                &lt;/svg&gt;
            &lt;/span&gt;
            &lt;h4 class="flex-auto heading-4 pr-4 py-3"&gt;
                Accordian heading with icon
            &lt;/h4&gt;
            &lt;span class="flex-none pointer m-auto"&gt;
                &lt;svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 align-baseline" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor"&gt;
                    &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /&gt;
                &lt;/svg&gt;
            &lt;/span&gt;
        &lt;/div&gt;
        &lt;div class="accordian-pane flex-wrap p-3 pt-2 text-sm p-8"&gt;
            &lt;p class="my-5"&gt;Accordian content&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->




    <!-- 
-------------------------
MODALS

SECTION
-------------------------	
-->
    <span id="modals" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>
    <!-- Modals -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Modals
        </span>
    </h2>


    <!-- MODAL Trigger -->
    <p class="my-5 text-center">
        Simple modal.pop up. Give it a try!...</p>
    <p class="my-5 text-center"> <a class="modal-trigger primary-btn" data-id="test-modal-1">Open modal -
            1</a>
        <a class="modal-trigger secondary-btn-clear" data-id="test-modal-2">Open modal - 2</a>
    </p>


    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Trigger</h3>
        <pre class="text-xs">
        <code class="language-html">
        &lt;a class="modal-trigger primary-btn" data-id="test-modal-1"&gt;Open
            modal&lt;/a&gt;
        &lt;a class="modal-trigger primary-btn" data-id="test-modal-2"&gt;Open
        modal&lt;/a&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Modal</h3>
        <pre class="text-xs">
        <code class="language-html">
    &lt;div id="test-modal-1"
        class="modal z-100 fixed left-0 top-0 md:top-20 md:left-1/4 m-auto bg-white w-screen md:w-1/2 md:w-1/2 h-screen sm:h-auto p-8 transform scale-0 transition-transform duration-300"&gt;
        &lt;button type="button" class="close-modal focus:outline-none absolute right-3 top-3"&gt;
            &lt;svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor"&gt;
                &lt;path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /&gt;
            &lt;/svg&gt;
        &lt;/button&gt;
        &lt;h2 class="heading-2"&gt;Modal heading -1&lt;/h2&gt;
        &lt;div class="p-1"&gt;
            &lt;p class="p-2"&gt;Modal content -1&lt;/p&gt;
        &lt;/div&gt;
        &lt;button class="close-modal inline-flex primary-btn my-2 mx-auto"&gt;Close&lt;/button&gt;
    &lt;/div&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->


    <!-- MODAL Test 1 -->
    <div id="test-modal-1"
        class="modal z-100 fixed left-0 top-0 md:top-20 md:left-1/4 m-auto bg-white w-screen md:w-1/2 md:w-1/2 h-screen sm:h-auto p-8 transform scale-0 transition-transform duration-300">
        <button type="button" class="close-modal focus:outline-none absolute right-3 top-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        <h2 class="heading-2">Modal heading -1</h2>
        <div class="p-1">

            <p class="p-2">Modal content -1</p>
        </div>

        <button class="close-modal inline-flex primary-btn my-2 mx-auto">Close</button>
    </div>

    <!-- MODAL Test 2 -->
    <div id="test-modal-2"
        class="modal z-100 fixed left-0 top-0 md:top-20 md:left-1/4 m-auto bg-white w-screen md:w-1/2 md:w-1/2 h-screen sm:h-auto p-8 transform scale-0 transition-transform duration-300">
        <button type="button" class="close-modal focus:outline-none absolute right-3 top-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        <h2 class="heading-2">Modal heading -2</h2>

        <div class="p-1">
            <p class="p-2">Modal content -2</p>
        </div>

        <div class="flex justify-between">
            <div class="my-1"> <button class="close-modal inline-flex primary-btn">Close</button></div>
            <div class=""> <?php echo do_shortcode("[yd-quote-button text='Young Driver quote']") ?></div>
        </div>

    </div>




</div>

<!-- 
-------------------------
CAROUSELS/SLIDERS

SECTION - WIP
-------------------------	
-->

<div class="container mx-auto">
    <span id="carousels" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>
    <!-- Accordians -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Carousels
        </span>
    </h2>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">ingenie Quotes Slider (uses shortcodes)
    </h3>

    <?php echo do_shortcode("[get-message color='info' message='Use \"ig-quotes\" custom posts in Wordpress admin. Pass in how many quote you want to show in slider.']"); ?>
</div>

<div class="mx-auto">
    <!-- What our customers say -->
    <div class="py-8 bg-ig-li-blue-500">
        <?php echo do_shortcode("[customer-quotes number='5']"); ?>
    </div>
</div>

<div class="container mx-auto">


    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
        [customer-quotes number='8']
  </code>
</pre>
    </div>
    <!-- MARKUP -->

</div>


<!-- 
-------------------------
HERO BANNERS

SECTION - WIP
-------------------------	
-->

<div class="container mx-auto">

    <span id="hero" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>

    <!-- Hero Image shortcode -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Hero/Banner Images
        </span>
    </h2>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Standard (uses shortcodes)
    </h3>
    <?php echo do_shortcode("[get-message color='warning' message='All images for page level are keep in resources folder in organized dir structure']"); ?>
    <?php echo do_shortcode("[get-message color='info' message='Can pass in img source name and DO NOT forget the descriptive alt text for SEO purposes. Optional mobile img source']"); ?>

    <?php echo do_shortcode("[get-hero src='ig-homepage-desktop.svg' alt='ingenie insurance homepage']"); ?>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="container mx-auto"&gt;
        [get-hero src='ig-homepage-desktop.svg' alt='ingenie insurance homepage']
        &lt;/div&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->
</div>



<div class="mx-auto">
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Full width (uses shortcodes)</h3>
    <?php echo do_shortcode("[get-message color='info' message='Get full width if placed outside page container div']"); ?>

    <!-- Hero Image -->
    <?php echo do_shortcode("[get-hero src='ig-homepage-desktop.svg' alt='homepage banner alt text']"); ?>
</div>

<div class="container mx-auto">

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="mx-auto"&gt;
        [get-hero src="yd-homepage-desktop.svg" mobilesrc="yd-homepage-mobile.svg" alt="ingenie Young Drivers homepage banner"]
        &lt;/div&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->

</div>


<!-- 
-------------------------
Video

SECTION - WIP
-------------------------	
-->
<div class="container mx-auto">

    <span id="video" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>

    <!-- Video  -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Video (embedded)
        </span>
    </h2>

    <div class="relative px-0 mx-4 lg:px-12 lg:mx-40" style="padding-top: 56.25%">
        <iframe class="absolute inset-0 w-full h-full" src="https://player.vimeo.com/video/216175767" frameborder="0"
            webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-html">
        &lt;div class="relative px-0 mx-4 lg:px-12 lg:mx-40" style="padding-top: 56.25%"&gt;
            &lt;iframe class="absolute inset-0 w-full h-full" src="https://player.vimeo.com/video/216175767" frameborder="0"
                webkitAllowFullScreen mozallowfullscreen allowFullScreen&gt;&lt;/iframe&gt;
        &lt;/div&gt;
  </code>
</pre>
    </div>
    <!-- MARKUP -->

</div>

<!-- 
-------------------------
TRUST PILOT

!SECTION!
-------------------------	
-->

<div class="container mx-auto">


    <span id="trustpilot" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>
    <!-- Trust Pilot -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Trust Pilot
        </span>
    </h2>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Horizontal bar - using shortcodes</h3>
    <?php echo do_shortcode("[trust-pilot-bar]"); ?>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
        [trust-pilot-bar]
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Header mini star - using shortcodes</h3>
    <div class="text-center">
        <div class="bg-ig-li-blue-500 p-4 inline-block">
            <?php echo do_shortcode("[trust-pilot-mini-star]"); ?>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
        [trust-pilot-mini-star]
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Footer mini - using shortcodes</h3>
    <div class="text-center">
        <div class="bg-ig-blue-500 p-4 inline-block">
            <?php echo do_shortcode("[trust-pilot-footer-mini]"); ?>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
        [trust-pilot-footer-mini]
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Slider - using shortcodes</h3>
    <div class="text-center">
        <div class="bg-ig-li-blue-500 p-4 w-full">
            <?php echo do_shortcode("[trust-pilot-slider]"); ?>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
        [trust-pilot-slider]
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Slider - using shortcodes</h3>
    <div class="text-center">
        <div class="bg-ig-blue-500 p-4 inline-block">
            <?php echo do_shortcode("[trust-pilot-review-us]"); ?>
        </div>
    </div>

    <!-- MARKUP -->
    <div class="mb-10 snippets hidden">
        <pre class="text-xs">
        <code class="language-php">
        [trust-pilot-review-us]
  </code>
</pre>
    </div>
    <!-- MARKUP -->

</div>

<?php get_footer(); ?>
