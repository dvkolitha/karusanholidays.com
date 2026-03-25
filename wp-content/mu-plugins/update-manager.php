<?php

/**
 * Plugin Name: Update Manager
 * Description: Disables updates for plugins, themes and core files that are managed on this platform.  They are managed by your hosting provider.
 * Version: 0.1
 * Class Bluehost_Plugin_Management
 */
class Bluehost_Plugin_Management {

	/**
	 * List of plugins that shouldn't be manually updated or deleted.
	 *
	 * @var string[]
	 */
	protected static $plugins = array(
		'wordpress-seo/wp-seo.php',
		'jetpack/jetpack.php',
		'bluehost-wordpress-plugin/bluehost-wordpress-plugin.php',
		'optinmonster/optinmonster.php',
		'optinmonster/optin-monster-wp-api.php',
		'redis-cache/redis-cache.php',
		'woocommerce/woocommerce.php',
		'wpforms-lite/wpforms.php',
		'akismet/akismet.php',
	);

	protected static $themes = array(
		'twentytwenty',
		'twentynineteen',
		'twentyseventeen',
		'twentysixteen',
	);

	/**
	 * Adds required WordPress filters.
	 */
	public static function initialize() {
		add_filter( 'site_transient_update_plugins', array( __CLASS__, 'prevent_plugin_updates' ), 11 );
		add_filter( 'site_transient_update_themes', array( __CLASS__, 'prevent_theme_updates' ) );
		add_filter( 'plugin_action_links', array( __CLASS__, 'prevent_plugin_deletions' ), 10, 2 );
		add_filter( 'theme_action_links', array( __CLASS__, 'prevent_theme_deletions' ), 10, 2 );
		add_filter( 'site_transient_update_core', array( __CLASS__, 'prevent_core_updates') );
	}

	/**
	 * Prevent manual core updates.
	 *
	 * @param stdClass $transient The core update transient.
	 *
	 * @return stdClass
	 */
	public static function prevent_core_updates( $transient ) {
		global $wp_version;
		$current = new stdClass;
		$current->updates = array();
		$current->version_checked = $wp_version;
		$current->last_checked = time();

		return $current;
	}

	/**
	 * Prevent manual plugin updates for select plugins.
	 *
	 * @param stdClass $transient The plugin update transient.
	 *
	 * @return stdClass
	 */
	public static function prevent_plugin_updates( $transient ) {
		foreach ( self::$plugins as $plugin ) {
			if ( isset( $transient->response[ $plugin ] ) ) {
				$transient->no_update[ $plugin ] = $transient->response[ $plugin ];
				unset( $transient->response[ $plugin ] );
			}
		}

		return $transient;
	}

	/**
	 * Prevent manual theme updates for select plugins.
	 *
	 * @param stdClass $transient The theme update transient.
	 *
	 * @return stdClass
	 */
	public static function prevent_theme_updates( $transient ) {
		foreach ( self::$themes as $theme ) {
			if ( isset( $transient->response[ $theme ] ) ) {
				$transient->no_update[ $theme ] = $transient->response[ $theme ];
				unset( $transient->response[ $theme ] );
			}
		}

		return $transient;
	}

	/**
	 * Prevent manual plugin deletions for select plugins.
	 *
	 * @param array  $actions     The available actions.
	 * @param string $plugin_file The plugin file name.
	 *
	 * @return array
	 */
	public static function prevent_plugin_deletions( $actions, $plugin_file ) {
		if ( array_key_exists( 'delete', $actions ) && in_array( $plugin_file, self::$plugins, true ) ) {
			unset( $actions['delete'] );
		}

		return $actions;
	}

	/**
	 * Prevent manual theme deletions for select themes.
	 *
	 * @param array  $actions     The available actions.
	 * @param string $plugin_file The theme file name.
	 *
	 * @return array
	 */
	public static function prevent_theme_deletions( $actions, $theme_file ) {
		if ( array_key_exists( 'delete', $actions ) && in_array( $theme_file, self::$theme, true ) ) {
			unset( $actions['delete'] );
		}

		return $actions;
	}

}

Bluehost_Plugin_Management::initialize();
