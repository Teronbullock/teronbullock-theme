<?php

// enqueue css into the editor.
add_action('enqueue_block_assets', 'tb_theme_block_editor_styles');
function tb_theme_block_editor_styles() {
  wp_enqueue_style(
    'main-theme-style',
    get_template_directory_uri() . '/assets/css/theme/theme-style.css'
  );
}


// Register block stylesheets
add_action( 'init', 'tb_theme_enqueue_block_styles' );
function tb_theme_enqueue_block_styles() {

  $block_styles = array(
    'core/group'    => 'group-block',
    'core/button'   => 'button-block',
  );


  foreach($block_styles as $block => $style) {
    wp_enqueue_block_style( $block, array(
      'handle' => 'tb-theme-' . $style,
      'src'    => get_theme_file_uri( "assets/css/blocks/" . $style . ".css" ),
      'path'   => get_theme_file_path( "assets/css/blocks/" . $style . ".css" )
    ) );

  }
}


// enqueue js into the editor.
add_action('init', 'tb_theme_scripts');
// add_action('enqueue_block_editor_assets', 'tb_theme_scripts');
function tb_theme_scripts() {
  wp_enqueue_script(
    'theme-main-script',
    get_template_directory_uri() . '/assets/js/theme-main-scripts.js',
    array('jquery','wp-blocks', 'wp-element', 'wp-editor') 
  );
}


// Includes php files from lib folder.
foreach (glob( dirname(__FILE__) . '/inc/*.php' ) as $file ){
	include $file;
}