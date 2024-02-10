<?php

// include custom block registration files
// include_once get_stylesheet_directory() . '/blocks/mp-blocks/mp-blocks.php';


/*
* Set the allowed blocks for the editor


*/
//add_filter( 'allowed_block_types_all', 'tb_set_allowed_blocks', 10, 2);
function tb_set_allowed_blocks( $allowed_block_types, $block_editor_context) {
  return array(
    'core/paragraph',
    'core/heading',
    'core/group',
    'core/columns',
    'core/list',
    'core/cover',
    'core/image',
    'core/html',
    'core/shortcode',
    'core/block',
    'core/spacer',
    'core/social-links',
    'core/separator',
    'core/buttons',
    
  );
}



// register block styles
add_action('init', 'de_register_block_styles');
function de_register_block_styles() {

  $block_styles = array(
    'core/group'      => array(
      array(
        'name'  => 'container',
        'label' => 'Container',
      ),
      array(
        'name'  => 'project-header',
        'label' => 'Project Header'
      )
    ),
    'core/columns'    => array(
      array(
        'name'  => 'container',
        'label' => 'Container',
      )
    ),
    'core/cover'      => array(
      array(
        'name'  => 'project-cover',
        'label' => 'Project Cover',
      ),
      array(
        'name'  => 'container',
        'label' => 'Container',
      ),
    ),
    'core/image'      => array(
      array(
        'name'  => 'img--project',
        'label' => 'Project',
      )
    ),
  );


  // loop through each block style
  foreach ($block_styles as $block_name => $block_styles) {

    // loop through each block style
    foreach ($block_styles as $block_style) {

      // register block style
      register_block_style(
        $block_name,
        array(
          'name'          => $block_style['name'],
          'label'         => __( $block_style['label'] ),
        )
      );
    }
  }
}
