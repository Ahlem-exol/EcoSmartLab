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
define( 'DB_NAME', 'bnrmvapc_exfab' );

/** Database username */
define( 'DB_USER', 'bnrmvapc_userfab' );

/** Database password */
define( 'DB_PASSWORD', 'v4K*o^D5N76h' );

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
define( 'AUTH_KEY',         'XpB!W6v[0N7:n-BTZb!Kevf>l?6K~|-d8{DGH*&=#AVQh19kkm+aZF v*]dP$0L%' );
define( 'SECURE_AUTH_KEY',  'xWvK  pE&Sck3bF?0;cqPv,,|If@aI%bGPn{J>@l4o$SS[lAo@?f!xY>bNi}75v2' );
define( 'LOGGED_IN_KEY',    '`<!%$Zmf~f;C^#(bO-;Q(MRq_4R5=:RpGi3~I}!6RrUC_LSMDm*qiIJ9&7f)x|$w' );
define( 'NONCE_KEY',        'lO#K6djw]R#F]0>#f|)|Nd*?KDg9vY/=:xx&=3&oC`-gJ4Dc0pL53V1-?MMy^S9j' );
define( 'AUTH_SALT',        'I*nOPseJF!:8D9xP(@Mn,^71Af,`SJ^={1F3.Wpac]!EOSy,3LTp0h~dt]fu@&V>' );
define( 'SECURE_AUTH_SALT', 'N&!a3 UuHCQtA1=SLE]k8IpGNIGr4!fHms,f(_B v$vD^,D_);61W Id$z>N[{ud' );
define( 'LOGGED_IN_SALT',   'ETplGT86_XF]_+chP[LvnFxapt^&z~x^U5:67Z1F^[u,Pg=(4?=Gu&,e[bE^?(dH' );
define( 'NONCE_SALT',       'i@l[G1vy)*B}6a(&5*nSyp01Nk24ztL:u7!9IyuDDjQ5Z?Z_~Rx;W,OBGO<x&^xp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fab_';

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
