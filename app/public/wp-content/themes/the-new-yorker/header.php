<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
  <title>The New Yorker</title>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="logo-banner">
      <div class="offer-section"></div>
      <div class="main-logo">
        <a href="<?php echo site_url() ?>">
          <img id="logo" src="<?php echo get_theme_file_uri('/assets/images/logo.svg') ?>" alt="">
        </a>
      </div>
      <div class="utility-links">
        <a href="javascript:void(0)">Newsletter</a>
        <a href="javascript:void(0)">Signin</a>
        <button class="header-subscribe">Subscribe</button>
      </div>
    </div>


    <div class="container">
      <div class="menu">
        <nav class="navigation-menu">
          <ul class="flex-row min-list">
            <li><a href="javascript:void(0)">News</a></li>
            <li><a href="javascript:void(0)">Books & Culture</a></li>
            <li><a href="javascript:void(0)">Fiction & Poetry</a></li>
            <li><a href="javascript:void(0)">Humor & Cartoons</a></li>
            <li><a href="javascript:void(0)">Magazine</a></li>
            <li><a href="javascript:void(0)">Puzzles & Games</a></li>
            <li><a href="javascript:void(0)">Video</a></li>
            <li><a href="javascript:void(0)">Podcasts</a></li>
            <li><a href="javascript:void(0)">Archive</a></li>
            <li><a href="javascript:void(0)">Goings On</a></li>
            <li><a href="javascript:void(0)">Shop</a></li>
          </ul>
        </nav>
      </div>

    </div>
  </header>