<?php
add_action( 'wp_enqueue_scripts', 'aventura_child_styles',11);
function aventura_child_styles() {
    wp_enqueue_style( 'aventura-child-style', get_stylesheet_directory_uri() . '/style.css');
}