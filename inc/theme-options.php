<?php

add_theme_support('post-thumbnails');

function header_init()
{
  register_nav_menu('header', __('Header'));
}

add_action('init', 'header_init');

function footer__init()
{
  register_nav_menu('footer', __('Footer'));
}

add_action('init', 'footer__init');

//Add class on li in menus
function add_additional_class_on_li($classes, $item, $args) {
  if(isset($args->add_li_class)) {
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);