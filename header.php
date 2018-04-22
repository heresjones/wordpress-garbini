<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Garbini_Ed
 * @since Garbini_Ed 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	<meta charset=utf-8>
	<meta http-equiv=Content-Type content="text/html" charset=UTF-8>
	<meta name=viewport content="width=device-width, maximum-scale=1">
	<title>Garbini Education and Career Consulting LLC</title>
	<meta name=title content="Scott Garbini Education and Career Consulting LLC">
	<meta name=author content="Christopher Jones">
	<meta name=description content="Scott Garbini | Education Consulting">
	<meta name=keywords content="Scott Garbini, Garbini Ed, scott@garbinied.com, Scott Garbini Education and Career Consulting, Education Consulting, Career Consulting, college, transfer, admissions, application, common application, admissions essay, alumni, non-traditional student, back to school, New London, Connecticut">
	<link rel="shortcut icon" type="image/png" href="http://www.garbinieducationandcareerconsulting.com/img/garbini-borderless-logo-200.png"/>
	<link rel=image_src href="<?php bloginfo('template_directory'); ?>/img/garbini-borderless-logo-200.png"/>
	<link rel=stylesheet type="text/css" href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel=stylesheet type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600'>
	<link rel=stylesheet type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel=stylesheet type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<link rel=stylesheet type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel=stylesheet type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
	<link rel=stylesheet type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
	<!--[if IE]>
	<style type="text/css">.pie {
		behavior: url(PIE.htc);
	}</style><![endif]-->
	<link rel=stylesheet type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.css">
	<link rel=stylesheet type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.css">
	<link rel=stylesheet type="text/css" href="<?php bloginfo('template_directory'); ?>/css/nivo-lightbox.css">
	<link rel=stylesheet type="text/css" href="<?php bloginfo('template_directory'); ?>/css/default.css">
	<!--[if lt IE 9]-->
    <script src="<?php bloginfo('template_directory'); ?>/js/respond-1.1.0.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/html5element.js"></script>

</head>
<body>
