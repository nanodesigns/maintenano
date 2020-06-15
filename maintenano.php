<?php
/**
 * WordPress Plugin Header.
 *
 * @package           Maintenano
 * @author            nanodesigns <info@nanodesignsbd.com>
 * @license           GPL-2.0+
 * @link              https://nanodesignsbd.com/
 *
 * @wordpress-plugin
 * Plugin Name:       Maintenano
 * Plugin URI:        https://github.com/nanodesigns/maintenano/
 * Description:       A simplest maintenance mode plugin for the developers.
 * Version:           0.0.1
 * Author:            nanodesigns
 * Author URI:        https://nanodesignsbd.com/
 * Requires at least: 4.7.0
 * Tested up to:      5.4.2
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       maintenano
 * Domain Path:       /i18n/languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Main Class: Maintenano.
 */
class Maintenano {
	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'template_include', array( &$this, 'template_include' ), PHP_INT_MAX );
		add_action( 'admin_notices', array( $this, 'admin_notice' ) );
	}

	/**
	 * Include the Maintenance page.
	 *
	 * Load order:
	 * - {your_theme}/maintenano/view.php
	 * - {this_plugin}/templates/view.php
	 *
	 * @param string $template Default template.
	 *
	 * @return string $template Template from the plugin.
	 */
	public function template_include( $template ) {
		/**
		 * -----------------------------------------------------------------------
		 * HOOK : FILTER HOOK
		 * maintenano_allowed_capability
		 *
		 * Hook to change the allowed capability for the site when the maintenance
		 * mode is active.
		 * -----------------------------------------------------------------------
		 */
		$capability = apply_filters( 'maintenano_allowed_capability', 'manage_options' );

		if ( ! current_user_can( $capability ) ) {
			// Default view from the plugin.
			$template = plugin_dir_path( __FILE__ ) . '/templates/view.php';

			// Modified view from the theme.
			$theme_template = locate_template( '/maintenano/' . 'view.php' );
			if ( $theme_template ) {
				$template = $theme_template;
			}

			/**
			 * -----------------------------------------------------------------------
			 * HOOK : FILTER HOOK
			 * maintenano_template
			 *
			 * Hook to change the template going to be displayed when maintenace mode
			 * is active.
			 * -----------------------------------------------------------------------
			 */
			$template = apply_filters( 'maintenano_template', $template );
		}

		return $template;
	}


	/**
	 * Warn the administrator.
	 *
	 * Display an admin notice to warn the administrators.
	 */
	public function admin_notice() {
		echo '<div class="notice notice-error" role="alert">';
			echo '<p><strong>ATTENTION:</strong> The site is under <strong>maintenance mode</strong>. Deactivate &lsquo;Maintenano&rsquo; plugin to make the site live again.</p>';
		echo '</div>';
	}

	/**
	 * Translation-ready
	 * Make the plugin translation-ready.
	 *
	 * Note:
	 * the first-loaded translation file overrides any
	 * following if the same translation is present.
	 *
	 * Locales can be placed in:
	 *      - WP_LANG_DIR/maintenano/LOCALE.mo
	 *      - WP_LANG_DIR/plugins/maintenano-LOCALE.mo
	 */
	public function load_textdomain() {
		$locale = is_admin() && function_exists( 'get_user_locale' ) ? get_user_locale() : get_locale();

		/**
		 * -----------------------------------------------------------------------
		 * WP FILTER HOOK
		 * plugin_locale
		 *
		 * WordPress' core filter hook to filter a plugin's locale.
		 *
		 * @link https://developer.wordpress.org/reference/hooks/plugin_locale/
		 *
		 * @param string $locale The plugin's current locale.
		 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
		 * -----------------------------------------------------------------------
		 */
		$locale = apply_filters( 'plugin_locale', get_locale(), 'maintenano' );

		unload_textdomain( 'maintenano' );
		load_textdomain(
			'maintenano',
			WP_LANG_DIR . "/maintenano/{$locale}.mo"
		);

		load_plugin_textdomain(
			'maintenano',
			false,
			plugin_basename( dirname( __FILE__ ) ) . '/i18n/languages'
		);
	}

}

new Maintenano;
