<?php
/*
 * Template Name: Press Centre Template
 * Template Post Type: post, page, whatever
 */

get_header(); ?>

<h1 class="heading-1 text-center">Press centre</h1>

<div class="container text-sm mt-0 mb-3 p-2 mx-auto">
    <p class="py-1 text-center">
        To contact our PR department please email us at <a href="mailto:press@ingenie.com"
            class="primary-link text-sm">press@ingenie.com</a>.
    </p>
</div>
<div class="bg-ig-blue-500 mt-0 mb-2 mx-auto p-0">
    <?php get_template_part('templates/partials/social/footer', 'icons'); ?>
</div>
<!-- 
<div class="py-0">
    <img class="h-full w-full object-cover hidden md:block" src="/resources/img/pages/hero-banners/yd-faqs.svg"
        alt="young driver frequently asked questions">
    <img class="h-full w-full object-cover md:hidden sm:block" src="/resources/img/pages/hero-banners/yd-faqs.svg"
        alt="young driver frequently asked questions">
</div> -->

<section class="container text-sm mt-0 mb-4 p-2 mx-auto">
    <h3 class="heading-3 px-5 my-2">Latest press releases</h3>

    <?php get_template_part('templates/partials/section', 'press-centre'); ?>
</section>

<section class="bg-ig-li-blue-500 my-12">
    <div class="container text-sm mt-0 mb-4 p-2 mx-auto">
        <h3 class="heading-3 px-5">In the press</h3>

        <div class="px-5 my-4 flex flex-wrap justify-center mb-4 gap-10">
            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/the-telegraph-logo.svg"
                        alt="the telegraph" title="the telegraph" width="275" height="auto">
                </div>
            </div>

            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/the-sun-logo.svg"
                        alt="the sun" title="the sun" width="275" height="auto">
                </div>
            </div>

            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/insurance-times-logo.svg"
                        alt="insurance times" title="insurance times" width="275" height="auto">
                </div>
            </div>

            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/the-independent-logo.svg"
                        alt="the independent" title="the independent" width="275" height="auto">
                </div>
            </div>

            <div class="flex-auto md:flex-1">
                <div class="text-center">
                    <img class="object-cover mx-auto" src="/resources/img/pages/press-centre/daily-mirror-logo.svg"
                        alt="daily mirror" title="daily mirror" width="275" height="auto">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container text-sm mt-0 mb-4 p-2 mx-auto">

    <div class="px-5">
        <h3 class="heading-3">Assets</h3>
        <p class="py-1">You can download ingenie logos in EPS and PNG formats</p>
    </div>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-contain mx-auto h-32"
                    src="/resources/img/pages/press-centre/assets/ingenie-logo-png.png" alt="ingenie logo" width="auto"
                    height="auto">
                <div class="font-semibold py-4">
                    <a href="/resources/img/pages/press-centre/assets/ingenie-logo-eps.eps" class="primary-link">EPS</a>
                    | <a href="/resources/img/pages/press-centre/assets/ingenie-logo-png.png" target="_blank"
                        rel="noopener noreferrer" class="primary-link">PNG</a>
                </div>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-contain mx-auto h-32"
                    src="/resources/img/pages/press-centre/assets/ingenie-icon-png.png" alt="ingenie icon" width="auto"
                    height="auto">
                <div class="font-semibold py-4">
                    <a href="/resources/img/pages/press-centre/assets/ingenie-icon-eps.eps" class="primary-link">EPS</a>
                    | <a href="/resources/img/pages/press-centre/assets/ingenie-icon-png.png" target="_blank"
                        rel="noopener noreferrer" class="primary-link">PNG</a>
                </div>
            </div>
        </div>

        <div class="flex-auto md:flex-1">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-contain mx-auto h-32"
                    src="/resources/img/pages/press-centre/assets/ingenie-business-png.png" alt="ingenie business"
                    width="auto" height="auto">
                <div class="font-semibold py-4">
                    <a href="/resources/img/pages/press-centre/assets/ingenie-business-eps.eps"
                        class="primary-link">EPS</a> | <a
                        href="/resources/img/pages/press-centre/assets/ingenie-business-png.png" target="_blank"
                        rel="noopener noreferrer" class="primary-link">PNG</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
