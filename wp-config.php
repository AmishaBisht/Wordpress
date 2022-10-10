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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-X1B8:a|Xqgx4Z9q@NUFk2rrE.SzKm;= *K-}p%_erbttF*#V::Jcm-6LK^G@vpC' );
define( 'SECURE_AUTH_KEY',  'InRP7bI2] sevj1qEhl|PVh3=Qs&aF:]}XD</p6Y@)I)|NkQvSvH/&t5Dj2Pi#-N' );
define( 'LOGGED_IN_KEY',    'y)eAoj8k}<;VUHSI?xL]ygZ/2x7C]1DZ|1v6W`%$w!nxm3qX~yUy:D<zOQ6}QR[ ' );
define( 'NONCE_KEY',        ':8n^=m)Cskak%6v(9y1hBh(Fmt3<84h1<2 )59$&0>sfzF!8H)[n3$p*)R=mm#6m' );
define( 'AUTH_SALT',        '/Jov}g$[&WAw(3xS0i?:0KMTVD^M`TRAN9#?/;+=r>?QWtJLLFex`wc#y3&mNL/1' );
define( 'SECURE_AUTH_SALT', '>dquZ,Rz3T#jyg3{Y.buE]SJ(UtH*9q,lvdT5.3g3O-Q|!]iKVQn9z!l{-kSNtqw' );
define( 'LOGGED_IN_SALT',   '<(]e#:SKxLM_Af% 4Ptwf6NA~BE`AVpX^-g,KIhTm7ip@8y)(kj~WZq6B`:uD@_s' );
define( 'NONCE_SALT',       'pD_ XJv]fP+fPv}J bKaI|h`zrEK_-u?w,3RxSS4c||7F#BF==EMrTRK*vw@W}sy' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
