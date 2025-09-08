<?php

// setup theme
add_action('after_setup_theme', 'tb_theme_setup');
function tb_theme_setup() {

  define('TB_THEME_NAME', 'teron-bullock');
  define('TB_THEME_VERSION', '1.0.1');
  define('TB_TEXT_DOMAIN', 'tb-theme');
}

// enqueue css into the editor.
add_action('enqueue_block_assets', 'tb_theme_block_editor_styles');
function tb_theme_block_editor_styles() {
  wp_enqueue_style(
    'main-theme-style',
    get_template_directory_uri() . '/assets/css/theme/theme-style.css',
    [],
    TB_THEME_VERSION,
  );
}

// Register custom core block stylesheets
add_action('init', 'tb_theme_enqueue_custom_core_block_assets');
function tb_theme_enqueue_custom_core_block_assets() {
  $core_blocks = array(
    'core/group',
    'core/columns',
    'core/button',
    'core/cover',
    'core/heading',
    'core/query',
    'core/paragraph',
    'core/video',
  );


  // check if any core blocks are being used
  foreach ($core_blocks as $core_block) {
    $custom_file_name = str_replace('core/', '', $core_block);

    // enqueue custom core block styles on the front-end
    wp_register_style(
      "tb-theme-{$custom_file_name}-styles",
      get_stylesheet_directory_uri() . "/assets/css/custom-core-blocks/tb-custom-{$custom_file_name}.css",
      array(),
      TB_THEME_VERSION,
      'all'
    );

    // enqueue custom core block styles in the editor
    wp_enqueue_block_style(
      $core_block,
      array(
        'handle' => "tb-theme-{$custom_file_name}-styles",
      )
    );
  }
}


// enqueue js into the editor.
add_action('enqueue_block_assets', 'tb_theme_scripts');
function tb_theme_scripts() {
  wp_enqueue_script(
    'theme-main-script',
    get_template_directory_uri() . '/assets/js/themeMainScripts.min.js',
    array('wp-blocks', 'wp-element', 'wp-editor'),
    TB_THEME_VERSION,
    true
  );
}


// enqueue GTM js into the editor.
add_action('enqueue_block_assets', 'tb_theme_gtm_scripts');
function tb_theme_gtm_scripts() {
  if (!is_admin() && is_front_page()) {
    wp_enqueue_script(
      'theme-GTM-script',
      get_template_directory_uri() . '/assets/js/themeGTMScripts.min.js',
      array('wp-blocks', 'wp-element', 'wp-editor'),
      TB_THEME_VERSION,
      true
    );
  }
}


// allow .vcf files to be uploaded to the media library
add_filter('upload_mimes', 'tb_theme_mime_types');
function tb_theme_mime_types($mimes) {
  $mimes['vcf'] = 'text/vcard';
  return $mimes;
}


// Includes php files from lib folder.
foreach (glob(dirname(__FILE__) . '/lib/*.php') as $file) {
  include $file;
}
