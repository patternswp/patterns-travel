<?php
/**
 * Title: Card 4
 * Slug: patterns-travel/card-4
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"80px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-6.png" style="width:80px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Adventure Tour', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"400"}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:400;line-height:1.2"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
