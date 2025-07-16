<?php

// register blocks
add_action('init', 'tb_theme_blocks_block_init');
function tb_theme_blocks_block_init() {
  $blocks = array(
    'tb-query',
    'category-display-block',
    'query-post-item'
  );

  foreach ($blocks as $block) {
    // This registers the blocks on the server, PHP.
    register_block_type(get_stylesheet_directory() . '/build/blocks/' . $block);
  }
}
