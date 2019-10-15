<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JUMPER_Franquias
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script>


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


  	<!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/bootstrap-4.3.1/css/bootstrap.min.css" />

    <!-- Animate JS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/animatejs-3.7.2/animate.css" />


	<?php wp_head(); ?>

	<!-- Animate JS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/style-mobile.css" />




	<script type="text/javascript">
		var url = "<?php bloginfo( 'url' ); ?>";
		var template_url = "<?php bloginfo( 'template_url' ); ?>";
	</script>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jumperfranquia' ); ?></a>


	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row bg-logo">
				
				<div class="col-md-3 site-branding text-center">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" class="logotopo" alt="Logo JUMPER!" />
				</div><!-- .site-branding -->


			</div>

		</div>
	</header><!-- #masthead -->



	<section class='header-top  mt-n5'>

		
		<div class="section1ImgFundoEscola  col-sm-12" >

			<div class="mt-5 col-12">

				<img class=" animated bounceInRight imgeverton" src="<?php echo get_field( "foto_everton" );?>">


				<div class="float-right">
					<div class="verticalLine animated tada">
						<span><strong>Everton Sabú</strong></span>
						<br>
						<span>Fundador</span>
					</div>
					
				</div>
			</div>

			
		</div>
<?php 
/*
		<div class="divBgSection1">

			<div class="divH2Section1 col-6 col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-md-5 animated bounceInLeft">
				<?php echo get_field( "texto_banner");?>
			</div>




			<div class="divImageSection1 col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
				<img class="float-right animated bounceInRight" width="380" src="<?php echo get_field( "foto_everton" );?>">
				<div class="float-right">
					<div class="verticalLine animated tada">
						<span><strong>Everton Sabú</strong></span>
						<br>
						<span>Fundador</span>
					</div>
					
				</div>
			</div>


		</div>

		<div class="divBg2Section1 text-center mt-n2">
			<div class="animated bounceInUp slower">
				<?php echo get_field( "texto_chamada" );?>
			</div>
		</div>
*/
?>
	</section>

</div>


<?php wp_footer(); ?>


<!-- jQuery -->
<script src="<?php bloginfo( 'template_url' ); ?>/assets/jQuery-3.4.1/jquery-3.4.1.min.js"></script>


<!-- Bootstrap -->
<script src="<?php bloginfo( 'template_url' ); ?>/assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>

<!-- Parallax -->
<script src="<?php bloginfo( 'template_url' ); ?>/assets/parallax.js-1.5.0/parallax.min.js"></script>

<!-- ScrollTo -->
<script src="<?php bloginfo( 'template_url' ); ?>/assets/animatescroll.js-master/animatescroll.min.js"></script>

<!-- scripts -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/scripts-mobile.js"></script>


</body>
</html>

