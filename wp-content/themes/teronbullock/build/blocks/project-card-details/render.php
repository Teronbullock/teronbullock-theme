<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

 // get post id
  $post_id = get_the_ID();

  $detail_text = '';

  // get deatil type
  $detail_type = $attributes['detailType'];

  if ( $detail_type === 'category' ) {
    // get terms
    $terms = wp_get_post_terms($post_id, 'project-categories');
  
    foreach($terms as $key => $term) {
      $detail_text.= $term->name;

      if ( $key < count($terms) - 1 ) {
        $detail_text.= ', ';
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