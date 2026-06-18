<?php
/**
 * Title: Section Title 1
 * Slug: patterns-travel/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Welcome To PatternsWP', 'patterns-travel' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"className":"has-text-align-center has-base-color has-text-color has-x-large-font-size"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'An Adventure Travel Company You Can Trust', 'patterns-travel' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
