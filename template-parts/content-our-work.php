<section id="our-work" class="py-5">
  <div class="container py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 ">
        <h2>Snapshot of our latest work</h2>   
      </div> 
    </div>
  </div>
 
  <div class="our-work-slides pb-5">
    <?php
        $args = array(  
          'post_type' => 'our_work',
          'post_status' => 'publish',
          'posts_per_page' => -1
      );
  
      $loop = new WP_Query( $args ); 
          
      while ( $loop->have_posts() ) : $loop->the_post(); 
      
          $featured_img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()), 'full' );
          if ( $featured_img ) { ?>
            <div><img style="max-height: 240px;"  src="<?php echo $featured_img; ?>" /></div>
          <?php } 
      endwhile;

      wp_reset_postdata(); ?>
  </div>
 
</section>

<script>
$(document).ready(function(){ 
  
  
  $('.our-work-slides').slick({
    centerMode: true,
    dots: true,
    centerPadding: '100px',
    slidesToShow: 3,
    adaptiveHeight: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
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