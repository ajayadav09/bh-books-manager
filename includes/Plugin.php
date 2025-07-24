<?php
namespace BooksManager;

class Plugin {
    public function boot() {
        \add_action('init', [$this, 'init']);

        // Put this in Plugin::boot() or BooksManagerModule::init()
        add_action( 'books_manager/print_reports_tab', function () {
            $favorites = get_option( 'ajay_bm_saved_favorites', [] );

            echo '<div class="bh-framework-ui">';
            echo '<h2>Your Favorite Books</h2>';

            if ( empty( $favorites ) ) {
                echo '<p>No books added yet.</p>';
            } else {
                echo '<ul>';
                foreach ( $favorites as $book ) {
                    echo '<li>' . esc_html( $book ) . '</li>';
                }
                echo '</ul>';
            }

            echo '</div>';
        } );



        add_action( 'bluehost/framework/panel_controller/books_manager_panel/after_update_options', function () {
            $new_book = trim( get_option( 'ajay_bm_favorite_book', '' ) );

            if ( $new_book === '' ) {
                return;
            }

            $favorites = get_option( 'ajay_bm_saved_favorites', [] );

            if ( ! in_array( $new_book, $favorites, true ) ) {
                $favorites[] = $new_book;
                update_option( 'ajay_bm_saved_favorites', $favorites );
            }

            // Optional: clear field after save
            update_option( 'ajay_bm_favorite_book', '' );
        } );

    }

    public function init() {
        // Register CPT, load settings, etc.
        register_post_type( 'book', [
		'label'         => __( 'Books', 'books-manager' ),
		'public'        => true,
		'show_ui'       => true,
		'show_in_menu'  => true,
		'supports'      => [ 'title', 'editor', 'thumbnail' ],
	] );
    }
}
