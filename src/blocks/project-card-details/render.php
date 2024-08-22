<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

 // get post id
  $post_id = get_the_ID();
  $post_taxonomies = get_post_taxonomies($post_id);
  $detail_text = '';

  // get detail type
  $detail_type = $attributes['detailType'];

  var_dump($post_taxonomies, get_post_type($post_id));
  if ( $detail_type === 'category' ) {

    // loop through taxonomies to get terms
    foreach($post_taxonomies as $key => $taxonomy) {
      // get terms
      $terms = wp_get_post_terms($post_id, $taxonomy);

      // loop through terms to get names
      foreach($terms as $key => $term) {
        $detail_text.= $term->name;

        if ( $key < count($terms) - 1 ) {
          $detail_text.= ', ';
        }
      }
    }

  } else if ( $detail_type === 'frontendText' ) {
    
    // acf field
    $detail_text = get_field('front_end_text', $post_id) ? get_field('front_end_text', $post_id) : '';
  } 


?>
<div <?php echo get_block_wrapper_attributes(); ?> >
  <?php if ( isset( $detail_text ) ) : ?>
  <p class="project-card-details__text mb-4">
    <?php echo esc_html($detail_text); ?>
  </p>
  <?php endif; ?>
</div>