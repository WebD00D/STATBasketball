<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package STAT
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://use.typekit.net/lnl4gpw.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'stat-basketball' ); ?></a>

	<header id="masthead" class="site-header" role="banner">


	<!-- 	<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'stat-basketball' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->



	<div id="stat-navigation">
		<div id="logo-container">
			<a href="/"><img src="./wp-content/themes/stat-basketball/img/concept1.png"></a>
		</div>

		<div id="menu-icon-container">
			<a data-menuOpen='no' href="#"><i class="material-icons">menu</i></a>
		</div>

    <div id="menu-bottom-text">
      #STATTHAT
    </div>
  </div>

  <div class="full-screen-menu"></div>



	</header><!-- #masthead -->

	<div id="content" class="site-content">
