<?php 
/**
 * template-landing.php
 *
 * Template Name: landing Page
 * Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
 */
?>

 <?php get_header(); ?>

<!-- start content -->
<div id="primary" class="content-area">

<main id="main" class="site-main">
	<div class="container">
<div class="row">

 <div class="main-content">
<?php while( have_posts() ) : the_post(); ?>
	<?php //get_template_part( 'template-parts/content/content', 'contact' ); ?>		
		<?php endwhile; ?>
	</div> <!-- end main-content -->
</div>
</div>
</main>
</div>

<?php get_footer(); ?>