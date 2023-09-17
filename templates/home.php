<?php

/**
 * Template Name: Home
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
      <div class="col-12 col-lg-8 text-center">
        <div class="no-margin-last-paragraph">
          <?php the_field('introductory_statement'); ?>
        </div>
        <div class="py-5">
          <a href="<?php the_field('intro_button_link'); ?>" class="btn btn-primary"><?php the_field('intro_button_title'); ?></a>
        </div>
        <div class="no-margin-last-paragraph mission-statement">
          <?php the_field('intro_mission_statement'); ?>
        </div> 
      </div>
    </div>
  </div>
</section>

<section id="mid-section" class="mid-section p-relative">
  <img src="<?php the_field('letterbox_graphic_image'); ?>" class="w-100"/>
</section>

<section id="home-difference" class="pb-0 pb-lg-5 pt-lg-5">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-center">
        <h2><?php the_field('difference_title'); ?></h2>
      </div>
    </div>

    <div class="row gx-md-5 mt-3 mt-lg-5"> 
      <?php  
      if( have_rows('icon_cards') ):
        while( have_rows('icon_cards') ) : the_row(); ?>
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <div class="icon-card">
              <div class="icon">
                <img src="<?php the_sub_field('icon'); ?>" />
              </div>
              <div class="title">
                <h3><?php the_sub_field('title'); ?></h3>
              </div>
              <div class="content">
              <?php the_sub_field('content'); ?>
              </div>
            </div>
          </div>
        
        <?php 
        endwhile;
      endif; ?>   
    </div>
  </div>
</section>


<section id="home-services">
  <div class="container">
    <div class="row gx-0">
      <div class="col-12 col-lg-6">
        <div class="half-block light text-left">
          <h2 class="mb-5"><?php the_field('services_title'); ?></h2>
          <?php the_field('services_content'); ?>
          <div class="mt-5">
            <a href="<?php the_field('services_button_link'); ?>" class="btn btn-primary"><?php the_field('services_button_title'); ?></a>
          </div>
          
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="half-block dark">

          <div class="accordion" id="accordionExample">
            

            <?php  
            $count = 0;
            if( have_rows('services') ):
              while( have_rows('services') ) : the_row(); 
              $count++; ?>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="heading<?php echo $count; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
                      <?php the_sub_field('service_title'); ?>
                    </button>
                  </h2> 
                  <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapsed collapse" aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body pt-0">
                      <?php the_sub_field('service_content'); ?>
                      
                      <a href="<?php the_sub_field('service_link'); ?>">FIND OUT MORE</a>
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
  </div>
</section>


<?php get_template_part( 'template-parts/content', 'our-work' ); ?>
 

 
<?php get_footer(); ?>