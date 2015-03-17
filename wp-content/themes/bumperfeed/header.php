<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="/wp-content/themes/bumperfeed/js/main.js"></script>
	<?php wp_head(); ?>
<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/bumperfeed/css/custom.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,800,700,300' rel='stylesheet' type='text/css'>
=======
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/bumperfeed/css/custom.css">
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/bumperfeed/css/material-design-iconic-font.min.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,700,300' rel='stylesheet' type='text/css'>

>>>>>>> 00745e9e0d9b7aff4cab1afe59368083577ac26e
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<div class="header-cont">
		<header id="masthead" class="site-header" role="banner">
<<<<<<< HEAD
		<div class="site-branding container">

				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php get_search_form(); ?>
			<nav>
				<ul>
					<li><a href="">sP</a></li>
					<li><a href="">M</a></li>
					<li><a href="">FORUM</a></li>
=======
		<div class="site-branding">
		
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/themes/bumperfeed/img/logo.png"></a></h1>
			<?php get_search_form(); ?>
			<nav>
				<ul>
					<?php my_bp_adminbar_notifications_menu()?>
				
					<li><a href="<? echo bp_loggedin_user_domain().'messages/'; ?>"><i class="md-messenger md-lg"></i><span class="messages"><?php if ( messages_get_unread_count() > 0) {echo messages_get_unread_count();} ?></span></a>	</li>
					<li><a href="/forums/">FORUM</a></li>


>>>>>>> 00745e9e0d9b7aff4cab1afe59368083577ac26e
				</ul>
			</nav>
		</div><!-- .site-branding -->
	</header><!-- .site-header -->

</div>

	<div id="sidebar" class="sidebar">

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
