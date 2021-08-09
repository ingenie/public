<?php
/*
 * Template Name: Landing Page 004
 * Template Post Type: page
 */

get_header('landing-page');

?>

<script>
function copyCodeTemplate() {
    var copyTextarea = document.getElementById("duplicateCode");
    copyTextarea.select();
    copyTextarea.setSelectionRange(0, 99999)
    document.execCommand("copy");
    console.log("Copied the text: " + copyTextarea.value);
}
</script>


<section class="bg-ig-blue-500 flex-1 p-4 pt-5">
    <a href="/styleguide-landing-pages" class="inline-flex primary-link-sm">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-left" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
        </svg>
        <span>Back to templates</span>
    </a>

    <button onclick="copyCodeTemplate()" class="modal-trigger inline-flex primary-btn ml-3" data-id="code-modal">
        <span>Copy</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 btn-icon-right" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
        </svg>
    </button>
</section>

<!-- style="background-image:url(https://dummyimage.com/1920x300/878787/d1d1d1);"> -->

<!-- START OF TEMPLATE -->
<section class="hidden md:block hero h-72 bg-center bg-no-repeat bg-gray-500" style="
    background-image:url(https://dummyimage.com/360x280/999999/d2d2d2); 
    background-position: right;
    background-size: contain">
    <div class="text-left p-8 text-white max-w-xl ml-4">
        <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
        <h4 class="heading-4">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
            Aperiam quibusdam quasi excepturi accusamus?
        </h4>
        <div class="space-x-2 inline-flex py-2">
            <?php echo do_shortcode("[yd-quote-button text='Black Box quote']"); ?>
        </div>
    </div>

</section>

<section class="block md:hidden hero h-auto bg-center bg-no-repeat bg-gray-500">
    <div class="text-center p-0 text-white max-w-2xl mx-auto">
        <img src="https://dummyimage.com/360x200/878787/d1d1d1" class="w-full h-auto mx-auto" alt="mobile-alt-text">
        <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
        <h4 class="heading-4">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
            Aperiam quibusdam quasi excepturi accusamus?
        </h4>

        <div class="space-x-2 inline-flex">
            <?php echo do_shortcode("[yd-quote-button text='Get a Black Box quote']"); ?>
        </div>
    </div>

</section>


<section class="container max-w-5xl mx-auto p-6 pb-16 text-center">

    <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:w-1/4">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/4">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/4">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/4">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1 inline-flex justify-center text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>Lorem ipsum

        </div>
        <div class="flex-auto md:flex-1 inline-flex justify-center text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>Lorem ipsum

        </div>
        <div class="flex-auto md:flex-1 inline-flex justify-center text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>Lorem ipsum

        </div>

        <div class="flex-auto md:flex-1 inline-flex justify-center text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>Lorem ipsum

        </div>

    </div>

    <p class="small-print pb-1">
        * Example smallprint - <?php echo do_shortcode("[yd_sp_premium_increases_txt]"); ?>
    </p>


</section>



<section>
    <?php echo do_shortcode("[trust-pilot-bar]"); ?>
</section>

<section class="py-5 mb-16">
    <div class="container max-w-5xl mx-auto p-3 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">

                    <p class="mb-3 text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                        commodi, itaque cum numquam alias odit nobis porro pariatur a et quod eaque, inventore accusamus
                        minima adipisci facilis natus reiciendis atque?</p>

                    <ul class="standard-list list-none text-center">
                        <li class="mb-1">
                            <p class="inline">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="inline h-12 w-12 pr-1 pb-1 text-success-900" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>Lorem ipsum dolor sit amet
                            </p>
                        </li>
                        <li class="mb-1">
                            <p class="inline">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="inline h-12 w-12 pr-1 pb-1 text-success-900" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>Lorem ipsum dolor sit amet
                            </p>
                        </li>
                        <li class="mb-1">
                            <p class="inline">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="inline h-12 w-12 pr-1 pb-1 text-success-900" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>Lorem ipsum dolor sit amet
                            </p>
                        </li>
                        <li class=" mb-1">
                            <p class="inline">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="inline h-12 w-12 pr-1 pb-1 text-success-900" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>Lorem ipsum dolor sit amet
                            </p>
                        </li>
                    </ul>

                    <p class="mb-3 text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                        commodi, itaque cum numquam alias odit nobis porro pariatur a et quod eaque, inventore accusamus
                        minima adipisci facilis natus reiciendis atque?</p>
                </div>
            </div>
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">

                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/600x480/878787/d1d1d1"
                        alt="driving tips" width="600" height="auto">

                </div>
            </div>
        </div>

        <div class="py-2">
            <?php echo do_shortcode("[yd-quote-button text='Get a Black Box quote']"); ?>
        </div>

    </div>
</section>

<section class="bg-ig-li-blue-500 p-10 md:pt-36">
    <div class="relative">
        <div
            class="w-full max-w-4xl absolute -top-24 px-10 py-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">

            <img class="h-auto w-full object-contain hidden md:block"
                src="https://dummyimage.com/1500x320/878787/d1d1d1" alt="placeholder background hero">
        </div>
    </div>
    <?php echo do_shortcode("[trust-pilot-slider]"); ?>

    <div class="p-4 text-center">
        <?php echo do_shortcode("[yd-quote-button text='See how much <span class=\"font-semiibold\">you could save</span>']"); ?>
    </div>
</section>

<!-- END OF TEMPLATE -->

<!-- Hidden copy code -->
<textarea id="duplicateCode" style="height:1px; width:1px;">
<section class="hidden md:block hero h-72 bg-center bg-no-repeat bg-gray-500" style="
    background-image:url(https://dummyimage.com/360x280/999999/d2d2d2); 
    background-position: right;
    background-size: contain">
    <div class="text-left p-8 text-white max-w-xl ml-4">
        <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
        <h4 class="heading-4">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
            Aperiam quibusdam quasi excepturi accusamus?
        </h4>
        <div class="space-x-2 inline-flex py-2">
[yd-quote-button text='Black Box quote']
        </div>
    </div>

</section>

<section class="block md:hidden hero h-auto bg-center bg-no-repeat bg-gray-500">
    <div class="text-center p-0 text-white max-w-2xl mx-auto">
        <img src="https://dummyimage.com/360x200/878787/d1d1d1" class="w-full h-auto mx-auto" alt="mobile-alt-text">
        <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
        <h4 class="heading-4">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
            Aperiam quibusdam quasi excepturi accusamus?
        </h4>

        <div class="space-x-2 inline-flex">
[yd-quote-button text='Get a Black Box quote']
        </div>
    </div>

</section>


<section class="container max-w-5xl mx-auto p-6 pb-16 text-center">

    <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:w-1/4">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/4">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/4">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/4">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:flex-1 inline-flex justify-center text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>Lorem ipsum

        </div>
        <div class="flex-auto md:flex-1 inline-flex justify-center text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>Lorem ipsum

        </div>
        <div class="flex-auto md:flex-1 inline-flex justify-center text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>Lorem ipsum

        </div>

        <div class="flex-auto md:flex-1 inline-flex justify-center text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="btn-icon-left" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>Lorem ipsum

        </div>

    </div>

    <p class="small-print pb-1">
[yd_sp_premium_increases_txt]
    </p>


</section>



<section>
[trust-pilot-bar]
</section>

<section class="py-5 mb-16">
    <div class="container max-w-5xl mx-auto p-3 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">

                    <p class="mb-3 text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                        commodi, itaque cum numquam alias odit nobis porro pariatur a et quod eaque, inventore accusamus
                        minima adipisci facilis natus reiciendis atque?</p>

                    <ul class="standard-list list-none text-center">
                        <li class="mb-1">
                            <p class="inline">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="inline h-12 w-12 pr-1 pb-1 text-success-900" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>Lorem ipsum dolor sit amet
                            </p>
                        </li>
                        <li class="mb-1">
                            <p class="inline">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="inline h-12 w-12 pr-1 pb-1 text-success-900" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>Lorem ipsum dolor sit amet
                            </p>
                        </li>
                        <li class="mb-1">
                            <p class="inline">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="inline h-12 w-12 pr-1 pb-1 text-success-900" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>Lorem ipsum dolor sit amet
                            </p>
                        </li>
                        <li class=" mb-1">
                            <p class="inline">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="inline h-12 w-12 pr-1 pb-1 text-success-900" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>Lorem ipsum dolor sit amet
                            </p>
                        </li>
                    </ul>

                    <p class="mb-3 text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
                        commodi, itaque cum numquam alias odit nobis porro pariatur a et quod eaque, inventore accusamus
                        minima adipisci facilis natus reiciendis atque?</p>
                </div>
            </div>
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">

                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/600x480/878787/d1d1d1"
                        alt="driving tips" width="600" height="auto">

                </div>
            </div>
        </div>

        <div class="py-2">
[yd-quote-button text='Get a Black Box quote']
        </div>

    </div>
</section>

<section class="bg-ig-li-blue-500 p-10 md:pt-36">
    <div class="relative">
        <div
            class="w-full max-w-4xl absolute -top-24 px-10 py-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">

            <img class="h-auto w-full object-contain hidden md:block"
                src="https://dummyimage.com/1500x320/878787/d1d1d1" alt="placeholder background hero">
        </div>
    </div>
[trust-pilot-slider]

    <div class="p-4 text-center">
[yd-quote-button text='See how much <span class="font-semiibold">you could save</span>']
    </div>
</section>
</textarea>

<!-- Modal -->
<div id="code-modal"
    class="modal z-100 fixed left-0 top-0 md:top-20 md:left-1/4 m-auto bg-white w-screen md:w-1/2 md:w-1/2 h-screen sm:h-auto p-8 transform scale-0 transition-transform duration-300">
    <button type="button" class="close-modal focus:outline-none absolute right-3 top-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </button>
    <h2 class="heading-2">Good Job!</h2>
    <div class="p-1">
        <?php echo do_shortcode("[get-message color='success' message='Copied code to template 004 successfully']"); ?>
        <p class="p-2 text-sm">To start with fresh template, paste into Wordpress content editor on your new landing
            page to get started.</p>
        <?php echo do_shortcode("[get-message color='info' message='NOTE: New landing pages should start with: <span class=\"font-bold\">Landing Pages</span> category selected & <span class=\"font-bold\">Landing Pages Template</span> page attribute selected. Ask developer if unsure.']"); ?>
    </div>
    <button class="close-modal inline-flex primary-btn my-2 mx-auto">Close</button>
</div>


<?php get_footer(); ?>
