<?php 
/**
* header.php
*
* The header of the theme.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
 ?>
 <!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
<?php mi_loader(); ?>
<header class="header-wrapper">
<?php if(!is_page_template('template-landing.php')): 
	

?>

<!-- // being top bar -->
<?php if(is_active_sidebar('topbar-left-column')):  ?>
<div id="top-bar">
	<div class="container">
		<div class="row">
			<?php get_sidebar('topbar'); ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endif; ?>
<!-- // end top bar -->
	<!-- header -->
<div class="header-sticky site-header" <?php echo (header_image() != '' ? 'data-imgurl="header_image()"' : ''); ?>>
<nav class="navbar   navbar-light navbar navbar-expand-md">
		<div class="container header-contents">
			
        <div class="site-logo">
        <?php get_template_part( 'template-parts/header/content', 'branding' ); ?>
		
		</div>
					<!-- end of site-logo -->
					<?php if(has_nav_menu('primary')):?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
				</button>
<?php endif; ?>
<?php if(has_nav_menu('full-screen-menu')):?>
				 <div class="toggle-btn">
          <span class="one"></span>
					<span class="two"></span>
					<span class="three"></span>
		 </div>
		 <?php endif; ?>
        <div class="site-navigation ml-md-auto" role="navigation">
				<?php if(has_nav_menu('primary')):?>
				<?php mi_main_menu(); ?>
				<?php endif; ?>
			
	</div>
		</div>
	<!-- end of container -->
	
	</nav><!-- end of nav -->
	
</div>
	</header>
	<!-- end site-header -->
	<?php if(has_nav_menu('full-screen-menu')):?>
	<div class="full-screen-menu ">
	<div class="data">
               <ul>
                    <li>Navigation</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Story</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
               </ul>
          </div>
	</div>
	<?php endif; ?>


	

