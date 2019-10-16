<?php 
/**
* 404.php
*
* The template for displaying 404 pages (Not Found).
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>

 <?php get_header(); ?>

 <div class="main-content d-flex flex-row align-items-center" role='main'>

<div class="container-404 container">
<div class="row d-flex justify-content-center align-items-center">
<h1 class="display-1 d-block"><?php esc_html_e( 'The page you are looking for is not found', "begro"); ?></h1>

</div>
<div class="row d-flex justify-content-center align-items-center">
	<?php get_search_form(); ?>
</div>
</div><!-- end container-404 -->
</div>
</div>
 <?php get_footer(); ?>