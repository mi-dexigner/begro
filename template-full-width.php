<?php 
/**
 * template-full-width.php
 *
 * Template Name: Full Width Page
 * The Full-Width template is used to create regular pages without a sidebar
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
 */
 ?>
 <?php get_header();  ?>
<!-- start content -->
<div id="primary" class="content-area">

<main id="main" class="site-main">
	<div class="container-fluid">
<div class="row">

<?php  if (have_posts()) : while (have_posts()) :the_post();?>
    <?php  get_template_part('template-parts/page/content','full-width'); ?>
            <?php  endwhile; ?>
              <?php  else: ?>
               <?php  get_template_part('template-parts/post/content','none'); ?>
                      <?php endif; ?>

<!-- end of content -->
</div> <!-- .row -->
</div><!-- .container-fluid -->
</main>	
</div><!-- #primary -->

<?php get_footer(); ?>