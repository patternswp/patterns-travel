<?php
/**
 * Title: Primary Sidebar
 * Slug: patterns-travel/primary-sidebar
 * Categories: posts
 * Block Types: core/template-part/primary-sidebar
 * Description: Display a collection of blocks for primary sidebar template part.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:pattern {"slug":"patterns-travel/search-form"} /-->
    <!-- wp:pattern {"slug":"patterns-travel/latest-posts"} /-->
    <!-- wp:pattern {"slug":"patterns-travel/latest-comments"} /-->
</div>
<!-- /wp:group -->