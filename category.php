<?php
/**
* category.php
*
* The template for displaying category pages.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>

 <?php get_header(); ?>
 <?php inner_banner();?>


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
  printf("Category Archives For &quot;%s&quot;.",single_cat_title( '', false ),'begro');
	 ?>
	</h1>
 </header>

<?php while( have_posts()) : the_post(); ?>
<?php  get_template_part('template-parts/post/content',get_post_format()); ?>
<?php endwhile; ?>
<?php mi_paging_nav(); ?>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
 </div><!-- end main-content -->

 <?php get_sidebar(); ?>
</div><!-- .row -->
</div><!-- .container -->
</main>
</div><!-- #primary -->
 <?php get_footer(); ?>
