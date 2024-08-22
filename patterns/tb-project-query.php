<?php
/**
 * Title: TB Post Query
 * Slug: tb-theme/post-query
 * Categories: posts
 * Description: This is a custom post query block
 */
?>

<!-- wp:group {"align":"wide","className":"tb-theme-group-project-query","layout":{"type":"constrained"},"metadata":{"name":"project-query-group"}} -->
<div class="wp-block-group alignwide tb-theme-group-project-query"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"radius":"4px"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/projects/" style="border-radius:4px;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">all</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/project-categories/wordpress" style="border-radius:4px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">Wordpress</a></div>
<!-- /wp:button -->

<!-- wp:button {"style":{"border":{"radius":"4px"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/project-categories/javascript/" style="border-radius:4px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">Javascript</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":23,"query":{"perPage":10,"pages":0,"offset":0,"postType":"projects","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:tb-theme/query-card -->
<!-- wp:post-featured-image {"aspectRatio":"16/9","scale":"fill","style":{"spacing":{"margin":{"bottom":"1rem"}},"border":{"radius":"8px"}}} /-->

<!-- wp:post-title {"style":{"spacing":{"margin":{"bottom":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"medium"} /-->

<!-- wp:tb-theme/category-display-block /-->
<!-- /wp:tb-theme/query-card -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->