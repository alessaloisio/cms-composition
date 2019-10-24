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
  




?>