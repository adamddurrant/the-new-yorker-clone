<?php

function new_yorker_files()
{
  wp_enqueue_style('main-styles', get_theme_file_uri('styles/css/main.css'));
}
//Enqueue all files above on every page
add_action('wp_enqueue_scripts', 'new_yorker_files');
