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
define( 'AUTH_KEY',          'V(,IS9LFQN)Qsvvr;(BJ{u|M4b$jy`36v8XBK*JEuS;JZTwV$|=W[^Y#c*CBc<#f' );
define( 'SECURE_AUTH_KEY',   '~co6aZbu_qcFa#znpD&4$NK{J{it2>a!Q^*)L>7F4XHU>sQf!s5,c~@H[j3`hy b' );
define( 'LOGGED_IN_KEY',     '>x<0M/_?<aC$kURxk{vL ?m%Ua/yl)S&e8.@,-v E@eiUYkq1Vw:dC]#B}ZW4SF4' );
define( 'NONCE_KEY',         'f_N:Z2wazGFJ.X6gDz00v.QIQ^PFhsHXau/LFe*UQov2>q2_6L@GZrF+C!<aGJ F' );
define( 'AUTH_SALT',         'p10]l@?MIns!laRo]5${S$!HP (K2d=P&JP23pRIDy3R{x+D4&.s~YyOQ;^%tZ9q' );
define( 'SECURE_AUTH_SALT',  '=}g2Q6)e]m7-f/%I}ns,z-4y1pa?Y)-d2&.KiR~QrMo8Llt2-~dW1i::0p}y74b<' );
define( 'LOGGED_IN_SALT',    '4 37naH)h} $#*yMUmL^qEF[b*=Sbh,!nAh{DDOwuiELm{R_7:mHE|X9v2&S?7G&' );
define( 'NONCE_SALT',        '?z!>^.?o~Y#ik47T% 21ah<}s8jKjsGABPly|+<s~cP^ VxjSfI`Yx5.+>4%AFL+' );
define( 'WP_CACHE_KEY_SALT', '^fEC|8YMGm`K!#X|m]O){B:n4ae(7!:V2]gU8nW`f&cHpq0|.)q,&59s%GQ JIDW' );


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
