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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
// define( 'DB_HOST', '127.0.0.1:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

// for dev
define( 'WP_HOME', 'http://52.169.70.157/wordpress' );

define( 'WP_SITEURL', 'http://52.169.70.157/wordpress' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2k%V~7>bHx@nCXWMXApshI);4KQ bm]|-OYzYa@j&@./}vPUc{e+-fYRwrrD6G1[' );
define( 'SECURE_AUTH_KEY',  'OnyM-dX)J*HTROgKJ!!Hff=hPX6X)mf9Z+M+#p=f&/|o^V1v~1 g;+Nt}j|K.dF.' );
define( 'LOGGED_IN_KEY',    'q)8daV:d>@1l> H;J/GrRo64YP>K3A+3wx`xUnnB7a:KFX3Ti?W.CE {((_$AAv<' );
define( 'NONCE_KEY',        '8ef:$<x%lw* SWeZ+ ( &l#l_nl.Z(V@jOfRL}$l@ZgGA {ra3t6BPrI@ZE*oQ/v' );
define( 'AUTH_SALT',        'l:(G:>P1^3z!#myRlKrs5V:1#i0Y[PX*,=<2%/?b4^-0#~{cUj).:B-_2IkTU[v>' );
define( 'SECURE_AUTH_SALT', 'nDX^oX7:[G*Rx(oKy%:={rQhJHAD|l0.{V5;BcHN!=-BNPGVuDBlyxaZGOYYj.rZ' );
define( 'LOGGED_IN_SALT',   'v|;wX?WZCQ2IC/kAX5W~#R?]ZCB9~OZco+6}NIt,K G{b1(*&k*,?=__yG*b,iWI' );
define( 'NONCE_SALT',       'vK,dpv?=n|i4MtHN<0jk~VIs+u?C~-`|8(C?v6ZRc9xYODGuF<?;l?i.KY%!L!3T' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
