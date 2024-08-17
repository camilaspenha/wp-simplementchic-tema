<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- VENDOR -->
	<link href="<?= get_stylesheet_directory_uri() . '/assets/vendor/node_modules/bootstrap/dist/css/bootstrap.min.css' ?>" rel="stylesheet">
	<link href="<?= get_stylesheet_directory_uri() . '/assets/vendor/node_modules/bootstrap-icons/font/bootstrap-icons.css' ?>"rel="stylesheet">
	<link href="<?= get_stylesheet_directory_uri() . '/assets/vendor/node_modules/glightbox/dist/css/glightbox.min.css' ?>"rel="stylesheet">

	<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
	?>

	<!-- Preloader -->
	<?php get_template_part( 'templates/header/preloader' ); ?>

	<!-- Page Header -->
	<?php get_template_part( 'templates/header/page', 'header' ); ?>
	<main>


		
