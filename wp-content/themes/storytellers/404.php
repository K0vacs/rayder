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
				<section class="centered-container">
					<div class="center">
						<p>No page here!</p>
						<h2>404 - Page not found</h2>
						<a class="btn" href="http://localhost:8888/rayder/">BACK TO HOMEPAGE</a>
					</div>
				</section>
			</main>
		</section>


			<?php get_footer(); ?>
	</body>
</html>
