<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$post_id = get_the_ID();
$post_link_type = $attributes['postLinkType'];
$post_link = get_permalink();

$external_link = get_field('post_link', $post_id);

// Start output buffering
ob_start();
?>
<?php if ($post_link_type === 'post'): ?>
  <a <?php echo get_block_wrapper_attributes(); ?> href="<?php echo esc_url($post_link); ?>">
    <?php echo $content; ?>
  </a>
<?php elseif ($post_link_type === 'ext_link'): ?>
  <?php
  if ($external_link):
    $link_url = $external_link['url'];
    $link_title = $external_link['title'];
    $link_target = $external_link['target'] ? $external_link['target'] : '_self';
  ?>
    <a <?php echo get_block_wrapper_attributes(); ?> href="<?php echo esc_url($link_url); ?>"
      target="<?php echo esc_attr($link_target); ?>" rel="noopener noreferrer">
      <?php echo $content; ?>
    </a>
  <?php endif; // end if external_link 
  ?>
<?php endif; // end if post_link_type 
?>

<?php
echo ob_get_clean();
