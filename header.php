<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php bloginfo( 'name' ) ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
		<?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>
		<?php if (is_single()) :?>
		<a href="<?php bloginfo( "url" ) ?>">
			<button class="align-btn">Retour</button>
		</a>
		<?php else :?>
		<div class="nav-toggle">
			<div class="nav-toggle-bar"></div>
		</div>
		<?php endif; ?>

		<nav class="navigation-menu">
			<?php wp_nav_menu( 'header-menu' ) ?>
		</nav>