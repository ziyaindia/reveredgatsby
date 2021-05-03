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
define( 'DB_NAME', 'reveredt_wp534' );

/** MySQL database username */
define( 'DB_USER', 'reveredt_wp534' );

/** MySQL database password */
define( 'DB_PASSWORD', '8Sj2-pf-y1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '9thn7cfybcosqramx9hwusnaowymmauopy6mysmnpsrznckqzpr6fssw2bpnvyme' );
define( 'SECURE_AUTH_KEY',  'wtvitwzgowaggo3lsneve8afl51yd5drjfd5k7lx79ghp6u1dn9tisltt6oexpnk' );
define( 'LOGGED_IN_KEY',    'u6enohjqnsjddcgyuxokabax5q31nf3ywjshgjg8z3ifpoykymgunbflsazdljbd' );
define( 'NONCE_KEY',        'atskblqpugoct5gd1mwc9b25sc3o5tgth5urjvpohemwtyby9xmfrrgen5ylslum' );
define( 'AUTH_SALT',        'venugthgluwjfqjtfic1qmfrqgwfgnhjblhukr2nm130m5wtgd2mlvh9v7qohpha' );
define( 'SECURE_AUTH_SALT', 'bjtsbswj09fqakbit4orf7o5w9sivdtxrw2wexorrx3efc3usige8w6qfbzjxjmg' );
define( 'LOGGED_IN_SALT',   'y3ktzsdtxb6mvtj0giavfigfm7g3xn8iu3kwphqgtwyykf2gv70anwlvlklsv7fv' );
define( 'NONCE_SALT',       'x2wammwyr9l6jg33trzowkiyna1oaccwarkyocmwnutr5xobjswlgto15ohed3yk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp97_';

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
