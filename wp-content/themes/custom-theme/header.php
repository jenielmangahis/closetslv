<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('title');?></title>
  <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="shortcut icon">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/mobile_menu.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/multi-select/jquery.multi-select.js"></script>
	<link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/general.css?<?php echo date('l jS \of F Y h:i:s A'); ?>' media='all' />
	<link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>' media='all' />
	<link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/css/multi-select/multi-select.css?<?php echo date('l jS \of F Y h:i:s A'); ?>' media='all' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<?php wp_head(); ?>
</head>
<body>
	<?php
		$v = 0;
		$menuargs = array(
			"theme_location" => "primary",
			"menu_class" => "s-menu",
			"menu_id" => "MAIN-MENU",
		);
		$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs);
	?>
	<section class="closet-menu desktop-only">
		<div class="container">
			<ul class="home-menu">
				<li class="menu-nav">Home</li>
				<li class="menu-nav carit">Solutions</li>
				<li class="menu-nav carit">Galleries</li>
				<li class="menu-nav">About</li>
				<li><img class="img-logo" src="<?php bloginfo('template_directory'); ?>/images/home/logo-closet.png"></li>
				<li class="menu-nav">Contact</li>
				<li class="menu-nav">Free Consultation</li>
				<li class="menu-nav"><a href="#">(702) 259-3000</a></li>
				<li class="menu-nav"></li>
			</ul>
		</div>
	</section>
