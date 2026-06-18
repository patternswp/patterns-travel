<?php
/**
 * Title: Hero Banner
 * Slug: patterns-travel/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","dimRatio":50,"overlayColor":"secondary","minHeight":90,"minHeightUnit":"vh","contentPosition":"center center","metadata":{"name":"Hero Banner"},"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"className":"patterns-travel-hero-banner","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull patterns-travel-hero-banner" style="padding-top:0px;padding-bottom:0px;min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:pattern {"slug":"patterns-travel/hero-banner-content"} /-->
</div></div>
<!-- /wp:cover -->
