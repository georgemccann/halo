<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Halo
 * @since Halo 1.0
 */

get_header(); 

$article_feature_image = wp_get_attachment_url( get_post_thumbnail_id($article_id), 'full' ); ?>

<section id="serviceHeader" class="position-relative text-light vh-50">
  <div class="featureImage"><img src="<?php echo $article_feature_image; ?>"/></div>
  <div class="center-content position-relative">
  </div>
</section>

<article id="blog-post" style="background:#EDEDED;">
  <div class="container">
		<div class="row">
		  <div class="col-12"> 
        <div class="blog-post-content position-relative my-5 p-4 mb-5"> 
          <?php while (have_posts()) : the_post(); ?>
            <?php $article_date = get_the_date('F Y'); ?>
            <div class="articleDate text-pink" style="font-weight:500"><?php echo $article_date; ?></div>
            <h1 class="mb-5"><?php the_title(); ?></h1>
            <?php the_content(); ?>

          <?php endwhile; ?> 
			  </div>
		  </div>
		</div>

    <div class="row">
      <?php $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1, 'post__not_in' => [get_the_ID()])); ?>
        <?php if ($wpb_all_query->have_posts()) : ?>
          <?php $index = 0; ?>
          
          <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
            <?php $index++; ?>
              <?php if ($index <= 3): ?>
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

                      <div class="postInfo p-4">
                        <h3 class="pr-title mb-1"> 
                          <?php echo html_entity_decode(get_the_title()); ?>
                        </h3>
                        <div class="pr-date">
                          <?php echo $article_date; ?>
                        </div> 
                      </div>
                 
                      <div class="post-image">
                        <?php if ($article_feature_image != '') { ?>
                        <img src='<?php echo $article_feature_image ?>' alt='<?php echo html_entity_decode(get_the_title()); ?>' class="post-preview-image-large img-fluid">
                        <?php } ?>
                      </div>  
                    </a>
                  </div>
                </div>
              </div> 
              <?php endif; ?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <?php $wpb_all_query = new WP_Query(array('post_type' => 'post', 'post_status' => 'future', 'posts_per_page' => -1, 'post__not_in' => [get_the_ID()])); ?>
        <?php if ($wpb_all_query->have_posts()) : ?>
          <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
            <?php $index++; ?>
              <?php if ($index <= 3): ?>
              <div class="mb-5 downloadItem col-12 col-md-4" <?php if ($index > 4) { echo 'style="display:none;"'; } ?>>
                <div class="smallPost post-preview w-100 <?php if ($index > 1) { echo "read-more-item-more"; } ?>"  >
                  <div class="smallPostContainer"> 
                    <?php
                    $article_id = get_the_ID(); 
                    $article_title = get_the_title();
                    $article_date = get_the_date('F Y');
                    $article_feature_image = wp_get_attachment_url( get_post_thumbnail_id($article_id), 'full' );
                    $article_permalink = get_permalink(); ?>

                    <div class="postInfo p-4">
                      <h3 class="pr-title mb-1"> 
                        <?php echo html_entity_decode(get_the_title()); ?>
                      </h3>
                      <div class="pr-date">
                        Coming Soon
                      </div> 
                    </div>
               
                    <div class="post-image">
                      <?php if ($article_feature_image != '') { ?>
                      <img src='<?php echo $article_feature_image ?>' alt='<?php echo html_entity_decode(get_the_title()); ?>' class="post-preview-image-large img-fluid">
                      <?php } ?>
                    </div>   
                  </div>
                </div>
              </div> 
              <?php endif; ?> 
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</article>
<?php get_template_part( 'template-parts/content', 'our-work' ); ?>


 


<?php get_footer(); ?>

<!-- Read more button -->
<script>
	$(document).ready(function() {
		$(".read-more-item-more").slice(0, 2).show();
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