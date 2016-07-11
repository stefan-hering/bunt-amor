		<footer>
			<div class="menu-centered">
			
				<?php
				wp_nav_menu( array(
					'menu'           => 'footer',
					'menu_class'     => 'menu',
					'container'      => false
				 ) );
				?>
			</div>
			<div class="copyright">
				&copy; <?php 
					  $fromYear = 2016; 
					  $thisYear = (int)date('Y'); 
					  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Bliss Fotografie.
			</div>
		</footer>
	</div>

	<?php wp_footer(); ?>
	</body>
</html>