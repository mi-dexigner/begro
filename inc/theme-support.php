<?php
/*
	
@package mitheme
	
	========================
		THEME SUPPORT OPTIONS
	========================
*/
 /**
 * ----------------------------------------------------------------------------------------
 * - Setup the content value based on theme's design.
 * ----------------------------------------------------------------------------------------
 */
if (!isset($content_width)) {
    $content_width = 800;
}

$formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
	add_theme_support( 'post-formats', $formats  );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'woocommerce' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'script', 'style' ) );

if ( ! function_exists( 'begro_excerpt_more' ) && ! is_admin() ) :
    function begro_excerpt_more( $more ) {
        $link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
            esc_url( get_permalink( get_the_ID() ) ),
            /* translators: %s: Name of current post */
            sprintf( __( 'Continue reading %s', 'begro' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
            );
        return ' &hellip; ' . $link;
    }
    add_filter( 'excerpt_more', 'begro_excerpt_more' );
    endif;
function custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


add_theme_support( 'title-tag' );
// Enqueue editor styles.
  add_editor_style( 'style-editor.css' );
  load_theme_textdomain( "begro", get_template_directory() . '/languages' );

function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');
/* Activate Nav Menu Option */

function mi_register_nav_menu(){
    //add_theme_support( 'menus' );
    register_nav_menus(
            array(
                'primary' => __( 'Header Navigation Menu', "begro" ),
                'full-screen-menu' => __( 'Full Screen Navigation Menu', "begro" ),
                'footer-menu' => __( 'Footer Navigation Menu', "begro" )
            )
        );
}
add_action( 'after_setup_theme','mi_register_nav_menu' );

/* Activate HTML5 features */
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));



/*
    ========================
        BLOG LOOP CUSTOM FUNCTIONS
    ========================
*/

function mi_posted_meta()
{
    $posted_on = human_time_diff(get_the_time('U'), current_time('timestamp'));

    $categories = get_the_category();
    $separator = ', ';
    $output = '';
    $i = 1;

    if (!empty($categories)):
        foreach ($categories as $category):
            if ($i > 1): $output .= $separator;
    endif;
    $output .= '<a href="'.esc_url(get_category_link($category->term_id)).'" alt="'.esc_attr('View all posts in%s', $category->name).'">'.esc_html($category->name).'</a>';
    ++$i;
    endforeach;
    endif;

    echo '<span class="posted-on">Posted <a href="'.esc_url(get_permalink()).'">'.$posted_on.'</a> ago</span> / <span class="posted-in">'.$output.'</span>';
}

function mi_posted_footer($onlyComments = false)
{
    $comments_num = get_comments_number();
    if (comments_open()) {
        if ($comments_num == 0) {
            $comments = __('No Comments',"begro");
        } elseif ($comments_num > 1) {
            $comments = $comments_num.__(' Comments',"begro");
        } else {
            $comments = __('1 Comment',"begro");
        }
        $comments = '<a class="comments-link small text-caps" href="'.get_comments_link().'">'.$comments.' <span class="icofont-comment"></span></a>';
    } else {
        $comments = __('Comments are closed',"begro");
    }

    if ($onlyComments) {
        echo $comments;
    }

    echo  '<div class="post-footer-container"><div class="row"><div class="col-xs-12 col-sm-6">'.get_the_tag_list('<div class="tags-list"><span class="icofont-tag"></span>', ' ', '</div>').'</div><div class="col-xs-12 col-sm-6 text-right">'.$comments.'</div></div></div>';
}

function mi_get_attachment($num = 1)
{
    $output = '';
    if (has_post_thumbnail() && $num == 1):
        $output = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); else:
        $attachments = get_posts(array(
            'post_type' => 'attachment',
            'posts_per_page' => $num,
            'post_parent' => get_the_ID(),
        ));
    if ($attachments && $num == 1):
            foreach ($attachments as $attachment):
                $output = wp_get_attachment_url($attachment->ID);
    endforeach; elseif ($attachments && $num > 1):
            $output = $attachments;
    endif;

    wp_reset_postdata();

    endif;

    return $output;
}

function mi_get_embedded_media($type = array())
{
    $content = do_shortcode(apply_filters('the_content', get_the_content()));
    $embed = get_media_embedded_in_content($content, $type);
    if (in_array('audio', $type)):
        $output = str_replace('?visual=true', '?visual=false', $embed[0]); 
    else:
        echo $output = (($embed[0])?$embed[0]:'');
    endif;

    return $output;
}

function mi_get_bs_slides($attachments)
{
    $output = array();
    $count = count($attachments) - 1;

    for ($i = 0; $i <= $count; ++$i):

        $active = ($i == 0 ? ' active' : '');

    $n = ($i == $count ? 0 : $i + 1);
    $nextImg = wp_get_attachment_thumb_url($attachments[$n]->ID);
    $p = ($i == 0 ? $count : $i - 1);
    $prevImg = wp_get_attachment_thumb_url($attachments[$p]->ID);

    $output[$i] = array(
            'class' => $active,
            'url' => wp_get_attachment_url($attachments[$i]->ID),
            'next_img' => $nextImg,
            'prev_img' => $prevImg,
            'caption' => $attachments[$i]->post_excerpt,
        );

    endfor;

    return $output;
}

function mi_grab_url()
{
  /*  if (!preg_match('/<a\s[^>]*?href=[\'"](.+?)[\'"]/i', get_the_content(), $links)) {
        return false;
    }
//var_dump($links);
    return $links[1];*/
}

function mi_grab_current_uri()
{
    $http = (isset($_SERVER['HTTPS']) ? 'https://' : 'http://');
    $referer = $http.$_SERVER['HTTP_HOST'];
    $archive_url = $referer.$_SERVER['REQUEST_URI'];

    return $archive_url;
}

/*
    ========================
        SINGLE POST CUSTOM FUNCTIONS
    ========================
*/
function mi_post_navigation()
{
    $nav = '<div class="row">';

    $prev = get_previous_post_link('<div class="post-link-nav"><span class="icofont-curved-left" aria-hidden="true"></span> %link</div>', '%title');
    $nav .= '<div class="col-xs-12 col-sm-6">'.$prev.'</div>';

    $next = get_next_post_link('<div class="post-link-nav">%link <span class="icofont-curved-right" aria-hidden="true"></span></div>', '%title');
    $nav .= '<div class="col-xs-12 col-sm-6 text-right">'.$next.'</div>';

    $nav .= '</div>';

    return $nav;
}



function mi_get_post_navigation()
{
    if (get_comment_pages_count() > 1 && get_option('page_comments')):

        require get_template_directory().'/inc/templates/sunset-comment-nav.php';

    endif;
}


// Initialize global Mobile Detect
function mobileDetectGlobal() {
    global $detect;
    $detect = new Mobile_Detect;
}

add_action('after_setup_theme', 'mobileDetectGlobal');

/**
 * ----------------------------------------------------------------------------------------
 * 5.0 - Display meta information for a specific post.
 * ----------------------------------------------------------------------------------------
 */
if(! function_exists('mi_post_meta')){
    function mi_post_meta(){
        echo '<ul class="list-inline entry-meta">';
        if(get_post_type()==='post'){
            // If the post is sticky, mark it.

            if(is_sticky()){
                echo '<li class="meta-featured-post list-inline-item"><i class="fa fa-thumb-tack"></i> '. __('Sticky',"begro").'</li>';
            }
            //  Get the post author
            printf(
                '<li class="meta-author list-inline-item"><a href="%1$s" rel="author">%2$s</a></li>',
                esc_url(get_author_posts_url(get_the_author_meta('ID'))),
                get_the_author()
                );

            // Get the date.
            echo '<li class="meta-date list-inline-item">'. get_the_date() .'</li>';

            // The Categories
            $Categories_list = get_the_category_list(', ');
            if($Categories_list){

                echo '<li class="meta-categories list-inline-item">'. $Categories_list  .'</li>';
            }

            // The Tags
            $tag_list = get_the_tag_list('', ', ');
            if($tag_list){

                echo '<li class="meta-tags list-inline-item">'. $tag_list  .'</li>';
            }

            // comment link
            if(comments_open()):
                echo '<li class="list-inline-item">';
                echo '<span>';
                comments_popup_link(__('leve a comments',"begro"),__('One Comment so far',"begro"),__('View all % comments',"begro"));
                echo '</span>';
                echo '</li>';

                endif;

                // Edit Link
                if(is_user_logged_in()){
                    echo '<li class="list-inline-item">';
                    edit_post_link(__('Edit',"begro"),'<span class="meta-edit">','</span>');
                    echo '</li>';
                }

        }
        echo '</ul>';
    }

}






/**
 * ----------------------------------------------------------------------------------------
 * 6.0 - Display navigation to the next/previous set of post.
 * ----------------------------------------------------------------------------------------
 */

if(!function_exists('mi_paging_nav')){
    function mi_paging_nav(){

        /**/$defaults = array(
        'before'           => '<p>' . __( 'Pages:', "begro" ),
        'after'            => '</p>',
        'link_before'      => '',
        'link_after'       => '',
        'next_or_number'   => 'number',
        'separator'        => ' ',
        'nextpagelink'     => __( 'Next page', "begro"),
        'previouspagelink' => __( 'Previous page', "begro" ),
        'pagelink'         => '%',
        'echo'             => 1
    );
 
        wp_link_pages( $defaults );
        ?>
   <!-- <ul class="list-inline">
       <?php if (get_previous_posts_link()):?>
   <li class="next list-inline-item">
       <?php previous_posts_link(__('Newer Posts &rarr;',"begro")); ?>
   </li>
   <?php endif; ?>
   
       <?php if (get_next_posts_link()):?>
   <li class="previous list-inline-item">
       <?php next_posts_link(__(' &larr; older Posts',"begro")); ?>
   </li>
   <?php endif; ?>
   
   </ul>  -->
    <?php
    }
}


if (!function_exists('mi_validate_length')) {
    function mi_validate_length($fieldValue, $minLength){
        // First, remove trailing and leading whitespace
        return(strlen( trim( $fieldValue ) ) > $minLength);
    }
}
