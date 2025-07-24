<?php
namespace BooksManager;

use Bluehost\Framework\Entities\Plugin as FrameworkPlugin;

class BooksManagerModule {

	public static function init(): void {

        (new Plugin())->boot();

        $relative_path = '/includes/panel';

        self::fw_plugin()->register_panel( [
            'page'         => 'books_manager_panel',
            'slug'         => 'books-manager',
            'title'        => 'Books Manager',
            'menu_title'   => 'Books Manager',
            'icon'         => 'book',
            'capabilities' => 'manage_options',
            'tabs'         => [ 'settings', 'books', 'reports' ],
            'options_path' => $relative_path,
        ] );
    }

	/**
	 * Get the framework plugin entity.
	 *
	 * @return FrameworkPlugin
	 */
	public static function fw_plugin(): FrameworkPlugin {
		static $plugin = null;

		if ( is_null( $plugin ) ) {
			$plugin = \Bluehost\Framework\framework()->get_plugin( BOOKS_MANAGER_SLUG );
		}

		return $plugin;
	}
}
