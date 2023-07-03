<?php

    function more_enqueue_styles() {
        wp_enqueue_style('more-style-1', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
        wp_enqueue_style('more-style-2', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css' );
        wp_enqueue_style('more-style-3', get_template_directory_uri().'/assets/css/style.css' );
        wp_enqueue_style('more-style-4', get_template_directory_uri().'/assets/css/responsive.css' );
    }
    function more_enqueue_scripts() {
        wp_enqueue_script('more-script-1', get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js', '', '', true );
        wp_enqueue_script('more-script-2', get_template_directory_uri().'/assets/js/popper.min.js', '', '2.2.4', true );
        wp_enqueue_script('more-script-3', get_template_directory_uri().'/assets/js/bootstrap.min.js', '', '', true );
        wp_enqueue_script('more-script-4', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', '', '', true );
        wp_enqueue_script('more-script-5', get_template_directory_uri().'/assets/js/main.js', '', '', true );
    }

    add_action( 'wp_enqueue_scripts', 'more_enqueue_styles' );
    add_action( 'wp_enqueue_scripts', 'more_enqueue_scripts' );

    register_nav_menu('main-menu', 'Main menu');
    require_once('bootstrap_5_wp_nav_menu_walker.php');


    remove_filter ('the_content' , 'wpautop');
    remove_filter ('the_excerpt', 'wpautop');
    
    add_post_type_support( 'page', 'excerpt' );
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    add_filter( 'excerpt_length', function($length) {return 30;} );

    function custom_excerpt_more( $excerpt ) { return '';}
    add_filter( 'excerpt_more', 'custom_excerpt_more' );
?>