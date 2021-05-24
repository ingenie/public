<?php
/*
 * Template Name: Style Guide Page Template
 * Template Post Type: page
 */

get_header();
?>

<a href="#smallprint">smallprint</a>
<a href="#carousels">carousels</a>
<a href="#notifications">notifications</a>
<a href="#trustpilot">trustpilot</a>
<a href="#hero">hero</a>
<a href="#cards">cards</a>
<a href="#video">video</a>

<div class="container mx-auto">

    <h1 class="text-center pt-4">Styleguide - Components</h1>
    <p class="text-center text-ig-orange-500 text-sm pb-5">NOTE: SVG icons available for button/links are <a
            href="https://heroicons.com" class="underline" target="_blank" rel="noopener noreferrer">available here</a>,
        compatible with tailwind css (https://heroicons.com)</p>

    <!-- 
-------------------------
BUTTONS/LINKS

SECTION - WIP
-------------------------	
-->
    <span class="h-0 block w-full border-t border-gray-300 mt-0"></span>
    <!-- Headings / Fonts -->
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Headings / Fonts</h2>
    <h1 class="heading-1">This is example heading 1</h1>
    <h2 class="heading-2">This is example heading 2</h2>
    <h3 class="heading-3">This is example heading 3</h3>
    <h4 class="heading-4">This is example heading 4</h4>


    <!-- BREAK -->
    <span class="h-0 block w-full border-t border-gray-300 mt-0"></span>
    <!-- Button - Links -->
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Buttons - Links</h2>

    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Links</h3>
    <p class="my-1">
        <a href="/retrieve-a-quote-type" class="primary-link inline-flex">
            <span>Primary href link</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/retrieve-a-quote-type" class="primary-link inline-flex">
            <span>Primary href link (with icon)</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a>
    </p>

    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Buttons</h3>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="primary-btn inline-flex">
            <span>Primary button</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="primary-btn-clear inline-flex">
            <span>Primary button clear</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="secondary-btn inline-flex">
            <span>Secondary button</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="secondary-btn-clear inline-flex">
            <span>Secondary button clear</span>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="primary-btn inline-flex">
            <span>Primary button (with icon)</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </p>
    <p class="my-1">
        <a href="/choose-a-type-of-insurance" class="secondary-btn inline-flex">
            <span>Secondary button (with icon)</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </a>
    </p>

    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">YD Get a quote buttons - using shortcodes</h3>
    <?php echo do_shortcode("[yd-quote-button size='-sm' text='Get a quote (small)']"); ?>
    <?php echo do_shortcode("[yd-quote-button text='Get a quote (standard)']"); ?>
    <?php echo do_shortcode("[yd-quote-button type='secondary' text='Get a quote (secondary)']"); ?>

    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">LD Get a quote buttons - using shortcodes</h3>
    <?php echo do_shortcode("[learner-quote-button size='-sm' text='Get a quote (small)']"); ?>
    <?php echo do_shortcode("[learner-quote-button text='Get a quote (standard)']"); ?>
    <?php echo do_shortcode("[learner-quote-button type='secondary' text='Get a quote (secondary)']"); ?>




    <!-- 
-------------------------
CARDS

SECTION - WIP
-------------------------	
-->

    <span id="cards" class="h-0 block w-full border-t border-gray-300 mt-0"></span>
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Cards</h2>

    <!-- Cards - box -->
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Cards - boxed 3 col</h3>

    <!-- 3 column example -->
    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="standard-card text-center">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->
                <h3 class="font-bold text-xl my-3">Learning in my car</h3>
                <ul class="standard-list">
                    <li>Start building up your own NCD</li>
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card text-center">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->

                <h3 class="font-bold text-xl my-3">Learning in another car</h3>
                <ul class="standard-list">
                    <li>Drive someone’s car from <?php echo do_shortcode("[learner_quotes_start_from_txt]"); ?> a day*
                    </li>
                    <li>Flexible cover (1 month to 6 months)</li>
                    <li>The car owner's NCD is protected</li>
                </ul>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card text-center">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->

                <h3 class="font-bold text-xl my-3">Passed my test</h3>
                <ul class="standard-list">
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well
                    </li>
                    <li>Save an average of <?php echo do_shortcode("[yd_renewal_discount_txt]"); ?> on renewal**</li>
                </ul>
            </div>
        </div>
    </div>

    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Cards - boxed 2 col</h3>
    <!-- 2 column example -->
    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="standard-card text-center">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->
                <h3 class="font-bold text-xl my-3">Learning in my car</h3>
                <ul class="standard-list">
                    <li>Start building up your own NCD</li>
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card text-center">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->

                <h3 class="font-bold text-xl my-3">Learning in another car</h3>
                <ul class="standard-list">
                    <li>Drive someone’s car from <?php echo do_shortcode("[learner_quotes_start_from_txt]"); ?> a day*
                    </li>
                    <li>Flexible cover (1 month to 6 months)</li>
                    <li>The car owner's NCD is protected</li>
                </ul>
            </div>
        </div>

    </div>

    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Cards - boxed single col</h3>
    <!-- 1 column example -->
    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1 md:max-w-lg max-w-none">
            <div class="standard-card text-center">
                <!--			<img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">-->
                <h3 class="font-bold text-xl my-3">Learning in my car</h3>
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
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Cards - boxed with buttons</h3>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="standard-card text-center">
                <h3 class="heading-3">Learning in my car</h3>
                <ul class="standard-list">
                    <li>Start building up your own NCD</li>
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well***
                    </li>
                </ul>
                <div class="px-1 pt-4 pb-2">
                    <a href="/young-driver-insurance/learner-car-insurance" class="primary-link-sm inline-flex">
                        <span>Find out more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>

                <a href="<?php echo do_shortcode("[yd_get_a_quote_url]"); ?>" class=" primary-btn inline-flex absolute
                    transform -translate-x-1/2" target="_blank" rel="noopener">
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
            <div class="standard-card text-center">
                <h3 class="heading-3">Learning in another car</h3>
                <ul class="standard-list">
                    <li>Drive someone’s car from <?php echo do_shortcode("[learner_quotes_start_from_txt]"); ?> a day*
                    </li>
                    <li>Flexible cover (1 month to 6 months)</li>
                    <li>The car owner's NCD is protected</li>
                </ul>

                <div class="px-1 pt-4 pb-2">
                    <a href="/learner-driver-insurance/how-it-works" class="primary-link-sm inline-flex">
                        <span>Find out more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>


                <a href="<?php echo do_shortcode("[learner_get_a_quote_url]"); ?>" class=" primary-btn inline-flex
                    absolute transform -translate-x-1/2" target="_blank" rel="noopener">
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
            <div class="standard-card text-center">

                <h3 class="heading-3">Passed my test</h3>
                <ul class="standard-list">
                    <li>Black box to help you improve</li>
                    <li>Discounts up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> if you drive well***
                    </li>
                    <li>Save an average of <?php echo do_shortcode("[yd_renewal_discount_txt]"); ?> on renewal**</li>
                </ul>

                <div class="px-1 pt-4 pb-2">
                    <a href="/young-driver-insurance" class="primary-link-sm inline-flex">
                        <span>Find out more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>


                <a href="<?php echo do_shortcode("[yd_get_a_quote_url]"); ?>" class=" primary-btn inline-flex absolute
                    transform -translate-x-1/2">
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
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Card - single box with buttons</h3>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1 max-w-none md:max-w-md">
            <div class="standard-card text-center">
                <!-- <h3 class="heading-3">Learning in my car</h3> -->
                <ul class="standard-list list-inside">
                    <li>Drive someone’s car from <?php echo do_shortcode("[learner_quotes_start_from_txt]"); ?> a day*
                    </li>
                    <li>Flexible cover (1 month to 6 months)</li>
                    <li>The car owner's NCD is protected
                    </li>
                </ul>
                <div class="px-1 pt-4 pb-2">
                    <a href="/learner-driver-insurance/how-it-works" class="secondary-link-sm inline-flex">
                        <span>More info</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-right" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>

                <a href="<?php echo do_shortcode("[ld_get_a_quote_url]"); ?>" class=" primary-btn inline-flex absolute
                    transform -translate-x-1/2" target="_blank" rel="noopener">
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
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Cards - floating</h3>


    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/pound-icon.svg" alt="upfront savings"
                    width="48" height="48">
                <h3 class="heading-3">Save <?php echo do_shortcode("[yd_up_front_txt]"); ?> upfront</h3>
                <p>
                    Our drivers save an average of <?php echo do_shortcode(" when they insure"); ?>
                    with us.*
                </p>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/progress-icon.svg"
                    alt="save on progress" width="48" height="48">

                <h3 class="heading-3">Earn up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> off</h3>
                <p>
                    Get discounts on your insurance 3 times a year just by driving well.**
                </p>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
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
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Cards - icons & label</h3>


    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/app-speed-icon.svg" alt="driving tips"
                    width="64" height="auto">
                <h4 class="heading-4">Speed</h4>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/app-acceleration-icon.svg"
                    alt="driving tips" width="64" height="auto">
                <h4 class="heading-4">Acceleration</h4>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/app-braking-icon.svg"
                    alt="driving tips" width="64" height="auto">
                <h4 class="heading-4">Braking</h4>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
                <img class="object-cover mx-auto" src="/resources/img/pages/icons/app-cornering-icon.svg"
                    alt="driving tips" width="64" height="auto">
                <h4 class="heading-4">Cornering</h4>
            </div>
        </div>
    </div>

    <!-- Cards - floating image & button -->
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Cards - floating image & button</h3>


    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
                <h3 class="heading-3">Save <?php echo do_shortcode("[yd_up_front_txt]"); ?> upfront</h3>
                <img class="object-cover mx-auto" src="/resources/img/pages/blog/driving-tips-cat.jpg"
                    alt="driving tips" width="480" height="auto">


                <p class="mt-4">
                    <a href="https://www.ingenie.com/young-drivers-guide/category/driving-tips"
                        class="primary-btn-clear inline-flex">
                        <span>Read more</span>
                    </a>
                </p>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
                <h3 class="heading-3">Earn up to <?php echo do_shortcode("[yd_drive_safe_discount_txt]"); ?> off</h3>
                <img class="object-cover mx-auto" src="/resources/img/pages/blog/car-insurance-cat.jpg"
                    alt="car insurance info" width="480" height="auto">

                <p class="mt-4">
                    <a href="https://www.ingenie.com/young-drivers-guide/category/car-insurance"
                        class="primary-btn-clear inline-flex">
                        <span>Read more</span>
                    </a>
                </p>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="standard-card border-0 shadow-none text-center">
                <h3 class="heading-3">Save at renewal</h3>
                <img class="object-cover mx-auto" src="/resources/img/pages/blog/running-a-car-cat.jpg"
                    alt="running a car advice" width="480" height="auto">


                <p class="mt-4">
                    <a href="https://www.ingenie.com/young-drivers-guide/category/running-a-car"
                        class="primary-btn-clear inline-flex">
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
    <span id="notifications" class="h-0 block w-full border-t border-gray-300 mt-0"></span>
    <!-- Notifications -->
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Notifications</h2>

    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Banners - using shortcodes</h3>

    <?php echo do_shortcode("[get-message color='info' message='This is a info banner notification' link='#']"); ?>

    <?php echo do_shortcode("[get-message color='warning' message='This is a warning banner notification' link='#']"); ?>

    <?php echo do_shortcode("[get-message color='success' message='This is a success banner notification' link='#']"); ?>

    <?php echo do_shortcode("[get-message color='alert' message='This is a alert banner notification' link='#']"); ?>


    <!-- 
-------------------------
SMALLPRINT

SECTION - WIP
-------------------------	
-->

    <span id="smallprint" class="h-0 block w-full border-t border-gray-300 mt-0"></span>
    <!-- Small print -->
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Small print</h2>
    <p class="text-sm text-gray-600 text-center"><span class="bg-gray-700 text-gray-200 px-1">NOTE:</span> Should we be
        using
        *, †, ‡,
        §,
        ‖, etc... ?wikipedia?</p>
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Young Driver - using shortcodes / variables
    </h3>
    <p class="small-print">
        * <?php echo do_shortcode("[yd_sp_dates_renewals_txt]"); ?><br />
        ** <?php echo do_shortcode("[yd_sp_premium_increases_txt]"); ?>


    </p>
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Learner - using shortcodes / variables
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
    <span id="trustpilot" class="h-0 block w-full border-t border-gray-300 mt-0"></span>
    <!-- Trust Pilot -->
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Trust Pilot</h2>

    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Horizontal bar - using shortcodes</h3>
    <?php echo do_shortcode("[trust-pilot-bar]"); ?>
    <br />

    <!-- 
-------------------------
ACCORDIANS

SECTION - WIP
-------------------------	
-->
    <span class="h-0 block w-full border-t border-gray-300 mt-0"></span>
    <!-- Carousels -->
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Accordians</h2>
    <p>Content coming...</p>

</div>


<!-- 
-------------------------
CAROUSELS/SLIDERS

SECTION - WIP
-------------------------	
-->

<div class="mx-auto container">
    <span id="carousels" class="h-0 block w-full border-t border-gray-300 mt-0"></span>
    <!-- Accordians -->
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Carousels</h2>
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Examples (use shortcodes and custom posts 'ig
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

    <span id="hero" class="h-0 block w-full border-t border-gray-300 mt-0"></span>

    <!-- Hero Image shortcode -->
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Hero Images</h2>
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Background hero or banner images uses shortcodes
    </h3>
    <?php echo do_shortcode("[get-hero src='ig-homepage-desktop.svg' alt='homepage banner alt text']"); ?>
</div>

<div class="mx-auto">
    <h3 class="pt-2 pb-3 text-sm text-center font-semibold underline">Hero banner - outside container (full width)
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

    <span id="video" class="h-0 block w-full border-t border-gray-300 mt-0"></span>

    <!-- Video  -->
    <h2 class="text-center py-2 mt-16 mb-1 bg-ig-blue-500 text-white">Video (embedded)</h2>

    <div class="relative px-0 lg:px-12 mx-4 lg:mx-40" style="padding-top: 56.25%">
        <iframe class="absolute inset-0 w-full h-full" src="https://player.vimeo.com/video/216175767" frameborder="0"
            webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>

</div>







<?php get_footer(); ?>
