<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

 // get post id
  $post_id = get_the_ID();

  // acf field
  $front_end_text = get_field('front_end_text', $post_id) ? get_field('front_end_text', $post_id) : '';

?>
<div <?php echo get_block_wrapper_attributes(); ?> >
  <?php if ( isset( $front_end_text ) ) : ?>
  <p class="project-card-details__text mb-4">
    <?php echo esc_html($front_end_text); ?>
  </p>
  <?php endif; ?>
</div>