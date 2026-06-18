<?php
/**
 * Title: Featured Section 1
 * Slug: patterns-travel/featured-section-1
 * Categories: featured, services
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"quaternary","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:pattern {"slug":"patterns-travel/section-title-1"} /-->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center">

<!-- wp:pattern {"slug":"patterns-travel/card-1"} /-->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center">

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","width":"80px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-4.png"style="object-fit:contain;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":5,"className":"alignwide has-text-align-center has-base-color has-text-color"} -->
<h5 class="wp-block-heading alignwide has-text-align-center has-base-color has-text-color"><?php esc_html_e( 'Superior Service & Best Rates Guaranteed', 'patterns-travel' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-center has-tertiary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","width":"80px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png"style="object-fit:contain;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":5,"className":"alignwide has-text-align-center has-base-color has-text-color"} -->
<h5 class="wp-block-heading alignwide has-text-align-center has-base-color has-text-color"><?php esc_html_e( 'Complimentary Concierge & In-Destination Services', 'patterns-travel' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-center has-tertiary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
