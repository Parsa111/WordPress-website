<?php
/**
 * PG4WP - PostgreSQL for WordPress
 * 
 * This file provides PostgreSQL compatibility for WordPress
 * when using Supabase or other PostgreSQL databases.
 */

// Load the PostgreSQL database driver
require_once(ABSPATH . 'wp-content/plugins/pg4wp/driver_pg.php');

// Override the database class
if (!defined('WP_USE_EXT_MYSQL')) {
    define('WP_USE_EXT_MYSQL', false);
}
