<article id="post-<?php the_ID();?>" <?php post_class(); ?>>


<!-- Article Content -->
<div class="entry-content">

<?php echo do_shortcode( '[contact_form]', $ignore_html = false ); ?>

</div><!-- end entry-content -->


</article>