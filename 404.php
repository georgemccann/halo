<?php
/**
 * The template for displaying 404
 * @package WordPress
 * @subpackage Halo
 * @since Halo 1.0
 */

get_header(); ?> 


<?php get_template_part( 'content-parts/content', 'blog-feature-area' ); ?>
 

<section id="page-title" class="mt-5">
  <div class="container">

    <div class="row h-100">
      <div class="col-lg-12 text-center py-5 my-5">
         <h1 style="color: #48392e; font-size:10em;">404</h1>

         <p>Page Not Found</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

  </div>
</section>


<?php get_footer(); ?>