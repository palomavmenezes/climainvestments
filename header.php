<?php

	/**
	 * HEADER TEMPLATE
	 */

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tweenmax.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.parallax-scroll.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom-scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hover-min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lity.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/fonts/font-awesome/font-awesome.min.css">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/animate/animate.min.css">
  <link href="<?php echo get_template_directory_uri(); ?>/lib/animate/animate.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Clima Investments | Paloma Menezes
    Theme URL: climainvestments.com.br
    Author: Paloma Menezes
  ======================================================= -->

  <?php
  wp_head();
  $siteUrl = get_site_url();
  /*echo $siteUrl;*/
  $currentUser = wp_get_current_user();
  $user_meta=get_userdata($currentUser->id);

  $user_roles=$user_meta->roles[0];

  /* print_r( $user_roles);*/
  ?>
  <script>
  // conditionizr.com
  // configure environment tests
  conditionizr.config({
  assets: '<?php echo get_template_directory_uri(); ?>',
  tests: {}
  });
  </script>

  <script>
  var themeUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
  var urlSite = '<?php echo get_site_url(); ?>';
  </script>
  

  <!-- Favicon -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if(get_theme_mod('general_fav_icon') != ''){ ?>
	<link rel="icon" href="<?php echo esc_url(get_theme_mod('general_fav_icon')); ?>" type="image/x-icon"/>
	<?php } ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

  <?php

      if(is_page('home')) {
        include 'inc/headers/header-home.php';
      }
      else {
        include 'inc/headers/header-others.php';
      }

    ?>