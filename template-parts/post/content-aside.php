<?php
/**
* content-aside.php
*
* The default template for displaying post with the Image post format.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'mi-format-aside' ) ); ?>>

<div class="aside-container">
	
		<div class="row">
			
			<div class="col-xs-12 col-sm-3 col-md-2 text-center">
				
				<?php if( mi_get_attachment() ): ?>
				
					<div class="aside-featured background-image" style="background-image: url(<?php echo esc_url(mi_get_attachment()); ?>);"></div>
					
				<?php endif; ?>
				
			</div><!-- .col-md-2 -->
			
			<div class="col-xs-12 col-sm-9 col-md-10">
				
				<header class="entry-header">	
			
					<div class="entry-meta">
						<?php echo esc_url_raw(mi_posted_meta(),"begro"); ?>
					</div>
					
				</header>
				
				<div class="entry-content">
					
					<div class="entry-excerpt">
						<?php the_content(); ?>
					</div>
					
				</div><!-- .entry-content -->
				
			</div><!-- .col-md-10 -->
			
		</div><!-- .row -->
		
		<footer class="entry-footer">
			
			<div class="row">
				
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
				<?php echo esc_url_raw(mi_posted_footer(),"begro"); ?>
					
				</div><!-- .col-md-10 -->
				
			</div><!-- .row -->
			
		</footer>
		
</div><!-- .aside-container -->
</article>