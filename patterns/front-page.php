<?php

/**
 * Title: TB Theme Front Page
 * Slug: tb-theme/front-page
 * Categories: posts
 * Description: This is the patterns for the front page of the theme.
 */
?>
<!-- wp:cover {"url":"https://teronbullock.com/wp-content/uploads/2023/09/john-towner-3Kv48NS4WUU-unsplash.jpg","id":359,"alt":"Image of a road leading into trees, with the sun shining on a part of it.","dimRatio":20,"minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","className":"is-style-default","layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light is-style-default" style="min-height:100vh"><img
    class="wp-block-cover__image-background wp-image-359"
    alt="Image of a road leading into trees, with the sun shining on a part of it."
    src="https://teronbullock.com/wp-content/uploads/2023/09/john-towner-3Kv48NS4WUU-unsplash.jpg"
    data-object-fit="cover" /><span aria-hidden="true"
    class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
  <div class="wp-block-cover__inner-container">
    <!-- wp:columns {"metadata":{"name":"cover-col"},"className":"is-style-container cover-col"} -->
    <div class="wp-block-columns is-style-container cover-col">
      <!-- wp:column {"width":"45%"} -->
      <div class="wp-block-column" style="flex-basis:45%">
        <!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"large"} -->
        <h2 class="wp-block-heading has-white-color has-text-color has-link-color has-large-font-size">Full Stack
          <br>Software Engineer
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1rem"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"medium","fontFamily":"heading"} -->
        <p class="has-white-color has-text-color has-link-color has-heading-font-family has-medium-font-size"
          style="margin-bottom:1rem">I solve technical problems so you can focus on what you do best.</p>
        <!-- /wp:paragraph -->

        <!-- wp:spacer {"height":"1rem"} -->
        <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","openInNewTab":true,"className":"is-style-logos-only"} -->
        <ul class="wp-block-social-links has-icon-color is-style-logos-only">
          <!-- wp:social-link {"url":"https://github.com/Teronbullock","service":"github","label":"Link to GitHub page"} /-->

          <!-- wp:social-link {"url":"https://www.linkedin.com/in/teronbullock/","service":"linkedin"} /-->
        </ul>
        <!-- /wp:social-links -->

        <!-- wp:spacer {"height":"1rem"} -->
        <div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
        <div class="wp-block-buttons">
          <!-- wp:button {"textColor":"jasmine","className":"is-style-outline","style":{"border":{"radius":"4px"},"color":{"background":"#ffffff00"}},"fontFamily":"heading"} -->
          <div class="wp-block-button is-style-outline"><a
              class="wp-block-button__link has-jasmine-color has-text-color has-background has-heading-font-family wp-element-button"
              href="/custom-web-solutions//#how-i-help" style="border-radius:4px;background-color:#ffffff00"
              data-ga-category="button" data-ga-label="HomePage: I Need A Site Button">I
              Need A
              Site</a></div>
          <!-- /wp:button -->

          <!-- wp:button {"textColor":"jasmine","className":"is-style-outline","style":{"border":{"radius":"4px"},"color":{"background":"#ffffff00"}},"fontFamily":"heading"} -->
          <div class="wp-block-button is-style-outline"><a
              class="wp-block-button__link has-jasmine-color has-text-color has-background has-heading-font-family wp-element-button"
              href="/software-engineer/#how-i-help" style="border-radius:4px;background-color:#ffffff00"
              data-ga-category="button" data-ga-label="HomePage: I Need A Dev Button">
              dev</a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
</div>
<!-- /wp:cover -->