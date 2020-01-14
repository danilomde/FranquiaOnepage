<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JUMPER_Franquias
 */
?>
	</div><!-- #content -->

	<footer id="footer" class="site-footer">
		<div class="row boxfooter">
			<div class="col-md-6 col-offset-3 callfooter ">

				<h2><strong>Multiplique</strong> <span> o seu </span> <strong class="bigstrong">dinheiro</strong></h2>

			</div>

			
			<div class="col-md-12 footerLucre15Mil">
				

				<div id="divAjusteFooter">
					<h2>Lucre R$ <strong> <span id="span15">15</span> Mil</strong></h2>

					<div class="text-center footerLucreAjuste">
						<div>
							<h3>Mensal</h3>
							<span>*a partir do 6º mês</span>
						</div>
						
					</div>	
				</div>
				
				<div class="text-center divBotaoFooterContato">
					<button class="botaoFooterContato">Quero Contato</button>
				</div>
				
			</div>

			<!-- <div class="col-md-5 cashman">
				<img  class="" src="<?php bloginfo( 'template_url' ); ?>/images/footer-img2.png">
			</div>	 -->

			
		</div>
		
		<div class="row" id="row2Footer">
			<div class="col-md-6" >
				<div class="box" style="    background-color: black; min-height: 500px;">
					<iframe width="1150" height="500" src="https://www.youtube.com/embed/tFWcekMtn0I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>

			<div class="col-md-6">

				<div class="col-md-12 text-center">
					<h1>Vamos Conversar?</h1>
				</div>

				<div class="col-md-6 offset-md-3 text-center">
					<h2 id="h2FooterAjuste">Preencha o formulário que entraremos em contato.</h2>
				</div>
			
				
				<?php echo  do_shortcode('[contact-form-7 id="14330" title="Contato" html_id="formularioFooter"]') ?>

			</div>
		</div>

		<div class="row" id="row3Fotter">
			<div class="col-md-12 text-center">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/footer-wpp.png" width="25" height="25">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/footer-face.png" width="25" height="25">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/footer-insta.png" width="25" height="25">
				<span>@ Jumper! Profissões e Idiomas 2019</span>
			</div>
		</div>
	</footer><!-- #colophon -->







</div><!-- #page -->


<a href="https://api.whatsapp.com/send?phone=5541996841781&text=Ol%C3%A1,%20tenho%20interesse%20em%20comprar%20uma%20franquia%20JUMPER!" class="btnwhats animated bounceInDown delay-2s	 " target="_blank">
	<img src="<?php bloginfo( 'template_url' ); ?>/images/whats.png">
</a>

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
<script src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js"></script>

<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/bcd8c251-7680-4f5f-8ee5-caa79b5374ff-loader.js" ></script>



</body>
</html>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71266454-6"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-71266454-6');
</script>
