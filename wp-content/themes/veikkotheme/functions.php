<?php
function add_stylesheet() {
wp_register_style('bootstrap.min',get_template_directory_uri() . '/css/bootstrap.min.css');
wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'add_stylesheet' ); ?>