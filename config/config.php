<?php 


wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/assets/css/main.min.css' );
wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/assets/js/app.main.js' , null , null , true );


register_nav_menus (
    array (
        'Header' => __( 'Header', 'odin' ),
        'Footer' => __( 'Footer', 'odin' ),
    )
);

add_theme_support( 'post-thumbnails');