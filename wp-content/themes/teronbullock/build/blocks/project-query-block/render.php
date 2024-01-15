<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

 $tb_post = new WP_Query( array(
  'post_type' => 'projects',
  'orderby' => 'rand',
  'post__not_in' => array( get_the_ID() )
) );

 if ( $tb_post->have_posts() ) :
  while ( $tb_post->have_posts() ) : $tb_post->the_post();
      the_title( '<h2>', '</h2>' );
      the_post_thumbnail();
      the_excerpt();
  endwhile;
else:
  _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

wp_reset_postdata();
?>

<p <?php //echo get_block_wrapper_attributes(); ?>>
	<?php //esc_html_e( 'Hello', 'project-query-block' ); ?>
</p>