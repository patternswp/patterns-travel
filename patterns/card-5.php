<?php
/**
 * Title: Card 5
 * Slug: patterns-travel/card-5
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"backgroundColor":"default","className":"is-style-relative","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-relative has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'A vacation you’ll remember forever', 'patterns-travel' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"className":"has-text-align-center has-base-color has-text-color has-x-large-font-size"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Dream Your Next Trip', 'patterns-travel' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"100px","wideSize":"100px"}} -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"layout":{"selfStretch":"fixed","flexSize":"1px"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.4","fontSize":"17px"}},"textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color " style="margin-bottom:var(--wp--preset--spacing--40);font-size:17px;line-height:1.4"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis ', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline" style="text-transform:uppercase"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Find Out More', 'patterns-travel' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
