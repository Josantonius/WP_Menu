<?php
/**
 * Add menu or submenus in WordPress.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @package   Josantonius\WP_Menu
 * @copyright 2017 - 2018 (c) Josantonius - WP_Menu
 * @license   https://opensource.org/licenses/MIT - The MIT License (MIT)
 * @link      https://github.com/Josantonius/WP_Menu
 * @since     1.0.4
 */

require __DIR__ . '/../vendor/autoload.php';

/**
 * Load theme and plugins for testing environment.
 */
function _manually_load_environment() {
	switch_theme( 'twentyseventeen' );
	require __DIR__ . '/class-sample-plugin.php';
}

define( 'WP_CORE_DIR', '/tmp/wordpress/' );

define( 'WP_TESTS_DIR', '/tmp/wordpress-tests-lib' );

require_once WP_TESTS_DIR . '/includes/functions.php';

tests_add_filter( 'muplugins_loaded', '_manually_load_environment' );

require_once WP_TESTS_DIR . '/includes/bootstrap.php';
