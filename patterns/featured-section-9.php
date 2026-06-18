<?php
/**
 * Title: Featured Section 9
 * Slug: patterns-travel/featured-section-9
 * Categories: contact, call-to-action
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Travel
 * @subpackage Patterns_Travel/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"140px"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:140px">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"120px"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"primary","fontSize":"x-small"} -->
				<h6 class="wp-block-heading has-text-align-left has-primary-color has-text-color has-x-small-font-size"
					style="font-style:normal;font-weight:400;letter-spacing:1px;text-transform:uppercase"><?php esc_html_e( 'Get In Touch', 'patterns-travel' ); ?>
				</h6>
				<!-- /wp:heading -->

				<!-- wp:heading {"className":"has-text-align-left has-base-color has-text-color has-x-large-font-size"} -->
				<h2 class="wp-block-heading has-text-align-left has-base-color has-text-color has-x-large-font-size">
					<?php esc_html_e( 'We’d love to hear from you.', 'patterns-travel' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
				<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.4","fontSize":"17px"}},"textColor":"tertiary"} -->
				<p class="has-text-align-left has-tertiary-color has-text-color"
					style="margin-bottom:var(--wp--preset--spacing--40);font-size:17px;line-height:1.4"><?php esc_html_e( 'Send us a message and we’ll respond as soon as possible', 'patterns-travel' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:shortcode -->
			<?php esc_html_e( 'Add Contact form shortcode', 'patterns-travel' ); ?>
			<!-- /wp:shortcode -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","customGradient":"linear-gradient(90deg,rgb(255,255,255) 25%,rgba(0,0,0,0) 0%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"5px"}},"layout":{"type":"default"}} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left"
				style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:80vh">
				<span aria-hidden="true"
					class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient"
					style="background:linear-gradient(90deg,rgb(255,255,255) 25%,rgba(0,0,0,0) 0%)"></span><img
					class="wp-block-cover__image-background"
					src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg"
					data-object-fit="cover" />
				<div class="wp-block-cover__inner-container">
					<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"5px"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"320px"}} -->
					<div class="wp-block-group alignfull has-primary-background-color has-background"
						style="border-radius:5px;min-height:100%;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"}}} -->
							<h6 class="wp-block-heading has-text-color"
								style="color:#ffffff80;font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase">
								<?php esc_html_e( 'Our Locations', 'patterns-travel' ); ?></h6>
							<!-- /wp:heading -->

							<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"default","fontSize":"medium"} -->
							<p class="has-default-color has-text-color has-link-color has-medium-font-size"
								style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-travel' ); ?></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","wideSize":"320px","contentSize":"320px"}} -->
						<div class="wp-block-group"><!-- wp:columns -->
							<div class="wp-block-columns">
								<!-- wp:column {"width":"50%","layout":{"type":"constrained"}} -->
								<div class="wp-block-column" style="flex-basis:50%">
									<!-- wp:group {"layout":{"type":"constrained"}} -->
									<div class="wp-block-group">
										<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
										<h6 class="wp-block-heading has-text-color"
											style="color:#ffffff80;margin-bottom:var(--wp--preset--spacing--10);font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase">
											<?php esc_html_e( 'Toll Free Number', 'patterns-travel' ); ?></h6>
										<!-- /wp:heading -->

										<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"15px"}},"textColor":"default"} -->
										<p class="has-default-color has-text-color has-link-color"
											style="margin-top:0px;margin-bottom:0px;font-size:15px;font-style:normal;font-weight:600">
											<?php esc_html_e( '(629) 555-0129', 'patterns-travel' ); ?></p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
								</div>
								<!-- /wp:column -->

								<!-- wp:column {"width":"50%","layout":{"type":"constrained"}} -->
								<div class="wp-block-column" style="flex-basis:50%">
									<!-- wp:group {"layout":{"type":"constrained"}} -->
									<div class="wp-block-group">
										<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
										<h6 class="wp-block-heading has-text-color"
											style="color:#ffffff80;margin-bottom:var(--wp--preset--spacing--10);font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase">
											<?php esc_html_e( 'Need live support?', 'patterns-travel' ); ?></h6>
										<!-- /wp:heading -->

										<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"textColor":"default"} -->
										<p class="has-default-color has-text-color has-link-color"
											style="margin-top:0px;margin-bottom:0px;font-size:16px;font-style:normal;font-weight:600;line-height:1.2">
											<?php esc_html_e( 'info@example.com', 'patterns-travel' ); ?></p>
										<!-- /wp:paragraph -->
									</div>
									<!-- /wp:group -->
								</div>
								<!-- /wp:column -->
							</div>
							<!-- /wp:columns -->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:heading {"level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","fontSize":"13px"},"color":{"text":"#ffffff80"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
							<h6 class="wp-block-heading has-text-color"
								style="color:#ffffff80;margin-top:var(--wp--preset--spacing--20);font-size:13px;font-style:normal;font-weight:400;text-transform:uppercase">
								<?php esc_html_e( 'Follow us on social media', 'patterns-travel' ); ?></h6>
							<!-- /wp:heading -->

							<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
							<div class="wp-block-group" style="margin-top:25px">
								<!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
								<ul
									class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
									<!-- wp:social-link {"url":"#","service":"twitter"} /-->

									<!-- wp:social-link {"url":"#","service":"instagram"} /-->

									<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
								</ul>
								<!-- /wp:social-links -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
