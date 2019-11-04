<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JUMPER_Franquias
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main main404 animated bounceInLeft delay-2s">

			<section class="error-404 not-found">
				<header class="page-header text-center">
					<h1 class="page-title"><?php esc_html_e( 'Oops! A página não foi encontrada ', 'jumperfranquia' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content text-center">
					
					<img width="300px" src="<?php bloginfo( 'template_url' ); ?>/images/logo_jumper_frachising1.png" />

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
