	
	</div>
	<footer class="site-footer">
		<div class="row">
			<div class="footer-widget columns large-6 medium-12">
				<?php
				if(is_active_sidebar('footer-1')){
					dynamic_sidebar('footer-1');
				}
				?>
			</div>
			<div class="footer-widget columns large-6 medium-12">
				<?php
				if(is_active_sidebar('footer-2')){
					dynamic_sidebar('footer-2');
				}
				?>
			</div>
			<div class="menu-centered columns">
			
				<?php
				wp_nav_menu( array(
					'menu'           => 'footer',
					'menu_class'     => 'menu',
					'container'      => false
				 ) );
				?>
			</div>
			<div class="copyright columns">
				&copy; <?php 
					  $fromYear = 2016; 
					  $thisYear = (int)date('Y'); 
					  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Bliss Fotografie.
			</div>
		</div>
	</footer>
	
	<link rel="stylesheet" id="buntamor-style-full-css" href="/wp-content/themes/buntamor/style-full.css?ver=4.5.3" type="text/css" media="all">
	<?php wp_footer(); ?>
	</body>
</html>