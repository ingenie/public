<?php
/*
 * Template Name: Style Guide Page Template
 * Template Post Type: page
 */

get_header();
?>

<div class="bg-ig-li-blue-500 text-center p-8 my-4">
    <h1 class="pt-4 text-center">Styleguide - Components</h1>
    <h3 class="heading-3">, take a look to see if we’ve answered it already</h3>

    <div class="max-w-2xl m-auto my-6">
        <a class="inline-block filter primary-btn my-1" href="#fonts">Fonts</a>
        <a class="inline-block filter primary-btn my-1" href="#links">Buttons</a>
        <a class="inline-block filter primary-btn my-1" href="#cards">Cards</a>
        <a class="inline-block filter primary-btn my-1" href="#notifications">Notifications</a>
        <a class="inline-block filter primary-btn my-1" href="#trustpilot">Trust Pilot</a>
        <a class="inline-block filter primary-btn my-1" href="#accordians">Accordians</a>
        <a class="inline-block filter primary-btn my-1" href="#carousels">Carousels</a>
        <a class="inline-block filter primary-btn my-1" href="#hero">Hero Banners</a>
        <a class="inline-block filter primary-btn my-1" href="#video">Video</a>
        <a class="inline-block filter primary-btn my-1" href="#misc">Misc</a>
    </div>

    <p class="pb-5 text-sm text-center text-ig-orange-500">NOTE: SVG icons available for button/links are <a
            href="https://heroicons.com" class="underline" target="_blank" rel="noopener noreferrer">available here</a>,
        compatible with tailwind css (https://heroicons.com)</p>
</div>

<div class="container mx-auto">

    <!-- 
-------------------------
HEADINGS

SECTION - WIP
-------------------------	
-->
    <!-- <span id="fonts" class="block w-full h-0 mt-0 border-t border-gray-300"></span> -->
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


    <!-- BREAK -->


    <!-- 
-------------------------
BUTTONS / LINKS

SECTION - WIP
-------------------------	
-->

    <span id="links" class="block w-full h-0 mt-0 border-t border-gray-300"></span>
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Buttons - Links
        </span>
    </h2>

    <!-- Button - Links -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Links</h3>
    <p class="my-1">
        <a href="/retrieve-a-quote-type" class="inline-flex primary-link">
            <span>Primary href link</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/retrieve-a-quote-type" class="inline-flex primary-link">
            <span>Primary href link (with icon)</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a>
    </p>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Buttons</h3>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="inline-flex primary-btn">
            <span>Primary button</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="inline-flex primary-btn-clear">
            <span>Primary button clear</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="inline-flex secondary-btn">
            <span>Secondary button</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="inline-flex secondary-btn-clear">
            <span>Secondary button clear</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="inline-flex primary-btn">
            <span>Primary button (with icon)</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="inline-flex secondary-btn">
            <span>Secondary button (with icon)</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </p>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">YD Get a quote buttons - using shortcodes</h3>
    <?php echo do_shortcode("[yd-quote-button size='-sm' text='Get a quote (small)']"); ?>
    <?php echo do_shortcode("[yd-quote-button text='Get a quote (standard)']"); ?>
    <?php echo do_shortcode("[yd-quote-button type='secondary' text='Get a quote (secondary)']"); ?>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">LD Get a quote buttons - using shortcodes</h3>
    <?php echo do_shortcode("[learner-quote-button size='-sm' text='Get a quote (small)']"); ?>
    <?php echo do_shortcode("[learner-quote-button text='Get a quote (standard)']"); ?>
    <?php echo do_shortcode("[learner-quote-button type='secondary' text='Get a quote (secondary)']"); ?>




    <!-- 
-------------------------
CARDS

SECTION - WIP
-------------------------	
-->

    <span id="cards" class="block w-full h-0 mt-0 border-t border-gray-300"></span>
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Cards
        </span>
    </h2>

    <!-- Cards - box -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Cards - boxed 3 col</h3>

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

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Cards - boxed 2 col</h3>
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

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Cards - boxed single col</h3>
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
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Cards - boxed with buttons</h3>

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

                <a href="<?php echo do_shortcode("[yd_get_a_quote_url]"); ?>"
                    class="absolute inline-flex transform -translate-x-1/2 primary-btn" target="_blank" rel="noopener">
                    <span>Get a quote</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>


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


                <a href="<?php echo do_shortcode("[learner_get_a_quote_url]"); ?>"
                    class="absolute inline-flex transform -translate-x-1/2 primary-btn" target="_blank" rel="noopener">
                    <span>Get a quote</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>


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


                <a href="<?php echo do_shortcode("[yd_get_a_quote_url]"); ?>"
                    class="absolute inline-flex transform -translate-x-1/2 primary-btn">
                    <span>Get a quote</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>


    <!-- Cards - with button -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Card - single box with buttons</h3>

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

                <a href="<?php echo do_shortcode("[ld_get_a_quote_url]"); ?>"
                    class="absolute inline-flex transform -translate-x-1/2 primary-btn" target="_blank" rel="noopener">
                    <span>Get a quote</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>


            </div>
        </div>
    </div>

    <!-- Cards - floating -->
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Cards - floating</h3>


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
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Cards - icons & label</h3>


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
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Cards - floating image & button</h3>


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
    <span id="notifications" class="block w-full h-0 mt-0 border-t border-gray-300"></span>
    <!-- Notifications -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Notifications
        </span>
    </h2>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Banners - using shortcodes</h3>

    <?php echo do_shortcode("[get-message color='info' message='This is a info banner notification' link='cheese.html']"); ?>

    <?php echo do_shortcode("[get-message color='warning' message='This is a warning banner notification with no link passed in']"); ?>

    <?php echo do_shortcode("[get-message color='success' message='This is a success banner notification' link='#']"); ?>

    <?php echo do_shortcode("[get-message color='alert' message='This is a alert banner notification' link='#']"); ?>


    <!-- 
-------------------------
SMALLPRINT

SECTION - WIP
-------------------------	
-->

    <span id="smallprint" class="block w-full h-0 mt-0 border-t border-gray-300"></span>
    <!-- Small print -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Small print
        </span>
    </h2>

    <p class="text-sm text-center text-gray-600"><span class="px-1 text-gray-200 bg-gray-700">NOTE:</span> Should we be
        using
        *, †, ‡,
        §,
        ‖, etc... ?wikipedia?</p>
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Young Driver - using shortcodes / variables
    </h3>
    <p class="small-print">
        * <?php echo do_shortcode("[yd_sp_dates_renewals_txt]"); ?><br />
        ** <?php echo do_shortcode("[yd_sp_premium_increases_txt]"); ?>


    </p>
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Learner - using shortcodes / variables
    </h3>
    <p class="small-print">
        *** <?php echo do_shortcode("[learner_sp_dates_discount_txt]"); ?><br />

    </p>


    <!-- 
-------------------------
TRUST PILOT

SECTION - WIP
-------------------------	
-->
    <span id="trustpilot" class="block w-full h-0 mt-0 border-t border-gray-300"></span>
    <!-- Trust Pilot -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Trust Pilot
        </span>
    </h2>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Horizontal bar - using shortcodes</h3>
    <?php echo do_shortcode("[trust-pilot-bar]"); ?>
    <br />

    <!-- 
-------------------------
ACCORDIANS

SECTION - WIP
-------------------------	
-->
    <span id="accordians" class="block w-full h-0 mt-0 border-t border-gray-300"></span>
    <!-- Carousels -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Accordians
        </span>
    </h2>

    <p>Content coming...</p>

</div>


<!-- 
-------------------------
CAROUSELS/SLIDERS

SECTION - WIP
-------------------------	
-->

<div class="container mx-auto">
    <span id="carousels" class="block w-full h-0 mt-0 border-t border-gray-300"></span>
    <!-- Accordians -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Carousels
        </span>
    </h2>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Examples (use shortcodes and custom posts 'ig
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

    <span id="hero" class="block w-full h-0 mt-0 border-t border-gray-300"></span>

    <!-- Hero Image shortcode -->
    <h2 class="heading-2 flex py-2 mt-16 mb-1 justify-center">
        <span class="border-l-4 border-ig-orange-500 pl-2">
            Hero Images
        </span>
    </h2>

    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Background hero or banner images uses shortcodes
    </h3>
    <?php echo do_shortcode("[get-hero src='ig-homepage-desktop.svg' alt='homepage banner alt text']"); ?>
</div>

<div class="mx-auto">
    <h3 class="pt-2 pb-3 text-sm font-semibold text-center underline">Hero banner - outside container (full width)
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

    <span id="video" class="block w-full h-0 mt-0 border-t border-gray-300"></span>

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

    <span id="video" class="block w-full h-0 mt-0 border-t border-gray-300"></span>

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
                <h2 class="heading-2 my-2">Check out the ingenie <span class="text-ig-orange-500 font-bold">Young Driver
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
            Enter your car’s make, model and year into the search box below and our handy box location checker will show
            you exactly where your self-fit box should be plugged in.
        </p>

        <div class="container mx-auto">
            <iframe id="obd" src="https://obdchecker.trakm8.net/" frameborder="0" scrolling="no"
                align="center"></iframe>
        </div>

        <h3 class="heading-3 text-center mt-6">What’s an OBD port?</h3>

        <p class="mt-2 mb-4 md:px-10 text-sm">
            An OBD, or an on-board diagnostics port if you like to be fancy, is a technical term for a socket in your
            car that can give out data on how the car’s performing. But we’re only interested in the how you’re driving
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
                            <td class="w-auto p-3"><span class="font-semibold">Good</span> messages show you're driving
                                consistently well</td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-okay px-3 py-5 text-center ">OKAY</td>
                            <td class="w-auto p-3"><span class="font-semibold">Okay</span> messages mean in general
                                you've been driving well, but there are areas of your driving you need to work on before
                                you can get a Good message</td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-improvement px-3 py-5 text-center ">IMPROVEMENT</td>
                            <td class="w-auto p-3"><span class="font-semibold">Needs Improvement</span> messages show
                                the areas you need to improve on to stay safe</td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-unsafe px-3 py-5 text-center ">UNSAFE</td>
                            <td class="w-auto p-3"><span class="font-semibold">Unsafe</span> messages highlight that you
                                urgently need to improve your driving as it's becoming a concern</td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-dangerous px-3 py-5 text-white text-center ">UNDANGEROUS</td>
                            <td class="w-auto p-3"><span class="font-semibold">Dangerous</span> messages warn you
                                there’s a serious problem with your driving and you need to take immediate action</td>
                        </tr>
                        <tr>
                            <td class="w-1/4 bg-highly-dangerous px-3 py-5 text-white text-center ">HIGHLY DANGEROUS
                            </td>
                            <td class="w-auto p-3"><span class="font-semibold">Highly Dangerous</span> messages are very
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
