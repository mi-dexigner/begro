<?php 
/**
* sidebar-topbar.php
*
* The secondary sidebar.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
 ?>
 <?php if(is_active_sidebar('footer-bottom-left-column')):  ?>
 	<div class="column-left col">
 	<?php dynamic_sidebar('footer-bottom-left-column'); ?>
 	</div>
 	<?php endif; ?>
<?php if(is_active_sidebar('footer-bottom-middle-column')):  ?>
 	<div class="column-middle col">
 	<?php dynamic_sidebar('footer-bottom-middle-column'); ?>
 	</div>
<?php endif; ?>
<?php if(is_active_sidebar('footer-bottom-right-column')):  ?>
 		<div class="column-right col">
 	<?php dynamic_sidebar('footer-bottom-right-column'); ?>
 	</div>
 	<?php endif; ?>