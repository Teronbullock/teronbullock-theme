<?php

/**
 * Project single view helpers.
 *
 * Chooses which front-end "view" (block pattern) to use for a project
 * based on its `project_type` taxonomy terms.
 */

/**
 * Get the block pattern slug to use for the given project.
 *
 * @param int|\WP_Post|null $post Optional. Post object or ID. Defaults to global $post.
 * @return string|null Block pattern slug or null if none should be used.
 */
function tb_get_project_view_pattern_slug($post = null) {
  $post = get_post($post);

  if (!$post instanceof WP_Post || 'project' !== $post->post_type) {
    return null;
  }

  

  $terms = get_the_terms($post, 'project_type');

  if (is_wp_error($terms)) {
    return null;
  }



  // Map project_type term slugs to block pattern slugs.
  // Adjust the keys here to match your actual term slugs.
  $mapping = array(
    // 'term-slug' => 'pattern-slug',
    'with-slider' => 'tb-theme/project-page-with-slider',
    'default'     => 'tb-theme/project-page-setup',
  );

  /**
   * Filter the mapping between project_type term slugs and pattern slugs.
   *
   * @param array   $mapping Mapping of term slug => pattern slug.
   * @param WP_Post $post    The current project post.
   */
  $mapping = apply_filters('tb_project_view_pattern_mapping', $mapping, $post);

  // Fallback if no terms are assigned – use the "default" view when defined.
  if (empty($terms)) {
    return isset($mapping['default']) ? $mapping['default'] : null;
  }

  // Look for the first matching term in the mapping.
  foreach ($terms as $term) {
    if (isset($mapping[$term->slug])) {
      return $mapping[$term->slug];
    }
  }

  // Final fallback to "default" if defined.
  return isset($mapping['default']) ? $mapping['default'] : null;
}

/**
 * Render the chosen project view as block content.
 *
 * @param int|\WP_Post|null $post Optional. Post object or ID. Defaults to global $post.
 * @return string Rendered HTML for the selected pattern, or an empty string.
 */
function tb_render_project_view($post = null) {
  $pattern_slug = tb_get_project_view_pattern_slug($post);

  if (!$pattern_slug) {
    return '';
  }

  if (function_exists('get_block_pattern')) {
    $pattern = get_block_pattern($pattern_slug);

    if (is_array($pattern) && !empty($pattern['content'])) {
      return do_blocks($pattern['content']);
    }
  }

  return '';
}

/**
 * Shortcode wrapper so the view can be dropped into a Shortcode block.
 *
 * Usage: [tb_project_view]
 *
 * @param array $atts Shortcode attributes (unused for now).
 * @return string
 */
function tb_project_view_shortcode($atts = array()) {
  return tb_render_project_view();
}
add_shortcode('tb_project_view', 'tb_project_view_shortcode');