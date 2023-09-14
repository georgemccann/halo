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
        <h2>Our services</h2>
        <p>At HALO Present we live and breathe presentations!</p>
        <p>So, whether you need a presentation created from scratch, or you have a deck that is in desperate need of a design refresh, our strategic approach will ensure that your presentation makes a difference every time</p>
      </div>


      <div class="col-12 col-lg-8">
        <div class="row service-boxes">
          <div class="col-12 col-lg-6 mb-4">
            <a href="#" class="service">
              <div class="service-title text-center">
                <img src="/wp-content/uploads/2023/09/PresentationsIcons.png" />
                <h3>Presentations</h3>
              </div>
              
              <div class="service-info text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do incididunt ut labore et dolore magna aliqua. </p>
                <h3>Presentations</h3>
              </div>
            </a>
          </div> 
          <div class="col-12 col-lg-6 mb-4">
            <a href="#" class="service">
              <div class="service-title text-center">
                <img src="/wp-content/uploads/2023/09/PresentationsIcons.png" />
                <h3>Presentations</h3>
              </div>
              
              <div class="service-info text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do incididunt ut labore et dolore magna aliqua. </p>
                <h3>Presentations</h3>
              </div>
            </a>
          </div> 
          <div class="col-12 col-lg-6 mb-4">
            <a href="#" class="service">
              <div class="service-title text-center">
                <img src="/wp-content/uploads/2023/09/PresentationsIcons.png" />
                <h3>Presentations</h3>
              </div>
              
              <div class="service-info text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do incididunt ut labore et dolore magna aliqua. </p>
                <h3>Presentations</h3>
              </div>
            </a>
          </div> 
          <div class="col-12 col-lg-6 mb-4">
            <a href="#" class="service">
              <div class="service-title text-center">
                <img src="/wp-content/uploads/2023/09/PresentationsIcons.png" />
                <h3>Presentations</h3>
              </div>
              
              <div class="service-info text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do incididunt ut labore et dolore magna aliqua. </p>
                <h3>Presentations</h3>
              </div>
            </a>
          </div> 
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_template_part( 'template-parts/content', 'quote-block' ); ?>
 

<section id="presentation-types" class="py-5">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-lg-6 text-center">
        <h2>Presentation types</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
      </div> 
      <div class="col-12 mt-4">
        <div class="presentation-types-slider text-light mt-4 p-5">
          <div>
            <div class="row align-items-center justify-content-between gx-5">
              <div class="col-12 col-lg-5">
                <h2 class="text-light">Sales presentation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div> 
              <div class="col-12 col-lg-6">
                <img class="w-100" src="/wp-content/uploads/2023/09/shutterstock_2136489321.png" />
              </div>
            </div>
          </div>

          <div>
            <div class="row align-items-center justify-content-between gx-5">
              <div class="col-12 col-lg-5">
                <h2 class="text-light">Sales presentation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div> 
              <div class="col-12 col-lg-6">
                <img class="w-100" src="/wp-content/uploads/2023/09/shutterstock_2136489321.png" />
              </div>
            </div>
          </div>


          <div>
            <div class="row align-items-center justify-content-between gx-5">
              <div class="col-12 col-lg-5">
                <h2 class="text-light">Sales presentation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div> 
              <div class="col-12 col-lg-6">
                <img class="w-100" src="/wp-content/uploads/2023/09/shutterstock_2136489321.png" />
              </div>
            </div>
          </div>


          <div>
            <div class="row align-items-center justify-content-between gx-5">
              <div class="col-12 col-lg-5">
                <h2 class="text-light">Sales presentation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
              </div> 
              <div class="col-12 col-lg-6">
                <img class="w-100" src="/wp-content/uploads/2023/09/shutterstock_2136489321.png" />
              </div>
            </div>
          </div>



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
          <h2 class="mb-5">Our services</h2>
          <p>Every presentation we craft is purposefully designed to drive change.</p>
          <p>Whether it's a standout pitch, an engaging sales presentation or a interactive experience, you can count on us to construct a presentation that connects with your audience and delivers the right results!</p>
          <div class="mt-5">
            <a href="#" class="btn btn-primary">FIND OUT MORE</a>
          </div>
          
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="half-block dark">
 
          <ol class="fa-ul">
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Lower rates</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Support provided for multiple teams</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Dedicated Account Manager</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Hours can be offset for any service</li>
            <li><span class="fa-li"><i class="fa fa-check"></i></span>Reduced admin</li>
          </ol>

          
        </div>
      </div> 
    </div>
  </div>
</section>


<?php get_template_part( 'template-parts/content', 'our-work' ); ?>
 

 
<?php get_footer(); ?>