<?php

/**
 * Title: TB Theme: Calendly CTA Section
 * Slug: tb-theme/calendly-cta-section
 * Categories: posts
 * Description: This is the calendly cta section of the theme.
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"CTA Section"},"className":"section-group","style":{"spacing":{"padding":{"top":"6.75rem","bottom":"6.75rem"}}}} -->
<section id="calendly-cta" class="wp-block-group section-group" style="padding-top:6.75rem;padding-bottom:6.75rem">
  <!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"1.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"xl"} -->
  <h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color has-xl-font-size"
    style="margin-bottom:1.5rem;font-style:normal;font-weight:600">Ready to solve your technical challenges?</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"heading"} -->
  <p class="has-text-align-center has-primary-color has-text-color has-link-color has-heading-font-family">
    Let's discuss how my experience can bring value to your team and projects.</p>
  <!-- /wp:paragraph -->

  <!-- wp:html {"metadata":{"name":"Calendly CTA"}} -->
  <!-- Calendly inline widget begin -->
  <div class="calendly-inline-widget" data-url="https://calendly.com/bullockteron"
    style="min-width:320px;height:700px;"></div>
  <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
  <!-- Calendly inline widget end -->
  <!-- /wp:html -->
</section>
<!-- /wp:group -->