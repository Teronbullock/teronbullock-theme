<?php

/**
 * Title: TB Theme: About Hero Section
 * Slug: tb-theme/about-hero-section
 * Categories: posts
 * Description: This is the about section of the theme.
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Hero"},"align":"full","className":"section-group section-group\u002d\u002dabout is-style-default","style":{"spacing":{"padding":{"top":"6.75rem","bottom":"6.75rem"}}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
<section
  class="wp-block-group alignfull section-group section-group--about is-style-default has-white-color has-primary-background-color has-text-color has-background"
  id="hero" style="padding-top:6.75rem;padding-bottom:6.75rem">
  <!-- wp:group {"className":"is-style-container","layout":{"type":"constrained"}} -->
  <div class="wp-block-group is-style-container">
    <!-- wp:columns {"align":"full","className":"is-style-img-right-col","style":{"spacing":{"padding":{"right":"0px","left":"0px"},"blockGap":{"left":"0"}}}} -->
    <div class="wp-block-columns alignfull is-style-img-right-col" style="padding-right:0px;padding-left:0px">
      <!-- wp:column {"verticalAlignment":"top"} -->
      <div class="wp-block-column is-vertically-aligned-top">
        <!-- wp:heading {"textAlign":"left","level":1,"placeholder":"Section Heading","style":{"spacing":{"margin":{"bottom":"1.5rem"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontFamily":"heading"} -->
        <h1 class="wp-block-heading has-text-align-left has-heading-font-family"
          style="margin-bottom:1.5rem;font-style:normal;font-weight:500">Ron Bullock,<br>Full-Stack Software Engineer
        </h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><strong>From patient care to clean code.</strong>&nbsp;Hi my name is Teron but everyone calls me “Ron”. I’m a
          developer who brings empathy, a problem solving mindset, and a proven ability to master complex systems.</p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"1rem"}}},"fontFamily":"heading"} -->
        <p class="has-heading-font-family" style="margin-bottom:1rem">I build modern full-stack applications to solve
          real business problems.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {"textColor":"white","className":"is-style-outline","style":{"border":{"radius":"4px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
          <div class="wp-block-button is-style-outline"><a
              class="wp-block-button__link has-white-color has-text-color has-link-color wp-element-button"
              href="#projects" style="border-radius:4px">View my work</a></div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"verticalAlignment":"stretch","width":"50%"} -->
      <div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:50%">
        <!-- wp:image {"id":1604,"width":"400px","aspectRatio":"1","scale":"cover","sizeSlug":"medium","linkDestination":"none","align":"right","className":"is-style-default","style":{"border":{"width":"0px","style":"none","radius":"8px"},"color":{"duotone":"unset"}}} -->
        <figure class="wp-block-image alignright size-medium is-resized has-custom-border is-style-default"><img
            src="https://teronbullock.com/wp-content/uploads/2025/08/teron-550-300x300.webp" alt="Image of Teron"
            class="wp-image-1604"
            style="border-style:none;border-width:0px;border-radius:8px;aspect-ratio:1;object-fit:cover;width:400px" />
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->