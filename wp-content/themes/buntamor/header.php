<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">	
	<?php wp_head(); ?>
  </head>
  
<body <?php body_class(); ?>>
	<div class="hero-banner">
		<div class="menu-centered">
			<?php
			wp_nav_menu( array(
				'menu'           => 'main',
				'theme_location' => 'primary',
				'menu_class'     => 'menu main',
				'container'      => false
			 ) );
			?>
		</div>
			<ul class="menu align-right social-media">
				<li><a href="#">[facebook]</a></li>
				<li><a href="#">[twitter]</a></li>
			</ul>
	</div>
	
	<div class="row">