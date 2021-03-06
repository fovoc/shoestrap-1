<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoestrap
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'shoestrap' ); ?></a>

	<?php do_action( 'shoestrap/header/before' ); ?>

	<?php
	/**
	 * Load the header template.
	 */
	$header_mode = get_theme_mod( 'header_mode', 'top-navbar' );
	Shoestrap_Views::add_view( 'header', array(
		'tmpl'  => 'shoestrap-site-header-' . $header_mode,
		'id'    => 'masthead',
		'class' => 'site-header header-' . $header_mode,
		'role'  => 'banner',
	) );
	?>

	<?php do_action( 'shoestrap/header/after' ); ?>

	<div id="content" class="site-content row">
