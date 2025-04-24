<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', "bargeban_amalpanah" );
/** Database username */
define( 'DB_USER', "bargeban_amalpanah" );
/** Database password */
define( 'DB_PASSWORD', "@Ia09155739780" );
/** Database hostname */
define( 'DB_HOST', "localhost" );
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
define( 'AUTH_KEY',         'KI+Yf[*ZAEE&[B a0,>~C$}b_c#nc-#FRDqy[t4A:98(wqUB=hKcugL;i-IHeXly' );
define( 'SECURE_AUTH_KEY',  'Ta3pQ&|+;dw/onrBHgtN^RyJg9Y,HiH9P[hgm?d(x|E^9(m-_,gOzfv4OXkf?q0V' );
define( 'LOGGED_IN_KEY',    '1L=@D>O[w9k,`O i.rxvW7#oX5QISelaQ3qJ~x.kX,KY@;RM *-8<=B!c>D5|7j>' );
define( 'NONCE_KEY',        'uI-v[=zomDGc(*0[B[u~$AE-_.D*|cqE`/G.T?g$vw7O=7G#}#V|z+%aL1$5B!2=' );
define( 'AUTH_SALT',        'DwwjPb%!rFTqC/$|wv7}J%;*4F?^?NU_#dI/fZi.y /&YiF3Fv?O%9?JhDfvXA9a' );
define( 'SECURE_AUTH_SALT', 'f5A]P4QQ#7GF!)M_7nIVSAHXdg+e,L&gRy=E-(bLI&Fk=QaM<.M|/`,sh?yTiQki' );
define( 'LOGGED_IN_SALT',   '4165=>A[yWER}zz]]Z,f!!qoV /H-0rh-SvW?yOIc_53Q`{53~6w+Ai$g?Zg#}1l' );
define( 'NONCE_SALT',       '{CiDe_hb;cmA}~I){1Rxc*@SdphQ-&kx9eGtD[<vXlXv7zj0k*q=a~F>.>|Zl/q0' );
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
define( 'WP_DEBUG', true );
/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_MEMORY_LIMIT', '2048M' );
set_time_limit(100);
define( 'WP_SITEURL', 'https://amalpanah.ir' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';