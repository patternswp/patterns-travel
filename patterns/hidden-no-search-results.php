<?php
/**
 * Title: No Search Result
 * Slug: patterns-travel/hidden-no-search-results
 * Inserter: no
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'patterns-travel' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'patterns-travel' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'patterns-travel' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'patterns-travel' ); ?>","buttonUseIcon":true} /-->
