<?php 
/**
 * sidebar.php
 *
 * Load the widget file
 * Package mid Theme
 * Since 1.0
* Author MI Dexigner : http://www.midexigner.com
* Copyright (c) 2019, MI Dexigner (TM)
* Link http://www.midexigner.com
 */
 ?>
<?php  

if ( ! function_exists( 'mi_widget_init' ) ) {
	function mi_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {
			register_sidebar(
				array(
					'name' => __( 'Topbar Left Column', "begro" ),
					'id' => 'topbar-left-column',
					'description' => __( 'Appears on posts and pages.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
			register_sidebar(
				array(
					'name' => __( 'Top Middle Column', "begro" ),
					'id' => 'topbar-middle-column',
					'description' => __( 'Appears on posts and pages.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
			register_sidebar(
				array(
					'name' => __( 'Top Right Column', "begro" ),
					'id' => 'topbar-right-column',
					'description' => __( 'Appears on posts and pages.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
			register_sidebar(
				array(
					'name' => __( 'Sidebar', "begro" ),
					'id' => 'sidebar',
					'description' => __( 'Appears on posts and pages.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);

			register_sidebar(
				array(
					'name' => __( 'Footer Column One', "begro" ),
					'id' => 'footer-one',
					'description' => __( 'Appears on the footer.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
			register_sidebar(
				array(
					'name' => __( 'Footer Column Two', "begro" ),
					'id' => 'footer-two',
					'description' => __( 'Appears on the footer.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
			register_sidebar(
				array(
					'name' => __( 'Footer Column Three', "begro" ),
					'id' => 'footer-three',
					'description' => __( 'Appears on the footer.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
			register_sidebar(
				array(
					'name' => __( 'Footer Column Four', "begro" ),
					'id' => 'footer-four',
					'description' => __( 'Appears on the footer.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
			register_sidebar(
				array(
					'name' => __( 'Footer Bottom Left Column', "begro" ),
					'id' => 'footer-bottom-left-column',
					'description' => __( 'Appears on posts and pages.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
			register_sidebar(
				array(
					'name' => __( 'Footer Bottom Middle Column', "begro" ),
					'id' => 'footer-bottom-middle-column',
					'description' => __( 'Appears on posts and pages.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
			register_sidebar(
				array(
					'name' => __( 'Footer Bottom Right Column', "begro" ),
					'id' => 'footer-bottom-right-column',
					'description' => __( 'Appears on posts and pages.', "begro" ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
		}
	}

	add_action( 'widgets_init', 'mi_widget_init' );
}
?>
