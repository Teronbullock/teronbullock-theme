<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
$post_id = get_the_ID();
$post_taxonomies = get_post_taxonomies($post_id);
$category_type = $attributes['categoryType'];
$display_type = $attributes['displayType'];
$post_type = get_post_type($post_id);
$output_text = '';

// check for category type
if ($category_type === 'taxonomy') {

  if (!$post_taxonomies) {
    error_log($post_id . ' Category Display Block: No taxonomies found');
  } else {
    $post_taxonomies = $post_taxonomies[0];
    $post_terms = get_the_terms($post_id, $post_taxonomies);

    if (!$post_terms) {
      error_log($post_id . ' Category Display Block: No terms found');
    } else {
      foreach ($post_terms as $key => $post_term) {
        if ($key > 0) {
          $output_text .= ', ';
        }
        $output_text .= $post_term->name;
      }
    }
  }
} else if ($category_type === 'text') {
  // acf field
  $output_text = get_field('front_end_text', $post_id) ? get_field('front_end_text', $post_id) : '';
}



ob_start();
if ($output_text):
?>
  <p <?php echo get_block_wrapper_attributes(); ?>>
    <?php echo esc_html($output_text); ?>
  </p>
<?php
endif; // display_text

echo ob_get_clean();
