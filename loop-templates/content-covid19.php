<?php
/**
 * Covid-19 content partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

	<div class="inner col-lg-10 offset-lg-1">

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

<a class="back-to-summary" href="/covid-19"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Covid-19</a>