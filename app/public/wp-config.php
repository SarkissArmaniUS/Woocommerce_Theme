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
define( 'AUTH_KEY',          'VRpI^9l4P8b};mj!p8ElVG!g,nS/1v@MC[d$G|Xcu$_Z+uVbJ(Q%St?zncjpPd]y' );
define( 'SECURE_AUTH_KEY',   'YjO(6}$CbH-nlK.,c0nBYT>|Ln,l/n SlTVU{Rbi&yPu0$cB_~dfQW>|9Xh.cRdq' );
define( 'LOGGED_IN_KEY',     '|Z,T8r6(RFW*<`$:6]@k<*.J5ZgrH#q`^{ckCGYudY3sf!_Q3YR@!9]>0[=*8iZ^' );
define( 'NONCE_KEY',         '+Xe3eP*UD>Wt`*xF!gZLYo{DY_@9qHSGOF<38=Ud|[&%<w+9[BnDb<@WA3Uh8]Ne' );
define( 'AUTH_SALT',         'LS|LZ-sBTvkG}+g&_ +asgrybvG)e)4~oJ4o5?g#j k;FIkK@]uv_[#),{jj!`Qv' );
define( 'SECURE_AUTH_SALT',  'wd83)wLVk=<w-?QAo_yn}V=LLC!sD3pMb||Ny&r{{dwAcja+]f+k%:#K.8oZqaAb' );
define( 'LOGGED_IN_SALT',    ')]3U;VKB1U@5M`6NneI#)/GxuS[ 132q83#Oq`>cUW>}Cwy[:_j+~]h+[j3*@QZG' );
define( 'NONCE_SALT',        '=jN?HRFO-(|I^2;s;JeAjuxU?KbrCZ,_-AS}@C[b}@_HA0DGg!RdIEAH- .s1+pp' );
define( 'WP_CACHE_KEY_SALT', 'qDQy{?$`g[h`^jzs,5Np4%=wt+yoc#|IExA2<4Uq|KJzVB!GYR(,$LCNrf~DJnF8' );


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
