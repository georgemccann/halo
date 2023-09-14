<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Halo
 * @since Halo 1.0
 */

get_header(); ?>

<article id="page">
  
  <div class="container pt-5">
  

    <div class="row pt-5">
      <div class="col-12 pt-5">
            <div class="blog-post-content position-relative py-5 mb-5">
  

        <div class="row">
                  <?php while (have_posts()) : the_post(); ?>
          <div class="col">
            <div class="blog-post-text row pb-5">
            
             
              <div class="blog-post-title col-12">
                <h1><?php the_title(); ?></h1>
              </div>
    
           

              <div class="blog-post-main-content col-12 my-4">
                <?php the_content() ?>
              </div>
            </div>
          </div>
       
        <?php endwhile; ?>
          </div>
         
      </div>
      </div>
    </div>
    
  </div>
</article>

 


<?php get_footer(); ?>