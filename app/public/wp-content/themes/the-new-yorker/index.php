<?php get_header(); ?>

<main>

  <hr class="home-divider">
  <div class="section">
    <div class="container">
      <div class="marketing-banner flex-row">
        <img class="eustace" src="<?php echo get_theme_file_uri('/assets/images/eustace.png') ?>" alt="">
        <p class="marketing-text">Support <em>The New Yorker’s</em> award-winning journalism.</p>
        <a class="blue-link" href="javascript:void(0)">Subscribe today >></a>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <?php
      $homeGridFirstTwo = new WP_Query(array(
        //Orders events by upcoming date from advanced field
        'posts_per_page' => 2,
        'post_type' => 'post',
        'post_status' => 'publish',
        'order' => 'ASC',
        'orderby' => 'date',
      ));
      $homeGridFeatured = new WP_Query(array(
        //Orders events by upcoming date from advanced field
        'posts_per_page' => 1,
        'post_type' => 'post',
        'post_status' => 'publish',
        'order' => 'ASC',
        'orderby' => 'meta_value',
        'meta_key' => 'homepage_feature_story',
        'meta_query' => array(
          //Filters out posts that are not featured
          array(
            'key' => 'homepage_feature_story',
            'compare' => '=',
            'value' => true,
          )
        )
      ));
      $secondaryHomeGridFeatured = new WP_Query(array(
        //Orders events by upcoming date from advanced field
        'posts_per_page' => 1,
        'offset' => 2,
        'post_type' => 'post',
        'post_status' => 'publish',
        'order' => 'ASC',
        'orderby' => 'date',
      ));
      $homeGridList = new WP_Query(array(
        //Orders events by upcoming date from advanced field
        'posts_per_page' => 5,
        'offset' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'order' => 'ASC',
        'orderby' => 'date',
      )); ?>

      <div class="twelveGrid">
        <div class="threeGridOne">
          <?php
          //loop through posts and fetch data
          while ($homeGridFirstTwo->have_posts()) {
            $homeGridFirstTwo->the_post();
            $category = get_the_category();
            $categoryLink = get_category_link($category[0]->term_id);
          ?>
            <div class="content-wrap-one">
              <a href="<?php the_permalink(); ?>">
                <div class="thumbnail"><?php the_post_thumbnail('homeImages'); ?></div>
              </a>
              <div class="summary">
                <a class="archiveCatLink" href="<?php echo $categoryLink ?>">
                  <div class="archiveCategory">
                    <?php
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                    ?>
                  </div>
                </a>
                <a href="<?php the_permalink(); ?>">
                  <div class="archiveTitle">
                    <?php the_title(); ?></div>

                  <div class="archiveExcerpt">
                    <?php if (has_excerpt()) {
                      echo get_the_excerpt();
                    } else {
                      echo wp_trim_words(get_the_content(), 18);
                    }; ?></div>
                  <div class="archiveAuthor">By <?php the_author(); ?></div>
                </a>
              </div>
            </div>
          <?php }
          wp_reset_postdata();
          ?>
        </div>
        <div class="sixGrid">
          <?php
          while ($homeGridFeatured->have_posts()) {
            $homeGridFeatured->the_post();
            $category = get_the_category();
            $categoryLink = get_category_link($category[0]->term_id);
          ?>
            <div class="content-wrap-one">
              <a href="<?php the_permalink(); ?>">
                <div class="thumbnail"><?php the_post_thumbnail('homeImages'); ?></div>
              </a>
              <div class="summary">
                <a class="archiveCatLink" href="<?php echo $categoryLink ?>">
                  <div class="archiveCategory">
                    <?php
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                    ?>
                  </div>
                </a>
                <a href="<?php the_permalink(); ?>">
                  <div class="archiveTitle">
                    <?php the_title(); ?></div>

                  <div class="archiveExcerpt">
                    <?php if (has_excerpt()) {
                      echo get_the_excerpt();
                    } else {
                      echo wp_trim_words(get_the_content(), 18);
                    }; ?></div>
                  <div class="archiveAuthor">By <?php the_author(); ?></div>
                </a>
              </div>
            </div>
          <?php }
          wp_reset_postdata();
          ?>

          <div class="featuredThreeGrid">
            <?php
            while ($secondaryHomeGridFeatured->have_posts()) {
              $secondaryHomeGridFeatured->the_post();
              $category = get_the_category();
              $categoryLink = get_category_link($category[0]->term_id);
            ?>
              <div class="featuredThreeSummary archiveExcerpt">
                <a class="archiveCatLink" href="<?php echo $categoryLink ?>">
                  <div class="archiveCategory">
                    <?php
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                    ?>
                  </div>
                </a>
                <a href="<?php the_permalink(); ?>">
                  <div class="archiveTitle">
                    <?php the_title(); ?></div>
                </a>
                <a href="<?php the_permalink(); ?>">
                  <div class="archiveExcerpt">
                    <?php if (has_excerpt()) {
                      echo get_the_excerpt();
                    } else {
                      echo wp_trim_words(get_the_content(), 18);
                    }; ?></div>
                  <div class="archiveAuthor">By <?php the_author(); ?></div>
                </a>
              </div>
              <div class="featuredThreeImage">
                <a href="<?php the_permalink(); ?>">
                  <div class="thumbnail"><?php the_post_thumbnail('homeImages'); ?></div>
                </a>
              </div>
            <?php }
            wp_reset_postdata();
            ?>
          </div>
        </div>

        <div class="threeGridTwo">
          <div class="threeGridTwoHeadingWrapper">
            <h2 class="threeGridTwoHeading">News & Culture</h2>
          </div>
          <?php
          while ($homeGridList->have_posts()) {
            $homeGridList->the_post();
            $category = get_the_category();
            $categoryLink = get_category_link($category[0]->term_id);
          ?>
            <div class="threeGridTwoBlock">
              <div class="listSummary">
                <a class="archiveCatLink" href="<?php echo $categoryLink ?>">
                  <div class="archiveCategory">
                    <?php
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                    ?>
                  </div>
                </a>
                <a class="flex-row no-wrap" href="<?php the_permalink(); ?>">
                  <div class="archiveTitleList">
                    <?php the_title(); ?></div>
                </a>
                <a href="<?php the_permalink(); ?>">
                  <div class="archiveAuthor">By <?php the_author(); ?></div>
                </a>
              </div>

              <div class="miniThumbnail"><?php the_post_thumbnail('thumbnail'); ?>

              </div>
            </div>
          <?php }
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="section-title">
      <h2>Puzzles & Games</h2>
    </div>
  </div>


</main>


<!-- test page space -->
<div style="margin-top: 100rem; margin-bottom:100rem;"></div>



<?php get_footer(); ?>