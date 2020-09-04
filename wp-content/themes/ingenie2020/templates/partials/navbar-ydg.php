<!-- NAVBAR COMPONENT -->

<!-- <div class="flex justify-between bg-gray-200">
  <div class="px-4 py-2 m-2 text-center text-gray-700 bg-gray-400">1</div>
  <div class="px-4 py-2 m-2 text-center text-gray-700 bg-gray-400">2</div>
  <div class="px-4 py-2 m-2 text-center text-gray-700 bg-gray-400">3</div>
</div> -->

<nav
    class="flex flex-wrap items-center justify-between p-3 h-24 bg-gradient-to-r from-ydg-blue-600 via-ydg-blue-700 to-ydg-blue-800">

    <div class="flex-1">
        <?php 
wp_nav_menu(
    array (
        'theme_location' => 'main-menu',
        'container_class' => 'text-sm sm:flex-grow',
        'menu_class' => '',
        'add_li_class'  => 'block mt-4 mr-4 text-ig-blue-200 sm:inline-block sm:mt-0 hover:text-white'
 
        )
    );?>
    </div>

    <div class="flex-none">
        <a href="/">
            <!-- <span class="text-xl font-bold">ingenie</span> -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ingenie-logo-ydg.svg"
                alt="ingenie Insurance" width="112" height="auto">
        </a>
    </div>

    <div class="flex-1 text-right">
        <a href="#"
            class="inline-block px-4 py-2 text-sm leading-none text-white border rounded border-ig-orange-500 hover:border-transparent hover:text-white bg-ig-orange-500 hover:bg-ig-orange-600 mt-0">Get
            a quote</a>
    </div>

</nav>

<div class="absolute w-full -mt-6 z-50">
    <img class="object-center mx-auto"
        src="<?php echo get_template_directory_uri(); ?>/assets/img/ydg-masthead-logo.svg" alt="ingenie Insurance"
        width="280" height="auto">
</div>
