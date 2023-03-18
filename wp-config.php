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
define( 'DB_NAME', 'emprendelab' );

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
define( 'AUTH_KEY',         'bP>qi<W?|n>[b.D7~J}M:kGZ0(O8Q6I*;1A1a#2aY+[meQ86c@~d}rLE7TSh!:?7' );
define( 'SECURE_AUTH_KEY',  'YV{`m/lSI<X4,e{:cN:>Mr<R(e<_cXA*Y74s;+.T4BRb4qrq:!uik}4pe:x(4%JY' );
define( 'LOGGED_IN_KEY',    'C.=J^O7czH(aGrhzQ4E>I7<-WeX+,IZ(+G2Jx|dy#@d@Ty=/;:>Yz~ v#&MuLuw7' );
define( 'NONCE_KEY',        '}?N#+k)^FiUu26yfA~{o?cTaTX-`u?mri^2k,N*dUh5){=P.(`JQ$j:!,XY2)t=d' );
define( 'AUTH_SALT',        'b.4zHb3*H_);4R!N=l+Rgo;i<($mklJxO#UGx.f?FQB(iKGQQ=:4EA%7$*8iTB|:' );
define( 'SECURE_AUTH_SALT', 'fF!5YPT)9Vq~mY|SSy$N]2n{?zUbeE^n@l36l 7E5q{XBli<|wJdGdh147lVEdtc' );
define( 'LOGGED_IN_SALT',   'aN7/1d`1V.>)GL|q_h*+tGnL45SYC.lj]NSycpc}G_M;Wg^c&Bbb4Msb=W4p9LlG' );
define( 'NONCE_SALT',       '*)L.7>mGM`X>eG@bB3f+3?# Ig/6I sH>LIQ#P_8yee0Y +bJZC+q?%5XgEu=Y=U' );

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
