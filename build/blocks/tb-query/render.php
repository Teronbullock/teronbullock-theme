<?php

/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */


// Start output buffering
ob_start();
?>
<?php echo $content; ?>
<?php
echo ob_get_clean();
