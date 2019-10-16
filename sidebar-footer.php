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

 <?php if(is_active_sidebar('footer-one')):  ?>

 	<aside class="sidebar-footer col">
 	<?php dynamic_sidebar('footer-one'); ?>
 	</aside>
<?php endif; ?>
 <?php if(is_active_sidebar('footer-two')):  ?>
 	<aside class="sidebar-footer col">
 	<?php dynamic_sidebar('footer-two'); ?>
 	</aside>
<?php endif; ?>
 <?php if(is_active_sidebar('footer-three')):  ?>
 	<aside class="sidebar-footer col">
 	<?php dynamic_sidebar('footer-three'); ?>
 	</aside>
 	<!-- end of sidebar -->
	 <?php endif; ?>
	 
	 <?php if(is_active_sidebar('footer-four')):  ?>
 	<aside class="sidebar-footer col">
 	<?php dynamic_sidebar('footer-four'); ?>
 	</aside>
 	<!-- end of sidebar -->
 	<?php endif; ?>