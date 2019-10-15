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
		<div class="container">
			<div class="row">
				
				<div class="col-md-3 site-branding text-center">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="Logo JUMPER!" />
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="col-md-7 main-navigation navbar navbar-expand-lg">
					
					<div class="collapse navbar-collapse animated bounceInDown delay-1s">
						<ul class='main-navigation navbar-nav mr-auto'>
							<li class='menu-item nav-item'> <a class="nav-link">A Jumper! </a>	</li>
							<li class='menu-item nav-item'> <a class="nav-link">Estrutura</a>		</li>
							<li class='menu-item nav-item'> <a class="nav-link">Investimento</a>	</li>
							<li class='menu-item nav-item'> <a class="nav-link">Jumper na Mídia</a>	</li>
							<li class='menu-item nav-item'>
								 <a class="nav-link contatolink" id="contato-link" onclick="$('#footer').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Contato</a>
							</li>

							

							
						</ul>
					</div>

				</nav><!-- #site-navigation -->

				<div class="col-md-2 mt-3 ml-n2 phone animated bounceInDown delay-1s">
					<span itemprop="telephone"><a href="tel:4130813686">(41)<strong>3081-3686</strong> </a></span>
				</div>



			</div>

		</div>
	</header><!-- #masthead -->



	<section class='header-top'>

		
		<div class="section1ImgFundoEscola  col-md-12" >
			<!-- *BACKEND 
				<img style="height: 630px" class="float-right testeParallax" src="http://127.0.0.1:8080/wp-content/uploads/2019/10/background-pt1-1.png">	-->
		</div>

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

	</section>
