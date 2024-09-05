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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']&PGW]@EPtYwFJ+foHDMG.[RhP1WhQ^,^:2r$k1tY?@!Ap}5/|PI)+Apo{2#~)>.' );
define( 'SECURE_AUTH_KEY',   'oG= yX)L(a}m=L0;GUM|+o#H6,7.(wheGZ_<C<cdd`O0IJi]jhCm9TGzoYTy-dwc' );
define( 'LOGGED_IN_KEY',     'P9+}DZ?!idjP]o*Zci)ll|WlLNGdxr6=gHF%]YEeZ0@OYU`Kufz80`P{>&CWSJ^_' );
define( 'NONCE_KEY',         'nnOerYa8gQL+#>,X,HK>U|7>QTHGSzSFAfZ09e(JJAXQ4XMrc4[Zi]He,:*o;|fx' );
define( 'AUTH_SALT',         'y`uR5RHP0RFTL*q{lEx`fS#1`#uKJ0sP<0G2;!&ZIlfw)[}`QcCyCE}&&U)itobG' );
define( 'SECURE_AUTH_SALT',  '}-9h;Xv8vprFSeG_W&2pBjAE5#<T#arlmqq8XJ~fQ|`Ul-v!GMK]_#)a.W@-u}4$' );
define( 'LOGGED_IN_SALT',    ',qGrd@~WpgI6&S!jb6`k/@<=0:-+5<>0ndJ0{*#z8a~@3*j{8d1|gh:,pXS%B+`.' );
define( 'NONCE_SALT',        '*j.VQ!:]@:S4k{3RRt{@7Iuq9H$Up5Zb$|~p6JlOC5*e#$L]A:Sj1llyP}_V/#Hh' );
define( 'WP_CACHE_KEY_SALT', 'xIQFl^#DgQ$l^oFV(kI!U4$8Z!xp;,ix>07)kVn>>Mi0GzE9R|U:8Lc54l<zscSW' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
