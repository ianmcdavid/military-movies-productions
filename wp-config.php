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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home3/militbs6/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'militbs6_WPJB2');

/** MySQL database username */
define('DB_USER', 'militbs6_WPJB2');

/** MySQL database password */
define('DB_PASSWORD', '&>^$CoJ?#*nmzpcZ-');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', '802b8a1a0054528cfb7906fb1194436e3a05aa388e1428a26e5b8ebc6f8dca34');
define('SECURE_AUTH_KEY', 'eedd1634c49993e2f789f70d2d5667c474d63f9b2aa32fe74518f9e00a1e3ff6');
define('LOGGED_IN_KEY', 'ee67842a32ed8b004271b6988d64b8c5654c76f1393e40342c59af1be1bc48f9');
define('NONCE_KEY', '7f2d97edad7e9b3e43f122e8220aeb6088bd073250cb18e5a489a3cc8d143527');
define('AUTH_SALT', 'df32394834a3b17fb82d1e3a6e24849e856376b94fb14558ccf510c3ce735327');
define('SECURE_AUTH_SALT', 'd6c8473cd5e54df97e1d68e60949b5dc7c0e72760b4abd2461b627b8f424a1be');
define('LOGGED_IN_SALT', 'ed139b5ba05a0f17136ce99f26bceff3f7ca64f72e9c30a79534b5819b86a256');
define('NONCE_SALT', 'db64601055916f879129aca09b2cf2522747114cd46426fc2070d8bd5a8139d1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'JVu_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
