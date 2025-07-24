<?php
namespace BooksManager;

use Bluehost\Framework\Entities\Plugin as FrameworkPlugin;

class BooksManagerModule {

	public static function init(): void {

        (new Plugin())->boot();

        $path = plugin_dir_path( __FILE__ ) . 'panel';
        $relative_path = '/includes/panel';
        error_log( 'tab_options_paths = ' . $path );
        error_log( 'settings.php exists? ' . ( file_exists( $path . '/settings.php' ) ? 'yes' : 'no' ) );
        error_log( 'books.php exists? ' . ( file_exists( $path . '/books.php' ) ? 'yes' : 'no' ) );
        error_log( 'reports.php exists? ' . ( file_exists( $path . '/reports.php' ) ? 'yes' : 'no' ) );

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
