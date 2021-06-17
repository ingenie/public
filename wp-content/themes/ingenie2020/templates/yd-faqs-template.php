<?php
/*
 * Template Name: Young Driver FAQs Template
 * Template Post Type: post, page, whatever
 */

get_header(); ?>
<h1 class="heading-1 text-center pb-0">Young Driver Insurance FAQs</h1>
<div class="py-0">
    <img class="h-full w-full object-cover hidden md:block" src="/resources/img/pages/hero-banners/yd-faqs.svg"
        alt="young driver frequently asked questions">
    <img class="h-full w-full object-cover md:hidden sm:block" src="/resources/img/pages/hero-banners/yd-faqs.svg"
        alt="young driver frequently asked questions">
</div>
<p class="text-sm text-center max-w-2xl m-auto py-4">
    Here are some of the queries we're most commonly asked. If there is something you would like to know, this is a
    great place to start.
</p>

<div class="bg-ig-li-blue-500 text-center p-8 mb-6">
    <h3 class="heading-3">Choose a category, take a look to see if we’ve answered it already</h3>

    <div class="max-w-2xl m-auto">
        <button class="filter primary-btn my-1" data-id="covid-19">Covid-19</button>
        <button class="filter primary-btn my-1" data-id="black-box">Fitted black box</button>
        <button class="filter primary-btn my-1" data-id="self-fit">Self-fit box</button>
        <button class="filter primary-btn my-1" data-id="policy">Policy</button>
        <button class="filter primary-btn my-1" data-id="pricing">Pricing</button>
        <button class="filter primary-btn my-1" data-id="driving-feedback">Driving Feedback</button>
        <button class="filter primary-btn my-1" data-id="claims">Claims</button>
    </div>

    <p class="text-sm py-4">alternatively, try searching...
    <p>

    <form id="search">
        <div class="flex justify-center items-center">
            <div class="relative">
                <div class="absolute top-2 left-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input id="txtSearch" type="text"
                    class="h-10 w-96 pl-12 pr-14 rounded-lg z-0 focus:shadow focus:outline-none"
                    placeholder="Search FAQs">
                <div class="absolute top-2 right-2">
                    <button id="clearSearch" class="text-ig-orange-500" title="clear search">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <!-- <button id="highlight" class="text-ig-orange-500" title="hightlight">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </button> -->
                </div>
            </div>
        </div>
    </form>

</div>


<div id="faqs" class="container mx-auto">

    <?php get_template_part('templates/partials/faqs/section', 'yd-faq-covid'); ?>
    <?php get_template_part('templates/partials/faqs/section', 'yd-faq-black-box'); ?>
    <?php get_template_part('templates/partials/faqs/section', 'yd-faq-self-fit'); ?>
    <?php get_template_part('templates/partials/faqs/section', 'yd-faq-policy'); ?>
    <?php get_template_part('templates/partials/faqs/section', 'yd-faq-pricing'); ?>
    <?php get_template_part('templates/partials/faqs/section', 'yd-faq-driving-feedback'); ?>
    <?php get_template_part('templates/partials/faqs/section', 'yd-faq-claims'); ?>

</div>

<div class="text-sm text-center py-4 my-8">
    <?php echo do_shortcode("[get-message color='info' message='Read about your ingenie Young Driver insurance in detail in your policy documents' link='/young-driver-insurance/policy-information']"); ?>
</div>




<?php get_footer(); ?>
