<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AO_Base
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<?php
    if( function_exists('the_field')) {
        the_field('scripts_in_head','option');
        the_field('custom_scripts_styles');
    }
?>
<!-- Animation helper. Inline styles load instantly so there's no flash. -->
<style>.anim,.anim_left,.anim_right,.anim_up{opacity:0;}</style>

</head>

<body <?php body_class(); ?>>
    <?php if( function_exists('the_field')) { the_field('body_scripts','option'); } ?>
<div id="page" class="site">
<!-- #masthead goes here -->

	<div id="content" class="site-content">
		<div class="container">
