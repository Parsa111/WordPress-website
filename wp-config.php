<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - Supabase PostgreSQL ** //
define( 'DB_NAME', 'your_supabase_database_name' );
define( 'DB_USER', 'your_supabase_username' );
define( 'DB_PASSWORD', 'your_supabase_password' );
define( 'DB_HOST', 'your_supabase_host.supabase.co' );
define( 'DB_PORT', '5432' );

// Database charset and collation
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// PostgreSQL for WordPress (PG4WP) configuration
define( 'PG4WP_HOST', DB_HOST );
define( 'PG4WP_PORT', DB_PORT );
define( 'PG4WP_USER', DB_USER );
define( 'PG4WP_PASSWORD', DB_PASSWORD );
define( 'PG4WP_NAME', DB_NAME );
define( 'PG4WP_DEBUG', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',     'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',         'put your unique phrase here' );
define( 'SECURE_AUTH_SALT',  'put your unique phrase here' );
define( 'LOGGED_IN_SALT',    'put your unique phrase here' );
define( 'NONCE_SALT',        'put your unique phrase here' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 */
$table_prefix = 'wp_';

/**
 * WordPress debug mode.
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/**
 * Disable file editing in WordPress admin.
 */
define( 'DISALLOW_FILE_EDIT', true );

/**
 * Disable automatic updates.
 */
define( 'AUTOMATIC_UPDATER_DISABLED', true );

/* That's all, stop editing! */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
