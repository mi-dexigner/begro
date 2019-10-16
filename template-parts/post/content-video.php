<?php
/**
* content-video.php
*
* The default template for displaying post with the Video post format.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'mi-format-video' ); ?>>

<!-- Article header -->

<header class="entry-header">
		
		<div class="embed-responsive embed-responsive-16by9">
			<?php echo esc_url_raw(mi_get_embedded_media( array('video','iframe') ),"begro"); ?>
		</div>
		
		<?php the_title( '<h2 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h2>'); ?>
		
		<div class="entry-meta">
			<?php echo esc_url_raw(mi_posted_meta(),"begro"); ?>
		</div>
		
</header> <!-- end entry-header -->

<!-- Article Content -->
<div class="entry-content">
		
		<?php if( mi_get_attachment() ): ?>
			
			<a class="standard-featured-link" href="<?php the_permalink(); ?>">
				<div class="standard-featured background-image" style="background-image: url(<?php echo esc_url(mi_get_attachment(),"begro"); ?>);"></div>
			</a>
			
		<?php endif; ?>
		
		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div>
		
		<div class="button-container text-center">
			<a href="<?php the_permalink(); ?>" class="btn btn-sunset"><?php esc_url_raw( 'Read More' ,"begro"); ?></a>
		</div>
		
</div><!-- end entry-content -->

<!-- Article Footer -->
<footer class="entry-footer">
		<?php echo esc_url_raw(mi_posted_footer(),"begro"); ?>
</footer><!-- end entry-footer -->
</article>