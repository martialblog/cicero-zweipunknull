<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="mh-container">
<img style="display: block; margin-bottom: 35px; margin-left: auto; margin-right: auto;" src="http://wattba.zweipunknull.de/wp-content/uploads/2015/08/WattbaLogoSmall.png" alt="What A Time To Be Alive" height="500" width="500" />
<header class="header-wrap clearfix">
	<?php mh_cicero_lite_logo(); ?>
	<nav class="main-nav clearfix">
		<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
	</nav>
</header>