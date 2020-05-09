<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					
					<a href="#">Mentions légales</a>

					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alefpa-logo-blanc.png" alt="Logo de l'ALEFPA" />

				</footer>

			</div>

		</div>

	</div>

</div>

</div>

<?php wp_footer(); ?>

</body>

</html>

