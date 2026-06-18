<?php
/**
 * Title: Card 7
 * Slug: patterns-travel/card-7
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" style="aspect-ratio:1;object-fit:cover;width:auto;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"blockGap":"var:preset|spacing|10","padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-right:0px;padding-left:0px"><!-- wp:heading {"textAlign":"left","level":5,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"medium"} -->
<h5 class="wp-block-heading alignwide has-text-align-left has-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Natalie Jones', 'patterns-travel' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"tertiary","fontSize":"x-small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'UX / UI Designer', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"small"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non distinctio voluptates perspiciatis', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
