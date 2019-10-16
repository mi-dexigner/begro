<?php 
/**
* author.php
*
* The template for displaying author page.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>

 <?php get_header(); ?>



 <div class="main-content col-md-8" role='main'>
 	
 	<?php if( have_posts()) : the_post(); ?>

 		<header class="page-header">
	<h1>
	<?php 
	  printf( esc_html_e( 'All posts by %$s.', "begro" ), get_the_author() ); ?></h1>


<?php 

// If the author bio exists, display it.
if (get_the_author_meta('description')) {
	echo esc_html(the_author_meta('description'), "begro" );
}
 ?>
 <?php rewind_posts(); ?>
 </header>

<?php while( have_posts()) : the_post(); ?>
<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>
<?php mi_paging_nav(); ?>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
 </div><!-- end main-content -->

 <?php get_sidebar(); ?>

 <?php get_footer(); ?>