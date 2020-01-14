<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JUMPER_Franquias
 */

get_header();
?>

<style>
    

    #content{
        margin-bottom:25%;
	}
	
	.contentBlogRow p{
		font-size: 18px;
	}

	@media only screen and (max-width: 1440px) and (min-width: 1367px){
		.contentBlogRow p{
			font-size: 16px;
		}
	}

	@media only screen and (max-width: 1366px) and (min-width: 1281px){
		.contentBlogRow p{
			font-size:14px;
		}
	}
	

	@media only screen and (max-width: 1280px) and (min-width: 1153px){
		.contentBlogRow p {
			font-size: 14px;
		}
	}

	@media only screen and (max-width: 1152px) and (min-width: 1025px){
		.contentBlogRow p {
			font-size: 13px;
		}
	}

	@media only screen and (max-width: 1024px) and (min-width: 768px){
		.contentBlogRow p {
			font-size: 10px;
		}
	}

	
</style>

<div id="primary" class="content-area container-fluid" style="margin-top: 10%;">
	<div id="main" class="site-main container">
		
		<?php get_sidebar(); ?>

		<div class="row contentBlogRow float-left">
			<?php
				while ( have_posts() ) :
					the_post();
					?>
						<span class="spanImgSinglePost"><?php the_post_thumbnail('1920x500');?></span>
						<h1 class="singlePostTitle"><?php the_title(); ?></h1>
					<?php

					the_content();
				endwhile; // End of the loop.
			?>
		</div>

	</div><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
