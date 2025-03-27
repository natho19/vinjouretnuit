<?php

function vjn_add_supports() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

function vjn_remove_supports() {
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'thumbnail');
}

add_action('after_setup_theme', 'vjn_add_supports');
add_action('init', 'vjn_remove_supports');