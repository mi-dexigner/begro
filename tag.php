<?php 
/**
* tag.php
*
* The template for displaying tag pages.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>

 <?php get_header(); ?>

<?php mi_featured_blog();?>
<!-- start content -->
<div id="primary" class="content-area">

<main id="main" class="site-main">
	<div class="container">
<div class="row">
 <div class="main-content col-md-9">
 	
 	<?php if( have_posts()) : ?>

 		<header class="page-title">
	<h1>
	<?php 
printf( esc_html( 'Tag Archives For &quot; %$s &quot;', "begro"), single_tag_title( '', false ));
	 ?>
	</h1>
<?php 	
// Show an optional category description.
if(tag_description() ){
	echo '<p>' . tag_description() . '</p>';
}

 ?>
 </header>

<?php while( have_posts()) : the_post(); ?>
<?php  get_template_part('template-parts/post/content',get_post_format()); ?>
<?php endwhile; ?>
<?php mi_paging_nav(); ?>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
 </div><!-- end main-content -->

<!-- start sidebar -->

<?php get_sidebar(); ?>

<!-- end of sidebar -->
</div><!-- .row -->
</div><!-- .container -->
</main>	
</div><!-- #primary -->

 <?php get_footer(); ?>