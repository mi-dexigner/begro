<?php 

if (!function_exists('mi_main_menu')) :
    /**
     * Main navigation menu
     */
    function mi_main_menu() {
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarCollapse',
            'menu_class'        => 'navbar-nav ml-auto ',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
    }

endif;

 /**
     * Main Featured Blog
     */
if(!function_exists('mi_featured_blog')):
 function mi_featured_blog() { 
 $args_cat = array(
          'include' => '1'
        );
        
        $categories = get_categories($args_cat);
        $count = 0;
        $bullets = '';
        foreach($categories as $category):
          
          if(is_home()){
            $args = array( 
            'type' => 'post',
            'posts_per_page' => 1,
            'category__in' => $category->term_id,
            //'category__not_in' => array( 10 ),
          );
          }else{
            $args = array( 
            'type' => 'page',
            'posts_per_page' => 1,
            'category__in' => $category->term_id,
            //'category__not_in' => array( 10 ),
          );
          }
          
          $featuredBlog = new WP_Query( $args ); 
          
          if( $featuredBlog->have_posts() ):
            
            while( $featuredBlog->have_posts() ): $featuredBlog->the_post();
              $urlImg ='';
            if( has_post_thumbnail() ):
              $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
            else:
                $urlImg = IMAGES.'bannerbg.jpg';
            endif;  ?>
<section class="page-header ">
  <div class="jumbotron text-white " data-imgurl="<?php echo $urlImg; ?>" >
  <div class="container">
    <div class="row">
        <div class="col-md-6 px-0">
          <?php the_title( sprintf('<h1 class="display-4 font-italic"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
          <small><?php the_category(' '); ?></small>
          <?php if(!is_single() && is_home()): ?>
          <p class="lead my-3"><?php the_excerpt(); ?></p>
         <?php endif; ?>
        </div>
        </div>
  </div>
      </div>
</section>
 <?php endwhile;
            
          endif;
          
          wp_reset_postdata();
          
        endforeach;  }
 endif;


/* 
* Inner page banner
*/

if(!function_exists('inner_page_banner')){
  function inner_page_banner(){
    $category = get_category( get_query_var( 'cat' ) );
    @$cat_id = ($category->cat_ID?$category->cat_ID :'');
    $image_id = get_term_meta ( $cat_id, 'category-image-id', true );
   if(class_exists( 'WooCommerce' ) ) :
    if(is_shop()):
            $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );  
            else:
                $urlImg = IMAGES.'bannerbg.jpg';
            endif; 
  else:
  if( has_post_thumbnail() ):
              $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
          elseif( $image_id != ''):
             $urlImg = wp_get_attachment_url( $image_id );
            else:
                $urlImg = IMAGES.'bannerbg.jpg';
            endif;
  endif; 
   ?>
<section class="page-header ">
  <div class="jumbotron text-white background-image" data-imgurl="<?php echo $urlImg; ?>" >
  <div class="container">
    <div class="row">
        <div class="col-md-6 px-0">
          <?php the_title( sprintf('<h1 class="display-4 font-italic"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
        </div>
        </div>
  </div>
      </div>
</section>
  <?php }
}

/*
* Loader 
 */

if(!function_exists('mi_loader')){
function mi_loader(){ ?>
<div id ="mi-loader">
  <div class ="loader6"></div>
</div>
<?php 
}
}
/**
 * Add Welcome message to dashboard
 */
if(!function_exists('mi_starter_reminder')){
function mi_starter_reminder(){
 $theme_page_url = 'https://www.midexigner.com/devs/begro';
$themename = wp_get_theme(); 
 $message = sprintf(__( 'Welcome to %s! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', "begro" ),$themename,
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #0099d3; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
          

}
}
add_action( 'admin_notices', 'mi_starter_reminder' );



if(!function_exists('mi_starter_password_form')){
function mi_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "begro" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "begro" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "begro" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
}
add_filter( 'the_password_form', 'mi_starter_password_form' );

$maintenance = (get_option( 'maintenance_enabled' )?get_option( 'maintenance_enabled' ):'');
if( $maintenance == 1 ){
// Activate WordPress Maintenance Mode
function wp_maintenance_mode() {
    if (!current_user_can('edit_themes') || !is_user_logged_in()) {
         if ( file_exists( get_stylesheet_directory() . '/inc/maintenance.php' ) ) {
            include_once get_stylesheet_directory() . '/inc/maintenance.php';
            die();
        }else{
        wp_die("<h1>Under Maintenance</h1><br />Something ain't right, but we're working on it! Check back later.");
        }
    }
}
add_action('get_header', 'wp_maintenance_mode');
}

// Custom Backend Footer
add_filter('admin_footer_text', 'wp_bootstrap_custom_admin_footer');
function wp_bootstrap_custom_admin_footer() 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.midexigner.com" target="_blank">320press</a></span>. Built using <a href="https://underscores.me/" target="_blank">underscores.me</a>.';
}
// adding it to the admin area
add_filter('admin_footer_text', 'wp_bootstrap_custom_admin_footer');

