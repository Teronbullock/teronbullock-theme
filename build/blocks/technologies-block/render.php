<?php

/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
$id = get_the_ID();
$technologies = get_the_terms($id, 'technologies');
?>


<p <?php echo get_block_wrapper_attributes(); ?>>
  <span class="tb-tech-label">
    <?php esc_html_e('Technologies: ', 'technologies-block'); ?>
  </span>
  <span class="tb-tech-value">
    <?php
    if (!$technologies) {
      return;
    }

    $tech_length = count($technologies) - 1;
    foreach ($technologies as $key => $value) {
      if ($key == $tech_length) {
        echo "$value->name";
        continue;
      }

      echo "$value->name, ";
    }
    ?>
  </span>
</p>