<?php
/*
 * Template Name: Landing Page 003
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

<!-- START OF TEMPLATE -->
<section class="hidden md:block hero h-80 bg-center bg-no-repeat" style="
    background-image:url(https://dummyimage.com/1920x360/878787/d1d1d1); 
    background-position: center center;
    background-size: cover">
    <div class="text-center p-2 text-white max-w-3xl mx-auto">
        <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
        <h4 class="heading-4 font-bold">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
            Aperiam quibusdam quasi excepturi accusamus?
        </h4>
        <div class="space-x-2 inline-flex py-2">
            <?php echo do_shortcode("[yd-quote-button text='Black Box quote']"); ?>
        </div>
    </div>
    <div class="relative">
        <div class="w-full max-w-3xl absolute top-32 px-16 py-2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-ig-li-blue-500 text-center bg-no-repeat"
            style="background-image: url(https://dummyimage.com/120x120/878787/d1d1d1);background-position: right bottom;">

            <h2 class="heading-2 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

            <div class="flex flex-wrap justify-center mb-4">
                <div class="flex-auto md:flex-1 text-sm">
                    <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sunt maxime quos
                        molestiae iure, harum aperiam tenetur excepturi odit dolore magni quaerat nam esse aspernatur
                        quisquam architecto nihil quod iusto?</p>
                    <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sunt maxime quos
                        molestiae iure, harum aperiam tenetur excepturi odit dolore magni quaerat nam esse aspernatur
                        quisquam architecto nihil quod iusto?</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="block md:hidden hero h-80 bg-center bg-no-repeat" style="
    background-image:url(https://dummyimage.com/280x280/878787/d1d1d1); 
    background-position: center center;
    background-size: cover">
        <div class="text-center p-2 text-white max-w-3xl mx-auto">
            <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
            <h4 class="heading-4 font-bold">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
                Aperiam quibusdam quasi excepturi accusamus?
            </h4>
            <div class="space-x-2 inline-flex py-2">
                <?php echo do_shortcode("[yd-quote-button text='Black Box quote']"); ?>
            </div>
        </div>
    </div>
    <div class="block md:hidden">
        <div class="w-full px-10 py-0 bg-ig-li-blue-500 text-center">
            <h2 class="heading-2 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

            <div class="flex flex-wrap justify-center mb-4">
                <div class="flex-auto md:flex-1 text-sm">
                    <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sunt maxime quos
                        molestiae iure, harum aperiam tenetur excepturi odit dolore magni quaerat nam esse
                        aspernatur
                        quisquam architecto nihil quod iusto?</p>
                    <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sunt maxime quos
                        molestiae iure, harum aperiam tenetur excepturi odit dolore magni quaerat nam esse
                        aspernatur
                        quisquam architecto nihil quod iusto?</p>
                </div>
            </div>

        </div>
    </div>

</section>


<section class="py-5 md:pt-36">
    <div class="container max-w-5xl mx-auto p-3 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">
                    <h3 class="heading-3 mb-0 text-ig-orange-500">Heading</h3>
                    <p class="my-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ab maxime
                        earum nemo alias? Molestias unde magni molestiae pariatur obcaecati, saepe tenetur! Accusantium
                        dolores porro, aliquid neque recusandae adipisci qui.</p>
                    <p class="my-2 text-sm">Lorem ipsum dolor <span class="font-semibold">sit amet</span>, consectetur
                        adipisicing elit. Saepe ab maxime earum nemo alias? Molestias unde magni molestiae pariatur
                        obcaecati, saepe tenetur! Accusantium dolores porro, aliquid neque recusandae adipisci qui.</p>
                </div>
            </div>
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">
                    <h3 class="heading-3 mb-0 text-ig-orange-500">Heading</h3>
                    <p class="my-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ab maxime
                        earum nemo alias? Molestias unde magni <span class="font-semibold">molestiae pariatur</span>
                        obcaecati, saepe tenetur! Accusantium
                        dolores porro, aliquid neque recusandae adipisci qui.</p>
                    <p class="my-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ab maxime
                        earum nemo alias? Molestias unde magni <span class="font-semibold">molestiae pariatur obcaecati,
                            saepe tenetur! Accusantium</span>
                        dolores porro, aliquid neque recusandae adipisci qui.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-ig-li-blue-500">
    <div class="container max-w-5xl mx-auto p-6 pb-16 text-center">
        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                    </p>
                </div>
            </div>
        </div>

        <div class="inline-flex">
            <?php echo do_shortcode("[learner-quote-button text='Learner quote']"); ?>
        </div>

        <p class="small-print pb-1">
            * Example smallprint - <?php echo do_shortcode("[yd_sp_premium_increases_txt]"); ?>
        </p>

    </div>
</section>

<section class="py-5">
    <div class="container max-w-5xl mx-auto p-6 pb-0 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

    </div>

    <div class="mx-auto">
        <!-- Hero/Banner Image -->
        <div class="">
            <img class="h-full w-full object-cover hidden md:block" src="https://dummyimage.com/1920x280/878787/d1d1d1"
                alt="placeholder background hero">
            <img class="h-full w-full object-cover md:hidden sm:block"
                src="https://dummyimage.com/300x100/878787/d1d1d1" alt="placeholder background hero small">
        </div>
    </div>

    <div class="container max-w-5xl mx-auto p-6 pt-0 pb-12 text-center">

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
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
<section class="hidden md:block hero h-80 bg-center bg-no-repeat" style="
    background-image:url(https://dummyimage.com/1920x360/878787/d1d1d1); 
    background-position: center center;
    background-size: cover">
    <div class="text-center p-2 text-white max-w-3xl mx-auto">
        <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
        <h4 class="heading-4 font-bold">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
            Aperiam quibusdam quasi excepturi accusamus?
        </h4>
        <div class="space-x-2 inline-flex py-2">
[yd-quote-button text='Black Box quote']
        </div>
    </div>
    <div class="relative">
        <div class="w-full max-w-3xl absolute top-32 px-16 py-2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-ig-li-blue-500 text-center bg-no-repeat"
            style="background-image: url(https://dummyimage.com/120x120/878787/d1d1d1);background-position: right bottom;">

            <h2 class="heading-2 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

            <div class="flex flex-wrap justify-center mb-4">
                <div class="flex-auto md:flex-1 text-sm">
                    <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sunt maxime quos
                        molestiae iure, harum aperiam tenetur excepturi odit dolore magni quaerat nam esse aspernatur
                        quisquam architecto nihil quod iusto?</p>
                    <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sunt maxime quos
                        molestiae iure, harum aperiam tenetur excepturi odit dolore magni quaerat nam esse aspernatur
                        quisquam architecto nihil quod iusto?</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="block md:hidden hero h-80 bg-center bg-no-repeat" style="
    background-image:url(https://dummyimage.com/280x280/878787/d1d1d1); 
    background-position: center center;
    background-size: cover">
        <div class="text-center p-2 text-white max-w-3xl mx-auto">
            <h1 class="heading-1 text-white font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h1>
            <h4 class="heading-4 font-bold">Aspernatur quaerat molestiae quis tenetur tempore dolor eius.<br />
                Aperiam quibusdam quasi excepturi accusamus?
            </h4>
            <div class="space-x-2 inline-flex py-2">
[yd-quote-button text='Black Box quote']
            </div>
        </div>
    </div>
    <div class="block md:hidden">
        <div class="w-full px-10 py-0 bg-ig-li-blue-500 text-center">
            <h2 class="heading-2 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

            <div class="flex flex-wrap justify-center mb-4">
                <div class="flex-auto md:flex-1 text-sm">
                    <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sunt maxime quos
                        molestiae iure, harum aperiam tenetur excepturi odit dolore magni quaerat nam esse
                        aspernatur
                        quisquam architecto nihil quod iusto?</p>
                    <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sunt maxime quos
                        molestiae iure, harum aperiam tenetur excepturi odit dolore magni quaerat nam esse
                        aspernatur
                        quisquam architecto nihil quod iusto?</p>
                </div>
            </div>

        </div>
    </div>

</section>


<section class="py-5 md:pt-36">
    <div class="container max-w-5xl mx-auto p-3 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">
                    <h3 class="heading-3 mb-0 text-ig-orange-500">Heading</h3>
                    <p class="my-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ab maxime
                        earum nemo alias? Molestias unde magni molestiae pariatur obcaecati, saepe tenetur! Accusantium
                        dolores porro, aliquid neque recusandae adipisci qui.</p>
                    <p class="my-2 text-sm">Lorem ipsum dolor <span class="font-semibold">sit amet</span>, consectetur
                        adipisicing elit. Saepe ab maxime earum nemo alias? Molestias unde magni molestiae pariatur
                        obcaecati, saepe tenetur! Accusantium dolores porro, aliquid neque recusandae adipisci qui.</p>
                </div>
            </div>
            <div class="flex-auto md:flex-1">
                <div class="text-center standard-card border-0 shadow-none">
                    <img class="object-cover mx-auto w-4/5" src="https://dummyimage.com/480x480/878787/d1d1d1"
                        alt="driving tips" width="480" height="auto">
                    <h3 class="heading-3 mb-0 text-ig-orange-500">Heading</h3>
                    <p class="my-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ab maxime
                        earum nemo alias? Molestias unde magni <span class="font-semibold">molestiae pariatur</span>
                        obcaecati, saepe tenetur! Accusantium
                        dolores porro, aliquid neque recusandae adipisci qui.</p>
                    <p class="my-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ab maxime
                        earum nemo alias? Molestias unde magni <span class="font-semibold">molestiae pariatur obcaecati,
                            saepe tenetur! Accusantium</span>
                        dolores porro, aliquid neque recusandae adipisci qui.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-ig-li-blue-500">
    <div class="container max-w-5xl mx-auto p-6 pb-16 text-center">
        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <img class="object-cover mx-auto" src="https://dummyimage.com/220x140/878787/d1d1d1"
                        alt="upfront savings" width="220" height="140">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing
                    </p>
                </div>
            </div>
        </div>

        <div class="inline-flex">
[learner-quote-button text='Learner quote']
        </div>

        <p class="small-print pb-1">
[yd_sp_premium_increases_txt]
        </p>

    </div>
</section>

<section class="py-5">
    <div class="container max-w-5xl mx-auto p-6 pb-0 text-center">

        <h2 class="heading-1 text-ig-blue-500 font-bold">Lorem ipsum dolor sit amet consectetur adipisicing</h2>

    </div>

    <div class="mx-auto">
        <!-- Hero/Banner Image -->
        <div class="">
            <img class="h-full w-full object-cover hidden md:block" src="https://dummyimage.com/1920x280/878787/d1d1d1"
                alt="placeholder background hero">
            <img class="h-full w-full object-cover md:hidden sm:block"
                src="https://dummyimage.com/300x100/878787/d1d1d1" alt="placeholder background hero small">
        </div>
    </div>

    <div class="container max-w-5xl mx-auto p-6 pt-0 pb-12 text-center">

        <div class="flex flex-wrap justify-center mb-4">
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
            <div class="flex-auto md:w-1/3">
                <div class="text-center border-0 shadow-none standard-card">
                    <h3 class="heading-3">Heading</h3>
                    <p class="text-sm">
                        Lorem ipsum <span class="font-semibold">dolor sit</span> amet consectetur adipisicing.
                        Aspernatur quaerat molestiae quis tenetur tempore dolor eius.
                    </p>
                </div>
            </div>
        </div>

        <p class="small-print pb-1">
[yd_sp_premium_increases_txt]
        </p>
        <div class="inline-flex">
[learner-quote-button text='Learner quote']
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
        <?php echo do_shortcode("[get-message color='success' message='Copied code to template 003 successfully']"); ?>
        <p class="p-2 text-sm">To start with fresh template, paste into Wordpress content editor on your new landing
            page to get started.</p>
        <?php echo do_shortcode("[get-message color='info' message='NOTE: New landing pages should start with: <span class=\"font-bold\">Landing Pages</span> category selected & <span class=\"font-bold\">Landing Pages Template</span> page attribute selected. Ask developer if unsure.']"); ?>
    </div>
    <button class="close-modal inline-flex primary-btn my-2 mx-auto">Close</button>
</div>


<?php get_footer(); ?>
