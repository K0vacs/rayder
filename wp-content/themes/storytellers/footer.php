<footer id="colophon" class="site-footer">
	<div class="site-info">

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'storytellers' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu_class'     => 'footer-menu',
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>

		<p class="trademark">All Rights Reserved | Made with <img src="http://localhost:8888/rayder/wp-content/uploads/2019/09/heart.svg" alt="Heart Image"> by <a href="http://www.4kmedia.co.za" target="_blank" rel="noreferrer"> 4K Media.</a></p>

	</div>
</footer>

<?php wp_footer(); ?>
