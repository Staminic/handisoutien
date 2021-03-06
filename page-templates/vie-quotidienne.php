<?php
/**
 * Template Name: Pages Vie quotidienne
 *
 * Pages avec le renvoi vers le sommaire de la rubrique Vie quotidienne.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main" style="psoition: relative;">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'vie_quotidienne' ); ?>

					<?php
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; ?>

			</main>

			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div>

	</div>

</div>

<?php get_footer(); ?>
