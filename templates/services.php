<?php

/**
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage halo
 * @since halo 1.0
 */

get_header(); ?>


<?php get_template_part( 'template-parts/content', 'page-header' ); ?>
 
<section id="home-intro" class="py-5">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-lg-4 text-start">
        <h2><?php the_field('our_services_title'); ?></h2>
        <?php the_field('our_services_content'); ?>
      </div>


      <div class="col-12 col-lg-8">
        <div class="row service-boxes">

          <?php  
          if( have_rows('services') ):
            while( have_rows('services') ) : the_row(); ?>
              <div class="col-12 col-lg-6 mb-4">
                <a href="<?php the_sub_field('service_link'); ?>" class="service">
                  <div class="service-title text-center">
                    <img src="<?php the_sub_field('service_image'); ?>" alt="<?php the_sub_field('service_title'); ?>"/>
                    <h3><?php the_sub_field('service_title'); ?></h3>
                  </div>
                  
                  <div class="service-info text-center">
                  <?php the_sub_field('service_content'); ?>
                    <h3><?php the_sub_field('service_title'); ?></h3>
                  </div>
                </a>
              </div> 
            
            <?php 
            endwhile;
          endif; ?>    
        </div>
      </div>

    </div>
  </div>
</section>

<?php 
$quote = get_field('quote');
$quote_author = get_field('quote_author');
$background_image = get_field('quote_background_image');
include(locate_template('template-parts/content-quote-block.php')); 
?>
 

<section id="presentation-types" class="py-5">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-lg-6 text-center">
        <h2><?php the_field('presentation_types_title'); ?></h2>
        <?php the_field('presentation_types_content'); ?>
      </div> 
      <div class="col-12 mt-4">
        <div class="presentation-types-slider text-light mt-4 p-5">
  
          <?php  
          if( have_rows('presentation_types_slides') ):
            while( have_rows('presentation_types_slides') ) : the_row(); ?> 
              <div>
                <div class="row align-items-center justify-content-between gx-5">
                  <div class="col-12 col-lg-5">
                    <h2 class="text-light"><?php the_sub_field('title'); ?></h2>
                    <?php the_sub_field('content'); ?>
                  </div> 
                  <div class="col-12 col-lg-6">
                    <img class="w-100" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>" />
                  </div>
                </div>
              </div> 
            <?php 
            endwhile;
          endif; ?>  
        </div>
      </div> 
    </div>
  </div>
</section>
 
<script>
$(document).ready(function(){ 
  
  
  $('.presentation-types-slider').slick({
    dots: true, 
    slidesToShow: 1,
    adaptiveHeight: true
  });

});

</script> 
 
<section id="home-services">
  <div class="container">
    <div class="row gx-0">
      <div class="col-12 col-lg-6">
        <div class="half-block light text-left">
          <h2 class="mb-5"><?php the_field('content_left_title'); ?></h2>
          <?php the_field('content_left_content'); ?>
          <div class="mt-5">
            <a href="<?php the_field('content_left_link'); ?>" class="btn btn-primary">FIND OUT MORE</a>
          </div>
          
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="half-block dark"> 
          <ol class="fa-ul">
            <?php  
            if( have_rows('content_right_checkboxes') ):
              while( have_rows('content_right_checkboxes') ) : the_row(); ?> 
                <li><span class="fa-li"><i class="fa fa-check"></i></span><?php the_sub_field('check'); ?></li> 
              <?php 
              endwhile;
            endif; ?>   
          </ol> 
        </div>
      </div> 
    </div>
  </div>
</section> 
<?php get_template_part( 'template-parts/content', 'our-work' ); ?>
 
<?php get_footer(); ?>