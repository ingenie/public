<?php get_template_part( 'templates/partials/document-open' ); ?>


<!-- NAVBAR COMPONENT -->

<!-- <div class="flex justify-between bg-gray-200">
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">1</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">2</div>
  <div class="text-gray-700 text-center bg-gray-400 px-4 py-2 m-2">3</div>
</div> -->


<header class="flex flex-wrap items-center justify-between py-5 px-2 bg-white">

    <div class="flex-1">
        <?php get_template_part( 'templates/partials/navbar', 'main' ); ?>
    </div>

    <div class="flex-none">
        <a href="/">
            <!-- <span class="text-xl font-bold">ingenie</span> -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ingenie-logo.svg" alt="ingenie Insurance"
                width="112" height="auto">
        </a>
    </div>

    <div class="flex-1 text-right">
        <a href="#"
            class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-ig-orange-500 hover:border-transparent hover:text-white bg-ig-orange-500 hover:bg-ig-orange-600 mt-4 md:mt-0">Get
            a quote!!</a>
    </div>

</header>
