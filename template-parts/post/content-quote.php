<?php
/**
* content-quote.php
*
* The default template for displaying post with the quote post format.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'mi-format-quote' ); ?>>
	<header class="entry-header">
		
		<div class="row">
			<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
			
				<h1 class="quote-content"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo esc_url_raw( get_the_content(),"begro" ); ?></a></h1>		
				<?php the_title( '<h2 class="quote-author">- ', ' -</h2>'); ?>
			
			</div><!-- .col-md-8 -->
		</div><!-- .row -->
		
	</header>
	
	<footer class="entry-footer">
		<?php echo esc_url_raw(mi_posted_footer(),"begro"); ?>
	</footer>
	
</article>