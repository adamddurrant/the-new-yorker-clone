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

  <div class="persistent-top">
    <header class="site-header">
      <div class="logo-banner">
        <div class="burger-box">
          <button class="hamburger">
            <div class="bar"></div>
        </div>
        </button>
        <div class="offer-section">
          <span id="hero-offer">Get 12 weeks for <del>$29.99</del> $6</span>
        </div>
        <div class="main-logo">
          <a href="<?php echo site_url() ?>">
            <img id="logo" src="<?php echo get_theme_file_uri('/assets/images/logo.svg') ?>" alt="">
            <img id="mobile-logo" src="<?php echo get_theme_file_uri('/assets/images/logo.svg') ?>" alt="">
          </a>
        </div>
        <div class="utility-links">
          <a href="javascript:void(0)">Newsletter</a>
          <a href="javascript:void(0)">Signin</a>
          <button class="header-subscribe">Subscribe</button>
        </div>
      </div>

      <div class="container">
        <div id="menu" class="menu">
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
  </div>
  <nav class="mobile-navigation-menu">
    <ul class="flex-column min-list">
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