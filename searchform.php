<?php 
/**
* searchform.php
*
* The template for displaying search results.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
**/
 ?>
<div class="widget">
 <form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
 	<h5 class="widget-title sr-only"><?php esc_html_e( 'Search', "begro" ); ?></h5>
		<input type="search" class="search-field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', "begro" ); ?>" />
		
		<button type="submit " class="search-submit" name="submit" id="searchsubmit"><i class="fas fasFree fa-search"></i></button>
	</form>
</div>
