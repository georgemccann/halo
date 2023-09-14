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
          <p>Even for seemingly simple decks, there's always a wider objective behind the choice and order of content; behind the words used and how they're delivered.</p>
          <p>We understand how important it is to elevate your message beyond the backroom mechanics of bullet points and really tap into the true value of transformation.</p>
        </div>
        <div class="py-5">
          <a href="#" class="btn btn-primary">Explore</a>
        </div>
        <div class="no-margin-last-paragraph mission-statement">
          <p>Every presentation has the<br/> power to <strong>change minds</strong></p>
        </div> 
      </div>
    </div>
  </div>
</section>

<section id="mid-section" class="mid-section p-relative">
  <img src="/wp-content/uploads/2023/09/home-mid.png" class="w-100"/>
</section>

<section id="home-difference" class="py-5">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 text-center">
        <h2>How we make a difference</h2>
      </div>
    </div>

    <div class="row gx-5 mt-5">
      <div class="col-12 col-lg-4">
        <div class="icon-card">
          <div class="icon">
            <img src="/wp-content/uploads/2023/09/icon1.png" />
          </div>
          <div class="title">
            <h3>Challenge mindsets</h3>
          </div>
          <div class="content">
            <p>We explore the power of alternative messaging to uncover innovative ways to convey your ideas, so they change mindsets, and spark conversations.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4">
        <div class="icon-card">
          <div class="icon">
            <img src="/wp-content/uploads/2023/09/icon1.png" />
          </div>
          <div class="title">
            <h3>Challenge mindsets</h3>
          </div>
          <div class="content">
            <p>We explore the power of alternative messaging to uncover innovative ways to convey your ideas, so they change mindsets, and spark conversations.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4">
        <div class="icon-card">
          <div class="icon">
            <img src="/wp-content/uploads/2023/09/icon1.png" />
          </div>
          <div class="title">
            <h3>Challenge mindsets</h3>
          </div>
          <div class="content">
            <p>We explore the power of alternative messaging to uncover innovative ways to convey your ideas, so they change mindsets, and spark conversations.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


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
    </div>
  </div>
</section>


<?php get_template_part( 'template-parts/content', 'our-work' ); ?>
 

 
<?php get_footer(); ?>