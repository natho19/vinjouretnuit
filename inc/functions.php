<?php
define('VJN_IMG_LOCATION', get_template_directory_uri() . '/assets/img', false);

function vinjouretnuit_supports() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'vinjouretnuit_supports');