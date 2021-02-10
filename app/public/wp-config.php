<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tBufY6j8vNCupX8UBHMS/Rac7/HFZiaHyT+6b4Uvg4dGD8GL3YBh10TWLtYVTDVszXuoWbs1Pbr9rvCQaWhmgA==');
define('SECURE_AUTH_KEY',  'Y8AS9xwvTrAWJ8wQzM/8bAq0QDHnU+F0NI1bKJve38WRvP4AkR7kFjZcnm7p28KWCnc6ZVOMQ+8gbxyjVjl0fw==');
define('LOGGED_IN_KEY',    'BoKzDQlZ9R/TKwpLnbrQzWjjjG8qWgwWRoleYdh9t/FMGaktvA32YdidYTHjwp6iPyFZt+LZZThgHJh5uUUNFg==');
define('NONCE_KEY',        '6A2K31+RXNm8eVGxSH0MDNCcy65k3izun3GYXimHbgASxp8FIk/Df1bHwqFoLXQIe6irTXlj9exOUfYX8jtfBA==');
define('AUTH_SALT',        'NTwNSBreJQuAkiB2ShPS1iRJUuTXGr7/Qb3GVmWPY7sGm4VGgYqMzKu4+g/2GFz+z0aF3yhqGn1faLreCT0rNA==');
define('SECURE_AUTH_SALT', 'nM8d7KhEUYNgU9wjcFQXLpaHLs7KvlPQ2GeymDkY3gMcs8NW8gSkqc16B7pgBFfBbPQz/2J68qFg9Tfn9z9BWQ==');
define('LOGGED_IN_SALT',   'LWvKZGbDh1Y8kfvYCOb4Q2ncfAAfy4HvGAFWVIrxkf1ZUFhHG9jiYy+GS7pdku9H7NXJoRk82BJ7NFhwP2tZ2A==');
define('NONCE_SALT',       'EpiB7eFZge5V02dXGTAtI2M/ocDcnCm2w6YFuJ1fCim1SkP5NRC3LVDhLfVqjaBUJa5cwQPEQrZYODfTtb5b3Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
