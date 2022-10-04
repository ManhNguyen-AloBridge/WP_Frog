<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<header id="site-header" class="header-footer-group">

		<div class="header">
			<div class="d-none d-md-flex header-item header-item-left">
				<div class="header-child-item">
					<img src="<?= get_template_child_directory() . '/assets/images/socks_green.jpg' ?>" class="header-child-item-img" alt="">
					<div class="header-child-item-text">
						<p class="text-line m-0">Text line 1</p>
						<p class="text-line m-0">CONCEPT</p>
					</div>
				</div>

				<div class="header-child-item pe-0">
					<img src="<?= get_template_child_directory() . '/assets/images/socks_green.jpg' ?>" class="header-child-item-img" alt="">
					<div class="header-child-item-text">
						<p class="text-line m-0">Text line 1</p>
						<p class="text-line m-0">FARMER</p>
					</div>
				</div>
			</div>
			<div class="header-item header-item-logo">Logo</div>
			<div class="d-none d-md-flex header-item header-item-right">
				<div class="header-child-item ps-0">
					<img src="<?= get_template_child_directory() . '/assets/images/socks_green.jpg' ?>" class="header-child-item-img" alt="">
					<div class="header-child-item-text">
						<p class="text-line m-0">Text line 1</p>
						<p class="text-line m-0">COMPANY</p>
					</div>
				</div>
				<div class="header-child-item">
					<img src="<?= get_template_child_directory() . '/assets/images/socks_green.jpg' ?>" class="header-child-item-img" alt="">
					<div class="header-child-item-text">
						<p class="text-line m-0">Text line 1</p>
						<p class="text-line m-0">ORDER</p>
					</div>
				</div>
			</div>
		</div>

	</header><!-- #site-header -->