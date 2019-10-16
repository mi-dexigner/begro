<?php 
$logo = wp_get_attachment_image_src( get_theme_mod( 'logo_id' ) ,'full');
?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-<?php echo (display_header_text() != 1)?'brand':'text'?>">
	<?php if(display_header_text() != 1): ?>
<?php if($logo !=''): ?>
		<img src="" data-imgurl="<?php echo $logo[0]; ?>" alt="<?php echo bloginfo('name'); ?>">
<?php else:?>
<?php endif; ?>
	<?php else: ?>
	<h1><?php echo bloginfo('name'); ?></h1>
	<small><?php echo bloginfo('description'); ?></small>
	<?php endif; ?>	
	</a>
