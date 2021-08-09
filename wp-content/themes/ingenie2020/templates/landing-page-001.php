<?php
/*
 * Template Name: Landing Page 001
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
<section class="hidden md:block hero h-72 bg-center bg-no-repeat" style="
    background-image:url(https://dummyimage.com/280x280/999999/d2d2d2), url(https://dummyimage.com/280x280/999999/d2d2d2), url(https://dummyimage.com/1920x300/878787/d1d1d1); 
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

<section class="bg-ig-li-blue-500 py-5">
    <div class="container max-w-5xl mx-auto p-3 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <h3 class="heading-3 mb-0">Heading</h3>
                    <p class="font-bold mb-3">Lorem ipsum</p>

                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">

                    <ul class="standard-list">
                        <li>Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                        <li>Lorem ipsum dolor sit amet consectetur <span class="font-semibold">adipisicing</span></li>
                    </ul>
                    <div class="absolute inline-flex transform -translate-x-1/2">
                        <?php echo do_shortcode("[learner-quote-button text='Learner quote']"); ?>
                    </div>
                </div>
            </div>
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <h3 class="heading-3 mb-0">Heading</h3>
                    <p class="font-bold mb-3">Lorem ipsum</p>

                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">

                    <ul class="standard-list">
                        <li>Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                        <li>Lorem ipsum dolor sit amet consectetur <span class="font-semibold">adipisicing</span></li>
                    </ul>

                    <div class="absolute inline-flex transform -translate-x-1/2">
                        <?php echo do_shortcode("[yd-quote-button text='Black Box quote']"); ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <?php echo do_shortcode("[trust-pilot-bar]"); ?>
</section>

<section class="container max-w-5xl mx-auto p-6 pb-16 text-center">

    <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:w-1/3">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/3">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/3">
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

    <p class="small-print pb-1">
        * Example smallprint - <?php echo do_shortcode("[yd_sp_premium_increases_txt]"); ?>
    </p>
    <div class="inline-flex">
        <?php echo do_shortcode("[learner-quote-button text='Learner quote']"); ?>
    </div>

</section>

<section class="bg-ig-li-blue-500 py-5">
    <div class="container max-w-5xl mx-auto p-6 pb-16 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
        </div>

        <p class="small-print pb-1">
            * Example smallprint - <?php echo do_shortcode("[yd_sp_premium_increases_txt]"); ?>
        </p>
        <div class="inline-flex">
            <?php echo do_shortcode("[learner-quote-button text='Learner quote']"); ?>
        </div>

    </div>
</section>

<section class="flex flex-wrap justify-center p-10">

    <div class="w-full sm:w-1/2 lg:w-1/3">
        <div class="standard-card p-0 relative">

            <a href="<?php echo do_shortcode("[ig_young_drivers_guide_url]"); ?>"><img
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
                    <a href="<?php echo do_shortcode("[ig_young_drivers_guide_url]"); ?>">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
                    Just head to our Parents Guide for all the advice you may need to help your budding
                    learner.
                </p>

                <span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
                    <a href="<?php echo do_shortcode("[ig_parents_guide_url]"); ?>">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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

            <a href="<?php echo do_shortcode("[ig_blog_url]"); ?>"><img
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
                    <a href="<?php echo do_shortcode("[ig_blog_url]"); ?>">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
<!-- END OF TEMPLATE -->

<!-- Hidden copy code -->
<textarea id="duplicateCode" style="height:1px; width:1px;">
<section class="hidden md:block hero h-72 bg-center bg-no-repeat" style="
    background-image:url(https://dummyimage.com/280x280/999999/d2d2d2), url(https://dummyimage.com/280x280/999999/d2d2d2), url(https://dummyimage.com/1920x300/878787/d1d1d1); 
    background-position: left, right, center;
    background-size: contain, contain, cover">
    <div class="text-center p-8 text-white max-w-2xl mx-auto">
        <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
        <h4 class="heading-4 font-bold">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
            Aperiam quibusdam quasi excepturi accusamus?
        </h4>
        <div class="space-x-2 inline-flex py-2">
           [learner-quote-button text='Learner quote']
           [yd-quote-button text='Black Box quote']
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
           [learner-quote-button text='Learner quote']
           [yd-quote-button text='Black Box quote']
        </div>
    </div>

</section>

<section class="bg-ig-li-blue-500 py-5">
    <div class="container max-w-5xl mx-auto p-3 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <h3 class="heading-3 mb-0">Heading</h3>
                    <p class="font-bold mb-3">Lorem ipsum</p>

                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">

                    <ul class="standard-list">
                        <li>Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                        <li>Lorem ipsum dolor sit amet consectetur <span class="font-semibold">adipisicing</span></li>
                    </ul>
                    <div class="absolute inline-flex transform -translate-x-1/2">
                       [learner-quote-button text='Learner quote']
                    </div>
                </div>
            </div>
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <h3 class="heading-3 mb-0">Heading</h3>
                    <p class="font-bold mb-3">Lorem ipsum</p>

                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">

                    <ul class="standard-list">
                        <li>Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
                        <li>Lorem ipsum dolor sit amet consectetur <span class="font-semibold">adipisicing</span></li>
                    </ul>

                    <div class="absolute inline-flex transform -translate-x-1/2">
                       [yd-quote-button text='Black Box quote']
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
   [trust-pilot-bar]
</section>

<section class="container max-w-5xl mx-auto p-6 pb-16 text-center">

    <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

    <div class="flex flex-wrap justify-center mb-4">
        <div class="flex-auto md:w-1/3">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/3">
            <div class="text-center border-0 shadow-none standard-card">
                <img class="object-cover mx-auto" src="https://dummyimage.com/96x96/878787/d1d1d1" alt="upfront savings"
                    width="96" height="96">
                <h3 class="heading-3">Heading</h3>
                <p class="text-sm">
                    Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                </p>
            </div>
        </div>
        <div class="flex-auto md:w-1/3">
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

    <p class="small-print pb-1">
        * Example smallprint -[yd_sp_premium_increases_txt]
    </p>
    <div class="inline-flex">
       [learner-quote-button text='Learner quote']
    </div>

</section>

<section class="bg-ig-li-blue-500 py-5">
    <div class="container max-w-5xl mx-auto p-6 pb-16 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
        </div>

        <p class="small-print pb-1">
            * Example smallprint -[yd_sp_premium_increases_txt]
        </p>
        <div class="inline-flex">
           [learner-quote-button text='Learner quote']
        </div>

    </div>
</section>

<section class="flex flex-wrap justify-center p-10">

	<div class="w-full sm:w-1/2 lg:w-1/3">
		<div class="standard-card p-0 relative">

			<a href="[ig_young_driver_guide_url]"><img class="object-cover object-center w-full h-40 md:w-full md:h-32"
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
					<a href="[ig_young_driver_guide_url]">
						<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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

			<a href="[ig_parents_guide_url]"><img class="object-cover object-center w-full h-40 md:w-full md:h-32"
							 src="/resources/img/pages/misc/pg-header.jpg" alt="alt text">
			</a>

			<div class="p-4 pt-1">
				<div class="h-12">
					<h4 class="heading-4 my-2 min-h-full p-0">ingenie - Parents Guide</h4>
				</div>

				<p class="block leading-snug text-sm pr-3">
					Just head to our Parents Guide for all the advice you may need to help your budding
					learner.
				</p>

				<span class="text-ig-blue-500 right-0 bottom-0 pb-1 pr-2 absolute">
					<a href="[ig_parents_guide_url]">
						<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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

			<a href="[ig_blog_url]"><img class="object-cover object-center w-full h-40 md:w-full md:h-32"
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
					<a href="[ig_blog_url]">
						<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
        <?php echo do_shortcode("[get-message color='success' message='Copied code to template 001 successfully']"); ?>
        <p class="p-2 text-sm">To start with fresh template, paste into Wordpress content editor on your new landing
            page to get started.</p>
        <?php echo do_shortcode("[get-message color='info' message='NOTE: New landing pages should start with: <span class=\"font-bold\">Landing Pages</span> category selected & <span class=\"font-bold\">Landing Pages Template</span> page attribute selected. Ask developer if unsure.']"); ?>
    </div>
    <button class="close-modal inline-flex primary-btn my-2 mx-auto">Close</button>
</div>


<?php get_footer(); ?>
