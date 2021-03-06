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
<style>

html, body {
  overflow-x: hidden !important;
}
body {
  position: relative !important;
}

</style>
	<script type="text/javascript">
		var url = "<?php bloginfo( 'url' ); ?>";
		var template_url = "<?php bloginfo( 'template_url' ); ?>";
			
			console.log(screen.width + '-' + url);

		if (screen.width > 640 ) {
		    window.location.href = "<?php bloginfo( 'url' ); ?>"; 
		} 

		
		window.onload = function() {
	
				$('#whatsMobile').removeClass("artTeste");
				$('#whatsMobile').addClass("btnwhatsMobile");
			
		
			
			// console.log('Oi de novo');	
		};
		
	</script>


	<script>document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')</script>


	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">


  	<!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/bootstrap-4.3.1/css/bootstrap.min.css" />

    <!-- Animate JS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/assets/animatejs-3.7.2/animate.css" />
		
	<link rel="canonical" href="<?php bloginfo( 'url' ); ?>" />


	<?php wp_head(); ?>

	<!-- Mobile CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/style-mobile.css" />
	
	<!-- Alert JS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/inc/package/dist/sweetalert2.min.css" />
	<script src="<?php bloginfo( 'template_url' ); ?>/inc/package/dist/sweetalert2.all.min.js"></script>




	<script type="text/javascript">
		var url = "<?php bloginfo( 'url' ); ?>";
		var template_url = "<?php bloginfo( 'template_url' ); ?>";
	</script>
</head>


<body <?php body_class(); ?>>

	<div class="artTeste animated bounceInDown delay-2s" id="whatsMobile">
		<a href="https://api.whatsapp.com/send?phone=5541999120265&text=Ol%C3%A1,%20tenho%20interesse%20em%20comprar%20uma%20franquia%20JUMPER!"  target="_blank" >
			<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/whatsapp-1.jpg">
		</a>
		<a href="tel:4130813686"  target="_blank" >
			<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/phone.jpg">
		</a>
	</div>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jumperfranquia' ); ?></a>


	<header id="masthead" class="site-header">
		<div class="container-fluid">

			<!-- .site-branding -->
			<!-- div class="row bg-logo">
				<div class="col-md-3 site-branding text-center">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" class="logotopo" alt="Logo JUMPER!" />
				</div>
			</div> -->


			<!--Navbar-->
		      <nav class="navbar navbar-light light-blue lighten-4">

		        <!-- Navbar brand -->
		       <img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" class="logotopo" alt="Logo JUMPER!" />

		        <!-- Collapse button -->
		        <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
		          aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span><img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/hamburg.png"></span></button>

		        <!-- Collapsible content -->
		        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

		          <!-- Links -->
		          <ul class="navbar-nav mr-auto" style="width:100%" >
		            <li class='menu-item nav-item'> <a class="nav-link" onclick="aJumper()">A Jumper! </a>	</li>
					<li class='menu-item nav-item'> <a class="nav-link" onclick="estrutura()">Estrutura</a>		</li>
					<li class='menu-item nav-item'> <a class="nav-link" onclick="investimento()">Investimento</a>	</li>
					<li class='menu-item nav-item'> <a class="nav-link" onclick="jumperNaMidia()">Jumper na Mídia</a>	</li>
					<li class='menu-item nav-item'> <a class="nav-link" href="https://franquia.jumpercursos.com.br/blog/" style="text-decoration: none; color:white; hover{}">Blog</a>	</li>
					<li class='menu-item nav-item'>
						<a class="nav-link contatolink" id="contato-link" style="cursor:pointer;" onclick="contato()">Contato</a>
					</li>
		          </ul>
		          <!-- Links -->

		        </div>
		        <!-- Collapsible content -->

		      </nav>
		      <!--/.Navbar-->




		</div>
	</header><!-- #masthead -->

	<?php

		$urlEmailSend = $_GET['email'];

		if($urlEmailSend == 'true'){
			echo "<script> 
						Swal.fire(
							'Email enviado com Sucesso!',
							'Aguarde o contato do nosso consultor!',
							'success'
						) 
				</script>";
		}
	?>

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
					<img width="60" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-1.png">
					<p>Ser empreendedor e diferenciado</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="100" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-2.png">
					<p>Falar outro idioma</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-3.png">
					<p>Dominar a tecnologia utilizada nas empresas</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-4.png">
					<p>Atender bem o cliente</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-5.png">
					<p>Conhecer sobre as rotinas administrativas</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-6.png">
					<p>Falar em público</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-7.png">
					<p>Saber negociar e vender</p>
				</div>
				
				<div class="col-6 text-center">					
					<img width="60" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-8.png">
					<p>Saber trabalhar em equipe</p>
				</div>
				
				<div class="col-8 text-center">					
					<img width="60" height="" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/icon-pt2-9.png">
					<p>Estar preparado para uma entrevista de emprego</p>
				</div>

			</div>

			<div class="row justify-content-center row5Sec3Mobile">
				<div class="col-10 text-center">
					<p>Quando o jovem possui todas estas <strong>qualificações,</strong> se destaca em um processo seletivo, e consegue o seu <strong>primeiro emprego.</strong></p>
				</div>
			</div>

		</div>
	</section>

	<section class="section4Mobile">
		<div class="container">

			<div class="row justify-content-center row1Sec4Mobile">
				<div class="col-10 text-center">
					<h2>"Somente uma <strong>formação completa</strong> muda a vida das pessoas" <br/> <p class='nomeverton'>(Everton Sabú)</p></h2>
				</div>
			</div>

			<div class="row justify-content-center row2Sec4Mobile">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/escada.png">

			</div>

			<div class="row justify-content-center row3Sec4Mobile">
				<div class="col-12 text-center">
					<p>O salário desse primeiro emprego, transforma não somente a vida desse jovem, mas de toda a família.</p>
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/seta-1.png">
				</div>
			</div>

			<div class="row justify-content-center row4Sec4Mobile">
				<div class="col-10 text-center">
					<p>E as classes <strong>C e D,</strong> conseguem pagar todos esses cursos?</p>
				</div>
			</div>

			<div class="row justify-content-center row5Sec4Mobile">
				<div class="col-12 text-center">
					<p>Na concorrência, não. Pois, os cursos necessários, são cobrados separadamente.</p>
				</div>
			</div>

			<div class="row justify-content-center row6Sec4Mobile">
				<div class="col-12 text-center">
					<p>Mas, se vier na <strong>JUMPER!,</strong> terá <strong>FORMAÇÃO COMPLETA,</strong> irá fazer cursos, com valor único e acessível, nas áreas de:</p>
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/seta-2.png">
				</div>
			</div>

		</div>
	</section>

	<section class="section5Mobile">
		<div class="container">

			<div class="row justify-content-center row1Sec5Mobile">
				<div class="col-5 text-center">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/empresa.png">
					<p>Mecânica</p>
				</div>

				<div class="col-2 text-center maisSec5">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/mais.png">
				</div>

				<div class="col-5 text-center">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/beleza.png">
					<p>Beleza</p>
				</div>
			</div>

			<div class="row justify-content-center row2Sec5Mobile">
				<div class="col-5 text-center">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/idiomas.png">
					<p>Inglês ou espanhol</p>
				</div>

				<div class="col-2 text-center maisSec5">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/mais.png">
				</div>

				<div class="col-5 text-center">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/informatica.png">
					<p>Tecnologia</p>
				</div>
			</div>

			<div class="row justify-content-center row3Sec5Mobile">
				<div class="col-12 text-center">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/adm.png">
					<p>Rotinas administrativas</p>
				</div>
			</div>

			<div class="row justify-content-center row4Sec5Mobile">
				<div class="col-10 text-center">
					<h2>Além disso, durante sua formação, receberá <br/> <span>12 Treinamentos</span> <br/> Complementares Gratuitos</h2>
				</div>
			</div>

			<div class="row row5Sec5Mobile">
				<div class="col-12 text-left">
					<ul>
						<li>1. Liderança</li>
						<li>2. Elaboração de Currículo</li>
						<li>3. Comunicação</li>
						<li>4. Expressão Corporal</li>
						<li>5. Marketing Pessoal</li>
						<li>6. Trabalho em Equipe</li>
						<li>7. Solução de Conflitos no Trabalho</li>
						<li>8. Finanças Pessoais</li>
						<li>9. Atendimento ao Cliente</li>
						<li>10. Auxiliar de Escritório</li>
						<li>11. Telemarketing</li>
						<li>12. Técnicas de Entrevistas de Emprego</li>
					</ul>
				</div>
			</div>

		</div>
	</section>

	<section class="section6Mobile">
		<div class="container">
			<div class="row justify-content-center row1Sec6Mobile">
				<div class="col-8 div1Row1Sec6">
					<h2>Mas, <p>e o preço</p></h2>
				</div>

				<div class="col-4 div2Row1Sec6">
					<h1>?</h1>
				</div>
			</div>

			<div class="row justify-content-center row2Sec6Mobile">
				<div class="col-12 text-center div1Row2Sec6">
					<p><strong>Toda essa formação</strong> custaria:</p>
					<h1>R$ <span>697</span>,00 / mês</h1>
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/x.png">
				</div>
			</div>

			<div class="row justify-content-center row3Sec6Mobile">
				<div class="col-12 text-center">
					<p>Sabemos que esse valor, não cabe no orçamento das famílias das <strong>classes C e D.</strong></p>
				</div>
			</div>

			<div class="row justify-content-center row4Sec6Mobile">
				<div class="col-12 text-center">
					<p>Na <strong>JUMPER!,</strong> estamos comprometidos em transformar a vida das pessoas. Por isso, criamos o programa <strong>FORMATEC,</strong> que oferece condições acessíveis a todos.</p>
				</div>
			</div>

			<div class="row justify-content-center row5Sec6Mobile">
				<div class="col-12 text-center">
					<p>O aluno faz todos os cursos <strong>(Formação Completa)</strong> por:</p>
					<h1>R$ <span>249</span>,90 / mês</h1>
				</div>
			</div>

		</div>
	</section>

	<section class="section7Mobile">
		<span style="display: none;">já transformamos a vida de mais de 600 mil pessoas</span>
	</section>

	<section class="section8Mobile">
	</section>

	<section class="section9Mobile">
		<div class="container">

			<div class="row justify-content-center row1Sec9Mobile">
				<p>Sabe como o aluno <br/> <span>estuda na Jumper</span></p>
			</div>

			<div class="row justify-content-center row2Sec9Mobile">
				
				<div class="col-4 text-right">
					<p>As aulas são: </p>
				</div>
		
				<div class="col-8">
					<h3>Presenciais, Práticas em grupo e Divertidas</h3>
				</div>
			</div>

			<div class="row justify-content-center row3Sec9Mobile">

				<div class="col-12 text-center">
					<p>O aluno aprende de <h2>verdade!</h2></p>
				</div>

				<div class="col-12 text-center">
					<p>Existem milhares de jovens na sua cidade esperando esta oportunidade de estudar na <strong>JUMPER!</strong></p>
				</div>
			</div>

			<div class="row justify-content-center row4Sec9Mobile">
				<div class="col-8 text-center">
					<p>Você pode ser um <strong>parceiro nessa missão!</strong></p>
				</div>
			</div>

		</div>
	</section>

	<section class="section10Mobile">
		<div class="container">
			<div class="row justify-content-center row1Sec10Mobile">
				<div class="col-12">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/conheca-a-jumper.png">
				</div>
			</div>
		</div>
	</section>

	<section class="section11Mobile">
		<div class="container-fluid">
			
			<div class="row row1Sec11Mobile" data-toggle="modal" data-target=".modal-video" style='cursor:pointer'>
			</div>

			<div class="row">

				<div class="col-6 bg1Sec11Mobile" data-toggle="modal" data-target=".modal-foto1"  style='cursor:pointer'>
					
				</div>
				
				<div class="col-6 bg2Sec11Mobile" data-toggle="modal" data-target=".modal-foto2"  style='cursor:pointer'>
					
				</div>

			</div>

			<div class="row">
				
				<div class="col-6 bg3Sec11Mobile" data-toggle="modal" data-target=".modal-foto3"  style='cursor:pointer'>
					
				</div>
				
				<div class="col-6 bg4Sec11Mobile" data-toggle="modal" data-target=".modal-foto4"  style='cursor:pointer'>
					
				</div>
			</div>

			<div class="row">
				
				<div class="col-6 bg5Sec11Mobile" data-toggle="modal" data-target=".modal-foto5"  style='cursor:pointer'>
					
				</div>
				
				<div class="col-6 bg6Sec11Mobile" data-toggle="modal" data-target=".modal-foto6"  style='cursor:pointer'>
					
				</div>
			</div>

		</div>
	</section>

	<section class="section12Mobile">
		<div class="container">

			<div class="row justify-content-left row1Sec12Mobile">
				<div class="col-8">
					<h2>Estaremos com</h2>
					<h1>Você</h1>
				</div>
			</div>	

			<div class="row justify-content-left row2Sec12Mobile">
				<!-- <img src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/estaremos com vocÊ mobile.png" /> -->
			</div>

		</div>
	</section>

	<section class="section13Mobile">
		<div class="container">
			
			<div class="row justify-content-center row1Sec13Mobile">
				<div class="col-10">
					<h1>Eles <strong>começaram</strong> do <strong>zero,</strong></h1>
					<h1 class="ml-3">E hoje são <strong>referência</strong> na <strong>rede</strong></h1>
				</div>
			</div>

			<div class="row justify-content-center row2Sec13Mobile">
				<div class="col-5">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/josemar.png">
				</div>

				<div class="col-7 nomeFranqueadoSec13">
					<h1><strong>Josemar</strong> Lopes</h1>
					<p>10 unidades Jumper!</p>
				</div>

				<div class="col-12 text-center textoSec13">
					<h1>ʻʻ</h1>
					<p>Eu não tenho dúvidas que fiz a escolha certa, por isso que hoje já abri minha 10° escola e possuo o maior faturamento de toda a rede."</p>
				</div>
			</div>

			<div class="row justify-content-center row3Sec13Mobile">
				<div class="col-5">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/sato.png">
				</div>

				<div class="col-7 nomeFranqueadoSec13">
					<h1><strong>Helena</strong> Sato</h1>
					<p>7 unidades Jumper!</p>
				</div>

				<div class="col-12 text-center textoSec13">
					<h1>ʻʻ</h1>
					<p>A JUMPER! Profissões e Idiomas mudou a nossa vida em todos os sentidos: como empresária, como professora, como profissional e como pessoa."</p>
				</div>
			</div>

			<div class="row justify-content-center row4Sec13Mobile">
				<div class="col-5">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/mobile/edenilson.png">
				</div>

				<div class="col-7 nomeFranqueadoSec13">
					<h1><strong>Edenilson</strong> M.</h1>
					<p>5 unidades Jumper!</p>
				</div>

				<div class="col-12 text-center textoSec13">
					<h1>ʻʻ</h1>
					<p>Hoje somos líder de mercado em nossa cidade. Isso nos trouxe muita satisfação de ter acertado na escolha. Atualmente faturamos 3 vezes mais que há um ano atrás."</p>
				</div>
			</div>

			<div class="row justify-content-center row5Sec13Mobile">
				<div class="col-10">
					<div class="text-center">
						<h1>ʻʻ</h1>
					</div>
					<h1>Eles <strong>conseguiram, você</strong> também <strong>pode!</strong></h1>
				</div>
			</div>

			<div class="row justify-content-center row6Sec13Mobile">
				<div class="col-10 text-center">
					<h2>Quanto eu <strong>preciso</strong> para <strong>investir?</strong></h2>
				</div>
			</div>

			<div class="row justify-content-center row7Sec13Mobile">
				<div class="col-10 text-center">
					<h2>Investimento total:</h2>
					<h1>R$ <span>90</span> mil</h1>
					<p>(Adesão + Estrutura + Inauguração)</p>
				</div>
			</div>

			<div class="row justify-content-center row8Sec13Mobile">
				<div class="col-10 text-center">
					<h1>Não tenho todo o dinheiro, <strong>como faço?</strong></h1>
				</div>

				<div class="col-12 text-center">
					<p>Temos convênio de financiamento de franquia; com juros subsidiados (menores), e carência de 6 meses para começar a pagar</p>
				</div>

				<div class="col-10 text-center">
					<p><strong>Você paga o financiamento com o próprio lucro da unidade.</strong></p>
				</div>

				<div class="col-12 text-center">
					<button onclick="contato()">Fale com o Consultor</button>
				</div>
			</div>

			<div class="row justify-content-center row9Sec13Mobile">
				<div class="col-10 text-center">
					<h1>Qual será o <strong>lucro?</strong></h1>
				</div>

				<div class="col-12 text-center">
					<p>Em apenas <strong>6 meses,</strong> você vai ganahr mais de <strong>15 mil por mês,</strong> dentro do plano de negócio.</p>
				</div>

				<div class="col-12 text-center">
					<button onclick="contato()">Saiba Mais</button>
				</div>
			</div>

			<div class="row justify-content-center row10Sec13Mobile">
				<div class="col-10 text-center">
					<h1>A <strong>minha cidade</strong> está <strong>disponível?</strong></h1>
				</div>

				<div class="col-12 text-center">
					<p>A <strong>JUMPER!</strong> abre apenas <strong>12 unidades por ano,</strong> para atender com excelência o novo parceiro.</p>
				</div>

				<div class="col-12 text-center">
					<p>Entre em contato com o nosso consultor e consulte a disponibilidade.</p>
				</div>

				<div class="col-12 text-center">
					<button onclick="contato()">Consultar Disponibilidade</button>
				</div>
			</div>

			<div class="row justify-content-center row11Sec13Mobile">
				<div class="col-12 text-center">
					<h1>Será que <strong>dá certo</strong> uma <strong>JUMPER!</strong> na <strong>Minha cidade?</strong></h1>
				</div>

				<div class="col-12 text-center">
					<p>A nossa equipe, fará um estudo potencial da sua cidade, pois o seu sucesso é o nosso sucesso.</p>
				</div>

				<div class="col-12 text-center">
					<p>Fale com o nosso consultor e solicite o estudo de viabilidade</p>
				</div>

				<div class="col-12 text-center">
					<button onclick="contato()">Quero Contato</button>
				</div>
			</div>

		</div>
	</section>

	<section class="section14Mobile">
		<div class="container">
			<div class="row justify-content-center row1Sec14Mobile">
				<div class="col-12">
					<h1><strong>Multiplique</strong> o seu <strong>dinheiro</strong></h1>
				</div>
			</div>

			<div class="row justify-content-center row2Sec14Mobile">
				<div class="col-12 text-center">
					<h2>Lucre R$ <strong><span>15</span> mil</strong></h2>
					
					<div class="text-right">
						<p><strong>Mensal</strong> <br/> * a partir do 6° mês</p>
					</div>
				</div>
			</div>

			<div class="row justify-content-center row3Sec14Mobile">
				<iframe width="250" height="200" src="https://www.youtube.com/embed/tFWcekMtn0I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<div class="row justify-content-center row4Sec14Mobile">
				<div class="col-10 text-center">
					<h1>Vamos conversar?</h1>
					<p>Preencha o formulário que entraremos em contato.</p>
				</div>
			</div>

			<div class="row justify-content-center row5Sec14Mobile">

				
			<?php echo  do_shortcode('[contact-form-7 id="14330" title="Contato" html_id="formularioFooterMobile"]') ?>
<!-- 			
				<form method="POST" action="<?php bloginfo( 'template_url' ); ?>/inc/mailSend.php" id="formularioFooterMobile">
					<div class="row">

						<div class="form-group col-12">
							<label for="nome">Nome</label>
							<input type="text" name="nome" class="form-control" id="nome">
						</div>

						<div class="form-group col-6">
							<label for="telefone">Telefone</label>
							<input type="text" name="telefone" class="form-control" id="telefone">
						</div>

						<div class="form-group col-6">
							<label for="cidade">Cidade</label>
							<input type="text" name="cidade" class="form-control" id="cidade">
						</div>

						<div class="form-group col-12">
							<label for="estado">Estado</label>
							<input type="text" name="estado" class="form-control" id="estado">
						</div>

						<div class="form-group col-12">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control" id="email">
						</div>

						<div class="form-group col-12 text-center">
							<button type="submit">Enviar formulário</button>
						</div>

					</div>
				</form> -->
			</div>

			<div class="row justify-content-center row6Sec14Mobile">
				<img style="margin-right: 1%;" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/footer-wpp.png">
				<img style="margin-right: 1%;" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/footer-face.png">
				<img style="margin-right: 2%;" src="<?php bloginfo( 'template_url' ); ?>/images/mobile/footer-insta.png">

				<p>@ Jumper! Profissões e Idiomas2019</p>
			</div>
		</div>
	</section>


	<!-------------------------------------------------------------------------------------------------------------------------------------------
																		*** MODALS ***
	--------------------------------------------------------------------------------------------------------------------------------------------->


	<div class="modal fade modal-video" id="modalVideo" onclick="modalVideo()" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl ">
	    <div class="modal-content">
	      <iframe width="1150" height="300" src="https://www.youtube.com/embed/YDuE2CcREMY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto1" id="modalFoto1" onclick="modalFoto1()" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/recepção.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto2" id="modalFoto2" onclick="modalFoto2()" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_0548.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto3" id="modalFoto3" onclick="modalFoto3()" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_3449.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto4" id="modalFoto4" onclick="modalFoto4()" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_4963.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto5" id="modalFoto5" onclick="modalFoto5()" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_4971.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto6" id="modalFoto6" onclick="modalFoto6()" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_5002 (1).jpg">
	    </div>
	  </div>
	</div>
	


</div>


<!-- <a href="https://api.whatsapp.com/send?phone=5541999120265&text=Ol%C3%A1,%20tenho%20interesse%20em%20comprar%20uma%20franquia%20JUMPER!" class="btnwhats animated bounceInDown delay-2s	 " target="_blank">
	<img src="<?php bloginfo( 'template_url' ); ?>/images/whats.png">
</a> -->




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

<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/bcd8c251-7680-4f5f-8ee5-caa79b5374ff-loader.js" ></script>

</body>


</html>

<script type="text/javascript">

	function modalVideo() {
		$('#modalVideo').modal('show');
	}

	function modalFoto1() {
		$('#modalFoto1').modal('show');
	}

	function modalFoto2() {
		$('#modalFoto2').modal('show');
	}

	function modalFoto3() {
		$('#modalFoto3').modal('show');
	}

	function modalFoto4() {
		$('#modalFoto4').modal('show');
	}

	function modalFoto5() {
		$('#modalFoto5').modal('show');
	}

	function modalFoto6() {
		$('#modalFoto6').modal('show');
	}

	function jumperNaMidia() {
		window.scrollTo(0, 10050);
	}

	function contato() {
		window.scrollTo(0, 15000);
	}

	function investimento() {
		window.scrollTo(0, 7200);
	}
	
	function estrutura() {
		window.scrollTo(0, 6300);
	}
	
	function aJumper() {
		window.scrollTo(0, 950);
	}
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71266454-6"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-71266454-6');
</script>
