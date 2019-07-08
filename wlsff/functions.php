<?php



if (site_url()== "http://localhost/practice") {
    define("VERSION", time());
} else {
    define("VERSION", wp_get_theme() -> get("version"));
}



function wssf_setup(){
    load_theme_textdomain('wssf');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array( 'search-form' ));
    add_theme_support('widgets');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    $wssf_custom_logo_defaults = array(
        "width"  => '100',
        "height" => '100'
    );
    add_theme_support( "custom-logo", $wssf_custom_logo_defaults );
    register_nav_menu( 'topmenu', __('Top Menu', 'wssf'));
    register_nav_menu( 'footermenu', __('Footer Menu', 'wssf'));
    add_theme_support('post-formats', array('audio','video','image','quote','link') );
}

add_action( 'after_setup_theme', 'wssf_setup' );


function wssf_scripts(){

    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
    wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all' );
    wp_enqueue_style( 'wssf-css', get_template_directory_uri().'/assets/css/style.css','all' );
    wp_enqueue_style( 'wssf-style', get_stylesheet_uri(), null,'all'); 
   

    wp_enqueue_script( 'poppperjs', '///cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',array('jquery'), '1.12.9', true );
    wp_enqueue_script( 'boostrapjs', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
    wp_enqueue_script( 'easingjs', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), '1.4.1', true );
    wp_enqueue_script( 'mainjs', get_template_directory_uri().'/assets/js/scripts.js', array('jquery'), VERSION, true );

}

add_action( 'wp_enqueue_scripts', 'wssf_scripts' );



function wssft_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'wssf' ),
        'id'            => 'sidebar1',
        'description'   => __( 'Posts right sidebar', 'wssf' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'wssft_widgets_init' );



add_filter('the_excerpt', 'wssf_the_excerpt' );

function wssf_protected_title_format(){
    return '%s';
}
add_filter('protected_title_format', 'wssf_protected_title_format' );



function wssf_nav_menu_css($classes, $item){
    $classes[] = "list-inline-item";
    return $classes;
}

add_filter('nav_menu_css_class','wssf_nav_menu_css', 10,2);



