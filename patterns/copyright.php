<?php
/**
 * Title: Copyright
 * Slug: patterns-travel/copyright
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dynamic copyright text
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2px"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-default-color has-text-color has-link-color has-x-small-font-size">
<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"patterns-travel/copyright","args":{"key":"copyright"}}}},"placeholder":"<?php esc_attr_e( 'Dynamic copyright text', 'patterns-travel' ); ?>"} -->
<p></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php esc_html_e( '. All Rights Reserved', 'patterns-travel' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
