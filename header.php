<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package microsite
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

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'microsite' ); ?></a>

	<header class="main-header">
	  <h1><a href="<?php echo get_site_url(); ?>">Untitled/Abnormal</a></h1>
	  <button href="#" class="menu-link">
	    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-link.svg">
	  </button>
	</header>
