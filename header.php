<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<section id="header">
	<div class="container">
		<header>
			<div id="logo">
				<?php the_custom_logo(); ?>
			</div>
			<div id="navigation">
				<?php wp_nav_menu(array('container' => ' ')); ?>
			</div>
			<div id="phone">
				<i class="fas fa-phone-alt"></i>
				<span><?php the_field('phone_number'); ?><span>
			</div>
		</header>
	</div>
</section>
