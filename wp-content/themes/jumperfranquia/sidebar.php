<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JUMPER_Franquias
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="row sideRow float-right">
            <div class="col-12 divPopularSide">
                <h1>Popular</h1>
            </div>

			<?php
				$args = array(
					'post_type' => 'post',
					'limit' => 5,
					'thumbnail_width' => 120,
					'thumbnail_height' => 95,
					'wpp_start' => '',
					'wpp_end' => '',
					'stats_date' => 1,
					'stats_date_format' => 'd/m/Y',
					'excerpt_length' => 50,
					'taxonomy' => 'post_tag',
					'post_html' => '<div class="col-4">{thumb}</div> <div class="col-8 colPostSide"> <h2>{taxonomy}</h2> <h3>{title}</h3> <p><i class="far fa-calendar-alt"></i> {date}</p> </div>',
				);

				wpp_get_mostpopular($args );
			?>

        <!-- 
                <div class="col-4">
                <img width="120px" height="95px" src="<?php bloginfo( 'template_url' ); ?>/images/jumper.jpg" />
            </div>

			
            <div class="col-8 colPostSide">
                <h2>PROFISSÃO</h2>
                <h3>Conheça aqui as 3 principais profissões promissores</h3>
                <p><i class="far fa-clock"></i> 08/10/2000</p>
            </div>

            <div class="col-4">
                <img width="120px" height="95px" src="#" />
            </div>
            <div class="col-8 colPostSide">
                <h2>PROFISSÃO</h2>
                <h3>Conheça aqui as 3 principais profissões promissores</h3>
                <p><i class="far fa-clock"></i> 08/10/2000</p>
            </div>

            <div class="col-4">
                <img width="120px" height="95px" src="#" />
            </div>
            <div class="col-8 colPostSide">
                <h2>PROFISSÃO</h2>
                <h3>Conheça aqui as 3 principais profissões promissores</h3>
                <p><i class="far fa-clock"></i> 08/10/2000</p>
            </div>

            <div class="col-4">
                <img width="120px" height="95px" src="#" />
            </div>
            <div class="col-8 colPostSide">
                <h2>PROFISSÃO</h2>
                <h3>Conheça aqui as 3 principais profissões promissores</h3>
                <p><i class="far fa-clock"></i> 08/10/2000</p>
            </div>

            <div class="col-4">
                <img width="120px" height="95px" src="#" />
            </div>
            <div class="col-8 colPostSide">
                <h2>PROFISSÃO</h2>
                <h3>Conheça aqui as 3 principais profissões promissores</h3>
                <p><i class="far fa-clock"></i> 08/10/2000</p>
            </div> 
        -->

            <div class="col-12 colRedeSocialSide">
                <a href="https://www.facebook.com/franquiasjumper/" target="_blank"><i class="fab fa-facebook-f"></i></a> <a href="https://www.linkedin.com/company/jumper-franchising" target="_blank"><i class="fab fa-linkedin-in"></i></a> <a href="https://api.whatsapp.com/send?phone=5541996841781&text=Ol%C3%A1,%20tenho%20interesse%20em%20comprar%20uma%20franquia%20JUMPER!" target="_blank"><i class="fab fa-whatsapp"></i></a> <a href="https://www.instagram.com/jumperfranquias/?hl=pt-br" target="_blank"><i class="fab fa-instagram"></i></a> <a href="https://www.youtube.com/channel/UCSuVavA77I71hq1gtIMZ8zA" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>

            <div class="col-12 youtubeSide">
                <h1>Youtube</h1>
            </div>

            <div class="col-12 p-0 videoYoutubeSide">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VEz74uEXtBE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="col-12 facebookSide">
                <h1>Facebook</h1>
            </div>

            <div class="col-12 p-0">
                <div class="fb-page" data-href="https://facebook.com/franquiasjumper/" data-tabs="" data-width="500" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://facebook.com/franquiasjumper/" class="fb-xfbml-parse-ignore"><a href="https://facebook.com/franquiasjumper/">Jumper Franquias</a></blockquote></div>
            </div>
        </div>


