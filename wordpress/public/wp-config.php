<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_store1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         'V ?6d|?/9*K[:4xoaR6SI[^Pb7d5[`ptvogfb;[[?,rG<AZdO*8Ddz2<W+D_oh3.' );
define( 'SECURE_AUTH_KEY',  'w;|8[Ng^59;x6~8-EIeMcRG*/Wok.!om>cT73]9GwlT$%vyie88lGLo(Z/?Oa_}]' );
define( 'LOGGED_IN_KEY',    '%cV7N{&%@z!#ReWE)dXO_y.y (VBQW+/a)g$pll%2NLB$U+I1<+5czFL@/}fhU5:' );
define( 'NONCE_KEY',        'mD)%fa-F=txH0*a?<I~])]uxAp{/5r3!!9fJYJ )hD#YTgLX-ae3YvBsO)EYAvSm' );
define( 'AUTH_SALT',        'doG0V,yQt}s52Lm&cwO0u3PRa,GdS/mPDF}bI*i(eN<%]l??bgpv@fPItjDwZ(N$' );
define( 'SECURE_AUTH_SALT', 'xgQKu-&iuazJk(fYF!jGngH}#+$t/1A}6Djj`><>>:=24t3c*t8Jg)0VI%yraZuW' );
define( 'LOGGED_IN_SALT',   'q{Gy01.;@;K}Gp {s}|xQ7JkofOU*?JB}D`*&bRJs>$F_~XEN0.+dr(KN7RTlsvV' );
define( 'NONCE_SALT',       'iSN8w~x;}6.V$YvC[vjKu}DYXoOp3*uXy2BVo%q!W:,o=5158T;@8k/eI3Q?cW~+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
