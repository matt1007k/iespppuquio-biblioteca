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
define('DB_NAME', 'iespppuquio-biblioteca');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TwBNZVMQ;<lD.=d~!hj^DzD1zK>[AvSt>)@4cZWy,/wXR-{ko6a3j/qW`:b9j/8:');
define('SECURE_AUTH_KEY',  'K;O2-4gt0COrweeAa7wubVP0i;e-WOVGJ *cTu?m1-[D)B-G6J4e7R&I*{9UOX;4');
define('LOGGED_IN_KEY',    'S#R85b@08hB_k+Z9@{kzU.L>Inq<(0m$XTXEp$,[Yhc2U=Gr wtw[SVh<$70TC7u');
define('NONCE_KEY',        'LoQE>Z>byW/nW4%g# A2>%U}o<57+zp:8$cMNN> +Uc(6Lo{x>=-qju-p$f1%HUs');
define('AUTH_SALT',        'F[fvScfICSY1`(:ylyB~)Vu(Wl17LQ?PV^J$>nY@@<Y!a1?Kbw;>6_XUPS=5~UQH');
define('SECURE_AUTH_SALT', 'SR ld9{UN&Ar)lGl}W1F~YY13xq;a[xSx:paFvJ/3z2]m32T0R|Z5=dn39qwgF0N');
define('LOGGED_IN_SALT',   '^onhN(hcZ<l.k-i/]tw+_3GEhI wxKnYxU$-{d>C8W,1_n~Qm]@d9R|^Q%5ez3_g');
define('NONCE_SALT',       'v#1nuk)|*{3_wB=Z=&NRgFe,/I0jv>ykYKaTwE-8eo3Jp ^jas)U8Bl?d$w[`@UN');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
