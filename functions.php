<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Travel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Travel
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_TRAVEL_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_TRAVEL_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_TRAVEL_VERSION', '2.0.0' );
define( 'PATTERNS_TRAVEL_THEME_NAME', 'patterns-travel' );
define( 'PATTERNS_TRAVEL_OPTION_NAME', 'patterns-travel' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_TRAVEL_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_travel_run() {
	new Patterns_Travel();
}
patterns_travel_run();
