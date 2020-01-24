<div class="site-logo">
<?php get_template_part( 'template-parts/header/content', 'branding' ); ?>

</div>
  <!-- end of site-logo -->
  <?php if(has_nav_menu('primary')):?>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon">
<i></i>
<i></i>
<i></i>
</span>
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
