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
	<style>
	<?php 
		include 'style.css';
		$bodyClass = '';
		if($pagename){
		$filename = 'wp-content/uploads/buntamor/' . $pagename . '-banner.jpg';
		
		if(file_exists($filename)){
			echo 'header.hero-banner {background-image: url(\'/' . $filename . '\')};';
		} else {
			$bodyClass = 'no-hero';
		}
	}?>
	</style>
  </head>
  
<body <?php body_class($bodyClass); ?>>
	<header class="hero-banner">
		<div class="menubar">
			<div class="title-bar">
				<span id="menu-toggle">
					<button class="menu-icon" type="button" ></button>
				</span>
			</div>
			<?php
			wp_nav_menu( array(
				'menu'           => 'main',
				'theme_location' => 'primary',
				'menu_class'     => 'menu main',
				'container'      => false
			 ) );
			?>
			<ul class="menu social-media">
				<li><a class="social-media-icon facebook" href="http://www.facebook.com/blissfotografie.de"></a></li>
				<li><a class="social-media-icon instagram" href="#"></a></li>
			</ul>
		</div>
	</header>
	
	<div class="content">