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


				<div class="float-rightname">
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


	<div class="row justify-content-center bg-s1">
		<div class="col-8 text-center s1TextoBanner">
			<?php echo get_field( "texto_banner");?>
		</div>
		
		<div class="col-12 s1TextoChamada text-center">
			<?php echo get_field( "texto_chamada" );?>
		</div>
	</div>

	<section class="section2Mobile">
		<div class="container">

			<div class="row row1Sec2Mobile">
				<div class="col-6">
					<h2>Como está a situação dos <strong>jovens</strong> no <strong>mercado de trabalho?</strong></h2>
				</div>
			</div>

			<div class="row row2Sec2Mobile">

				<div class="col-4" id="Sec2-93">
					<h1>93%</h1>
				</div>

				<div class="col-8">
					<p>dos jovens entre 13 e 18 anos, não sabem o que irão fazer no futuro profissional.</p>
				</div>
			</div>

			<div class="row justify-content-center row3Sec2Mobile">
				<div class="col-10">
					<h2>Os <strong>Jovens sofrem</strong> para conseguir o <strong>primeiro emprego,</strong> é a famosa geração <br /> <span id="nemNem">"Nem , Nem, Nem"</span> <br/> <span id="nemEstuda">nem estuda, nem trabalha, nem procura emprego.</span></h2>
				</div>
			</div>

			<div class="row justify-content-center row4Sec2Mobile">
				<div class="col-10 text-center">
					 <h2><strong>Sabe por que isso acontece?</strong> <br /> Estão completamente desqualificados para trabalhar, e por isso, não conseguem emprego.</h2>
				</div>
			</div>

		</div>
	</section>

	<section class="section3Mobile"> 
		<div class="container">
			
			<div class="row justify-content-center row1Sec3Mobile">
				<div class="col-12 text-center">
					<h2><strong>Mas, se fizerem 1 curso, vão mudar essa situação?</strong></h2>
				</div>
			</div>

			<div class="row justify-content-center row2Sec3Mobile">
				<div class="col-4">
					<h1>NÃO!</h1>
				</div>
			</div>

			<div class="row justify-content-center row3Sec3Mobile">
				<div class="col-10 text-center">
					<p>Somente com 1 curso o jovem ainda não se qualifica o suficiente.</p>
					<p>Para trabalhar, ele precisa:</p>
				</div>
			</div>

			<div class="row justify-content-center row4Sec3Mobile">
				
				<div class="col-6 text-center">					
					<img width="60px" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-1.png">
					<p>Oi Ola Tudo Bemm</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="100px" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-2.png">
					<p>Oi Ola Tudo Bemm</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60px" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-3.png">
					<p>Oi Ola Tudo Bemm</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60px" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-4.png">
					<p>Oi Ola Tudo Bemm</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60px" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-5.png">
					<p>Oi Ola Tudo Bemm</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60px" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-6.png">
					<p>Oi Ola Tudo Bemm</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60px" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-7.png">
					<p>Oi Ola Tudo Bemm</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60px" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-8.png">
					<p>Oi Ola Tudo Bemm</p>
				</div>
				
				<div class="col-12 text-center">					
					<img width="60px" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-9.png">
					<p>Oi Ola Tudo Bemm</p>
				</div>

			</div>

		</div>
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

