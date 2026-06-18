<?php
/**
 * Title: Archive Page Header
 * Slug: patterns-travel/list-archive-header
 * Categories: header
 * Block Types: core/template-part/list-archive-header
 * Description: Layout template for displaying the header of an archive page.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","hasParallax":true,"dimRatio":80,"overlayColor":"secondary","minHeight":50,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span><div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"metadata":{"bindings":{"content":{"source":"patterns-travel/archive-title","args":{"key":"archive-title"}}}}, "textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"default","fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-text-align-left has-default-color has-text-color has-xx-large-font-size" style="text-transform:capitalize"></h1>
			<!-- /wp:heading --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
