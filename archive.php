<?php 
/**
* archive.php
*
* The template for displaying archive pages.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>

 <?php get_header(); ?>

 <?php inner_banner();?>

 <div class="main-content col-md-8" role='main'>
 	
 	<?php if( have_posts()) : ?>

 		<header class="page-header">
	<h1>
	<?php 
	if( is_day()){
		printf( esc_html_e('Daily Archives for %$s', "begro"),get_the_date() );
	}elseif( is_month()){
		printf( esc_html_e('Monthly Archives for %$s', "begro"),get_the_date(_x( 'F Y', 'Monthly archives date format', "begro" ) ) );
	}elseif( is_year()){
		printf( esc_html_e('Yearly Archives for %$s', "begro"),get_the_date(_x( 'Y', 'Yearly archives date format', "begro" ) ) );
	}else{
		esc_html_e( 'Archives', "begro");
	}

	 ?>
	</h1>

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