<?php
/**
 * Title: Section Title 2
 * Slug: patterns-travel/section-title-2
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in left alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Our destination lists', 'patterns-travel' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"className":"has-text-align-left has-base-color has-text-color has-x-large-font-size"} -->
<h2 class="wp-block-heading has-text-align-left has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Checkout Beautiful Places Around the World', 'patterns-travel' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill " style="letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore More', 'patterns-travel' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
