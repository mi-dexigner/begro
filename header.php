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
<?php //mi_loader(); ?>
<header class="header-wrapper">
<?php if(!is_page_template('template-landing.php')):  ?>

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
<nav class="navbar   navbar-light navbar navbar-expand-lg">
		<div class="container header-contents">
			<?php get_template_part( 'template-parts/header/header', 'default' ); ?>

		</div>
	<!-- end of container -->

	</nav><!-- end of nav -->

</div>
	</header>
	<!-- end site-header -->
	<?php if(has_nav_menu('full-screen-menu')):?>
	<div class="full-screen-menu ">
	<div class="data">
               <?php full_screen_menu(); ?>
          </div>
	</div>
	<?php endif; ?>
