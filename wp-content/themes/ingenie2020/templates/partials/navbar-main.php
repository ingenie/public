<nav class="navbar-main hidden lg:flex justify-evenly">
    <div class="text-sm">
        <ul id="menu-main-menu" class="text-center">
            <li id="" class="menu-item m-0 block sm:inline-block sm:mt-0 border">
                <a href="/young-driver-insurance/" aria-current="page">Young Driver Insurance</a>

                <div class="sub-menu yd-menu">
                    <div class="flex">
                        <div class="flex-1">
                            <h3 class="heading-3 pl-16 mt-8">Young Driver Insurance</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-yd-menu',
                                    'container_class' => 'text-sm p-10 pt-0',
                                    'menu_class' => '',
                                    'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0 border'
                                )
                            ); ?>
                        </div>

                        <div class="flex-none relative">
                            <!-- Advert view -->
                            <?php
                            \ingenie2020Theme\View::render('IgAdvertiseView', [
                                'location' => 'yd-desktop-menu',
                                'twClasses' => '',
                            ]); ?>
                        </div>
                    </div>
                </div>

            </li>
            <li id="" class="menu-item m-0 block sm:inline-block sm:mt-0 border">
                <a href="/learner-driver-insurance/">Learner Driver Insurance</a>

                <div class="sub-menu learner-menu">
                    <div class="flex">
                        <div class="flex-1">
                            <h3 class="heading-3 pl-16 mt-8">Learner Driver Insurance</h3>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-learner-menu',
                                    'container_class' => 'text-sm p-10 pt-0',
                                    'menu_class' => '',
                                    'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0 border'
                                )
                            ); ?>
                        </div>

                        <div class="flex-none relative">
                            <!-- Advert view -->
                            <?php
                            \ingenie2020Theme\View::render('IgAdvertiseView', [
                                'location' => 'learner-desktop-menu',
                                'twClasses' => '',
                            ]); ?>
                        </div>
                    </div>
                </div>

            </li>
            <li id="" class="menu-item m-0 block sm:inline-block sm:mt-0 border">
                <a href="http://ingeniewordpress.local/myaccount">My Account</a>
            </li>
            <li id="" class="menu-item m-0 block sm:inline-block sm:mt-0 border">
                <a href="http://ingeniewordpress.local/young-drivers-guide/">Young Drivers Guide</a>
            </li>
        </ul>
    </div>


    <!-- TODO: May not use now!!!!! oringinal menu, delte wp menu too if unused!!
     <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'container_class' => 'text-sm',
                'menu_class' => 'text-center',
                'add_li_class'  => 'm-0 block sm:inline-block sm:mt-0 border'
            )
        ); ?> -->

</nav>
