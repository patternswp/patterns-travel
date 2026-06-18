<?php
/**
 * Title: Featured Section 4
 * Slug: patterns-travel/featured-section-4
 * Categories: featured, call-to-action
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","customGradient":"linear-gradient(90deg,rgba(7,146,227,0) 70%,rgb(242,242,240) 10%)","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(90deg,rgba(7,146,227,0) 70%,rgb(242,242,240) 10%)"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%">
	<!-- wp:pattern {"slug":"patterns-travel/card-5"} /-->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
