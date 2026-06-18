<?php
/**
 * Title: Section Title 3
 * Slug: patterns-travel/section-title-3
 * Categories: text, featured
 * Description: A layout featuring a title and content in left alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Why Choose Us', 'patterns-travel' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"className":"has-text-align-left has-base-color has-text-color has-x-large-font-size"} -->
<h2 class="wp-block-heading has-text-align-left has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Our Experiences Meet High Quality Standards', 'patterns-travel' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.4","fontSize":"17px"}},"textColor":"tertiary"} -->
<p class="has-text-align-left has-tertiary-color has-text-color " style="margin-bottom:var(--wp--preset--spacing--40);font-size:17px;line-height:1.4"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis ', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
