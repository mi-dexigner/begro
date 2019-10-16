<?php 
/**
* page.php
*
* The template for displaying all pages.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>
 <?php get_header();  ?>
<?php inner_page_banner();?>
<!-- start content -->
<div id="primary" class="content-area">

<main id="main" class="site-main">
	<div class="container">
<div class="row">
 <div class="main-content col-md-9">
<?php  if (have_posts()) : while (have_posts()) :the_post();?>
    <?php  get_template_part('template-parts/page/content','page'); ?>
            <?php  endwhile; ?>
  <?php endif; ?>


<!-- end article -->
</div><!-- end main-content -->

<!-- start sidebar -->

<?php get_sidebar(); ?>

<!-- end of sidebar -->
</div><!-- .row -->
</div><!-- .container -->
</main>	
</div><!-- #primary -->

<?php get_footer(); ?>