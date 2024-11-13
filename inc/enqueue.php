<?php

function theme_enqueue_style()
{
    wp_enqueue_style('google-fonts-cabin', 'https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap');
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css');
    wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_style');

function theme_enqueue_script()
{
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_script');
