<nav class="main-nav">
    <?php 
wp_nav_menu(
    array (
        'theme_location' => 'main-menu',
        'container_class' => 'text-sm sm:flex-grow',
        'menu_class' => '',
        'add_li_class'  => 'block mt-4 mr-4 text-ig-blue-500 sm:inline-block sm:mt-0 hover:text-white'
 
        )
    );?>
</nav>
