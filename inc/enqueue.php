<?php

function vinjouretnuit_register_assets() {
    wp_register_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css');
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');
    
    wp_enqueue_style('plugins');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'vinjouretnuit_register_assets');