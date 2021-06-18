<nav class="navbar-main hidden lg:flex justify-evenly">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'container_class' => 'text-sm sm:flex-grow',
            'menu_class' => 'text-center',
            'add_li_class'  => 'flex-initial m-0 block sm:inline-block sm:mt-0 border'
        )
    ); ?>
</nav>
