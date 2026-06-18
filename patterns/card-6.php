<?php
/**
 * Title: Card 6
 * Slug: patterns-travel/card-6
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":"5px"}},"backgroundColor":"quaternary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-quaternary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"60px","height":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-10.png" style="object-fit:contain;width:60px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":5,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.2"}},"textColor":"base","fontSize":"medium"} -->
<h5 class="wp-block-heading alignwide has-text-align-center has-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:500;line-height:1.2"><?php esc_html_e( 'Beaches', 'patterns-travel' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( '10+ Tours', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)">

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'from', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"medium"} -->
<p class="has-text-align-center has-primary-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '$250', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
