<?php

function vinjouretnuit_register_assets() {
    wp_register_style('plugins', get_template_directory_uri() . '/assets/css/plugins.css');
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_register_script('vinjouretnuit-jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', [], false, true);
    wp_register_script('vinjouretnuit-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.0.min.js', [], false, true);
    wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', [], false, true);
    wp_register_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', [], false, true);
    wp_register_script('jquery-isotope', get_template_directory_uri() . '/assets/js/jquery.isotope.v3.0.2.js', [], false, true);
    wp_register_script('pace', get_template_directory_uri() . '/assets/js/pace.js', [], false, true);
    wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', [], false, true);
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], false, true);
    wp_register_script('scrollit', get_template_directory_uri() . '/assets/js/scrollIt.min.js', [], false, true);
    wp_register_script('jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', [], false, true);
    wp_register_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', [], false, true);
    wp_register_script('jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', [], false, true);
    wp_register_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', [], false, true);
    wp_register_script('youtube-popup', get_template_directory_uri() . '/assets/js/YouTubePopUp.js', [], false, true);
    wp_register_script('select2', get_template_directory_uri() . '/assets/js/select2.js', [], false, true);
    wp_register_script('datepicker', get_template_directory_uri() . '/assets/js/datepicker.js', [], false, true);
    wp_register_script('scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.min.js', [], false, true);
    wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', [], false, true);
    
    wp_enqueue_style('plugins');
    wp_enqueue_style('style');
    
    wp_enqueue_script('vinjouretnuit-jquery');
    wp_enqueue_script('vinjouretnuit-jquery-migrate');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('imagesloaded');
    wp_enqueue_script('jquery-isotope');
    wp_enqueue_script('pace');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('scrollit');
    wp_enqueue_script('jquery-waypoints');
    wp_enqueue_script('owl-carousel');
    wp_enqueue_script('jquery-stellar');
    wp_enqueue_script('magnific-popup');
    wp_enqueue_script('youtube-popup');
    wp_enqueue_script('select2');
    wp_enqueue_script('datepicker');
    wp_enqueue_script('scroll');
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'vinjouretnuit_register_assets');