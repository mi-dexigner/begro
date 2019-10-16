<?php
/**
* content-gallery.php
*
* The default template for displaying post with the Gallery post format.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
?>

<article id="post-<?php the_ID();?>" <?php post_class( 'mi-format-gallery' ); ?>>


<!-- Article header -->

<header class="entry-header">
		
		<?php if( mi_get_attachment() ): ?>
			
			<div id="post-gallery-<?php the_ID(); ?>" class="carousel slide mi-carousel-thumb" data-ride="carousel">
				
				<div class="carousel-inner" role="listbox">
					
					<?php 
						
						$attachments = mi_get_bs_slides( mi_get_attachment(7) );
						foreach( $attachments as $attachment ):
					?>
					
						<div class="carousel-item<?php echo esc_url($attachment['class']); ?> background-image standard-featured" style="background-image: url( <?php echo esc_url($attachment['url']); ?> );">
							
							<div class="hide next-image-preview" data-image="<?php echo esc_url($attachment['next_img']); ?>"></div>
							<div class="hide prev-image-preview" data-image="<?php echo esc_url($attachment['prev_img']); ?>"></div>
							
							<div class="entry-excerpt image-caption">
								<p><?php echo esc_url($attachment['caption']); ?></p>
							</div>
							
						</div>
					
					<?php endforeach; ?>
					
				</div><!-- .carousel-inner -->
				
				<a class="carousel-control-prev carousel-control" href="#post-gallery-<?php the_ID(); ?>" role="button" data-slide="prev">
					<div class="table">
						<div class="table-cell">
							
							<div class="preview-container">
								<span class="thumbnail-container background-image"></span>
								<span class="icofont-curved-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</div><!-- .preview-container -->
							
						</div><!-- .table-cell -->
					</div><!-- .table -->
				</a>
				<a class="carousel-control-next carousel-control" href="#post-gallery-<?php the_ID(); ?>" role="button" data-slide="next">
					<div class="table">
						<div class="table-cell">
							
							<div class="preview-container">
								<span class="thumbnail-container background-image"></span>
								<span class="icofont-curved-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</div><!-- .preview-container -->
							
						</div><!-- .table-cell -->
					</div><!-- .table -->
				</a>
				
			</div><!-- .carousel -->
			
		<?php endif; ?>
		
		<?php the_title( '<h2 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h2>'); ?>
		
		<div class="entry-meta">
			<?php echo esc_url_raw(mi_posted_meta(),"begro"); ?>
		</div>
		
</header> <!-- end entry-header -->

<!-- Article Content -->
<div class="entry-content">
		
		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>
		
		<div class="button-container text-center">
			<a href="<?php the_permalink(); ?>" class="btn btn-sunset"><?php esc_html_e( 'Read More',"begro" ); ?></a>
		</div>
		
</div><!-- end entry-content -->

<!-- Article Footer -->
<footer class="entry-footer">
		<?php echo esc_url_raw(mi_posted_footer(),"begro"); ?>
</footer><!-- end entry-footer -->
</article>