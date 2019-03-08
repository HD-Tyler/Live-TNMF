<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TNMF
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-grid.css" type="text/css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" type="text/css" rel="stylesheet">

     <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700,900" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tnmf' ); ?></a>


<!-- HEADER
======================================================-->
<header class="site-header" role="banner">
    <nav class="navbar navbar-expand-lg fixed-top  navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo get_option("siteurl"); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-s.png" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if (function_exists(load_primary_menu())) load_primary_menu(); ?>
                </ul>
            </div>

        </div>
    </nav>
</header>
