<?php 
/**
* single.php
*
* The template for displaying single posts.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>


 <?php get_header();  ?>
<?php mi_featured_blog();?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div class="container">
				<div class="row">
					
					<div class="col-md-9 ">
					
						<?php 
							
							if( have_posts() ):
								
								while( have_posts() ): the_post();
									
		get_template_part( 'template-parts/post/single', get_post_format() );
									
									echo esc_url_raw(mi_post_navigation(),"begro");
									
									if ( comments_open() ):
										comments_template();
									endif;
								
								endwhile;
								
							endif;
		                
						?>
						
					</div><!-- .col-xs-12 -->
				<?php get_sidebar(); ?>
				</div><!-- .row -->
			</div><!-- .container -->
			
			
		</main>
</div><!-- #primary -->



<?php get_footer(); ?>