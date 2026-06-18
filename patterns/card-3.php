<?php
/**
 * Title: Card 3
 * Slug: patterns-travel/card-3
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"overlayColor":"primary","minHeight":300,"isDark":false,"style":{"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:5px;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container">
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"textColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-color has-text-color has-link-color" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph -->
<p><?php esc_html_e( 'Up to 30% off', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":6,"className":"has-playfair-display-font-family","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"fontSize":"large"} -->
<h6 class="wp-block-heading has-text-align-left has-playfair-display-font-family has-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2;text-transform:capitalize"><?php esc_html_e( 'Summer hot deals', 'patterns-travel' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)"><!-- wp:button {"backgroundColor":"default","textColor":"secondary","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"textTransform":"uppercase"}}} -->
<div class="wp-block-button is-style-fill" style="text-transform:uppercase"><a class="wp-block-button__link has-secondary-color has-default-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e( 'View Deals', 'patterns-travel' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
