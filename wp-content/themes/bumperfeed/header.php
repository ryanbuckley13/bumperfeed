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
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/bumperfeed/css/custom.css">

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<div class="header-cont">
		<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php get_search_form(); ?>
			<nav>
				<ul>
				<?php my_bp_adminbar_notifications_menu()?>
					<li><a href="<? echo bp_loggedin_user_domain().'messages/'; ?>">m <span><?php bp_total_unread_messages_count() ?></span></a></li>
					<li><a href="/forums/">FORUM</a></li>
				</ul>
			</nav>
		</div><!-- .site-branding -->
	</header><!-- .site-header -->

</div>

	<div id="sidebar" class="sidebar">

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
