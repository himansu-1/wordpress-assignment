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
define( 'DB_NAME', 'wordpress-assignment' );

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
define( 'AUTH_KEY',         'wEId II1|~cNz?<<[jd&clTy(loSsO,q$E>F35h7eW%QAzuzeTBR<E5(o`jS1$$Q' );
define( 'SECURE_AUTH_KEY',  'T>!xTTI<Z?=q8OqbtUvv=R;B8bX8$sJH j]r0xTro!E=:<dl^-nnW-(zB|fcd]kE' );
define( 'LOGGED_IN_KEY',    '(^5$?6ZU.RG+@tT`_LNnJaA4[p6YDI}Nb)?X|:k)/]>Kx$z,V&t8dCqhSU,pr#WX' );
define( 'NONCE_KEY',        'hJwIG*8)C7)$6c0Q?00C~MO^6]78+MZ1^x=lNfBfA>Xn;Fd}XHSSp4Q:(w[c`ZAK' );
define( 'AUTH_SALT',        'qb}.j^)IgLN(oItRwP]/`IgkwgYfoisdONMMjtFKCwSf>H9)a*gW6qKmbEO6!?}-' );
define( 'SECURE_AUTH_SALT', '37v}u>B0]HK,oc}[=XBkEfGWv3M#jgz/UFXoVwSPLxl>=v?Uc8d8l*x)6+2 b>l1' );
define( 'LOGGED_IN_SALT',   'f:LRi<)_I<P%GK`UG`:=x1WP#~*c(N5XA;yvL%`*eVk96pVcI%IHtw75h79*+6e.' );
define( 'NONCE_SALT',       '~WL(VXc6c?WTAhRuAytJY4s56!C?K_r o*0DrJw:9Ih;TUM3^jo7?<Z{l#+*{RsR' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
