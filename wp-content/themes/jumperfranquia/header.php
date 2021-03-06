<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JUMPER_Franquias
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<script type="text/javascript">
		var url = "<?php bloginfo( 'url' ); ?>";
		var template_url = "<?php bloginfo( 'template_url' ); ?>";

		console.log(screen.width + '-' + url);

		if (screen.width < 640 ) {

			<?php $verifyGET = $_GET['email']; ?>
			
			var verifyGETScrpt = "<?php echo $verifyGET; ?>";

			if(verifyGETScrpt == 'true'){
				window.location.href = "<?php bloginfo( 'url' ); ?>/home-mobile/?email=true"; 
			}else{
				window.location.href = "<?php bloginfo( 'url' ); ?>/home-mobile/"; 
			}

		    
		} 


	</script>


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


  	<!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/bootstrap-4.3.1/css/bootstrap.min.css" />

    <!-- Animate JS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/animatejs-3.7.2/animate.css" />

    <!-- Alert JS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/inc/package/dist/sweetalert2.min.css" />
	<script src="<?php bloginfo( 'template_url' ); ?>/inc/package/dist/sweetalert2.all.min.js"></script>

	<!-- FONT AWESOME -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/layouts/fontawsome.min.css" />
	<script
      src="https://use.fontawesome.com/releases/v5.12.0/js/all.js"
      data-auto-a11y="true"
    ></script>


	<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/images/favicon/favicon.ico" />

	<?php wp_head(); ?>


	<!-- Facebook Shared -->
		<meta property="og:url" id="urlShared" 		content="https://franquiadeescola.jumpercursos.com.br/" />
        <meta property="og:type"               		content="article" />
        <meta property="og:title"              		content="Jumper Franquias" />
        <meta property="og:description"        		content="A melhor opção em Franquia de Cursos Profissionalizantes e Idiomas!" />
        <meta property="og:image"              		content="https://jumpercursos.com.br/wp-content/uploads/2019/11/imagem.jpg">
	
	<!-- Facebook Embed -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v5.0"></script>
	
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jumperfranquia' ); ?></a>


	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				
				<div class="col-md-3 site-branding">
					<a href="<?php bloginfo( 'template_url' ); ?>/home"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="Logo JUMPER!" /></a>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="col-md-7 main-navigation navbar navbar-expand-lg">
					
					<div class="collapse navbar-collapse animated bounceInDown delay-1s">
						<ul class='main-navigation navbar-nav mr-auto'>
							<li class='menu-item nav-item'> <a class="nav-link" onclick="$('.section2').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">A Jumper! </a></li>

							<li class='menu-item nav-item'> <a class="nav-link" onclick="$('.section8').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Estrutura</a></li>

							<li class='menu-item nav-item'> <a class="nav-link" onclick="$('.row2Sec10').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Investimento</a>	</li>

							<li class='menu-item nav-item' > <a class="nav-link" onclick="$('.namidia').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Jumper na Mídia</a>	</li>

							<li class='menu-item nav-item'> <a class="nav-link" href="<?php $_SERVER['HTTP_HOST'] ?>/blog" style="text-decoration: none; color:white; hover{}">Blog</a>	</li>

							<li class='menu-item nav-item'>
								 <a class="nav-link contatolink" id="contato-link" onclick="$('#footer').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Contato</a>
							</li>
							

							
						</ul>
					</div>

				</nav><!-- #site-navigation -->

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
				<?php echo get_field( "texto_banner" , 14302);?>
			</div>

			<div class="divImageSection1 col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
				<img class="float-right animated bounceInRight" width="380" src="<?php echo get_field( "foto_everton" , 14302);?>">
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
			<div class="animated bounceInUp h1TextoChamado slower">
				<?php echo get_field( "texto_chamada" , 14302);?>
			</div>
		</div>

	</section>


	<div id="content" class="site-content">
