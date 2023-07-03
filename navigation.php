<?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container' => 'nav navbar-nav',
        'menu_class' => 'nav navbar-nav',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 pt-lg-2 %2$s">%3$s</ul>',
        'depth' => 2,
        'walker' => new bootstrap_5_wp_nav_menu_walker()
    ));
?>