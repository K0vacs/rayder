<!doctype html>
<html <?php language_attributes(); ?>>

	<?php	get_template_part( 'template-parts/head/site', 'head' ); ?>

	<body <?php body_class(); ?>>

		<?php
			wp_body_open();
			get_template_part( 'template-parts/navigation/site', 'navigation' );
		?>
		<section>

			<?php get_header(); ?>
			
			<main class="main">
				<?php
					if( have_posts() ) {
						while( have_posts() ) {
							the_post();
							the_content();
						}
					}
				?>
			</main>
		</section>


			<?php get_footer(); ?>
	</body>
</html>
