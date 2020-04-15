<?php
/*
	* Customizer
	* @link https://developer.wordpress.org/themes/customize-api/
*/


add_action('customize_register', 'customerOption');
function customerOption($wp_customize)
{
	//  Site Identity replace to Logos
$wp_customize->add_section( 'title_tagline' , array(
  'title' => "Logo",
   'priority' => 20 // priority set
) );

    $wp_customize->add_setting('logo_id',array(
  'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
	'transport'     => 'refresh',
        'height'        => 180,
        'width'        => 160,
    	'type' => 'theme_mod', // or 'option'
      'capability' => 'edit_theme_options',
      'sanitize_callback' =>'sanitize_text'
    ));
$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'logo', array(
  'label' => esc_html__( 'Logo', 'begro' ),
  'priority' => 22, // Within the section.
  'description' =>'',
  'section' => 'title_tagline',
  'mime_type' => 'image',
    'settings' => 'logo_id',
) ) );

//  add Section Contact Information
$wp_customize->add_section('contact_information', [
     'title' => 'Contact Information',// Section name
       'priority' => 21 // priority set
]);
//  add Setting Contact Information - email
 $wp_customize->add_setting('email',
 array(
  	'default' => 'info@example.com', // Set default value for this setting
  	'capability' => 'edit_theme_options',
  	'sanitize_callback' =>'sanitize_text'
 ));

 //  add Setting Contact Information - phone
 $wp_customize->add_setting('phone',array(
  	'default' => '+1-604-555-0110', // Set default value for this setting
    'capability' => 'edit_theme_options',
    'type' => 'theme_mod', // or 'option'
  	'sanitize_callback' =>'sanitize_text'
 ));
 //  add Setting Contact Information - address
 $wp_customize->add_setting('address',array(
  	'default' => '', // Set default value for this setting
    'capability' => 'edit_theme_options',
    'type' => 'theme_mod', // or 'option'
  	'sanitize_callback' =>'sanitize_text'
 ));
 //  add Setting Contact Information - website
 $wp_customize->add_setting('website',array(
  	'default' => 'example.com', // Set default value for this setting
    'capability' => 'edit_theme_options',
    'type' => 'theme_mod', // or 'option'
  	'sanitize_callback' =>'sanitize_text'
 ));

/* add control  Contact Information - email */
$wp_customize->add_control('email_id', array(
    	 'type' => 'email',
    	 'priority' => 1, // Within the section.
        'section' => 'contact_information', // Required, core or custom.
        'label' => esc_html__( 'Email Address', 'begro' ),
	'description' => '',
	'input_attrs' => array('class' => '','style' => '',
    'placeholder' =>  esc_html__( 'Email Address', 'begro' ),
  ),
        'settings' => 'email',   // Connect form field  setting section

    ));

     /* add control  Contact Information - email */
$wp_customize->add_control('phone_id', array(
    	 'type' => 'text',
    	 'priority' => 1, // Within the section.
        'section' => 'contact_information', // Required, core or custom.
        'label' =>  esc_html__( 'Phone Number', 'begro' ),
	'description' => '',
	'input_attrs' => array('class' => '','style' => '',
    'placeholder' =>  esc_html__( '+1-604-555-0110', 'begro' ),
  ),
        'settings' => 'phone',   // Connect form field  setting section

    ));
     /* add control  Contact Information - address */
$wp_customize->add_control('address_id', array(
    	 'type' => 'textarea',
    	 'priority' => 1, // Within the section.
        'section' => 'contact_information', // Required, core or custom.
        'label' => esc_html__( 'Address', 'begro' ),
	'description' => '',
	'input_attrs' => array('class' => '','style' => '',
    'placeholder' =>  esc_html__( 'Address', 'begro' ),
  ),
        'settings' => 'address',   // Connect form field  setting section

    ));

       /* add control  Contact Information - website */
$wp_customize->add_control('website_id', array(
    	 'type' => 'url',
    	 'priority' => 1, // Within the section.
        'section' => 'contact_information', // Required, core or custom.
        'label' =>  esc_html__( 'Website', 'begro' ),
	'description' => '',
	'input_attrs' => array('class' => '','style' => '',
    'placeholder' =>  esc_html__( 'Website', 'begro' ),
  ),
        'settings' => 'website',   // Connect form field  setting section

    ));



}
/* sanitize function text*/
function sanitize_text($title) {
	return htmlspecialchars($title);
}


?>
