<?php
/*
 * Template Name: Landing Page 001
 * Template Post Type: page
 */

get_header('landing-page');

?>
<!-- style="background-image:url(https://dummyimage.com/1920x300/878787/d1d1d1);"> -->
<section class="hidden md:block hero h-72 bg-center bg-no-repeat" style="
    background-image:url(https://dummyimage.com/280x280/878787/d1d1d1), url(https://dummyimage.com/280x280/878787/d1d1d1), url(https://dummyimage.com/1920x300/878787/d1d1d1); 
    background-position: left, right, center;
    background-size: contain, contain, cover">
    <div class="text-center p-8 text-white max-w-2xl mx-auto">
        <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
        <h4 class="heading-4 font-bold">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
            Aperiam quibusdam quasi excepturi accusamus?
        </h4>
        <div class="space-x-2 inline-flex py-2">
            <?php echo do_shortcode("[learner-quote-button text='Learner quote']"); ?>
            <?php echo do_shortcode("[yd-quote-button text='Black Box quote']"); ?>
        </div>
    </div>

</section>

<section class="block md:hidden hero h-auto bg-center bg-no-repeat bg-gray-500">
    <div class="text-center p-8 text-white max-w-2xl mx-auto">
        <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
        <h4 class="heading-4 font-bold">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
            Aperiam quibusdam quasi excepturi accusamus?
        </h4>
        <img src="https://dummyimage.com/280x280/878787/d1d1d1" class="py-2 w-48 h-48 mx-auto" alt="mobile-alt-text">
        <div class="space-x-2 inline-flex">
            <?php echo do_shortcode("[learner-quote-button text='Learner quote']"); ?>
            <?php echo do_shortcode("[yd-quote-button text='Black Box quote']"); ?>
        </div>
    </div>

</section>

<section class="bg-ig-li-blue-500">
    <div class="container max-w-5xl mx-auto p-3 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <h3 class="heading-3">Heading...</h3>

                    <img class="object-cover mx-auto" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">

                    <ul class="standard-list">
                        <li>Text...</li>
                        <li>Text...</li>
                        <li>Text...</li>
                    </ul>
                    <div class="absolute inline-flex transform -translate-x-1/2">
                        <?php echo do_shortcode("[learner-quote-button text='Learner quote']"); ?>
                    </div>
                </div>
            </div>
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <h3 class="heading-3">Heading...</h3>

                    <img class="object-cover mx-auto" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">


                    <ul class="standard-list">
                        <li>Text...</li>
                        <li>Text...</li>
                        <li>Text...</li>
                    </ul>

                    <div class="absolute inline-flex transform -translate-x-1/2">
                        <?php echo do_shortcode("[yd-quote-button text='Black Box quote']"); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="my-2">
    <?php echo do_shortcode("[trust-pilot-bar]"); ?>
</section>

<section class="container max-w-5xl mx-auto p-3 text-center">

    <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>



</section>


<div class="container max-w-5xl mx-auto p-3">
    <a href="/styleguide-landing-pages" class="inline-flex primary-btn-clear">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
        </svg>
        <span>Back to templates</span>
    </a>
</div>

<?php get_footer(); ?>
