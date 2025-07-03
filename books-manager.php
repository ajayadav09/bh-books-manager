<?php
/**
 * Plugin Name: Books Manager
 * Description: Manage books with CPT and settings.
 * Version: 1.0.0
 * Author: Your Name
 */

defined('ABSPATH') || exit;

require_once __DIR__ . '/vendor/autoload.php';

use BooksManager\Plugin;

$plugin = new Plugin();
$plugin->boot();
