<?php
/*
 * Template Name: Style Guide Stats Template
 * Template Post Type: page
 */

get_header();
?>

<!-- START: Highlight the code examples -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.0.1/highlight.min.js"></script>
<script>
hljs.highlightAll();
</script>
<!-- END: Highlight the code examples -->


<div class="bg-ig-li-blue-500 text-center p-8 my-4">
    <h1 class="pt-4 text-center">Styleguide - Stats</h1>
    <h3 class="heading-3 max-w-3xl mx-auto">Reusable UI blocks and code snippets to speed up page building. Some
        shortcodes also exist for easier implementation</h3>

    <div class="max-w-2xl m-auto py-10">
        <a class="inline-block filter primary-btn my-1" href="#fonts">Fonts</a>
        <a class="inline-block filter primary-btn my-1" href="#smallprint">Small Print</a>
        <a class="inline-block filter primary-btn my-1" href="#links">Buttons</a>
        <a class="inline-block filter primary-btn my-1" href="#cards">Cards</a>
        <a class="inline-block filter primary-btn my-1" href="#notifications">Notifications</a>
        <a class="inline-block filter primary-btn my-1" href="#trustpilot">Trust Pilot</a>
        <a class="inline-block filter primary-btn my-1" href="#accordians">Accordians</a>
        <a class="inline-block filter primary-btn my-1" href="#modals">Modals</a>
        <a class="inline-block filter primary-btn my-1" href="#carousels">Carousels</a>
        <a class="inline-block filter primary-btn my-1" href="#hero">Hero Banners</a>
        <a class="inline-block filter primary-btn my-1" href="#video">Video</a>
        <a class="inline-block filter primary-btn my-1" href="#misc">Misc</a>
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

    <h1 class="heading-1">This is example heading 1</h1>
    <h2 class="heading-2">This is example heading 2</h2>
    <h3 class="heading-3">This is example heading 3</h3>
    <h4 class="heading-4">This is example heading 4</h4>
    <h5 class="heading-5">This is example heading 5</h5>

    <!-- MARKUP -->
    <div class="mb-10 mt-2">
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
    <div class="mb-10 mt-2">
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
    <div class="mb-10 mt-2">
        <pre class="text-xs">
        <code class="language-php">
        * [learner_sp_dates_discount_txt]
  </code>
</pre>
    </div>
    <!-- MARKUP -->

    <?php echo do_shortcode("[get-message color='warning' message='Q. Should we be using *, †, ‡, §, ‖, etc.? See Wikipedia if interested' link='https://en.wikipedia.org/wiki/Note_(typography)']"); ?>

    <?php echo do_shortcode("[get-message color='info' message='See full
        list of ingenie stat variables and thier usage on the ingenie <a href=\"/styleguide-stats\"
            class=\"primary-link-sm\">styleguide stats</a> page.']"); ?>
    <p>


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
    <div class="mb-10 mt-2">
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
    <div class="mb-10 mt-2">
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
    <div class="mb-10 mt-2">
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
    <div class="mb-10 mt-2">
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
    <div class="mb-10 mt-2">
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
    <div class="mb-10 mt-2">
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
    <div class="mb-10 mt-2">
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
    <div class="mb-10 mt-2">
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

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Cards - boxed 2 col</h3>
    <!-- 2 column example -->
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

    </div>

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

    <!-- Cards - with button -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Cards - boxed with buttons</h3>

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

        <div class="flex-auto md:flex-1">
            <div class="text-center standard-card">

                <h3 class="heading-3">Passed my test</h3>
                <ul class="standard-list">
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well***
                    </li>
                    <li>Save an average of <?php echo do_shortcode("[yd_renewal_discount_txt]"); ?> on renewal**</li>
                </ul>

                <div class="px-1 pt-4 pb-2">
                    <a href="/young-driver-insurance" class="inline-flex primary-link-sm">
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
    </div>


    <!-- Cards - single with button -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Card - single box with buttons</h3>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1 max-w-none md:max-w-md">
            <div class="text-center standard-card">
                <!-- <h3 class="heading-3">Learning in my car</h3> -->
                <ul class="list-inside standard-list">
                    <li>Drive someone’s car from <?php echo do_shortcode("[learner_quotes_start_from_txt]"); ?> a day*
                    </li>
                    <li>Flexible cover (1 month to 6 months)</li>
                    <li>The car owner's NCD is protected
                    </li>
                </ul>
                <div class="px-1 pt-4 pb-2">
                    <a href="/learner-driver-insurance/how-it-works" class="inline-flex secondary-link-sm">
                        <span>More info</span>
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

    <!-- MARKUP -->
    <div class="mb-10 mt-2">
        <pre class="text-xs">
        <code class="language-php">
    [get-message color='info' message='This is a info banner notification' link='cheese.html']
    [get-message color='warning' message='This is a warning banner notification with no link passed in']
    [get-message color='success' message='This is a success banner notification' link='#']
    [get-message color='alert' message='This is a alert banner notification' link='#']
  </code>
</pre>
    </div>
    <!-- MARKUP -->


    <!-- 
-------------------------
TRUST PILOT

SECTION - WIP
-------------------------	
-->
    <span id="trustpilot" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>
    <!-- Trust Pilot -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Trust Pilot
        </span>
    </h2>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Horizontal bar - using shortcodes</h3>
    <?php echo do_shortcode("[trust-pilot-bar]"); ?>
    <br />

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

    <!-- MODAL OVERLAY -->
    <!-- <div id="modal-overlay"
        class="cursor-pointer close-modal z-75 fixed hidden top-0 left-0 w-screen h-screen flex items-center justify-center bg-ig-blue-700 bg-opacity-50 ">
    </div> -->

    <!-- MODAL : Always next to modalTrigger -->
    <p class="my-5 text-center">
        Try!... <a id="modalTrigger" class="modal-trigger primary-btn" style="cursor:pointer;" data-id="test-modal">Open
            modal</a> Simple
        modal opens next .model in dom.
    </p>
    <div
        class="modal z-100 fixed left-0 top-0 md:top-20 md:left-1/4 m-auto bg-white w-screen md:w-1/2 md:w-1/2 h-screen sm:h-auto p-8 transform scale-0 transition-transform duration-300">
        <button type="button" class="close-modal focus:outline-none absolute right-3 top-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
        <h2 class="heading-2">Modal heading</h2>
        <div class="p-1">

            <p class="p-2">Modal content</p>
        </div>

        <button class="close-modal inline-flex primary-btn my-2 mx-auto">Close</button>
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

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Examples (use shortcodes and custom posts 'ig
        quotes')
    </h3>
</div>

<div class="mx-auto">
    <!-- What our customers say -->
    <div class="py-8 bg-ig-li-blue-500">
        <?php echo do_shortcode("[customer-quotes number='8']"); ?>
    </div>

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
            Hero Images
        </span>
    </h2>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Background hero or banner images uses
        shortcodes
    </h3>
    <?php echo do_shortcode("[get-hero src='ig-homepage-desktop.svg' alt='homepage banner alt text']"); ?>
</div>

<div class="mx-auto">
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center">Hero banner - outside container (full width)
        <!-- Hero Image -->
        <?php echo do_shortcode("[get-hero src='ig-homepage-desktop.svg' alt='homepage banner alt text']"); ?>
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

</div>



<!-- 
-------------------------
Misc

SECTION - Misc
-------------------------	
-->
<div id="misc" class="mx-auto">

    <span id="video" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span>

    <!-- Video  -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Misc (sections)
        </span>
    </h2>

    <!-- Young driver app download -->
    <section class="p-10 m:p-20 bg-ig-li-blue-500 text-center">

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:flex-none">
                <div class="">
                    <img class="w-11/12 md:w-80 mx-auto"
                        src="/resources/img/pages/young-drivers/fitting-the-box-app.png" alt="young driver app view">
                </div>
            </div>

            <div class="flex-auto md:flex-1">

                <h1 class="heading-1 my-3">ingenie Young Driver app</h1>
                <h2 class="heading-2 my-2">Check out the ingenie <span class="text-ig-orange-500 font-bold">Young
                        Driver
                        app</span> for how you can earn top discounts off your insurance.</h2>

                <p class="py-1">
                    <span class="font-semibold">FREE Download</span> available for iOS or Android
                </p>

                <div class="flex flex-wrap justify-center mb-4 mx-auto w-10/12 lg:w-1/2">
                    <div class="flex-1">
                        <a href="https://itunes.apple.com/gb/app/ingenie/id513276877?mt=8&ign-mpt=uo%3D4"><img
                                class="mx-auto w-48 inline px-1" src="/resources/img/pages/icons/app-store.svg"
                                alt="app store app" target="_blank"></a>
                    </div>
                    <div class="flex-1">
                        <a href="https://play.google.com/store/apps/details?id=com.ingenie.app&hl=en"><img
                                class="mx-auto w-48 inline px-1" src="/resources/img/pages/icons/google-play.svg"
                                alt="google play app" target="_blank"></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- OBD tracker -->
    <div class="mt-12 p-10 bg-ig-li-blue-500 text-center">
        <p class="my-4 px-4">
            Enter your car’s make, model and year into the search box below and our handy box location checker will
            show
            you exactly where your self-fit box should be plugged in.
        </p>

        <div class="container mx-auto">
            <iframe id="obd" src="https://obdchecker.trakm8.net/" frameborder="0" scrolling="no"
                align="center"></iframe>
        </div>

        <h3 class="heading-3 text-center mt-6">What’s an OBD port?</h3>

        <p class="mt-2 mb-4 md:px-10 text-sm">
            An OBD, or an on-board diagnostics port if you like to be fancy, is a technical term for a socket in
            your
            car that can give out data on how the car’s performing. But we’re only interested in the how you’re
            driving
            bit.
        </p>
    </div>

    <!-- Messages -->
    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1 md:max-w-3xl max-w-none">
            <div class="standard-card bg-white pb-3">
                <table class="table-fixed">

                    <tbody>
                        <tr>
                            <td class="w-1/4 bg-good px-3 py-5 text-center ">GOOD</td>
                            <td class="w-auto p-3"><span class="font-semibold">Good</span> messages show you're
                                driving
                                consistently well</td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-okay px-3 py-5 text-center ">OKAY</td>
                            <td class="w-auto p-3"><span class="font-semibold">Okay</span> messages mean in general
                                you've been driving well, but there are areas of your driving you need to work on
                                before
                                you can get a Good message</td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-improvement px-3 py-5 text-center ">IMPROVEMENT</td>
                            <td class="w-auto p-3"><span class="font-semibold">Needs Improvement</span> messages
                                show
                                the areas you need to improve on to stay safe</td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-unsafe px-3 py-5 text-center ">UNSAFE</td>
                            <td class="w-auto p-3"><span class="font-semibold">Unsafe</span> messages highlight that
                                you
                                urgently need to improve your driving as it's becoming a concern</td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-dangerous px-3 py-5 text-white text-center ">UNDANGEROUS</td>
                            <td class="w-auto p-3"><span class="font-semibold">Dangerous</span> messages warn you
                                there’s a serious problem with your driving and you need to take immediate action
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-highly-dangerous px-3 py-5 text-white text-center ">HIGHLY DANGEROUS
                            </td>
                            <td class="w-auto p-3"><span class="font-semibold">Highly Dangerous</span> messages are
                                very
                                rare - we'll only send one if a driver starts to really worry us. You'll get one of
                                these messages if you:
                                <br />
                                - Drive extremely recklessly (e.g. driving excessively over the speed limit)
                                <br />
                                - Get an extremely high number of harsh braking and/or harsh cornering events
                                <br />
                                - Get 6 Dangerous messages for speeding in the year
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>


    <!-- Pros/cons -->
    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="text-center">
                <h3 class="heading-3 my-3">Covered</h3>
                <ul class="standard-list list-none">
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-success-900"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Driving any time you like - no night-time curfew here!
                        </p>
                    </li>
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-success-900"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Stolen car recovery if it's been reported as missing
                        </p>
                    </li>
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-success-900"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Your audio system up to £300 as long as it's a permanent fixture
                        </p>
                    </li>
                    <li class="border-b  border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-success-900"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>A car to get you around if yours is being fixed by one of our repairers*
                        </p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center">
                <h3 class="heading-3 my-3">NOT Covered</h3>
                <ul class="standard-list list-none">
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-alert-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Modifications like alloy wheels or tinted windows
                        </p>
                    </li>
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-alert-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Taking your car on a track
                        </p>
                    </li>
                    <li class="border-b border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-alert-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Using your car for deliveries or racing
                        </p>
                    </li>
                    <li class="border-b  border-gray-300 mb-1">
                        <p class="inline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 pr-1 pb-1 text-alert-500"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Driving other cars if you're under 25
                        </p>
                    </li>
                </ul>
            </div>
        </div>



    </div>


</div>







<?php get_footer(); ?>
