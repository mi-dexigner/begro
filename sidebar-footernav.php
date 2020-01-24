<?php 
/**
* sidebar-footernav.php
*
* The secondary sidebar.
* Package mid Theme
* Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
*/
 ?>
<?php if(has_nav_menu('footer-menu')): ?>

 <div class="site-footer-nav">
 <div class="container">
     <div class="row">
     <div class="col-md-12">
     <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-nav','menu_class'=> 'begro-nav',  ) ); ?>
     
     </div>
     </div>
 </div>
 </div>
<?php endif; ?>