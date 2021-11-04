<?php

function my_custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . './style.css' );
}
    
add_action( 'login_enqueue_scripts', 'my_custom_login_stylesheet' );