<?php
namespace BooksManager;

class Plugin {
    public function boot() {
        \add_action('init', [$this, 'init']);
    }

    public function init() {
        // Register CPT, load settings, etc.
    }
}
