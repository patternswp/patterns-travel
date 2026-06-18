<?php
/**
 * Title: Card 2
 * Slug: patterns-travel/card-2
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg","dimRatio":50,"minHeight":300,"contentPosition":"bottom left","style":{"border":{"radius":"5px"},"typography":{"fontStyle":"normal","fontWeight":"900"}},"layout":{"type":"constrained"},"fontSize":"x-large"} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left  has-x-large-font-size" style="border-radius:5px;font-style:normal;font-weight:900;min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center  has-large-font-size"><?php esc_html_e( 'Italy', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
