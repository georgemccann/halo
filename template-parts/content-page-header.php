<section id="feature" class="featureArea text-light" style="background:url('<?php the_field('page_header_image'); ?>">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-lg-8 text-center">
        <h1><?php the_field('page_title'); ?></h1>
        <div class="intro">
        <?php the_field('page_header_intro_statement'); ?>
        </div>


        <?php if (is_front_page()) { ?>

            <div class="showreelButton">
                <a type="button" data-bs-toggle="modal" data-bs-target="#showreelModal">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/play-btn.png" />
                    <p>Watch our<br/> showreel</p>
                </a>
            </div>
            <div class="modal fade" id="showreelModal" tabindex="-1" role="dialog" aria-labelledby="showreelModal" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content" style="background: transparent;">
                  <div class="modal-header">
                      <h5 class="modal-title"></h5>
                      <button type="button" class="close" data-bs-toggle="modal" data-bs-target="#showreelModal">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/modalClose.png" />
                      </button>
                  </div>
                  <div class="modal-body p-0">
                      <video class="w-100" poster="/wp-content/uploads/2022/03/HALO-Showreel-placeholder.jpg" controls="" width="400">
                      <source src="/wp-content/uploads/2022/03/HALO-Showreel-v3.mp4" type="video/mp4"> 
                      Your browser does not support HTML5 video.
                      </video>
                  </div> 
                  </div>
              </div>
            </div> 
 
        <?php } else { ?>
          <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
              <h2><?php the_field('page_header_subtitle'); ?></h2>
              <?php the_field('page_header_content'); ?>
            </div>
          </div>
        <?php } ?>
         

      
      </div>
    </div>
  </div>
</section>