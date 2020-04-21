<?php 
/**
* woocommerce.php
*
* The template for displaying shop pages.
* Package starter-theme Theme
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
<?php woocommerce_content(); ?>
</div>


<!-- end of content -->


<!-- start sidebar -->

<?php get_sidebar(); ?>

<!-- end of sidebar -->
</div><!-- .row -->
</div><!-- .container -->
</main>	
</div><!-- #primary -->


<!-- start footer -->

<?php get_footer(); ?>

<!-- end of footer -->