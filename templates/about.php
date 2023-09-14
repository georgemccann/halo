<?php

/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage halo
 * @since halo 1.0
 */

get_header(); ?>
<?php get_template_part( 'template-parts/content', 'page-header' ); ?>


<section class="my-5">
  <div class="container py-5">
    <div class="row gx-0"> 
      <div class="col-12 col-lg-6">
        <div class="half-block dark">
          <h2><?php the_field("service_info_dark_title"); ?></h2>
          <strong class="pb-3"><?php the_field("service_info_dark_sub_title"); ?></strong>
          <?php the_field('service_info_dark_copy'); ?>
          <div class="socialIcons text-dark">
            <a class="text-dark" target="_blank" href="<?php the_field('service_info_dark_linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a> 
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="half-block light text-left fit-image">
          <img src="<?php the_field("service_info_dark_image"); ?>"/>
        </div>
      </div> 
    </div>
  </div>
</section>


<section class="mb-5">
  <div class="container pb-5">
    <div class="row gx-0"> 

      <div class="col-12 col-lg-6">
        <div class="half-block light text-left fit-image">
          <img src="<?php the_field("service_info_dark_image_two"); ?>"/>
        </div>
      </div> 
      <div class="col-12 col-lg-6">
        <div class="half-block dark">
          <h2><?php the_field("service_info_dark_title_two"); ?></h2>
          <strong class="pb-3"><?php the_field("service_info_dark_sub_title_two"); ?></strong>
          <?php the_field('service_info_dark_copy_two'); ?>
          <div class="socialIcons text-dark">
            <a class="text-dark" target="_blank" href="<?php the_field('service_info_dark_linkedin_two'); ?>"><i class="fab fa-linkedin-in"></i></a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
<section id="serviceInfoDark" class="<?php the_field('service_info_colour'); ?>">
  <div class="container">
    <div class="row flex-row">
      
      <div class="order-2 order-lg-1 py-0 py-lg-5 col-md-6 align-items-center mycontent">
        <div class="py-5">
        
          <img class="w-100 pb-4 d-block d-lg-none" src="<?php the_field('service_info_colour_image'); ?>" />
          <div class="px-3 p-lg-0">
            <div class="pt-3 pe-lg-5">
              <h2>Add title field</h2>
              <?php the_field('service_info_colour_content'); ?>
 
            </div>
          </div>
        </div> 
      </div>

      <div class="order-1 order-lg-2 col-md-6 photo d-none d-lg-block" style="background: url('<?php the_field('service_info_colour_image'); ?>'); background-position: center;">
      </div>
    </div> 
  </div> 
</section> 

<?php get_template_part( 'template-parts/content', 'our-work' ); ?>

 

 

<?php get_footer(); ?>