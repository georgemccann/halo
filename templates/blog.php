<?php

/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage halo
 * @since halo 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'page-header' ); ?>

 
  <div id="blog">
  
    <div class="container py-5">
      <div class="news-posts mb-4 row">
         
        <?php $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>
        <?php if ($wpb_all_query->have_posts()) : ?>
          <?php $index = 0; ?>
          <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
        
              <div class="mb-5 downloadItem col-12 col-md-4" <?php if ($index > 4) { echo 'style="display:none;"'; } ?>>
                <div class="smallPost post-preview w-100 <?php if ($index > 1) { echo "read-more-item-more"; } ?>"  >
                  <div class="smallPostContainer">
                    <a href="<?php echo get_permalink(); ?>">
                      <?php
                      $article_id = get_the_ID(); 
                      $article_title = get_the_title();
                      $article_date = get_the_date('F Y');
                      $article_feature_image = wp_get_attachment_url( get_post_thumbnail_id($article_id), 'full' );
                      $article_permalink = get_permalink(); ?>
                      <div class="post-image">
                        <?php if ($article_feature_image != '') { ?>
                        <img src='<?php echo $article_feature_image ?>' alt='<?php echo html_entity_decode(get_the_title()); ?>' class="post-preview-image-large img-fluid">
                        <?php } ?>
                      </div> 

                      <div class="postInfo p-4">
                        <div class="pr-date">
                          <?php echo $article_date; ?>
                        </div> 
                        <h3 class="pr-title mb-1"> 
                          <?php echo html_entity_decode(get_the_title()); ?>
                        </h3> 
                        <div class="pr-readmore">
                          READ MORE >
                        </div> 
                      </div>
                 
                       
                    </a>
                  </div>
                </div>
              </div>  
        
             
            
            

          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?> 
      </div>
      <div class="row">
        <div class="col-12">
          <div class="d-flex justify-content-center">
            <div id="read-more-button" class="text-center" style="cursor: pointer;">
              <i class="fas fa-chevron-down"></i> 
              <div class="font-weight-bold text-center text-orange">Read more</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <section id="mid-section" class="mid-section p-relative">
    <img src="/wp-content/uploads/2023/09/home-mid.png" class="w-100"/>
  </section>
  
  <?php get_template_part( 'template-parts/content', 'our-work' ); ?>

<!-- Read more button -->
<script>
  
  $(document).ready(function() {
  
    $(".downloadItem").slice(0, 4).show();
    if ($(".downloadItem:hidden").length != 0) {
      $("#read-more-button").show();
    }
    $("#read-more-button").on('click', function(e) {
      e.preventDefault();
      if ($(".form-check-input:checkbox:checked").length > 0) {
        $(".form-check-input:checkbox:checked").each(function() {
          //$(".downloadItem").hide();
          if ($(this).val()!= '') {
            $("." + $(this).val() +'.downloadItem:hidden').slice(0, 3).slideDown();
          } else {
            $('.downloadItem:hidden').slice(0, 3).slideDown();
          }
          
        });
      } else {
        $(".downloadItem:hidden").slice(0, 3).slideDown();
      }
      if ($(".downloadItem:hidden").length == 0) {
        $("#read-more-button").fadeOut('slow');
      }
    });
  });
</script>


<?php get_footer(); ?>