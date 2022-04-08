<?php 

    $uri = get_template_directory_uri();
    
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_action("after_setup_theme", "register_menu");
    
    function register_menu(){
        register_nav_menu("navbar menu", "Navbar Menu");
        register_nav_menu("side menu", "Side Menu");
        register_nav_menu("categories", "Categories");
        register_sidebar("sidebar", "Sidebar");
    }


    register_sidebar(
        [
            name => "Sidebar",
            id => "sidebar",
            description => "Sidebar widget"
        ]
    );
    
    function myScripts(){
        wp_enqueue_script('script', get_template_directory_uri() . './js/script.js', array(), false, true);
        wp_enqueue_script('script', get_template_directory_uri() . './js/jquery.js', array(), false, true);
        
    }
    add_action('wp_enqueue_scripts', 'myScripts');
    add_shortcode('wpbsearch', 'get_search_form');

    ?>