<?php get_template_part('templates/partials/document-open'); ?>

<header class="flex justify-between bg-white shadow-md filter">

    <div class="flex-1 px-4 py-2 m-2 text-left">

        <!-- Burger menu -->
        <?php get_template_part('templates/partials/navburger-main'); ?>
        <!-- Burger toggle -->
        <button type="button" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <div class="flex-none px-4 py-2 mt-3 align-middle">
        <a href="/">
            <!-- <span class="text-xl font-bold">ingenie</span> -->
            <img src="/resources/img/ingenie-logo.svg" alt="ingenie Insurance" width="112" height="auto">
        </a>
    </div>

    <div class="flex-1 px-4 py-2 m-2 text-center sm:text-right">
        <!-- <a href="/myaccount" class="primary-link-sm hidden lg:inline-flex">
            <span>My Account</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pl-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a> -->

        <a href="/retrieve-a-quote-type" class="primary-link-xs mr-1 hidden lg:inline-flex">
            <span>Retreive quote</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pl-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a>

        <a href="/choose-a-type-of-insurance" class="primary-btn-sm inline-flex">
            <span>Get a quote</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pl-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </a>

    </div>

</header>

<?php get_template_part('templates/partials/navbar', 'main'); ?>
