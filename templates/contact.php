<?php

/**
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage halo
 * @since halo 1.0
 */

get_header(); ?> 
<section class="my-5 pt-5">
  <div class="container py-5">
    <div class="row justify-content-between gx-0"> 
      <div class="col-12 col-lg-5">
        <h1 class="fw-light pb-4">Let's Talk</h1>
        <p>The easiest method to get the ball rolling is to schedule a call with us through our calendar.</p>
        <p>During our conversation, we'll delve into the challenges that need to be addressed. so that we can obtain a comprehensive understanding of the issues you aim to resolve.</p>
        <p>If you're not quite ready yet, simply complete the form below, and we'll get straight back to you.</p>
      </div> 

      <div class="col-12 col-lg-5">
        CALENDLY EMBED TO GO HERE
      </div>
    </div>
  </div>
</section>

<footer id="footer" class="bg-dark py-5">
  <div class="container py-5">
    <div class="row align-items-center justify-content-between gx-0"> 
      <div class="col-12 col-lg-5">
        <h2 class="pb-5">Not quite ready, fill in this form</h2>
        <?php echo do_shortcode('[contact-form-7 id="6735af6" title="Contact form 1"]'); ?>
      </div>

      <div class="col-12 col-lg-5">
        <div class="footerHello mb-4">
            <h4>Say Hello</h4>
            <a href="mailto:hello@halopresent.com">hello@halopresent.com</a>
            <a href="tel:+44 (0)7597 700100">+44 (0)7597 700100</a>
        </div>

        <div class="footerFollow mb-5 mb-md-0">
            <h4>Follow us</h4>
            <div class="socialIcons">
            <a target="_blank" href="https://www.linkedin.com/company/halopresent/"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
      </div>
    </div>
  </div>
</footer>



 

<?php get_footer(); ?>