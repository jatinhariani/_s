<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
    <![endif]-->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> <small class="site-description"><?php bloginfo('description'); ?></small></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div id="site-navigation" class="main-navigation" role="navigation">
						<h1 class="menu-toggle"><?php _e( 'Menu', '_s' ); ?></h1>
						<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>
						<?php // wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						<nav class="navbar navbar-default" role="navigation">
						  <!-- Brand and toggle get grouped for better mobile display -->
						  <div class="navbar-header">
						    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu-container">
						      <span class="sr-only">Toggle navigation</span>
						      <span class="icon-bar"></span>
						      <span class="icon-bar"></span>
						      <span class="icon-bar"></span>
						    </button>
						  </div>
							<?php
							    wp_nav_menu( array(
							        'menu'              => 'primary',
							        'theme_location'    => 'primary',
							        'depth'             => 2,
							        'container'         => 'div',
							        'container_id'      => 'primary-menu-container',
							        'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
							        'menu_class'        => 'nav navbar-nav',
							        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							        'walker'            => new wp_bootstrap_navwalker())
							    );
							?>
						</nav>
					</div><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
