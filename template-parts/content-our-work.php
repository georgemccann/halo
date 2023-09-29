<section id="our-work" class="my-5 py-5">
  <div class="container mt-5 py-3 py-lg-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 ">
        <h2>Snapshot of our latest work</h2>   
      </div> 
    </div>
  </div>
 
  <div class="our-work-slides mb-5 pb-5">
    <?php
        $args = array(  
          'post_type' => 'our_work',
          'post_status' => 'publish',
          'posts_per_page' => -1
      );
  
      $loop = new WP_Query( $args ); 
      $count = 0;  
      while ( $loop->have_posts() ) : $loop->the_post(); 
          $count++;
          $featured_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'full' );
          if ( $featured_img ) { 
            $slideCount = 0;
            if( have_rows('before_images') ):
              while( have_rows('before_images') ) : the_row();
              $slideCount++;
              endwhile;
            endif;?>
            <div>
              <?php if ($slideCount > 0) { ?>
                <a data-toggle="modal" data-bs-toggle="modal" data-bs-target="#work-modal-<?php echo $count; ?>" href="#"><img style="max-width:100%;"  src="<?php echo $featured_img; ?>" /></a>
              
              <?php
              } else { ?>
                <img style="max-width:100%;"  src="<?php echo $featured_img; ?>" />
              
              <?php
              } ?>
              
            </div>
          <?php 
          } 
      endwhile;

      wp_reset_postdata(); ?>
  </div>

  <?php
        $args = array(  
          'post_type' => 'our_work',
          'post_status' => 'publish',
          'posts_per_page' => -1
      );
  
      $loop = new WP_Query( $args ); 
      $count = 0;  
      while ( $loop->have_posts() ) : $loop->the_post(); 
          $count++;
          $featured_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'full' );
          if ( $featured_img ) { ?> 
            <div class="modal fade" id="work-modal-<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="work-modal-<?php echo $count; ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content" style="background: transparent;">
                  <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-bs-toggle="modal" data-bs-target="#work-modal-<?php echo $count; ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/modalClose.png" />
                    </button>
                  </div>
                  <div class="work-toggler modal-body p-0">
                    <?php 
                    if( have_rows('before_images') ): ?>
                      <div class="before row justify-content-center align-items-center">
                        <?php
                        while( have_rows('before_images') ) : the_row(); ?>
                          <div class="col-6 col-lg-4">
                            <img class="w-100" src="<?php the_sub_field('image'); ?>" />
                          </div>
                        <?php
                        endwhile; ?>
                      </div>
                    <?php
                    endif; ?> 

                    <?php 
                    $afterCount=0;
                    if( have_rows('after_images') ): ?>
                      <div class="after row justify-content-center align-items-center">
                        <?php
                        while( have_rows('after_images') ) : the_row();
                        $afterCount++ ?>
                          <div class="col-6 col-lg-4">
                            <img class="w-100" src="<?php the_sub_field('image'); ?>" />
                          </div>
                        <?php
                        endwhile; ?>
                      </div>
                    <?php
                    endif; ?> 


                    <?php if ($afterCount > 0) { ?>
                      <div class="d-flex justify-content-center align-items-center">
                        <div class="work-toggle beforeToggle active">
                          Before
                        </div>
                        <div class="work-toggle afterToggle">
                          After
                        </div>
                      </div>

                      <script>
                        $('.work-toggle.beforeToggle').click(function(){
                          $('.work-toggle').removeClass('active');
                          $('.work-toggle.beforeToggle').addClass('active');
                          $('.work-toggler .before').css('display','flex');
                          $('.work-toggler .after').css('display','none');
                        }); 

                        $('.work-toggle.afterToggle').click(function(){
                          $('.work-toggle').removeClass('active');
                          $('.work-toggle.afterToggle').addClass('active');
                          $('.work-toggler .after').css('display','flex');
                          $('.work-toggler .before').css('display','none');
                        }); 

                        $('#work-modal-<?php echo $count; ?>').on("hide.bs.modal", function() {
                          $('.work-toggle').removeClass('active');
                          $('.work-toggle.beforeToggle').addClass('active');
                          $('.work-toggler .before').css('display','flex');
                          $('.work-toggler .after').css('display','none');
                        })
                      </script>
                    <?php
                    } ?>
                 
                  </div> 
                </div>
              </div>
          </div>
          <?php 
          } 
      endwhile; ?> 
</section>

<script>


 
$(document).ready(function(){  
  let $work = $('.our-work-slides')
  .on('init', function(slick) { 
      $('.our-work-slides').fadeIn(5000);
  })
  .slick({
    centerMode: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 3000,
    centerPadding: '100px',
    slidesToShow: 3,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '100px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
}); 

</script>