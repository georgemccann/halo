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

<?php /*
<section id="home-intro" class="py-5">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-lg-4 text-start">
        <h2>Our services</h2>
        <p>At HALO Present we live and breathe presentations!</p>
        <p>So, whether you need a presentation created from scratch, or you have a deck that is in desperate need of a design refresh, our strategic approach will ensure that your presentation makes a difference every time</p>
        <div class="mt-5">
          <a href="#" class="btn btn-primary">FIND OUT MORE</a>
        </div>
      </div>


      <div class="col-12 col-lg-8"> 
        <div class="service-image-slider h-100">
          <div><img class="w-100 h-100" src="/wp-content/uploads/2023/09/Group-1232.png" /></div>
          <div><img class="w-100 h-100" src="/wp-content/uploads/2023/09/Group-1232.png" /></div>
          <div><img class="w-100 h-100" src="/wp-content/uploads/2023/09/Group-1232.png" /></div>
          <div><img class="w-100 h-100" src="/wp-content/uploads/2023/09/Group-1232.png" /></div>
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

</script>  */ ?>
<section id="home-intro" class="py-5">
  <div class="container py-5">
    <div class="row justify-content-between align-items-center">
      <div class="col-12 col-lg-5 text-start">
        <h2>Our services</h2>
        <p>At HALO Present we live and breathe presentations!</p>
        <p>So, whether you need a presentation created from scratch, or you have a deck that is in desperate need of a design refresh, our strategic approach will ensure that your presentation makes a difference every time</p>
        <div class="mt-5">
          <a href="#" class="btn btn-primary">FIND OUT MORE</a>
        </div>
      </div>


      <div class="col-12 col-lg-5"> 
        <img class="w-100 h-100" src="/wp-content/uploads/2023/09/Group-1232.png" />
      </div>

    </div>
  </div>
</section>

<?php //get_template_part( 'template-parts/content', 'quote-block' ); ?>
<?php get_template_part( 'template-parts/content', 'cta-video' ); ?>
 
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
          <div><img class="w-100" src="/wp-content/uploads/2023/09/Slide2.png"/></div>
          <div><img class="w-100" src="/wp-content/uploads/2023/09/Slide2.png"/></div>
          <div><img class="w-100" src="/wp-content/uploads/2023/09/Slide2.png"/></div>
          <div><img class="w-100" src="/wp-content/uploads/2023/09/Slide2.png"/></div>
        </div>
      </div>  
    </div>
  </div>
</section>
 
<script>
$(document).ready(function(){ 
  
   

  var $slider = $('.example-slides')
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

<?php /*
<section id="home-services">
  <div class="container">
    <div class="row gx-0">
      <div class="col-12 col-lg-5">
        <div class="half-block light text-left fit-image">
          <div class="full-image-slider">
            <div><img src="/wp-content/uploads/2023/09/shutterstock_2076802222.png"/></div>
            <div><img src="/wp-content/uploads/2023/09/shutterstock_2076802222.png"/></div>
            <div><img src="/wp-content/uploads/2023/09/shutterstock_2076802222.png"/></div>
            <div><img src="/wp-content/uploads/2023/09/shutterstock_2076802222.png"/></div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-7">
        <div class="half-block dark">
          <h2>Sectors we work in</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. exercitation ullamco laboris nisi ut aliquip.</p>
          
          <div class="sector-work-slider mt-3 pb-4">
            <div>
              <div class="bg-light p-5 text-center no-margin-last-paragraph">
                <h3>Technology</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
  ex ea commodo consequat.</p>
              </div>
            </div>
            <div>
              <div class="bg-light p-5 text-center no-margin-last-paragraph">
                <h3>Technology</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
  ex ea commodo consequat.</p>
              </div>
            </div>
            <div>
              <div class="bg-light p-5 text-center no-margin-last-paragraph">
                <h3>Technology</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
  ex ea commodo consequat.</p>
              </div>
            </div>
            <div>
              <div class="bg-light p-5 text-center no-margin-last-paragraph">
                <h3>Technology</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
  ex ea commodo consequat.</p>
              </div>
            </div>
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

*/ ?>

<?php /*
<section id="home-services">
  <div class="container">
    <div class="row gx-0">
      <div class="col-12 col-lg-5">
        <div class="half-block light text-left fit-image">
          <div class="full-image-slider">
            <div><img src="/wp-content/uploads/2023/09/shutterstock_2076802222.png"/></div>
            <div><img src="/wp-content/uploads/2023/09/shutterstock_2076802222.png"/></div>
            <div><img src="/wp-content/uploads/2023/09/shutterstock_2076802222.png"/></div>
            <div><img src="/wp-content/uploads/2023/09/shutterstock_2076802222.png"/></div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-7">
        <div class="half-block dark">
          <div class="sector-work-slider mt-3 pb-4">
            <div>
              <div class="no-margin-last-paragraph">
                <h2>Interactive sales experiences</h2>
                <p>Interactive sales presentations have proven to be highly effective in engaging clients by creating a sense of active involvement and participation. Inviting clients to actively interact with a presentation, allows them to have a hands-on experience and gain a deeper understanding of the product or service being offered.</p> 
                <p>This customisation enhances the relevance and value of the presentation, making it more compelling and impactful and ultimately increasing the chances of a successful outcome.</p>
              </div>
            </div>
            <div>
              <div class="no-margin-last-paragraph">
                <h2>Interactive sales experiences</h2>
                <p>Interactive sales presentations have proven to be highly effective in engaging clients by creating a sense of active involvement and participation. Inviting clients to actively interact with a presentation, allows them to have a hands-on experience and gain a deeper understanding of the product or service being offered.</p> 
                <p>This customisation enhances the relevance and value of the presentation, making it more compelling and impactful and ultimately increasing the chances of a successful outcome.</p>
              </div>
            </div>
            <div>
              <div class="no-margin-last-paragraph">
                <h2>Interactive sales experiences</h2>
                <p>Interactive sales presentations have proven to be highly effective in engaging clients by creating a sense of active involvement and participation. Inviting clients to actively interact with a presentation, allows them to have a hands-on experience and gain a deeper understanding of the product or service being offered.</p> 
                <p>This customisation enhances the relevance and value of the presentation, making it more compelling and impactful and ultimately increasing the chances of a successful outcome.</p>
              </div>
            </div>
            <div>
              <div class="no-margin-last-paragraph">
                <h2>Interactive sales experiences</h2>
                <p>Interactive sales presentations have proven to be highly effective in engaging clients by creating a sense of active involvement and participation. Inviting clients to actively interact with a presentation, allows them to have a hands-on experience and gain a deeper understanding of the product or service being offered.</p> 
                <p>This customisation enhances the relevance and value of the presentation, making it more compelling and impactful and ultimately increasing the chances of a successful outcome.</p>
              </div>
            </div>
          </div>

          <div class="action custom-slick-tabs mt-5">
            <a href="#" class="active" data-slide="1">Sales</a>
            <a href="#" data-slide="2">Products</a>
            <a href="#" data-slide="3">Events</a>
            <a href="#" data-slide="4">People</a>
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
*/ ?>

<?php /*
<section id="home-services">
  <div class="container">
    <div class="row gx-0" style="background: url('/wp-content/uploads/2023/09/shutterstock_2081373346.png'); background-size:cover; ">
      <div class="col-12 col-lg-5">
        <div class="half-block semi-transparent text-left">
          <h2 class="mb-5">Our services</h2>
          <p>Every presentation we craft is purposefully designed to drive change.</p>
          <p>Whether it's a standout pitch, an engaging sales presentation or a interactive experience, you can count on us to construct a presentation that connects with your audience and delivers the right results!</p>
 
          
        </div>
      </div>

      <div class="col-12 col-lg-7">
        <div class="half-block transparent"></div>
      </div> 
    </div>
  </div>
</section>
*/ ?>


<section id="home-services">
  <div class="container">
    <div class="row gx-0"> 

      <div class="col-12 col-lg-7">
        <div class="half-block dark">
          <h2>FAQs</h2>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Presentation Design
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body pt-0">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                  
                  <a href="#">FIND OUT MORE</a>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body pt-0">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body pt-0">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="col-12 col-lg-5">
        <div class="half-block light text-left fit-image">
          <img src="/wp-content/uploads/2023/09/shutterstock_2076802222.png"/> 
        </div>
      </div>

    </div>
  </div>
</section>



<?php get_template_part( 'template-parts/content', 'our-work' ); ?>
 

 
<?php get_footer(); ?>