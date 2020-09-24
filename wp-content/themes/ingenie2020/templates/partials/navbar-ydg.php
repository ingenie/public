<nav class="ydg-nav">
    <?php 
wp_nav_menu(
    array (
        'theme_location' => 'ydg-menu',
        'container_class' => 'text-xxs uppercase font-semibold',
        'menu_class' => 'flex',
        'add_li_class'  => 'flex-grow block m-1 mb-2 text-white hover:text-ig-orange-500 leading-tight'
 
        )
    );?>
</nav>
