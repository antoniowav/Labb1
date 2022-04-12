<?php 


/* Added themes support and actions */


add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');
add_action("after_setup_theme", "register_menu");
add_action('wp_enqueue_scripts', 'myScripts');
add_shortcode('wpbsearch', 'get_search_form');

/* Function that register the menus */

function register_menu(){
    register_nav_menu("navbar menu", "Navbar Menu");
    register_nav_menu("side menu", "Side Menu");
    register_nav_menu("categories", "Categories");
}

/* Function that register the sidebars */

register_sidebar(
    [
        "name" => "Sidebar",
        "id" => "sidebar",
        "description" => "Sidebar widget",
        "class" => "list-sidebar"
    ]
);

register_sidebar(
    [
        "name" => "Footer 1",
        "id" => "footer1",
        "description" => "About us"
    ]
);

register_sidebar(
    [
        "name" => "Footer 2",
        "id" => "footer2",
        "description" => "Contacts"
    ]
);

register_sidebar(
    [
        "name" => "Footer 3",
        "id" => "footer3",
        "description" => "Social"
    ]
);

register_sidebar(
    [
        "name" => "Footer 4",
        "id" => "footer4",
        "description" => "Copyright"
    ]
);

/* Enqueuing the js and css files */ /* I commented out the fontawesome enqueuing since the console gave me an error of 404 */

function myScripts(){
    wp_register_style('bootstrap',  get_template_directory_uri() . '/css/bootstrap.css');
   /*  wp_register_style('fontawesome',  get_template_directory_uri() . '/css/fontawesome.css'); */
    wp_register_style('style',  get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('bootstrap');
  /*   wp_enqueue_style('fontawesome'); */
    wp_enqueue_style('style');
    
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', [], false, true);
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', [], false, true);
    
}


?>