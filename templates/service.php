<?php

/**
 * Template Name: Service
 *
 * @package WordPress
 * @subpackage halo
 * @since halo 1.0
 */

get_header(); ?>


<?php get_template_part( 'template-parts/content', 'page-header' ); ?>

<?php 
if( have_rows('intro_block') ): 
  while ( have_rows('intro_block') ) : the_row();

      // Case: Paragraph layout.
      if( get_row_layout() == 'content_and_slider' ): 
          ?>
          <section id="home-intro" class="py-5">
            <div class="container py-5">
              <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-4 text-start">
                  <h2><?php the_sub_field('content_and_slider_title'); ?></h2>
                  <?php the_sub_field('content_and_slider_content'); ?>
                  <div class="mt-5">
                    <a href="<?php the_sub_field('content_and_slider_link'); ?>" class="btn btn-primary">FIND OUT MORE</a>
                  </div>
                </div>


                <div class="col-12 col-lg-8"> 
                  <div class="service-image-slider h-100">
                  <?php  
                  if( have_rows('content_and_slider_slides') ):
                    while( have_rows('content_and_slider_slides') ) : the_row(); ?>
                      <div><img class="w-100 h-100" src="<?php the_sub_field('image'); ?>" /></div>
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
            
            
            $('.service-image-slider').slick({
              dots: true, 
              arrows:false,
              slidesToShow: 1,
              adaptiveHeight: true
            });

          });

          </script>

          <?php
          // Do something...

      // Case: Download layout.
      elseif( get_row_layout() == 'content_and_image' ): ?>

        <section id="home-intro" class="py-5">
          <div class="container py-5">
            <div class="row justify-content-between align-items-center">
              <div class="col-12 col-lg-5 text-start">
                <?php if (get_sub_field('content_and_image_title') != '') { ?>
                  <h2><?php the_sub_field('content_and_image_title'); ?></h2>
                <?php
                } ?>
                
                <?php the_sub_field('content_and_image_content'); ?>
                <div class="mt-5">
                  <a href="<?php the_sub_field('content_and_image_link'); ?>" class="btn btn-primary">FIND OUT MORE</a>
                </div>
              </div>


              <div class="col-12 col-lg-5"> 
                <img class="w-100 h-100" src="<?php the_sub_field('content_and_image_image'); ?>" />
              </div>

            </div>
          </div>
        </section>

      <?php 
      endif; 


  endwhile; 
endif;
?> 




<?php 
if( have_rows('quote_area') ): 
  while ( have_rows('quote_area') ) : the_row();
      if( get_row_layout() == 'quote_block' ): 
        $quote = get_sub_field('quote');
        $quote_author = get_sub_field('quote_author');
        $background_image = get_sub_field('quote_background_image');
        include(locate_template('template-parts/content-quote-block.php'));   

      elseif( get_row_layout() == 'video_block' ):
        $video_block_title = get_sub_field('video_block_title'); 
        $background_image = get_sub_field('background_image'); 
        include(locate_template('template-parts/content-cta-video.php'));   
      
      elseif( get_row_layout() == 'letterbox_graphic' ): ?>
        <section id="mid-section" class="mid-section p-relative">
          <img src="<?php the_sub_field('letterbox_graphic_image'); ?>" class="w-100"/>
        </section> 
      <?php
      endif;  
  endwhile; 
endif;
?> 
 
 





<style>
  .slick-carousel{
  display: none;
}
.slick-carousel.slick-initialized{
  display: block;
}

</style>
<section id="presentation-types" class="py-5">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-lg-8 text-center">
        <div class="example-slides pb-5">
            <?php  
            if( have_rows('image_slider') ):
              while( have_rows('image_slider') ) : the_row(); ?>
                <div><img class="w-100" src="<?php the_sub_field('image'); ?>"/></div> 
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
  let $slider = $('.example-slides')
  .on('init', function(slick) {
      console.log('fired!');
      $('.example-slides').fadeIn(3000);
  })
  .slick({
      fade: true,
      dots: true,
      arrows:false,
      focusOnSelect: true,
      lazyLoad: 'ondemand',
      speed: 1000
  });
});

</script> 






<?php 
if( have_rows('5050_block') ): 
  while ( have_rows('5050_block') ) : the_row();

      // Case: Paragraph layout.
      if( get_row_layout() == 'slider' ):  ?> 
        <section id="home-services">
          <div class="container">
            <div class="row gx-0">
              <div class="col-12 col-lg-5">
                <div class="half-block light text-left fit-image">
                  <div class="full-image-slider">
                    <?php  
                    if( have_rows('5050_slider') ):
                      while( have_rows('5050_slider') ) : the_row(); ?>
                        <div><img src="<?php the_sub_field('image'); ?>"/></div>
                      <?php 
                      endwhile;
                    endif; ?> 
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-7">
                <div class="half-block dark">
                  <h2><?php the_sub_field('sectors_we_work_in_title'); ?></h2>
                  <?php the_sub_field('sectors_we_work_in_content'); ?>
                  <div class="sector-work-slider mt-3 pb-4">
                    <?php  
                    if( have_rows('5050_slider') ):
                      while( have_rows('5050_slider') ) : the_row(); ?>
                        <div>
                          <div class="bg-light p-5 text-center no-margin-last-paragraph">
                            <h3><?php the_sub_field('box_title'); ?></h3>
                            <?php the_sub_field('box_content'); ?>
                          </div>
                        </div>
                      <?php 
                      endwhile;
                    endif; ?> 
                  
                     
                    
                  </div>

                  <script>
                  $(document).ready(function(){ 

                    var $slider = $('.full-image-slider')
                    .on('init', function(slick) { 
                        $('.full-image-slider').fadeIn(3000); 
                    })
                    .slick({
                      dots: false,
                      arrows: false,
                      slidesToShow: 1, 
                      asNavFor: '.sector-work-slider'
                    });  
              
                    $('.sector-work-slider').slick({
                      dots: true, 
                      arrows:false,
                      slidesToShow: 1,
                      adaptiveHeight: true,
                      asNavFor: '.full-image-slider'
                    });

                  });

                  </script>

                  
                </div>
              </div> 
            </div>
          </div>
        </section>

      <?php 
      elseif( get_row_layout() == 'tabs' ): ?>
        <section id="home-services">
          <div class="container">
            <div class="row gx-0">
              <div class="col-12 col-lg-5">
                <div class="half-block light text-left fit-image">
                  <div class="full-image-slider">
                    <?php  
                    if( have_rows('5050_tabs') ):
                      while( have_rows('5050_tabs') ) : the_row(); ?>
                        <div><img src="<?php the_sub_field('image'); ?>"/></div>
                      <?php 
                      endwhile;
                    endif; ?>  
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-7">
                <div class="half-block dark">
                  <div class="sector-work-slider mt-3 pb-4"> 
                    <?php  
                    if( have_rows('5050_tabs') ):
                      while( have_rows('5050_tabs') ) : the_row(); ?>
                        <div>
                          <div class="no-margin-last-paragraph">
                            <h2><?php the_sub_field('title'); ?></h2>
                            <?php the_sub_field('content'); ?>
                          </div>
                        </div>
                      <?php 
                      endwhile;
                    endif; ?>  
                  </div>

                  <div class="action custom-slick-tabs mt-5">
                    <?php  
                    $count == 0;
                    if( have_rows('5050_tabs') ):
                      while( have_rows('5050_tabs') ) : the_row(); 
                      $count++;?>
                         <a href="#" <?php if ($count == 1): ?> class="active"  <?php endif; ?> data-slide="<?php echo $count; ?>"><?php the_sub_field('tab_title'); ?></a>
                      <?php 
                      endwhile;
                    endif; ?>  
                  </div>

                  <script>
                  $(document).ready(function(){ 

                    var $slider = $('.full-image-slider')
                    .on('init', function(slick) { 
                        $('.full-image-slider').fadeIn(3000); 
                    })
                    .slick({
                      dots: false,
                      arrows: false,
                      slidesToShow: 1, 
                      asNavFor: '.sector-work-slider'
                    });  
              
                    $('.sector-work-slider').slick({
                      dots: false, 
                      arrows:false,
                      slidesToShow: 1,
                      adaptiveHeight: true,
                      asNavFor: '.full-image-slider'
                    });

                    $('.sector-work-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
                      const link = document.querySelector(`.action a[data-slide="${currentSlide+1}"]`);
                      $('a[data-slide]').removeClass('active');
                      link?.classList?.add('active');
                    });

                    $('a[data-slide]').click(function(e) {
                      e.preventDefault();
                      var slideno = $(this).data('slide');
                      $('.sector-work-slider').slick('slickGoTo', slideno - 1);
                      $('a[data-slide]').removeClass('active');
                      this.classList.add('active');
                    });

                  });

                  </script>

                  
                </div>
              </div> 
            </div>
          </div>
        </section>
      
      <?php 
      elseif( get_row_layout() == 'full_image_block' ): ?>
        <section id="home-services">
          <div class="container">
            <div class="row gx-0" style="background: url('<?php the_sub_field('background_image'); ?>'); background-size:cover; ">
              <div class="col-12 col-lg-5">
                <div class="half-block semi-transparent text-left">
                  <h2 class="mb-5 text-pink"><?php the_sub_field('title'); ?></h2>
                  <?php the_sub_field('content'); ?> 
                </div>
              </div>

              <div class="col-12 col-lg-7">
                <div class="half-block transparent"></div>
              </div> 
            </div>
          </div>
        </section>

      <?php 
      elseif( get_row_layout() == 'accordion' ): ?>
        <section id="home-services">
          <div class="container">
            <div class="row gx-0">  
              <div class="col-12 col-lg-7">
                <div class="half-block dark">
                  <h2><?php the_sub_field('title'); ?></h2>
                  <div class="accordion" id="accordionExample">

                    <?php  
                    $count = 0;
                    if( have_rows('accordions') ):
                      while( have_rows('accordions') ) : the_row();
                      $count++; ?>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading<?php echo $count; ?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse<?php echo $count; ?>">
                              <?php the_sub_field('accordion_title'); ?>
                            </button>
                          </h2>
                          <div id="collapse<?php echo $count; ?>" class="accordion-collapse collapsed collapse" aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body pt-0">
                              <?php the_sub_field('accordion_content'); ?>
                            </div>
                          </div>
                        </div>
                      <?php 
                      endwhile;
                    endif; ?>   
                  </div>
                </div>
              </div> 
              <div class="col-12 col-lg-5">
                <div class="half-block light text-left fit-image">
                  <img src="<?php the_sub_field('image'); ?>"/> 
                </div>
              </div>

            </div>
          </div>
        </section>
    
 
      <?php 
      endif; 


  endwhile; 
endif;
?> 
 
<?php get_template_part( 'template-parts/content', 'our-work' ); ?>
  
<?php get_footer(); ?>