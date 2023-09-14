<section id="mid-section" class="mid-section quote video p-relative">
  <img src="/wp-content/uploads/2023/09/home-mid.png" class="w-100"/>
  <div class="quote-content">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-12 col-lg-6 text-start">
          <h2>Where imagination meets innovation, and the possibilities are limitless. </h2>
        </div>

        <div class="col-12 col-lg-3">
            <div class="showreelButton">
                <a type="button" data-bs-toggle="modal" data-bs-target="#showreelModal">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/play-btn.png" />
                    <p class="mb-0">Watch our<br/> showreel</p>
                </a>
            </div>
             
        </div>
      </div>
    </div>
  </div>
</section>
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