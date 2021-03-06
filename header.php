<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="de-DE"><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang="de-DE"><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="de-DE"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de-DE"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta content="de-DE" http-equiv="content-language">
<meta name="geo.placename" content="STREET_NAME">
<meta name="geo.position" content="GEO_POSITION">
<meta name="geo.region" content="GEO_REGION">
<meta name="ICBM" content="ICBM">
<meta name="author" content="AUTHOR">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php
	global $page, $paged;
	wp_title( '::', true, 'right' );
	bloginfo( 'name' );
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );
?>
</title>

<?php if (APPLICATION_ENV !== 'production') :?>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/normalize/normalize.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/baseline.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/grid.css">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css">

<?php else: ?>
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.min.css">
<?php endif; ?>

<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body <?php body_class(); ?>>
<div class="container">

	
    <header id="masthead" class="branding" role="banner">
        <h1><a href="<?php echo home_url( '/' ); ?>" rel="home" title="zur Startseite" class="ir"><?php bloginfo('name'); ?></a></h1>
    </header>

	<div class="main-nav navigation two columns alpha omega">
		<nav id="access" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'toolbox' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolbox' ); ?>"><?php _e( 'Skip to content', 'toolbox' ); ?></a></div>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => FALSE,
						'menu_class'     => 'cf',
						'container'      => FALSE,
						'container_id'   => FALSE,
						'walker'         => new T5_Nav_Menu_Walker_Simple,
					)
				);
			?>
		</nav>
	</div>
	<div class="thirteen columns omega">