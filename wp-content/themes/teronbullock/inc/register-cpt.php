<?php

// Register Custom Post Type
function tb_register_cpts() {
  $text_domain = 'teronbullock';

  // Post Type: Projects.
  $labels = [
    'name' => __( 'Projects', $text_domain ),
    'singular_name' => __( 'Project', $text_domain ),
    'add_new' => __( 'Add New Project', $text_domain ),
    'add_new_item' => __( 'Add New Project', $text_domain ),
    'edit_item' => __('Edit Project', $text_domain),
    'all_items' => __('All Projects', $text_domain),
  ];

  $args = [
    'label' => __( 'Projects', $text_domain ),
    'labels' => $labels,
    'description' => '',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'rest_base' => '',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'rest_namespace' => 'wp/v2',
    'has_archive' => false,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'delete_with_user' => false,
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'hierarchical' => false,
    'can_export' => false,
    'rewrite' => [ 'slug' => 'projects', 'with_front' => true ],
    'query_var' => true,
    'supports' => [ 'title', 'editor', 'thumbnail' ],
    'show_in_graphql' => false,
    'menu_icon' => 'dashicons-media-interactive',
    'taxonomies' => ['Project Categories'],
  ];

  register_post_type( 'projects', $args );
}

add_action( 'init', 'tb_register_cpts' );


// Register Custom Taxonomy
function tb_register_taxonomies() {
  $text_domain = 'teronbullock';

  // Taxonomy: Project Categories.
  $labels = [
    'name' => __( 'Project Categories', $text_domain ),
    'singular_name' => __( 'Project Category', $text_domain ),
    'menu_name' => __( 'Project Categories', $text_domain ),
    'all_items' => __( 'All Project Categories', $text_domain ),
    'edit_item' => __( 'Edit Project Category', $text_domain ),
    'view_item' => __( 'View Project Category', $text_domain ),
    'update_item' => __( 'Update Project Category', $text_domain ),
    'add_new_item' => __( 'Add New Project Category', $text_domain ),
    'new_item_name' => __( 'New Project Category Name', $text_domain ),
    'parent_item' => __( 'Parent Project Category', $text_domain ),
    'parent_item_colon' => __( 'Parent Project Category:', $text_domain ),
    'search_items' => __( 'Search Project Categories', $text_domain ),
    'popular_items' => __( 'Popular Project Categories', $text_domain ),
    'separate_items_with_commas' => __( 'Separate project categories with commas', $text_domain ),
    'add_or_remove_items' => __( 'Add or remove project categories', $text_domain ),
    'choose_from_most_used' => __( 'Choose from the most used project categories', $text_domain ),
    'not_found' => __( 'No project categories found', $text_domain ),
    'no_terms' => __( 'No project categories', $text_domain ),
    'items_list_navigation' => __( 'Project categories list navigation', $text_domain ),
    'items_list' => __( 'Project categories list', $text_domain ),
    'back_to_items' => __( 'Back to project categories', $text_domain ),
  ];

  $args = [
    'label' => __( 'Project Categories', $text_domain ),
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'hierarchical' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => [ 'slug' => 'project-categories', 'with_front' => true, ],
    'show_admin_column' => true,
    'show_in_rest' => true,
    'rest_base' => 'project-categories',
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_quick_edit' => true,
    'show_in_graphql' => false,
  ];

  register_taxonomy( 'project-categories', [ 'projects' ], $args );

}

add_action( 'init', 'tb_register_taxonomies' );