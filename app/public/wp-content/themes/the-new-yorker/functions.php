<?php

function new_yorker_files()
{
  wp_enqueue_style('main-styles', get_theme_file_uri('styles/css/main.css'));
  wp_enqueue_script('menu-js', get_theme_file_uri('/js/header.js'), '1.0', true);
}
//Enqueue all files above on every page
add_action('wp_enqueue_scripts', 'new_yorker_files');


//remove admin bar
add_filter('show_admin_bar', '__return_false');
