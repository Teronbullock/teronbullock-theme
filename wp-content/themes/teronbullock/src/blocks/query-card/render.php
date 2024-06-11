<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$post_url = get_permalink();

// Start output buffering
ob_start();

?>
<a <?php echo get_block_wrapper_attributes(); ?> href="<?php echo esc_url($post_url); ?>">
  <?php echo $content; ?>
</a>

<?php
echo ob_get_clean();