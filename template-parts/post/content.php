<?php
/**
* content.php
*
* The default template for displaying content
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
?>

<article id="post-<?php the_ID();?>" <?php post_class(); ?> <?php schema(); ?>>


<!-- Article header -->

<header class="entry-header">
		
		<?php the_title( '<h2 class="entry-title" ' . schema('name', false, false) . '><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h2>'); ?>
		<div class="entry-meta">
			<?php esc_url_raw( mi_posted_meta(), "begro" ); ?>
		</div>
</header> <!-- end entry-header -->

<!-- Article Content -->
<div class="entry-content">
		
		<?php if( mi_get_attachment() ): ?>
			
	<a class="standard-featured-link" href="<?php the_permalink(); ?>">
	<div class="standard-featured background-image" <?php schema(false, 'ImageObject'); ?> style="background-image: url(<?php echo esc_url(mi_get_attachment(),"begro"); ?>);"></div>

				<?php the_post_thumbnail(); ?>
			</a>
			
		<?php endif; ?>
		
		<div class="entry-excerpt" <?php schema('caption'); ?>>
			<?php the_content( sprintf(
			__( 'Continue reading %s', 'begro' ),
			the_title( '<span class="screen-reader-text">', '</span>', false )
		) ); ?>
		</div>
		
		<div class="button-container ">
	<a href="<?php esc_url_raw(the_permalink(),"begro"); ?>" class="btn btn-mi"><?php echo esc_html_e( 'Read More',"begro" ); ?></a>
		</div>
		
</div><!-- end entry-content -->

<footer class="entry-footer">
		<?php esc_url_raw(mi_posted_footer(),"begro"); ?>
</footer><!-- end entry-footer -->
</article>