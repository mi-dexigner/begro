<?php
/*
	
@package sunsettheme
-- Single Post Template
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<?php the_title( '<h2 class="entry-title">', '</h2>'); ?>
		
		<div class="entry-meta">
			<?php echo esc_url_raw( mi_posted_meta(), "begro" ); ?>
		</div>
		
	</header>
	
	<div class="entry-content clearfix">
		
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php echo  esc_url_raw( mi_posted_footer(), "begro" ) ; ?>
	</footer>
	
</article>
