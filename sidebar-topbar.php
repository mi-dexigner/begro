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
 <?php if(is_active_sidebar('topbar-left-column')):  ?>
 	<div class="column-left col text-md-left text-center">
 	<?php dynamic_sidebar('topbar-left-column'); ?>
 	</div>
 	<?php endif; ?>
<?php if(is_active_sidebar('topbar-middle-column')):  ?>
 	<div class="column-middle col">
 	<?php dynamic_sidebar('topbar-middle-column'); ?>
 	</div>
<?php endif; ?>
<?php if(is_active_sidebar('topbar-right-column')):  ?>
 		<div class="column-right col text-md-right text-center">
 	<?php dynamic_sidebar('topbar-right-column'); ?>
 	</div>
 	<?php endif; ?>