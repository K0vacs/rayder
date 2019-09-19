<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php //post_class(); ?>>

	<div class="">
		<?php the_content(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
