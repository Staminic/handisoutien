<?php
/**
 * Hendicap et établissment content partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="hero">
		
		<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
		
		<h2 class="h1">Handicap et établissement</h2>

	</div>

	<div class="inner col-lg-10 offset-lg-1">

		<?php echo do_shortcode( '[flexy_breadcrumb]'); ?>

		<header class="entry-header">

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		</header>

		<div class="entry-content">

			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>

		</div>

		<footer class="entry-footer">

			<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

		</footer>

	</div>

</article>

<a class="back-to-summary" href="/handicap-et-etablissement"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Handicap et établissement</a>