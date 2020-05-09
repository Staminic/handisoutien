<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
	
	<div class="header-wrapper">
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'sidebar-templates/sidebar', 'ocs_btn' ); ?>

		<?php get_template_part( 'sidebar-templates/sidebar', 'header-above' ); ?>

		<div class="brand bg-white">
		
			<div class="group-logos d-none d-lg-block">
				<img class="img-fluid mb-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alefpa-logo.png" />
				<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/handi-soutien-974-numero-vert.jpg" />
			</div>

			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">

				<?php if ( ! has_custom_logo() ) { ?>
					
					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0">
							<?php bloginfo( 'name' ); ?>
						</h1>

					<?php else : ?>

						<span class="navbar-brand mb-0 p-0"><?php bloginfo( 'name' ); ?></span>

					<?php endif; ?>


				<?php } else {
					the_custom_logo();
				} ?>

				<p class="site-description"><?php bloginfo('description'); ?></p>
				
			</a>

			<div class="group-logos d-none d-lg-block">
				<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ars-la-reunion-logo.png" />
			</div>

			<div class="d-flex d-lg-none justify-content-center">
				<div class="group-logos">
					<img class="img-fluid mb-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alefpa-logo.png" alt="Logo de l'ALEFPA" />
					<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/handi-soutien-974-numero-vert.jpg" alt="Numéro vert Handi-soutien 974"/>
				</div>

				<div class="group-logos">
					<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ars-la-reunion-logo.png" alt="Logoe de l'ARS La Réunion" />
				</div>
			</div>

		</div>
		
		<nav class="navbar navbar-expand-lg">
			
			<div class="container-fluid">

				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button> -->

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav m-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

			</div>

		</nav>

	</div>