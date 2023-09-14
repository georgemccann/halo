<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Halo
 * @since Halo Sixteen 1.0
 */

get_header(); ?>

<div id="page">
  <div class="container mb-5">
    <div class='row'>
      <div class='mt-4 col-12 font-weight-bold text-orange'>NEWS & PRESS</div>
    </div>
    <div class="news-press-first-post row">
      <div class="col-12">
        <?php $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 1)); ?>
        <?php if ($wpb_all_query->have_posts()) : ?>
          <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>

            <div class="post-preview position-relative my-1" >
              <a href=<?php echo get_permalink(); ?>">
                <!-- TODO: get image -->
                
                <div><img src='<?php echo get_field('imagery', get_the_ID())['featured_image']; ?>' alt='' class="post-preview-image-large img-fluid"></div>

                <div class="p-2 d-flex flex-column position-absolute position-top-left text-light">
                  <div class="text-uppercase font-weight-bold"><?php echo get_the_category()[0]->cat_name; ?></div>
                  <div>
                    <h3 class="pr-title m-0 font-weight-bold">
                      <img src="/wp-content/themes/halo/img/title-arrow.png" alt="title-arrow" class="m-0 pr-2 title-arrow-large" style="font-size:20px;">
                      <?php echo get_the_title() ?>              </h3>
                  </div>
                  <div style="font-size: 20px;"><?php echo get_the_date('jS M Y') ?></div>
                </div>
                <div class="position-absolute position-bottom-right">
                  <span class="text-light">Read more &gt;</span>
                </div>
                <div class="orange-overlay position-absolute"></div>
              </a>
            </div>

        

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="news-press-all-posts mb-4 row">
       
        <?php $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 999, 'offset' => 1)); ?>
        <?php if ($wpb_all_query->have_posts()) : ?>
          <?php $index = 0; ?>
          <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
            <?php $index++; ?>
            <div class="col-12 col-md-6 col-lg-4 d-flex flex-wrap justify-content-between">
            <div class="w-100 post-preview position-relative my-3 read-more-item 
            <?php if ($index > 1) {
              echo "read-more-item-more";
            } ?>" <?php if ($index > 12) {
                    echo 'style="display:none;"';
                  } ?>>
              <a href="<?php echo get_permalink(); ?>">
                <?php
                $article_id = get_the_ID();
                $article_category = get_the_category()[0]->cat_name;
                $article_title = get_the_title();
                $article_date = get_the_date('jS M Y');
                $article_feature_image = get_field('imagery', $article_id)['featured_image'];
                $article_permalink = get_permalink();
                ?>
                <!-- TODO: get image -->
                
                <div><img src='<?php echo $article_feature_image ?>' alt='' class="post-preview-image-large img-fluid"></div>

                <div class="p-2 d-flex flex-column position-absolute position-top-left text-light">
                  <div class="text-uppercase font-weight-bold"><?php echo $article_category ?></div>
                  <div>
                    <h3 class="pr-title m-0 font-weight-bold">
                      <img src="/wp-content/themes/halo/img/title-arrow.png" alt="title-arrow" class="m-0 pr-2 title-arrow-large" style="font-size:20px;">
                      <?php echo get_the_title() ?>              </h3>
                  </div>
                  <div style="font-size: 20px;"><?php echo get_the_date('jS M Y') ?></div>
                </div>
                <div class="position-absolute position-bottom-right">
                  <span class="text-light">Read more &gt;</span>
                </div>
                <div class="orange-overlay position-absolute"></div>
              </a>
            </div>
            </div>
            

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
  
    </div>
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-center">
          <div id="read-more-button" class="text-center">
            <img src="/wp-content/themes/halo/img/load-more-arrow.png" alt="load-more-arrow" class="image-50">
            <br>
            <div class="mt-3 font-weight-bold text-center text-orange">Read more</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

<!-- Read more button -->
<script>
  $(document).ready(function() {
    $(".read-more-item-more").slice(0, 11).show();
    if ($(".read-more-item:hidden").length != 0) {
      $("#read-more-button").show();
    }
    $("#read-more-button").on('click', function(e) {
      e.preventDefault();
      $(".read-more-item-more:hidden").slice(0, 3).slideDown();
      if ($(".read-more-item-more:hidden").length == 0) {
        $("#read-more-button").fadeOut('slow');
      }
    });
  });
</script>