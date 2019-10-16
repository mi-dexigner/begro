<?php 
/**
* comments.php
*
* The template for displaying comments.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>

  


  <?php 

  	// IF the post is passord protected, display info text and return.
  	if ( post_password_required() ) :?>

<p>
	<?php 

	esc_html_e( 'This is password protected. Enter the password to view the comments.',"begro");
		return;
	 ?>
</p>
<?php else: ?>
	

<!-- Comments Area -->

<div class="comments-area" id="comments">
	<?php if ( have_comments() ) : ?>
	
<h2 class="commemts-title">
	<?php 
	  $str = esc_html(get_the_title());
	  printf("One reply on %s.",$str); 
	  ?>

</h2>

<ol class="comments">
	<?php  wp_list_comments() ?>
</ol>

<?php 

// If the comments are paginated, display the controls.
if (get_comment_pages_count() > 1 && get_option( 'page_comments') ) : ?>

<nav class="comment-nav" role="navigation">
<p class="comment-nav-prev">
	<?php 

previous_comments_link( __( '&larr; Older Comments',"begro"));
	 ?>
</p>	

<p class="comment-nav-next">
	<?php 
next_comments_link( __( 'Newer Comments &rarr;',"begro"));
	 ?>
</p>
</nav><!-- end comment-nav -->
<?php endif; ?>

<?php 

// If the commens are closed, display an info text.
if( ! comments_open() && get_comments_number() ):
 ?>

<p class="no-comments">
	
	<?php 

	esc_html_e( ' Comments are closed.', "begro");

	 ?>
</p>
<?php endif; ?>
<?php endif; ?>

<?php comment_form(); ?>
</div>
<!-- end comments-area -->
  	<?php endif; ?>

   