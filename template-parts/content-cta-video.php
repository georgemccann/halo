
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
          <video style="width:100%" controls="" width="400">
            <source src="/wp-content/uploads/2023/09/Jet-Engine-Final.mp4"> 
            Your browser does not support HTML5 video.
          </video>
        </div> 
        </div>
    </div>
</div>



<section style="background:url('<?php echo $background_image; ?>'); background-size: cover!important; background-repeat: no-repeat;" id="mid-section" class="mid-section quote video p-relative">
  <div class="quote-content position-relative py-5">
    <div class="container py-5">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-lg-6 text-center text-md-start">
          <h2><?php echo $video_block_title; ?> </h2>
        </div>

        <div class="col-12 col-lg-3 mt-5 md-lg-0">
            <div class="showreelButton">
                <a type="button" data-bs-toggle="modal" data-bs-target="#showreelModal">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/play-btn.png" />
                    <p class="mb-0">Interactive <br/>Showcase</p>
                </a>
            </div>
              
        </div> 
      </div>
    </div>
  </div>
</section>