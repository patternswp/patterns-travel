<?php
/**
 * Title: Footer
 * Slug: patterns-travel/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:pattern {"slug":"patterns-travel/featured-section-8"} /-->
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background">

	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
		<!-- wp:image {"width":"auto","height":"40px","sizeSlug":"full","linkDestination":"custom"} -->
		<figure class="wp-block-image size-full is-resized">
			<a href="#">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/patternswp-logo-white.png" style="width:auto;height:40px" />
			</a>
		</figure>
		<!-- /wp:image -->
		<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","fontSize":"20px"},"layout":{"selfStretch":"fixed","flexSize":"100px"}},"textColor":"default"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
			<h6 class="wp-block-heading has-text-color " style="color:#ffffff80;margin-bottom:var(--wp--preset--spacing--10);font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase"> <?php esc_html_e( 'Toll Free Number', 'patterns-travel' ); ?> </h6>
			<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","fontSize":"medium"} -->
		<p class="pwp-txt-dec-non has-default-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600"><a href="<?php echo esc_url( 'tel:(808) 555-0111' ); ?>"><?php esc_html_e( '(808) 555-0111', 'patterns-travel' ); ?></a></p>
		<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
			<h6 class="wp-block-heading has-text-color " style="color:#ffffff80;margin-bottom:var(--wp--preset--spacing--10);font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase"> <?php esc_html_e( 'Need live support?', 'patterns-travel' ); ?> </h6>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","fontSize":"medium"} -->
			<p class="pwp-txt-dec-non has-default-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:600">
			<a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"> <?php esc_html_e( 'info@example.com', 'patterns-travel' ); ?> </a>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">

		<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<h6 class="wp-block-heading has-text-color " style="color:#ffffff80;margin-top:var(--wp--preset--spacing--40);font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase"><?php esc_html_e( 'Your all in one travel app', 'patterns-travel' ); ?></h6>
		<!-- /wp:heading -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">

			<!-- wp:group {"style":{"color":{"background":"#00000057"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group has-default-color has-text-color has-background has-link-color" style="border-radius:5px;background-color:#00000057;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
			<!-- wp:image {"width":"auto","height":"30px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-apple-white.png" style="width:auto;height:30px" />
			</figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
				<p class="has-x-small-font-size" style="line-height:1"><?php esc_html_e( 'Download On the', 'patterns-travel' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Apple Store', 'patterns-travel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"color":{"background":"#00000057"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group has-default-color has-text-color has-background has-link-color" style="border-radius:5px;background-color:#00000057;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
			<!-- wp:image {"width":"auto","height":"30px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-google-play-white.png" style="width:auto;height:30px" />
			</figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
				<p class="has-x-small-font-size" style="line-height:1"><?php esc_html_e( 'Get It On', 'patterns-travel' ); ?> </p>
				<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Google Play', 'patterns-travel' ); ?> </p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
		<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<h6 class="wp-block-heading has-text-color " style="color:#ffffff80;margin-top:var(--wp--preset--spacing--40);font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase"> <?php esc_html_e( 'Follow us on social media', 'patterns-travel' ); ?> </h6>
		<!-- /wp:heading -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
		<div class="wp-block-group" style="margin-top:25px">

		<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
			<ul class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->

	</div>

	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">
		<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"}}} -->
		<h6 class="wp-block-heading has-text-color " style="color:#ffffff80;font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase"> <?php esc_html_e( 'Our Locations', 'patterns-travel' ); ?> </h6>
		<!-- /wp:heading -->
		<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"18px"}},"textColor":"default"} -->
		<h6 class="wp-block-heading has-default-color has-text-color " style="font-size:18px;font-style:normal;font-weight:700"> <?php esc_html_e( 'New York', 'patterns-travel' ); ?> </h6>
		<!-- /wp:heading -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default","fontSize":"small"} -->
				<p class="has-default-color has-text-color has-link-color  has-small-font-size" style="margin-top:0px;margin-bottom:0px"> <?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-travel' ); ?> </p>
				<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"}}} -->
		<h6 class="wp-block-heading has-text-color " style="color:#ffffff80;font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase"> <?php esc_html_e( 'Working Hours', 'patterns-travel' ); ?> </h6>
		<!-- /wp:heading -->
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
			<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","fontSize":"medium"} -->
			<h6 class="wp-block-heading has-default-color has-text-color  has-medium-font-size" style="font-style:normal;font-weight:600"> <?php esc_html_e( 'Monday - Friday', 'patterns-travel' ); ?> </h6>
			<!-- /wp:heading -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
				<p class="has-default-color has-text-color has-link-color has-small-font-size"> <?php esc_html_e( 'Our doors are open', 'patterns-travel' ); ?> </p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
				<p class="has-default-color has-text-color has-link-color has-small-font-size"> <?php esc_html_e( '07:00 - 22:00', 'patterns-travel' ); ?> </p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
			<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"default","fontSize":"medium"} -->
			<h6 class="wp-block-heading has-default-color has-text-color  has-medium-font-size" style="font-style:normal;font-weight:600"> <?php esc_html_e( 'Weekends', 'patterns-travel' ); ?> </h6>
			<!-- /wp:heading -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
				<p class="has-default-color has-text-color has-link-color has-small-font-size"> <?php esc_html_e( 'Our doors are open', 'patterns-travel' ); ?> </p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","fontSize":"small"} -->
				<p class="has-default-color has-text-color has-link-color has-small-font-size"> <?php esc_html_e( '07:00 - 22:00', 'patterns-travel' ); ?> </p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%">
		<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"}}} -->
		<h6 class="wp-block-heading has-text-color " style="color:#ffffff80;font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase"> <?php esc_html_e( 'Top destinations', 'patterns-travel' ); ?> </h6>
		<!-- /wp:heading -->
		<!-- wp:navigation {"textColor":"default","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} -->
		<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Italy', 'patterns-travel' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Switzerland', 'patterns-travel' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'America', 'patterns-travel' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Singapore', 'patterns-travel' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Thailand', 'patterns-travel' ); ?>","url":"#"} /-->
	<!-- /wp:navigation -->
	</div>
	<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:gallery {"columns":6,"linkTo":"none","align":"full"} -->
	<figure class="wp-block-gallery alignfull has-nested-images columns-6 is-cropped">
	<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
	<figure class="wp-block-image size-large has-custom-border">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" style="border-radius:5px" />
	</figure>
	<!-- /wp:image -->
	<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
	<figure class="wp-block-image size-large has-custom-border">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-2.jpg" style="border-radius:5px" />
	</figure>
	<!-- /wp:image -->
	<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
	<figure class="wp-block-image size-large has-custom-border">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg" style="border-radius:5px" />
	</figure>
	<!-- /wp:image -->
	<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
	<figure class="wp-block-image size-large has-custom-border">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" style="border-radius:5px" />
	</figure>
	<!-- /wp:image -->
	<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
	<figure class="wp-block-image size-large has-custom-border">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg" style="border-radius:5px" />
	</figure>
	<!-- /wp:image -->
	<!-- wp:image {"lightbox":{"enabled":true},"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
	<figure class="wp-block-image size-large has-custom-border">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-6.jpg" style="border-radius:5px" />
	</figure>
	<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide"><!-- wp:navigation {"textColor":"default","overlayMenu":"never"} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Home', 'patterns-travel' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-travel' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Services', 'patterns-travel' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-travel' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'patterns-travel' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->

	<!-- wp:pattern {"slug":"patterns-travel/copyright"} /-->

	</div>
	<!-- /wp:group --></div>
	<!-- /wp:group -->


<!-- wp:pattern {"slug":"patterns-travel/scroll-to-top-button"} /-->
</div>
<!-- /wp:group -->
