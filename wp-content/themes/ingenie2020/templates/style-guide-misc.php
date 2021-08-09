<?php
/*
 * Template Name: Style Guide Misc Template
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

<!-- <div class="fixed right-0 top-0 show-source z-100 cursor-pointer">
    <div
        class="absolute text-xs text-white font-semibold pre z-100 transform rotate-45 h-40 pt-4 text-center leading-none cursor-pointer">
        <span class="text-2xl">[</span>
        <span id="toggle">Show Code</span>
        <span class="text-2xl">]</span>
    </div>
    <div class="w-32 overflow-hidden inline-block">
        <div class="h-52 bg-ig-blue-600 -rotate-45 transform origin-top-left"></div>
    </div>
</div> -->

<div class="bg-ig-li-blue-500 text-center p-8 my-4">
    <h1 class="pt-4 text-center">Styleguide - Layouts</h1>
    <h3 class="heading-3 max-w-3xl mx-auto">Reference UI layouts/blocks with some code snippets</h3>
    <h5>Also, helps with
        purging of the Tailwind CSS framework to reduce file sizes in production builds.</h5>

    <div class="max-w-3xl m-auto py-10">
        <a class="inline-block filter primary-btn my-1" href="#misc">Misc</a>

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



<!-- 
-------------------------
Misc

SECTION - Misc
-------------------------	
-->
<div id="misc" class="mx-auto">

    <!-- <span id="video" class="block w-full h-0 mt-20 mb-10 border-t border-gray-300"></span> -->

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
