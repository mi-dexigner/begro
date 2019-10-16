<?php
/* 
	* Customizer
	* @link https://developer.wordpress.org/themes/customize-api/
*/

function panel($wp_customize){
    // Header  panel
    $wp_customize->add_panel( 'header_id', array(
                'priority' => 10,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'title' => __( 'Header', 'begro' ),
                ) );
                
            $wp_customize->add_section( 'header_section_id', array(
        
                'priority' => 10,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'title' => __( 'Presets', 'begro' ),
                'description' => 'You can quick change between header presets here. 
                This works best on a fresh install or resetted options. 
                You can safely try new layouts without loosing changes',
                'panel' => 'header_id',
            ) );
/* URL */
            $wp_customize->add_setting( 'url_field_id', array(
                    'default' => '',
                    'type' => 'option',
                    'capability' => 'edit_theme_options',
                    'transport' => '',
                    'sanitize_callback' => 'esc_url',
                ) );
                $wp_customize->add_control( 'url_field_id', array(
                    'type' => 'url',
                    'priority' => 10,
                    'section' => 'header_section_id',
                    'label' => __( 'URL Field', 'begro' ),
                    'description' => '',
                ) );
                /* Email */
                $wp_customize->add_setting( 'email_field_id', array(
                      'default' => '',
                      'type' => 'theme_mod',
                      'capability' => 'edit_theme_options',
                      'transport' => '',
                      'sanitize_callback' => 'sanitize_email',
                  ) );
                  $wp_customize->add_control( 'email_field_id', array(
                      'type' => 'email',
                      'priority' => 10,
                      'section' => 'header_section_id',
                      'label' => __( 'Email Field', 'begro' ),
                      'description' => '',
                  ) );
               /* Password field */
               $wp_customize->add_setting( 'password_field_id', array(
                    'default' => '',
                    'type' => 'theme_mod',
                    'capability' => 'edit_theme_options',
                    'transport' => '',
                    'sanitize_callback' => 'sanitize_text_field',
                ) );
                $wp_customize->add_control( 'password_field_id', array(
                    'type' => 'password',
                    'priority' => 10,
                    'section' => 'header_section_id',
                    'label' => __( 'Password Field', 'begro' ),
                    'description' => '',
                ) );
            /* Textarea Field */ 
            $wp_customize->add_setting( 'textarea_field_id', array(
                  'default' => '',
                  'type' => 'theme_mod',
                  'capability' => 'edit_theme_options',
                  'transport' => '',
                  'sanitize_callback' => 'esc_textarea',
              ) );
             
               
            
              $wp_customize->add_control( 'textarea_field_id', array(
                  'type' => 'textarea',
                  'priority' => 10,
                  'section' => 'header_section_id',
                  'label' => __( 'Textarea Field', 'begro' ),
                  'description' => '',
              ) );
            /* Date Field */
            
            $wp_customize->add_setting( 'date_field_id', array(
                  'default' => '',
                  'type' => 'theme_mod',
                  'capability' => 'edit_theme_options',
                  'transport' => '',
                  'sanitize_callback' => ''
              ) );
             
              $wp_customize->add_control( 'date_field_id', array(
                  'type' => 'date',
                  'priority' => 10,
                  'section' => 'header_section_id',
                  'label' => __( 'Date Field', 'begro' ),
                  'description' => '',
              ) );

              $wp_customize->add_setting( 'range_field_id', array(
                    'default' => '',
                    'type' => 'theme_mod',
                    'capability' => 'edit_theme_options',
                    'transport' => '',
                    'sanitize_callback' => 'intval',
                ) );
                
                $wp_customize->add_control( 'range_field_id', array(
                    'type' => 'range',
                    'priority' => 10,
                    'section' => 'header_section_id',
                    'label' => __( 'Range Field', 'begro' ),
                    'description' => '',
                    'input_attrs' => array(
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                        'class' => 'example-class',
                        'style' => 'color: #0a0',
                    ),
                ) );

                /* logo & Site Identity */
                $wp_customize->add_section( 'title_tagline' , array(
                  'title'		=> __('Logo & Site Identity','mytheme'),
                  'priority'	=> 12,
                  'capability' => 'edit_theme_options',
                  'panel' => 'header_id',
                ));
                $wp_customize->add_setting('logo_id',array(
                  'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
                    'transport'     => 'refresh',
                          'height'        => 180,
                          'width'        => 160,
                        'type' => 'theme_mod', // or 'option'
                        'capability' => 'edit_theme_options',
                      ));
                      $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'logo_id', array(
                        'label' => __( 'Logo' ),
                        'priority' => 10, // Within the section.
                        'description' => __( '' ),
                        'section' => 'title_tagline',
                        'mime_type' => 'image',
                      ) ) );
            /* Top bar */
            $wp_customize->add_section( 'topbar_section_id', array(
                'priority' => 14,
                'capability' => 'edit_theme_options',
                'theme_supports' => '',
                'title' => __( 'Top Bar', 'begro' ),
                'description' => '',
                'panel' => 'header_id',
            ) );
/* Textarea Field */ 
$wp_customize->add_setting( 'enable_top_bar', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'esc_textarea',
) );

 

$wp_customize->add_control( 'enable_top_bar', array(
    'type' => 'checkbox',
    'priority' => 10,
    'section' => 'topbar_section_id',
    'label' => __( 'Enable Top bar', 'begro' ),
    'description' => '',
) );
         /* Header panel end */ 
     
      
         
        
    }   add_action('customize_register','panel');

    function wpse_intval( $value ) {
      return (int) $value;
  }
    // removed preexiting panel
    add_action( "customize_register", "ruth_sherman_theme_customize_register" );
function ruth_sherman_theme_customize_register( $wp_customize ) {

 //=============================================================
 // Remove header image and widgets option from theme customizer
 //=============================================================
 $wp_customize->remove_control("header_image");
 //$wp_customize->remove_panel("title_tagline");
 $wp_customize->remove_section('title_tagline ');
 $wp_customize->remove_section("colors");
 $wp_customize->remove_control("nav_menus");
 $wp_customize->remove_section("background_image");
 $wp_customize->remove_section("static_front_page");

}


?>