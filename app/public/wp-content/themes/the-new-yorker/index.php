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
      )); ?>


      <div class="twelveGrid">

        <div class="threeGridOne">
          <?php
          //loop through posts and fetch data
          while ($homeGridFirstTwo->have_posts()) {
            $homeGridFirstTwo->the_post(); ?>
            <div class="content-wrap-one">
              <a href="<?php the_permalink(); ?>">
                <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
              </a>
              <div class="summary">
                <div class="archiveCategory"><?php
                                              $category = get_the_category();
                                              echo $category[0]->cat_name;
                                              ?></div>
                <div class="archiveTitle"><?php the_title(); ?></div>
                <div class="archiveExcerpt"><?php if (has_excerpt()) {
                                              echo get_the_excerpt();
                                            } else {
                                              echo wp_trim_words(get_the_content(), 18);
                                            }; ?></div>
                <div class="archiveAuthor">By <?php the_author(); ?></div>
              </div>
            </div>
          <?php }
          wp_reset_postdata();
          ?>
        </div>
        <div class="sixGrid">


        </div>
        <div class="threeGridTwo">

        </div>

      </div>

    </div>
  </div>

</main>


<!-- test page space -->
<div style="margin-top: 100rem; margin-bottom:100rem;"></div>



<?php get_footer(); ?>