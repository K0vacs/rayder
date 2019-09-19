<?php if ( has_custom_logo() ) : ?>
	<div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>

<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
	<nav class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'storytellers' ); ?>">
		<a href="javascript:void(0);" class="burger-menu">
	    <img src="http://localhost:8888/rayder/wp-content/uploads/2019/09/menu.svg" width="40px">
	  </a>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>
