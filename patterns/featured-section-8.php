<?php
/**
 * Title: Featured Section 8
 * Slug: patterns-travel/featured-section-8
 * Categories: query,posts
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-background-color has-background"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px","lineHeight":"1.4"}},"textColor":"default","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-left has-default-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:1px;line-height:1.4;text-transform:uppercase"><?php esc_html_e( 'Plan your trip with us', 'patterns-travel' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.1"}},"textColor":"default","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-left has-default-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700;line-height:1.1"><?php esc_html_e( 'Ready for an unforgettable tour?', 'patterns-travel' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20);letter-spacing:1px;text-transform:uppercase"><!-- wp:button {"textAlign":"center","backgroundColor":"accent","textColor":"base","width":100,"className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button"><?php esc_html_e( 'Book Tour Now', 'patterns-travel' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
