<?php

// setup theme
add_action('after_setup_theme', 'tb_theme_setup');
function tb_theme_setup() {

  define( 'TB_THEME_NAME', 'teron-bullock' );
  define( 'TB_THEME_VERSION', '0.0.2' );
  define( 'TB_TEXT_DOMAIN', 'tb-theme' );
}

// enqueue css into the editor.
add_action('enqueue_block_assets', 'tb_theme_block_editor_styles');
function tb_theme_block_editor_styles() {
  wp_enqueue_style(
    'main-theme-style',
    get_template_directory_uri() . '/assets/css/theme/theme-style.css'
  );
}

// Register custom core block stylesheets
add_action('enqueue_block_assets', 'tb_theme_enqueue_custom_core_block_assets');
function tb_theme_enqueue_custom_core_block_assets() {
  $core_blocks = array(
    'core/group',
    'core/columns',
    'core/button'
  );

  // check if any core blocks are being used
  foreach ($core_blocks as $core_block) {
    $custom_file_name = str_replace('core/', '', $core_block);

    if (has_block($core_block) || is_admin()) {
      
      // enqueue custom core block styles on the front-end
      wp_enqueue_style(
        "tb-theme-{$custom_file_name}-styles",
        get_stylesheet_directory_uri() . "/assets/css/custom-core-blocks/tb-custom-{$custom_file_name}.css",
        array(),
        TB_THEME_VERSION,
        'all'
      );
    } 
  }
}


// enqueue js into the editor.
add_action('init', 'tb_theme_scripts');
// add_action('enqueue_block_editor_assets', 'tb_theme_scripts');
function tb_theme_scripts() {
  wp_enqueue_script(
    'theme-main-script',
    get_template_directory_uri() . '/assets/js/theme-main-scripts.js',
    array('jquery', 'wp-blocks', 'wp-element', 'wp-editor') 
  );
}


// Includes php files from lib folder.
foreach (glob( dirname(__FILE__) . '/inc/*.php' ) as $file ){
	include $file;
}
