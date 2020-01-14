<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JUMPER_Franquias
 */

get_header();
?>

<style>
    

    #content{
        margin-bottom:25%;
    }
</style>

<div class="container-fluid" style="margin-top: 10%;">
    <div class="container">

        <?php get_sidebar();?>
        
        <div class="row contentBlogRow float-left">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators carousel-indicatorsEdit">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">


                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    );

                    $cont = 0;

                    $post_query = new WP_Query($args);

                    if ($post_query->have_posts()) : 
                    ?>
                        <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>

                        <?php if ($cont == 0) { ?>
                        
                            <div class="carousel-item active">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('1920x500'); ?></a>
                                
                                <div class="carousel-caption d-none d-md-block caroulserDescription">
                                    <h5><a href="<?php the_permalink();?>" style="text-decoration:none; color:#fff;" ><?php the_title(); ?></a></h5>
                                    <?php $content = the_excerpt();  ?>
                                </div>
                            </div>

                        <?php }else{?>
                            <div class="carousel-item">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('1920x500'); ?></a>
                                
                                <div class="carousel-caption d-none d-md-block caroulserDescription">
                                    <h5><a href="<?php the_permalink();?>" style="text-decoration:none; color:#fff;" ><?php the_title(); ?></a></h5>
                                    <?php $content = the_excerpt();  ?>
                                </div>
                            </div>
                        <?php }?>

                        <?php $cont++; endwhile; ?> 
                <?php endif;?>


                  
                  
                  <!-- <div class="carousel-item">
                    <img class="d-block w-100" src="<?php bloginfo( 'template_url' ); ?>/images/p5/bg-s5.png" alt="First slide">

                    <div class="carousel-caption d-none d-md-block caroulserDescription">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php bloginfo( 'template_url' ); ?>/images/p5/bg-s5.png" alt="First slide">

                    <div class="carousel-caption d-none d-md-block caroulserDescription">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                  </div> -->

                </div>
                <a class="carousel-control-prev carouselFlecha" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next carouselFlecha" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            
            



            <!-- <div class="col-6 blogPostList pr-4">
                <img class="float-left" src="<?php bloginfo( 'template_url' ); ?>/images/jumper.jpg"  width="365px" height="215px">
                <div class="blogPostText" >
                    <h1>6 Motivos para bombar o currículo ao fazer cursos profissionalizantes</h1>
                    <p>Qualificação! Essa palavra é a chave para a porta de entrada no mercado de trabalho atual. Mesmo sem experiência, se...</p>
                </div>
                
            </div>

            <div class="col-6 blogPostList pl-4">
                <img class="float-right" src="<?php bloginfo( 'template_url' ); ?>/images/jumper.jpg"  width="365px" height="215px">
                <div class="blogPostText">
                    <h1>6 Motivos para bombar o currículo ao fazer cursos profissionalizantes</h1>
                    <p>Qualificação! Essa palavra é a chave para a porta de entrada no mercado de trabalho atual. Mesmo sem experiência, se...</p>
                </div>
            </div> -->

            

        </div>

        <div class="row contentBlogRow float-left " id="content-button">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                );

                $cont = 0;

                $post_query = new WP_Query($args);

                if ($post_query->have_posts()) : 
            ?>
                    <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                        <?php if ($cont % 2 == 0) { ?>

                            <article class="col-6 blogPostList pr-4" id="post-list">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('420x240'); ?></a>
                                <div class="blogPostText" >                                    
                                    <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
                                    <?php $content = the_excerpt(); ?>
                                </div>
                            </article>
                            
                        <?php } else {?>

                            <article class="col-6 blogPostList pl-4" id="post-list">
                                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('420x240'); ?></a>
                                <div class="blogPostText" >                                    
                                    <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
                                    <?php $content = the_excerpt(); ?>
                                </div>
                            </article>

                        <?php } $cont++;?>
                    <?php endwhile; ?> 
                <?php endif;?>


                <?php echo do_shortcode('[ajax_load_more id="9064224518" container_type="div" css_classes="row" post_type="post" sticky_posts="true" posts_per_page="2" offset="4" pause="true" images_loaded="true" scroll="false" transition_container="false" button_label="Carregar Mais" button_loading_label="Carregando..."]');?>
                

            <!-- <div class="col-12 btnCarregarMaisPostList text-center mt-5">
                <button class="btn">Carregar Mais</button>
            </div> -->
        </div>


	</div>
</div>



<?php

get_footer();