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
define( 'DB_NAME', 'woocommerce_audio' );

/** MySQL database username */
define( 'DB_USER', 'woocommerce' );

/** MySQL database password */
define( 'DB_PASSWORD', 'woocommercepass' );

/** MySQL hostname */
define( 'DB_HOST', '0.0.0.0' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0e06c6427040f821683c974c68f690e6020c634c11a3235ee6eeecdade9430d7' );
define( 'SECURE_AUTH_KEY',  '563ad1b4edf0a6864b7be55c358c582af2a68872932eaf35414ef6d6286da34d' );
define( 'LOGGED_IN_KEY',    '2d6aedd09988d892a023693aec129812c814f35a381a61fb01175e580d2dfb66' );
define( 'NONCE_KEY',        'e31c0cfaf1a6778785a92031e527a76a9a20d17c08b701e421ddcee80e1e47a1' );
define( 'AUTH_SALT',        '4840030f35afc1a659a1270be700d7881637110b31812f7ad9a38c61ecada5a4' );
define( 'SECURE_AUTH_SALT', 'bb958b4f8c2ad0efcbea95118b8f321ca96375aaeb9b4b454d2648226b2ed236' );
define( 'LOGGED_IN_SALT',   'b73df4e8bb21992e88de8e81fa6b89a7e7469d836267846222a20af9818d1f2d' );
define( 'NONCE_SALT',       '93455112c959ee5cc7c747799097c0b33528573131aa5f702aadd17fdd53dfd6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
