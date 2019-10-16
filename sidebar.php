<?php 
/**
* sidebar.php
*
* The primary sidebar.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/

 ?>

 <?php if(is_active_sidebar('sidebar')):  ?>

 	<aside class="sidebar col-md-3" role="complementary">
 	<?php dynamic_sidebar('sidebar'); ?>

 	</aside>
 	<!-- end of sidebar -->
 	<?php endif; ?>