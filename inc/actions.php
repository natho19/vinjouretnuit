<?php

function vinjouretnuit_supports() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'vinjouretnuit_supports');