<?php
/**
 * Title: Featured Section 7
 * Slug: patterns-travel/featured-section-7
 * Categories: query,posts
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
<h6 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Travel insights & ideas', 'patterns-travel' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"className":"has-text-align-center has-base-color has-text-color has-x-large-font-size"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Latest Travel Guides', 'patterns-travel' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:query {"queryId":2,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":510,"contentPosition":"bottom left","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="border-radius:5px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:510px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","displayType":"modified","style":{"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default"} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","fontSize":"13px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:query {"queryId":2,"query":{"perPage":"1","pages":"1","offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","displayType":"modified","style":{"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","fontSize":"13px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":20} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:query {"queryId":2,"query":{"perPage":"5","pages":"1","offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|tertiary","style":"dashed","width":"1px"}},"spacing":{"blockGap":"0px","padding":{"bottom":"25px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-style:dashed;border-bottom-width:1px;padding-bottom:25px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","displayType":"modified","style":{"typography":{"textTransform":"uppercase","fontSize":"13px","fontStyle":"normal","fontWeight":"500"}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","fontSize":"13px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
