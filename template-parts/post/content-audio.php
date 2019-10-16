<?php
/**
* content-audio.php
*
* The default template for displaying post with the Audios post format.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
?>

<article id="post-<?php the_ID();?>" <?php post_class('mi-format-audio'); ?>>


<!-- Article header -->

<header class="entry-header">
		
		<?php the_title( '<h2 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h2>'); ?>
		
		<div class="entry-meta">
			<?php echo esc_url_raw(mi_posted_meta(),"begro"); ?>
		</div>
		
</header> <!-- end entry-header -->

<!-- Article Content -->
<div class="entry-content">
		
		<?php echo esc_html(mi_get_embedded_media( array('audio','iframe') ),"begro"); ?>
		
</div><!-- end entry-content -->

<!-- Article Footer -->
<footer class="entry-footer">
			<?php echo esc_url_raw(mi_posted_footer(),"begro"); ?>
</footer><!-- end entry-footer -->
</article>