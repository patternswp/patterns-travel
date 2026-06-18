<?php
/**
 * Title: Hero Banner Content
 * Slug: patterns-travel/hero-banner-content
 * Categories: featured
 * Description: A layout that displays a title, content, and button group, suited for showcasing a hero banner.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Hero content"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"},"blockGap":"0px"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center","wideSize":""}} -->
<div class="wp-block-group"
	style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"bottom":"5px"}}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size" style="margin-bottom:5px;letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Discover The World', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"700"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Relishing the wonders of travel', 'patterns-travel' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center"}} -->
<div class="wp-block-group"
	style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size" style="line-height:1.5"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill " style="letter-spacing:1px;text-transform:uppercase"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore More', 'patterns-travel' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
