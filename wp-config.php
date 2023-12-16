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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xs682415_wp4' );

/** Database username */
define( 'DB_USER', 'xs682415_piw65' );

/** Database password */
define( 'DB_PASSWORD', '4c74gq9mib' );

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
define( 'AUTH_KEY',         'F=Fr=5E|^!z:jJs{Te*ehMD|pi+JDs>^m:aWb6G+rQU5L@zNze=u}b!zUhqsoB5b' );
define( 'SECURE_AUTH_KEY',  'y|U[m2;jWwGuABCZ-EYrF1BJ4zu;CCO/mC:D`0G/)&|,A_^rVa<`QmEXK&-1eHQ+' );
define( 'LOGGED_IN_KEY',    'oUO1L22<xnGNK$6}G*FP3yJw<9o6/d#5{T9!`.-ZFA!Af<jzaJ6%x}ONiYAF+3&|' );
define( 'NONCE_KEY',        '}i@GQ{ymsC8dp>54<=.0r.R(R*=ot{zv[B*6J7?Y]XjAPYW=^;P0oRbm>wn:  r*' );
define( 'AUTH_SALT',        'BL&By%Cyh*<s$>Qq^)]& &76E]cBLt4y;DvRh_>uyeb7.+2J9E?@Y.b}:|#|`pni' );
define( 'SECURE_AUTH_SALT', 'H:1~gq<z4AmPfWi~Z_Qa=;OyAmMN@KdZsoB:-3Tu%=C8}>R!G%9hZH-Ozu_~vIPd' );
define( 'LOGGED_IN_SALT',   ' P]1!KxI@#T*]88D`Shj]l@/G0H(m;$ldv!dAHvlI;{0x,g-IFBJxR.I^Z%(SPtk' );
define( 'NONCE_SALT',       'eyc|!1+:(}y>/pKQ*ngrJ$/Us%AT/x2iebI1jDoka2C$f=1&!Z~KTn5(dY%D|+^ ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
