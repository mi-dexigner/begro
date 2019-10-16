<?php
/**
* content-image.php
*
* The default template for displaying post with the Image post format.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
?>

<article id="post-<?php the_ID();?>" <?php post_class(); ?>>


<!-- Article header -->

<header class="entry-header background-image" style="background-image: url(<?php echo esc_url(mi_get_attachment()); ?>);">
		
		<?php the_title( '<h2 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h2>'); ?>
		
		<div class="entry-meta">
			<?php echo esc_url_raw(mi_posted_meta(),"begro"); ?>
		</div>
		
		<div class="entry-excerpt image-caption">
			<?php the_excerpt(); ?>
		</div>
		
</header> <!-- end entry-header -->



<!-- Article Footer -->
<footer class="entry-footer">
		<?php echo esc_url_raw(mi_posted_footer(),"begro"); ?>
</footer><!-- end entry-footer -->
</article>