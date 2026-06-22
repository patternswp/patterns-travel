<?php
/**
 * Title: Primary Header
 * Slug: patterns-travel/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"backgroundColor":"quaternary","textColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-color has-quaternary-background-color has-text-color has-background has-link-color">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"18px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"-3px"}}}} -->
			<figure class="wp-block-image size-full is-resized" style="margin-top:-3px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png"
			style="width:18px"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-small"} -->
			<p class="has-x-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Make a call :', 'patterns-travel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"pwp-txt-dec-non ","style":{"typography":{"fontSize":"14px"}}} -->
			<p class="pwp-txt-dec-non" style="font-size:14px"><a href="<?php echo esc_url( 'tel:8085550111' ); ?>"><?php esc_html_e( '(808) 555-0111', 'patterns-travel' ); ?></a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"width":"18px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"-3px"}}}} -->
			<figure class="wp-block-image size-full is-resized" style="margin-top:-3px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png"
			style="width:18px"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-small"} -->
			<p class="has-x-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( 'Email Address :', 'patterns-travel' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"pwp-txt-dec-non ","style":{"typography":{"fontSize":"14px"}}} -->
			<p class="pwp-txt-dec-non" style="font-size:14px"><a href="<?php echo esc_url( 'mailto:info@example.com ' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-travel' ); ?></a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group">
		<!-- wp:group {"className":"pw-social-icons","layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group pw-social-icons">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","fontSize":"0.81rem"}}} -->
			<p style="font-size:0.81rem;font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e( 'follow us :', 'patterns-travel' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#051036","size":"has-small-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
			<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
			<div class="wp-block-button">
			<a class="wp-block-button__link wp-element-button"
				style="border-radius:0px;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)"><?php esc_html_e( 'Become A Local Guide', 'patterns-travel' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:pattern {"slug":"patterns-travel/site-identity"} /-->
		<!-- wp:pattern {"slug":"patterns-travel/navigation-menu"} /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
