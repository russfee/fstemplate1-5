<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ) ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ) ?>/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ) ?>/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ) ?>/images/apple-touch-icon-114x114.png">

<!-- RSS
================================================== -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />

<meta name="google-site-verification" content="vXVQLZnwgPW54h0N9EgD_KliaccQYZWVmjnA8yb8ESE" />

<?php wp_head(); ?> <?php ?>
</head>

<body <?php body_class(); ?>>

<!--==========NAV START*============-->
<div class="container">
	<div class="row">
		<?php
		get_template_part ('layout/top-bar/top-bar');
		?>
	</div> <!--row-->
	<div class="row constrain">
		<div class="nav-container">
			<div id="logo">
				<a title="Back Home" href="<?php echo esc_url( home_url() ) ?>"><img src="<?php the_field('main_logo','option'); ?>"></a>
			</div><!-- logo -->
			<div id="navigation">
				<header>
					<nav>
						<?php wp_nav_menu( array('menu' => 'Main Menu' )); ?>
					</nav>
				</header>
			</div><!-- navigation -->
	    		<div id="mobile-nav">
				<?php echo do_shortcode("[responsive_menu_pro]"); ?>
			</div> <!--mobile-nav-->
		</div> <!--nav-container-->

    </div><!-- row -->
<!--==========NAV END*============-->
