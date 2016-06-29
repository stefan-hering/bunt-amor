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
		</footer>
	</div>

	<?php wp_footer(); ?>
	</body>
</html>