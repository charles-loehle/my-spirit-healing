<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-spirit-healing
 */

 // Advanced Custom Fields
 $header_text_one = get_field('header_text_one');
 $header_text_two = get_field('header_text_two');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96357854-3"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-96357854-3');
	</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/agency.min.css" rel="stylesheet">

	<?php wp_head(); ?>

	<!--HTML5 shiv and Respspond.js IE8 support of HTML5 elements and media queries -->
		<!--[if It IE 9]>
				<script src="https://oss.maxcdn.com/html5shiv/3.7.2></script>
				<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js:"></script>
		<![endif]-->


</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'my-spirit-healing' ); ?></a>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="#page-top">Emotion Code</a>

		<button class="navbar-toggler navbar-toggler-right" type="button">
			<a href="tel://6787694002"><i class="fa fa-phone" aria-hidden="true"></i></a>
		</button>

		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#services">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#portfolio">The Emotion Code</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">Testimonials</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#team">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
	</nav>

<!-- Header -->
	<header class="masthead" id="page-top">
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in"><?php echo $header_text_one; ?></div>
				<div class="intro-heading"><?php echo $header_text_two; ?></div>
				<!-- <a href="#services" class="btn btn-xl">Tell Me More</a> -->
				<a href="https://app.acuityscheduling.com/schedule.php?owner=13285048" target="_blank" class="btn btn-xl">Schedule Appointment</a>
				<script src="https://embed.acuityscheduling.com/embed/button/13285048.js" async></script>
			</div>
			<div class="chevron">
				<a class="chevron-link" href="#services"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>
			</div>
		</div>
	</header>

	<!-- <div id="content" class="site-content"> -->
