<?php
/**
 * Plugin Name: Books Manager
 * Description: Manage books with CPT and settings.
 * Version: 1.0.0
 * Author: Your Name
 * Text Domain: books-manager
 * Domain Path: /languages/
 * BH Slug: books-manager
 * BH Privacy Path: /views/privacy/
 */

defined( 'ABSPATH' ) || exit;

define( 'BOOKS_MANAGER_FILE', __FILE__ );
define( 'BOOKS_MANAGER_SLUG', 'books-manager' );

require_once __DIR__ . '/vendor/autoload.php';

if ( file_exists( plugin_dir_path( __FILE__ ) . 'vendor/newfold-labs/wp-module-framework/loader.php' ) ) {
	require_once plugin_dir_path( __FILE__ ) . 'vendor/newfold-labs/wp-module-framework/loader.php';
}

add_action(
	'bluehost/framework/register_plugins',
	function () {
		\Bluehost\Framework\framework()->register_plugin( BOOKS_MANAGER_FILE );
	}
);

add_action(
	'bluehost/framework/load_plugin/books-manager',
	function () {
		BooksManager\BooksManagerModule::init();
	}
);

