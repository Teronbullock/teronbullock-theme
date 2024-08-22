<?php

// --- Register Custom Post Type ---
add_action( 'init', 'tb_register_cpts' );
function tb_register_cpts() {

  // Post Type: Project.  
  $projects_args = array(
    'labels' => array(
      'name' => __( 'Projects', TB_TEXT_DOMAIN ),
      'singular_name' => __( 'Project', TB_TEXT_DOMAIN ),
      'add_new' => __( 'Add New Project', TB_TEXT_DOMAIN ),
      'add_new_item' => __( 'Add New Project', TB_TEXT_DOMAIN ),
      'edit_item' => __('Edit Project', TB_TEXT_DOMAIN),
      'all_items' => __('All Projects', TB_TEXT_DOMAIN),
    ),
    'description' => '',
    'public' => true,
    'rest_base' => 'projects',
    'menu_icon' => 'dashicons-admin-post',
    'taxonomies' => array( 'project-categories' ),
    'has_archive' => true,
    'delete_with_user' => false,
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'author' )
  );
  register_post_type( 'project', $projects_args );
  

  

  // Post Type: Features
  $features_args = array(
    'labels' => array(
      'name' => __( 'Features', TB_TEXT_DOMAIN ),
      'singular_name' => __( 'Feature', TB_TEXT_DOMAIN ),
      'add_new' => __( 'Add New Feature', TB_TEXT_DOMAIN ),
      'add_new_item' => __( 'Add New Feature', TB_TEXT_DOMAIN ),
      'edit_item' => __('Edit Feature', TB_TEXT_DOMAIN),
      'all_items' => __('All features', TB_TEXT_DOMAIN),
    ),
    'description' => '',
    'public' => true,
    'rest_base' => 'feature',
    'menu_icon' => 'dashicons-admin-post',
    'has_archive' => true,
    'delete_with_user' => false,
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'author' )
  );

  register_post_type( 'feature', $features_args );
}


// --- Register Custom Taxonomy ---
add_action( 'init', 'tb_register_taxonomies' );
function tb_register_taxonomies() {
   // Taxonomy: Project Category.
  $project_cat_args = array(
    'labels' => array(
      'name' => __( 'Project Categories', TB_TEXT_DOMAIN ),
      'singular_name' => __( 'Project Category', TB_TEXT_DOMAIN ),
      'add_new_item' => __( 'Add New Project Category', TB_TEXT_DOMAIN ),
      'all_items' => __( 'All Project Categories', TB_TEXT_DOMAIN ),
    ),
    'public' => true,
    'rest_base' => 'project_category',
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
  );

  register_taxonomy( 'project_category', [ 'project' ], $project_cat_args );

  // Taxonomy: Feature Category.
  $feature_cat_args = array(
    'labels' => array(
      'name' => __( 'Feature Categories', TB_TEXT_DOMAIN ),
      'singular_name' => __( 'Feature Category', TB_TEXT_DOMAIN ),
      'add_new_item' => __( 'Add New Feature Category', TB_TEXT_DOMAIN ),
      'all_items' => __( 'All Feature Categories', TB_TEXT_DOMAIN ),
    ),
    'public' => true,
    'rest_base' => 'feature_category',
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
  );
  register_taxonomy( 'feature_category', [ 'feature' ], $feature_cat_args );

}

