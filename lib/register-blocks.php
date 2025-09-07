<?php
// Register custom theme blocks
function tb_theme_blocks_block_init() {
  // get blocks dir
  $blocks_dir = get_stylesheet_directory() . '/build/blocks';

  // find all sub dirs, array_filter ensures only folders not files are registered
  $dirs = array_filter(glob($blocks_dir . '/*'), 'is_dir');

  foreach ($dirs as $dir) {
    // ensures only dirs containing block.json are registered
    if (file_exists($dir . '/block.json')) {
      register_block_type($dir);
    }
  }
}
add_action('init', 'tb_theme_blocks_block_init');
