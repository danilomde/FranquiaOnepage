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

get_header();
?>

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

	<div class="col-md-2 mt-3 ml-n2 phone animated bounceInDown delay-1s">
		<span itemprop="telephone"><a href="tel:4130813686">41 <strong>3081-3686</strong> </a></span>
	</div>

	<!-- SECTION 2 e 3 -->
	<section class="section2">
		<div class="container">
			<div class="row rowSection2Bg">
				
				<div class="col-md-6 section2AjusteTopo">
					<h2>Como está a situação dos <strong>jovens</strong> no <strong>mercado de trabalho?</strong></h2>
				</div>

				<div class="col-md-6 section2AjusteTopo">
					<h3><span class="bignumber">93%</span> dos jovens  entre 13 e 18 anos, não sabem o que irão fazer no futuro profissional.</h3>
				</div>

				<div class="col-md-12 text-center meninoCarteira"> 
					<img src="<?php bloginfo( 'template_url' ); ?>/images/p2/pessoa-p2.png">	
				</div>

				<div class="col-md-6" id="textoMenino1">
					<div class="texto1Section2">
						<h2>Os <strong>jovens sofrem</strong> para conseguir o <strong>primeiro emprego</strong>, é a famosa geração <br /> <span id="NemNemNem"><strong>"NEM, NEM, NEM"</strong></span> <br /> <span id="NemNemNemP"> nem estuda, nem trabalha, nem procura emprego. </span></h2>
					</div>
					
				</div>

				<div class="col-md-6 text-center" id="textoMenino2">
					<div class="texto2Section2">
						<h3><strong>Sabe por que isso acontece?</strong></h3> <p>Estão completamente desqualificados para trabalhar, e por isso, não conseguem emprego</p>
					</div>
					
				</div>


				<div class="col-md-12 text-center" id="textMenino3">
					<h1>Mas, se fizerem 1 curso, vão mudar essa situação?</h1>
					<div class="divSuporteH3">
						<h3>NÃO!</h3>
					</div>
					
					<h4>Somente com 1 curso o jovem ainda não se qualifica o suficiente. Para trabalhar ele precisa: </h4>
				</div>
				
				<div class="row" id="rowAjusteSec2">
					<div class="col-md-3 text-center sec2DivNoMax">
						<img width="100px" height="100px" src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/ser empreendedor.png" >
						<p>Ser empreendedor e diferenciado</p>
					</div>
					<div class="col-md-3 text-center sec2DivNoMax" style="padding-top: 1%;">
						<img  width="100px" height="100px" src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/Falar outro idioma.png">
						<p>Falar outro idioma</p>
					</div>
					<div class="col-md-3 text-center sec2DivNoMax">
						<img  width="100px" height="100px" src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/dominar as tecnologias.png">
						<p>Dominar a tecnologia ultilizada pelas empresas</p>
					</div>
					<div class="col-md-3 text-center sec2DivNoMax">
						<img  width="100px" height="100px" src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/conhcer sobre as rotinas adm.png">
						<p>Conhecer sobre as rotinas administrativas</p>
					</div>


					<div class="col-md-3 text-center sec2DivNoMax">
						<img  width="100px" height="100px" src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/atender bem o cliente.png">
						<p>Atender bem o cliente</p>
					</div>
					<div class="col-md-3 text-center sec2DivNoMax">
						<img  width="100px" height="100px" src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/saber negociar e vender.png">
						<p>Saber negociar e vender</p>
					</div>
						
					<div class="col-md text-center sec2DivNoMax">
						<img width="100px" height="100px"  src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/saber trabalhar em equipe.png">
						<p>Saber trabalhar em equipe</p>
					</div>

					<div class="col-md text-center sec2DivNoMax sec2DivAjuste">
						<img  width="100px" height="100px" src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/falar bem em publico.png">
						<p>Falar em público</p>
					</div>


					<div class="col-md text-center sec2DivNoMax">
						<img  width="100px" height="100px" src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/estar preparado para uma entrevista de emprego.png">
						<p>Estar preparado para uma entrevista de emprego</p>
					</div>


				</div>
				
				<div class="row text-center" id="section2RowAjuste4">

					<div class="ajusteH2RowAjuste4">
						<h2>Quando o jovem possui todas estas <strong>qualificações,</strong> se destaca em um processo seletivo, e consegue o seu <strong>primeiro emprego.</strong></h2>
					</div>
					

					<div class="ajusteLinha1RowAjuste4">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/p2/flecha1.png">
					</div>
					
				</div>

				<div class="row">
					<div class="ajusteSomenteUmaFormacao">
						<h2>"Somente uma <strong>formação completa</strong> muda a vida das pessoas"</h2>

						<div class="text-right txtEverton">
							<p>- Everton Sabú</p>
						</div>
						
						<p>O salário desse primeiro emprego, transforma não somente a vida desse jovem, mas de toda familia.</p>

						<div class="ajusteLinha2RowAjuste4">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/p2/flecha2.png">
						</div>

						<div class="ajusteClasseCeD">	
							<h2>E as classes <strong>C</strong> e <strong>  D,</strong> conseguem pagar todos esses cursos?</h2>
							<p>Na concorrência, não. Pois, os cursos necessários, são cobrados separadamente.</p>

							<p>Mas se vier na <strong>JUMPER!</strong>, terá <strong>Formação completa,</strong> irá fazer cursos, com valor único e acessível, nas áreas de: </p>

						</div>
					</div>
				</div>
			</div>

			<div class="ajusteLinha3RowAjuste4">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/p2/flecha3.png">
				</div>

			<div class="row rowSection3Bg">
				<div class="col-md-12 imgEscolaSec3">
					<img src="<?php bloginfo( 'template_url' ); ?>/images/p3/escola-sec3.png">
				</div>

				<div class="container">
					

					<div class="row rowContainerSec3 ">
						<div class="col-md-12">
							<img src="<?php bloginfo( 'template_url' ); ?>/images/ajuste/icones cursos2.png">
						</div>

						<div class="row">
							<div class="col-md-2 text-center">
								Mecânica
							</div>
	
							<div class="col-md-2 text-center">
								Beleza
							</div>
	
							<div class="col-md-2 text-center">
								Inglês ou Espanhol
							</div>
	
							<div class="col-md-2 text-center">
								Rotinas administrativas
							</div>
	
							<div class="col-md-2 text-center">
								Tecnologia
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-12" id="rowBgTreinamentoSection3">
					<!-- <div class="container"> -->
						<div class="row justify-content-md-center" id="ajusteRowTreinamentoSection3">
							<div class="col-md-3 text-right divBorderRightSec3">
								<p>Além disso, durante a sua formação receberá</p>
							</div>

							<div class="col-md-3 text-left">
								<h2 id="h2AjusteSec3">12 treinamentos </h2>
								<span id="SpanAjusteSec3">Complementares gratuitos</span>
							</div>
						</div>
					<!-- </div> -->
				</div>

				<div class="col-md-6" id="bgMeninaApontandoSec3">
				</div>

				<div class="col-md-6" id="rowListaMeninaApontandoSec3">
					<ul>
						<li>1. Liderança</li>
						<li>2. Técnicas de Entrevistas de Emprego</li>
						<li>3. Comunicação</li>
						<li>4. Expressão Corporal</li>
						<li>5. Marketing Pessoal</li>
						<li>6. Trabalho em Equipe</li>
						<li>7. Solução de Conflitos no Trabalho</li>
						<li>8. Finanças Pessoais</li>
						<li>9. Atendimento ao Cliente</li>
						<li>10. Auxiliar de Escritório</li>
						<li>11. Telemarketing</li>
						<li>12. Elaboração de Currículo</li>
					</ul>
				</div>
				

			</div>
		</div>
	</section>

	<!-- SECTION 4 -->
	<section class="section4">
		<div class="container">
			<div class="row" id="ajusteRow1Sec4">
				<div class="col-md-10 text-left" id="div1Sec4">
					<h1 id="h1Div1Sec4">Mas,</h1>
					<h1 id="h2Div1Sec4">e o preço</h1>
				</div>
				<div class="col-md-2" id="div2Sec4">
					<h1 id="h1Div2Sec4"> ? </h1>
				</div>
			</div>

			<div class="row justify-content-md-center" id="ajusteRow2Sec4">

				<div class="col-md-4" id="div3Sec4" >

					<p><strong>Toda essa formação</strong> custaria:</p>
					<div>
						<img src="<?php bloginfo( 'template_url' ); ?>/images/p4/x.png">
						<h3>R$<span>697</span>,00 / mês</h3>
					</div>
					
				</div>
				<div class="col-md-4" id="div4Sec4" >
					<p>Sabemos que esse valor, não cabe no orçamento das famílias das <strong>classes C e D.</strong></p>
				</div>
			</div>

			<div class="row justify-content-md-center" id="ajusteRow3Sec4">
				<div class="col-md-4" id="div5Sec4">
					<p>Na <strong>JUMPER!</strong>, estamos comprometidos em transformar a vida das pessoas. Por isso, criamos o programa <strong>FORMATEC,</strong> que oferece condições acessíveis a todos.</p>
				</div>

				<div class="col-md-4" id="div6Sec4">
					<p>O aluno faz todos os cursos <strong>(Formação Completa)</strong> por: </p>
					<h3>R$<span>249</span>,00 / mês</h3>
				</div>
			</div>
		</div>
  	</section>

  	<!-- SECTION 5 -->
  	<section class="section5">
  		<span style="display: none;">já transformamos a vida de mais de 600 mil pessoas</span>
  	</section>

  	<!-- SECTION 6 -->	
  	<section class="section6">
  		<div class="container">

  			<div class="row justify-content-md-left" id="ajusteRowSec6">
  				<div class="col-md-4" id="div1Sec6">
  					<p>Sabe como o aluno</p>
  					<h2>estuda na Jumper</h2>
  				</div>
  				<div class="col-md-1" id="div2Sec6">
  					<h1>?</h1>
  				</div>
  			</div>

  			<div class="row justify-content-md-left" id="ajusteRow2Sec6">
  				<div class="col-md-2 text-right" id="div3Sec6">
  					<p>As aulas são:</p>
  				</div>
  				<div class="col-md-3">
  					<h3><strong>Presencias, Práticas, em grupo e Divertidas</strong></h3>
  				</div>
  			</div>

  			<div class="row justify-content-md-left" id="ajusteRow3Sec6">
  				<div class="col-md-2 text-right" id="div4Sec6">
  					<p>O aluno aprende de</p>
  					<h3><strong>verdade!</strong></h3>
  				</div>

  				<div class="col-md-4" id="div5Sec6">
  					<p>Existem milhares de jovens na sua cidade esperando esta oportunidade de estudar na <strong>JUMPER!</strong></p>
  				</div>
  			</div>

  			<div class="row">
  				<div class="col-md-6 text-center" id="div6Sec6">
  					<div class="subDiv6">
  						<h3>ʻʻ</h3>
  					</div>

  					<div class="subDiv6">
  						<p>Você pode ser um <strong>parceiro nesta Missão!</strong></p>
  					</div>
  				</div>
  			</div>

  		</div>
  	</section>
	
	<!-- SECTION 7 -->
  	<section class="section7">
  		<div class="container">
  			<div class="row justify-content-md-center">
  				<div class="col-md-12 text-center" id="ajusteDivSec7">
  					<h2 style="display: none;">Conheça a sua unidade</h2>
  					<h1 style="display: none;">JUMPER<strong>!</strong></h1>
  					<img src="<?php bloginfo( 'template_url' ); ?>/images/p7/conheca-a-jumper.png">
  				</div>
  			</div>
  		</div>
  	</section>

  	<section class="section8">
  			<div id="row1Sec8Bg" data-toggle="modal" data-target=".modal-video">
  				
  			</div>
  				<div class="row section8Imgs">

  					<div class="col-md-2" data-toggle="modal" data-target=".modal-foto1">
  						<img src="<?php bloginfo( 'template_url' ); ?>/images/p8/recepcao.jpg">
  					</div>

  					<div class="col-md-2" data-toggle="modal" data-target=".modal-foto2">
  						<img src="<?php bloginfo( 'template_url' ); ?>/images/p8/idiomas.jpg">
  					</div>

  					<div class="col-md-2" data-toggle="modal" data-target=".modal-foto3">
  						<img src="<?php bloginfo( 'template_url' ); ?>/images/p8/industrial.jpg">
  					</div>

  					<div class="col-md-2" data-toggle="modal" data-target=".modal-foto4">
  						<img src="<?php bloginfo( 'template_url' ); ?>/images/p8/informatica.jpg">
  					</div>

  					<div class="col-md-2" data-toggle="modal" data-target=".modal-foto5">
  						<img src="<?php bloginfo( 'template_url' ); ?>/images/p8/beleza.jpg">
  					</div>

  					<div class="col-md-2" data-toggle="modal" data-target=".modal-foto6">
  						<img src="<?php bloginfo( 'template_url' ); ?>/images/p8/mecanica.jpg">
  					</div>

  				</div>
  	</section>


  	<section class="section9">
  		<div class="container ">

  			<div class="row">
  				<div class="col-md-12" id="ajusteDiv1Sec9">
  					<h2>Estaremos com </h2>
  					<h1>Você</h1>
				  </div>
				  
				  <div class="col-md-12 containerUM">
				  </div>
  			</div>

  		</div>

  	</section>

  	<section class="section10">
  		<div class="container">


  			<div class="row justify-content-center">
  				<div class="col-md-6 ajusteDiv1Sec10">
  					<h1 id="h1Sec10">Eles <span>começaram</span> do <span>zero</span> ,</h1>
  					<h1 id="h1Sec102"> e hoje são <span>referência</span>  na <span>rede!</span></h1>
  				</div>
  			</div>


  			<div class="container containerFranqueados">
  					<div class="row" id="divJosemar">

		  				<div class="col-md-3 text-right divSec9Nome">
		  					<h1><strong>Josemar</strong> Lopes</h1>
		  					<p>7 unidades Jumper!</p>
		  				</div>

		  				<div class="col-md-2 text-center">
		  					<img src="<?php bloginfo( 'template_url' ); ?>/images/p10/josemar.png" width="170px" height="170px">
		  				</div>

		  				<div class="col-md-4">

		  					<div class="text-center aspasFranqueado mt-n5">
		  						<h1>ʻʻ</h1>
		  					</div>

		  					<div class="text-left depoFranqueado">
		  						<p>Eu não tenho dúvidas que fiz a escolha certa, por isso que hoje estou abrindo minha 7° escola e possuo o maior faturamento de toda rede."</p>
		  					</div>
		  					
		  					
		  				</div>
		  			</div>

		  			<div class="row" id="divHelena">

		  				<div class="col-md-3 offset-md-1 text-right divSec9Nome">
		  					<h1><strong>Helena</strong> Sato</h1>
		  					<p>7 unidades Jumper!</p>
		  				</div>

		  				<div class="col-md-2 text-center">
		  					<img src="<?php bloginfo( 'template_url' ); ?>/images/p10/sato.png" width="170px" height="170px">
		  				</div>

		  				<div class="col-md-4">

		  					<div class="text-center aspasFranqueado mt-n5">
		  						<h1>ʻʻ</h1>
		  					</div>

		  					<div class="text-left depoFranqueado">
		  						<p>A JUMPER! Profissões e Idiomas mudou a nossa vida em todos os sentidos: como empresária, como professora, como profissional e como pessoa."</p>
		  					</div>
		  					
		  					
		  				</div>
		  			</div>

		  			<div class="row" id="divEdenilson">

		  				<div class="col-md-3 offset-md-3 text-right divSec9Nome">
		  					<h1><strong>Edenilson</strong> M.</h1>
		  					<p>5 unidades Jumper!</p>
		  				</div>

		  				<div class="col-md-2 text-center">
		  					<img src="<?php bloginfo( 'template_url' ); ?>/images/p10/edenilson.png" width="170px" height="170px">
		  				</div>

		  				<div class="col-md-4">

		  					<div class="text-center aspasFranqueado mt-n5">
		  						<h1>ʻʻ</h1>
		  					</div>

		  					<div class="text-left depoFranqueado">
		  						<p>Hoje somos líder de mercado em nossa cidade. Isso nos trouxe muita satisfação de ter acertado na escolha. Atualmente faturamos 3 vezes mais que há um ano atrás."</p>
		  					</div>
		  					
		  					
		  				</div>
		  			</div>
  			</div>


  			<div class="row justify-content-center row1Sec10">
  				<div class="col-md-3 text-center">
  					<div class="text-center">
  						<h1>ʻʻ</h1>
  					</div>
  					
  					<h1>Eles <strong>conseguiram, você</strong> também <strong>pode!</strong> </h1>
  				</div>
  			</div>

  			<div class="row justify-content-left row2Sec10">
  				<div class="col-md-3">
  					<h1>Quantos eu <strong>preciso</strong> para <strong>investir</strong>?</h1>
  				</div>
  			</div>


  			<div class="row row3Sec10">
  				
  				<div class="col-md-6 text-center" id="div1Row3Sec10">
  					<h3>Investimento Total:</h3> 
  					<h1>R$ <strong>159</strong> mil</h1>
  					<p>(adesão + estrutura + inauguração)</p>
  				</div>

  				<div class="col-md-6" id="div2Row3Sec10">
  					<h2>Não tenho todo o dinheiro, <strong>como faço?</strong></h2>

  					<p>Temos convênio de financiamento de franquia; com juros subsidiados (menores), e carência de 6 meses para começar a pagar.</p>

  					<p><strong>Você paga o financiamento com o próprio lucro da unidade.</strong></p>

  					<div class="float-right">
  						<button class="botaoSec10" onclick="$('#footer').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Fale com o consultor</button>	
  					</div>

  				</div>
  			
  			</div>

  			<div class="row justify-content-left row4Sec10">
  				<div class="col-md-12">
  					<h1>Qual será o <strong>lucro?</strong></h1>
  					<p>Em apenas <strong>6 meses,</strong> você vai ganhar mais de <strong>15 mil por mês,</strong> dentro do plano de negócio.</p>

  					<div>
  						<button class="botao2Sec10" onclick="$('#footer').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Saiba mais</button>
  					</div>
  				</div>
  			</div>

  			<div class="row">
  				<div class="col-md-6 offset-md-6 mt-n4" id="div1Row5Sec10">
  					<h1>A <strong>minha cidade</strong> está <strong>disponível?</strong></h1>
  					<p>A <strong>JUMPER!</strong> abre apenas <strong>12 unidades por ano,</strong> para atender com excelência o novo parceiro.</p>
  					<p>Entre em contato com o nosso consultor e consulte a disponibilidade.</p>
  					<div class="float-right">
  						<button class="botao3Sec10" onclick="$('#footer').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Consultar Disponibilidade</button>
  					</div>
  				</div>
  			</div>

  			<div class="row row6Sec10 justify-content-left">
  				<div class="col-md-5">
  					<h1>Será que <strong>dá certo</strong> uma <strong>JUMPER!</strong> na <strong>minha cidade?</strong></h1>
  					<p>A nossa equipe, fará um estudo de potencial da sua cidade, pois o seu sucesso é o nosso sucesso.</p>

  					<p>Fale com o nosso consultor e solicite o estudo de viabilidade.</p>

  					<div>
  						<button class="botao4Sec10" onclick="$('#footer').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'});">Quero contato</button>
  					</div>
  				</div>
  			</div>

  		</div>
  	</section>

	<section class="namidia">
		<div class='titlenamidia'>
			<img src="<?php bloginfo( 'template_url' ); ?>/images/jumper-na-midia.png" class="mt-5 ml-5" alt="JIMPER NA MÍDIA" title="JIMPER NA MÍDIA">
		</div>
	</section>



	<!-------------------------------------------------------------------------------------------------------------------------------------------
																		*** MODALS ***
	--------------------------------------------------------------------------------------------------------------------------------------------->


	<div class="modal fade modal-video" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl ">
	    <div class="modal-content">
	      <iframe width="1150" height="800" src="https://www.youtube.com/embed/YDuE2CcREMY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto1" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/recepção.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto2" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_0548.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto3" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_3449.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto4" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_4963.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto5" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_4971.jpg">
	    </div>
	  </div>
	</div>


	<div class="modal fade modal-foto6" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl">
	    <div class="modal-content">
	      <img width="1150px" height="800px" src="<?php bloginfo( 'template_url' ); ?>/images/fotos_modal/IMG_5002 (1).jpg">
	    </div>
	  </div>
	</div>


<<!-- style type="text/css">
	.parallax-mirror{
		width: 75% !important;
	}
	.parallax-slider{
		width: 100% !important;
	}
</style> -->

<?php

get_footer();
