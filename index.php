<?php
/**
* index.php
*
* The main template file
* Package begro Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
?>
<?php get_header(); ?>

<?php inner_banner();?>


<!-- start content -->
<div id="primary" class="content-area">

<main id="main" class="site-main">
	<div class="container">
<div class="row">
 <div class="main-content col-md-9 ">
  <div class="mi-posts-container">
<?php  if (have_posts()) :
echo '<div class="page-limit" >';
  while (have_posts()) :the_post();
    /*
              $class = 'reveal';
              set_query_var( 'post-class', $class );
              */
      get_template_part('template-parts/post/content',get_post_format()); ?>
            <?php  endwhile;
            echo '</div>'; ?>
            <!-- post navigation -->
	<?php mi_paging_nav() ?>
            <!-- end of post navigation -->
              <?php  else: ?>
               <?php  get_template_part('template-parts/post/content','none'); ?>
                      <?php endif; ?>
</div><!-- /.mi-posts-container -->

</div><!-- /.container -->


<!-- end of content -->
<?php if ( is_singular() ): wp_enqueue_script( "comment-reply" ); ?>
<?php comments_template(); ?>
<?php endif; ?>

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
