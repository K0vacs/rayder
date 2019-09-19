<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<!--  get_template_part( 'template-parts/header/entry', 'header' ); -->

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

		<div class="site-branding-container">
			<?php get_template_part( 'template-parts/navigation/site', 'navigation' ); ?>
		</div><!-- .site-branding-container -->

		<header id="masthead" class="site-header">

			<h1 class="header-h1">Rayder Media <br>Content Creators & <br>Storytellers</h1>

		</header><!-- #masthead -->

	<div id="content" class="site-content">
