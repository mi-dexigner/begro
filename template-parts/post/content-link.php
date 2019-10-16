<?php
/**
* content.php
*
* The default template for displaying post with the Link post format.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'mi-format-link' ); ?>>
	
	<header class="entry-header">
		<?php 
			//$link = esc_url_raw( mi_grab_url(),"begro");
			//the_title( '<h2 class="entry-title"><a href="' . $link . '" target="_blank">', '<div class="link-icon"><span class="mi-icon mi-link"></span></div></a></h2>'); 
		the_title( '<h2 class="entry-title">','</h2>');
		?>
		
	</header>
<!-- end entry-footer -->
</article>