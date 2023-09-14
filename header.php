<?php

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Halo
 * @since Halo 1.0
 */

?>
<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
 

  <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
 
</head>

<body <?php body_class(''); ?>>
<script type="text/javascript" src=https://secure.coat0tire.com/js/222129.js></script><noscript><img src=https://secure.coat0tire.com/222129.png style="display:none;" /></noscript>


<div id="mySidenavR" class="sidenavR">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNavR()">×</a>
  
    <?php
        $menu_classes = 'top-menu list-inline';
        if (is_front_page()) {
          $menu_classes .= ' text-light';
        }

        wp_nav_menu(array(
          'theme_location'  => 'primary',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => false, 
          'add_li_class'    => 'list-inline-item',
          'menu_class'      => $menu_classes,
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        )); ?>


 
</div>

 
<script>






function openNavR() {
  if (window.innerWidth < 992) {
    document.getElementById("mySidenavR").style.width = "350px";
  } else {
    $( "#menu-main-menu-1" ).toggleClass( "d-lg-block" );
  }
  
}

function closeNavR() {
  if (window.innerWidth < 992) {
    document.getElementById("mySidenavR").style.width = "0";
  }
  
}
</script>
<?php if ( is_single() ) {
$single = true;
} else {
$single = false;
} ?>
<section id="nav" class="position-top position-absolute w-100">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        $menu_classes = 'navbar-nav ms-auto mb-2 mb-lg-0';
   
        wp_nav_menu(array(
          'theme_location'  => 'primary',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => false, 
          'add_li_class'    => 'list-inline-item',
          'menu_class'      => $menu_classes,
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        )); ?> 
      </div>
    </div>
  </nav>
  <div class="gradient-border breaker"></div>
</section>

<script>
  $(function($) {
  if ($(window).width() > 769) {
    $('.navbar .dropdown').hover(function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {
      $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

    });

    $('.navbar .dropdown > a').click(function() {
      location.href = this.href;
    });

  }
});
  if (window.innerWidth < 993) {
    $('.dropdown-toggle.nav-link').attr('data-bs-toggle','');
  }
  $(window).on('resize', function() {
    if ($(window).width() < 993) {
      $('.dropdown-toggle.nav-link').attr('data-bs-toggle','');
    } else {
      $('.dropdown-toggle.nav-link').attr('data-bs-toggle','dropdown');
    }
  });
</script>

<?php /*
<section id="nav" class="py-4 <?php if (is_front_page()) {
    echo 'bg-dark-blue';
  } ?>">
  <div class="container-fluid">
    <div class="row align-items-center jusitfy-content-center">
      <div class="col-3 col-sm-2 col-md-1"> 
        

        <?php if (is_front_page()) { ?>
          <a href="/"><img class="px-2 img-fluid whiteLogo" src="<?php echo the_field('logo', 'option') ?>"></a>
        <?php } else { ?>
          <a href="/"><img class="px-2 img-fluid whiteLogo" src='/wp-content/uploads/2021/02/logo-dark.png'</a>
        <?php } ?>
      </div>
      <div class="col-7 col-sm-8  col-md-10 col-offset-1 text-center">
        <?php
        $menu_classes = 'mb-0 d-none d-md-none d-lg-block top-menu list-inline';
        if (is_front_page()) {
          $menu_classes .= ' text-light';
        }

        wp_nav_menu(array(
          'theme_location'  => 'primary',
          'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => false, 
          'add_li_class'    => 'list-inline-item',
          'menu_class'      => $menu_classes,
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        )); ?>
         
      </div>
      <div class="col-2 col-sm-2 col-md-1 text-right">
        <span style="font-size:30px;cursor:pointer" onclick="openNavR()"><img class="image-50" src="/wp-content/themes/halo/img/burger-menu.png"></span>
      </div>
    </div>
    
  </div>
</section>

 

  <script>
    $(function($) {
      $('.contactLink .nav-link').click(function(e) {
        e.preventDefault();
        $('#contactModal').modal('show')
      });

      if ($(window).width() > 995) {
        $('.navbar .dropdown').hover(function() {
          $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

        }, function() {
          $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

        });

        $('.navbar .dropdown > a').click(function() {
          location.href = this.href;
        });

      }
    });
  </script> 

*/ ?>