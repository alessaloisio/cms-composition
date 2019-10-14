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

?>