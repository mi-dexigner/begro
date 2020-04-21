<?php
 /**
     * Main Primary Navigation Menu
     */
if (!function_exists('mi_main_menu')) :

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
     * Main navigation menu
     */
    if (!function_exists('full_screen_menu')) :

      function full_screen_menu() {
          wp_nav_menu( array(
              'theme_location'    => 'full-screen-menu',
              'depth'             => 1,
              'container'         => 'div',
              'container_class'   => 'e',
              'container_id'      => '',
              'menu_class'        => 'navbar-nav',
          ) );
      }

  endif;
 /**
     * Main Featured Blog
     */



/*
* Inner page banner
*/

if(!function_exists('inner_banner')){
  function inner_banner(){
    $category = get_category( get_query_var( 'cat' ) );
    @$cat_id = ($category->cat_ID?$category->cat_ID :'');
    $image_id = get_term_meta ( $cat_id, 'category-image-id', true );
   if(class_exists( 'WooCommerce' ) ) :
    if(is_shop()):
            $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
            else:
              $urlImg = get_theme_file_uri('img/bannerbg.jpg');
            endif;
  else:
  if( has_post_thumbnail() ):
              $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
          elseif( $image_id != ''):
             $urlImg = wp_get_attachment_url( $image_id );
            else:
              $urlImg = get_theme_file_uri('img/bannerbg.jpg');
            endif;
  endif;
   ?>
<section class="page-header ">
  <div class="jumbotron text-white background-image" data-imgurl="<?php echo $urlImg; ?>" >
  <div class="container">
    <div class="row">
        <div class="col-md-6 px-0">
          <?php the_title( sprintf('<h2 class="banner-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
<?php if(function_exists('mi_breadcrumb')){mi_breadcrumb();} ?>
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
