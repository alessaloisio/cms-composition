<?php

  /**
   * Proper way to enqueue scripts and styles.
   */
	function register_my_menu() {
		register_nav_menu('additional-menu',__( 'Additional Menu' ));
	}
	add_action( 'init', 'register_my_menu' );
  function wpdocs_theme_name_scripts() {
      // wp_enqueue_style( 'style-name', get_stylesheet_uri() );
      wp_enqueue_style( 'style-name', get_template_directory_uri() . '/assets/css/style.css' );
      wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bundle.js', array(), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
  add_theme_support( 'post-thumbnails' );// !posts

  // Ajout upload format SVG
  function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
  }
  add_action('upload_mimes', 'add_file_types_to_uploads');

  //  Récupérer add page pour settings global / header et footer
  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title' 	=> 'Theme General Settings',
      'menu_title'	=> 'Theme Settings',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));
    
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Theme Header Settings',
      'menu_title'	=> 'Header',
      'parent_slug'	=> 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Theme Footer Settings',
      'menu_title'	=> 'Footer',
      'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
      'page_title' 	=> 'Theme Architecture Settings',
      'menu_title'	=> 'Architecture',
      'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
      'page_title' 	=> 'Theme Magasin Settings',
      'menu_title'	=> 'Magasin',
      'parent_slug'	=> 'theme-general-settings',
    ));
    
  }

  // ajout nouvelle taille image
  add_image_size('size_1500x1250', 1500, 1250, true);

  // ajout espace <br>
  add_shortcode ( 'diviseur', 'shortcode_insert_divider');
  function shortcode_insert_divider () {
    return '<div class="diviseur"></div>';
  }

  //  Récupérer add page pour settings global / header et footer
  if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
      'page_title' 	=> 'Theme General Settings',
      'menu_title'	=> 'Theme Settings',
      'menu_slug' 	=> 'theme-general-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));
    
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Theme Header Settings',
      'menu_title'	=> 'Header',
      'parent_slug'	=> 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
      'page_title' 	=> 'Theme Footer Settings',
      'menu_title'	=> 'Footer',
      'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
      'page_title' 	=> 'Theme Timeline Settings',
      'menu_title'	=> 'Timeline',
      'parent_slug'	=> 'theme-general-settings',
    ));
    
  }

  // Add advanced forms
  function register_form() {
    $form = array(
        'title' => 'Formulaire de contact',
        'key' => 'form_5da596a009fdd',
        'display' => array(
            'description' => '',
            'success_message' => '',
        ),
        'create_entries' => false,
        'restrict_entries' => false,
        'entries_limit' => 0,
        'entries_restriction_message' => '',
    );
    
    af_register_form( $form );
  }
  add_action( 'af/register_forms', 'register_form' );


// add display form

  $args = array(
    // Whether the title should be displayed or not (true/false)
    'display_title' => false,
    
    // Whether the description should be displayed or not (true/false)
    'display_description' => false,
    
    // Text used for the submit button
    'submit_text' => 
    '<div class="icon_submit">
    <p>Envoyer</p>
    <img class="icon filter-icon" src="' . get_template_directory_uri() .'/assets/svg/fleche-droite.svg" width="20">
    </div>',
    
    // The URL to which the form points. Defaults to the current URL which will redirect and automatically display a success message after submission
    // If this is overriden you may use af_has_submission to check for a form submission
    'target' => "http://localhost/composition/contact/",
    
    // Whether the form output should be echoed or returned	
    'echo' => true,
    
    // Field values to pre-fill. Should be an array with format: $field_name_or_key => $field_prefill_value
    'values' => array(),
    
    // Array of field keys or names to exclude from form rendering
    'exclude_fields' => array(),
    
    // Either 'wp' or 'basic'. Whether to use the Wordpress media uploader or a regular file input for file/image fields.
    'uploader' => 'wp',
    
    
    
    // ID to use for form element. Defaults to form key.
    'id' => "form_5da596a009fddY",
    
    // Filter mode disables the success message after submission and instead displays all fields again with their submitted values.
    'filter_mode' => false,

    // 'label' to place instructions right below label or 'field' to place them after the field.
    'instruction_placement' => 'label',

    // Add a honeypot to prevent spam submissions. Enabled by default.
    'honeypot' => true,
);

  




?>