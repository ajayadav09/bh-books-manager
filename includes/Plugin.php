<?php
namespace BooksManager;

class Plugin {
    public function boot() {
        \add_action('init', [$this, 'init']);
        add_action( 'admin_init', function () {
    } );

        \add_action( 'books_manager/print_reports_tab', function () {
            echo '<div class="bh-framework-ui"><h2>📊 Reports Coming Soon!</h2><p>This is a static report tab for now.</p></div>';
        } );
    }

    public function init() {
        // Register CPT, load settings, etc.
        register_post_type( 'book', [
		'label'         => __( 'Books', 'books-manager' ),
		'public'        => true,
		'show_ui'       => true,
		'show_in_menu'  => true, // required by framework panel
		'supports'      => [ 'title', 'editor', 'thumbnail' ],
	] );
    }
}
