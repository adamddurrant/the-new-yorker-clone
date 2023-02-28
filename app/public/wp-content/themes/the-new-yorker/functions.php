<?php

function new_yorker_files()
{
  wp_enqueue_style('main-styles', get_theme_file_uri('styles/css/main.css'));
  wp_enqueue_script('menu-js', get_theme_file_uri('/js/header.js'), '1.0', true);
}
//Enqueue all files above on every page
add_action('wp_enqueue_scripts', 'new_yorker_files');



function new_yorker_features() //enable features in WP
{
  //enable menus option in Wordpress & adds display locations
  register_nav_menu('mainMenuLocation', 'Main Menu');
  register_nav_menu('footerLocationOne', 'Footer Menu One');
  register_nav_menu('footerLocationTwo', 'Footer Menu Two');

  //enable title tags & featured image
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  //add custom image size on upload for home main featured
  add_image_size('homeImages', 1280, 960, true); //Adds a custom image size on upload 
}
//Enqueue header titles
add_action('after_setup_theme', 'new_yorker_features');


// remove 'stick to top of blog' checkbox from posts
add_action('admin_print_styles', 'hide_sticky_option');
function hide_sticky_option()
{
  global $post_type, $pagenow;
  if ('post.php' != $pagenow && 'post-new.php' != $pagenow)
    return;
?>
  <style type="text/css">
    #sticky-span {
      display: none !important
    }
  </style>
<?php
}




//remove admin bar
add_filter('show_admin_bar', '__return_false');
