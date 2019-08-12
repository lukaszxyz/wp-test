<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- bootstrap CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- magnific-popup CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/magnific-popup.css" rel="stylesheet">
	<!-- jquery-ui CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery-ui.css" rel="stylesheet">
	<!-- owl.carousel CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css" rel="stylesheet">
	<!-- owl-theme-default CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.theme.default.min.css" rel="stylesheet">
	<!-- bootstrap-datepicker CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-datepicker.css" rel="stylesheet">
	<!-- AOS CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/aos.css" rel="stylesheet">
	<!-- custom styles CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet">


	<!-- google fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
	<!-- icomoon fonts CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/fonts/icomoon/style.css" rel="stylesheet">
	<!-- flaticon fonts CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/fonts/flaticon/font/flaticon.css" rel="stylesheet">

	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
	<!-- <div id="page" class="site"> -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'logis'); ?></a>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
	<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-11 col-xl-2 site-logo">
					<h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0">Logis</a></h1>
				</div>
				<div class="col-12 col-md-10 d-none d-xl-block">
					<div class="site-navigation position-relative text-right" role="navigation">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'		=> 'site-menu js-clone-nav mx-auto d-none d-lg-block'
						));
						?>
					</div><!--col-12-->
					<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
				</div><!--row-->
			</div><!--container-->
		</header>