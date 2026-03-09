<?php

// --- Register Custom Post Type ---
function tb_register_cpts() {

  // Post Type: Project.  
  $projects_args = array(
    'labels' => array(
      'name' => __('Projects', TB_TEXT_DOMAIN),
      'singular_name' => __('Project', TB_TEXT_DOMAIN),
      'add_new' => __('Add New Project', TB_TEXT_DOMAIN),
      'add_new_item' => __('Add New Project', TB_TEXT_DOMAIN),
      'edit_item' => __('Edit Project', TB_TEXT_DOMAIN),
      'all_items' => __('All Projects', TB_TEXT_DOMAIN),
    ),
    'description' => '',
    'public' => true,
    'rest_base' => 'projects',
    'menu_icon' => 'dashicons-admin-post',
    'taxonomies' => array('project-categories'),
    'has_archive' => true,
    'delete_with_user' => false,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'author')
  );
  register_post_type('project', $projects_args);


  // Post Type: Features
  $features_args = array(
    'labels' => array(
      'name' => __('Features', TB_TEXT_DOMAIN),
      'singular_name' => __('Feature', TB_TEXT_DOMAIN),
      'add_new' => __('Add New Feature', TB_TEXT_DOMAIN),
      'add_new_item' => __('Add New Feature', TB_TEXT_DOMAIN),
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
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'author')
  );

  register_post_type('feature', $features_args);
}
add_action('init', 'tb_register_cpts');



// --- Register Custom Taxonomy ---
function tb_register_taxonomies() {

  // Taxonomy: Project Type.
  $project_type_args = array(
    'labels' => array(
      'name' => __('Project Types', TB_TEXT_DOMAIN),
      'singular_name' => __('Project Type', TB_TEXT_DOMAIN),
      'add_new_item' => __('Add New Project Type', TB_TEXT_DOMAIN),
      'all_items' => __('All Project Types', TB_TEXT_DOMAIN),
    ),
    'public' => true,
    'rest_base' => 'project_type',
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
  );

  register_taxonomy('project_type', ['project'], $project_type_args);

  // Taxonomy: Technologies.
  $technology_args = array(
    'labels' => array(
      'name' => __('Technologies', TB_TEXT_DOMAIN),
      'singular_name' => __('Technology', TB_TEXT_DOMAIN),
      'add_new_item' => __('Add New Technology', TB_TEXT_DOMAIN),
      'all_items' => __('All Technologies', TB_TEXT_DOMAIN),
    ),
    'public' => true,
    'rest_base' => 'technology',
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
  );

  register_taxonomy('technologies', ['project'], $technology_args);

  // Taxonomy: Feature Category.
  $feature_cat_args = array(
    'labels' => array(
      'name' => __('Feature Categories', TB_TEXT_DOMAIN),
      'singular_name' => __('Feature Category', TB_TEXT_DOMAIN),
      'add_new_item' => __('Add New Feature Category', TB_TEXT_DOMAIN),
      'all_items' => __('All Feature Categories', TB_TEXT_DOMAIN),
    ),
    'public' => true,
    'rest_base' => 'feature_category',
    'show_in_quick_edit' => true,
    'show_admin_column' => true,
    'show_in_rest' => true,
  );
  register_taxonomy('feature_category', ['feature'], $feature_cat_args);
}
add_action('init', 'tb_register_taxonomies');
