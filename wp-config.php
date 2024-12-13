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
define( 'DB_NAME', 'cmsprojet2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'up-x:LP_USMgh%M2^f=L.0G3S%~I$@hCn&mEL1C3?KRwru:b9zQ7;!)VbR6]1yOX' );
define( 'SECURE_AUTH_KEY',  'K4@Apw[9]I$w5]TUGA)@c4<fi3_ki74M*.^7^vL?`2*4 {V}{hIi])4Z//HPow])' );
define( 'LOGGED_IN_KEY',    'mpA[Er|hj^+^Noj:FSs?=nE:Gqq@J ACG6_deVj^pe|5_6r.;GWVK]fN,t8?C{DC' );
define( 'NONCE_KEY',        'V-!p@AgPq/:pBt]`fxckyAD@SGeQB@ q<f{!oavTn^hz!:jFRNm)Z99L,)02RWQd' );
define( 'AUTH_SALT',        'c=xUMD/^<|=:^<Br!djaqc2Sup{UZuNUS&(^G4,3;3RGpxNyJ%N$ElzXF.V^g=+_' );
define( 'SECURE_AUTH_SALT', 'cW|h6JG6P1+MPRk<zwt4g;5]d=qu|wy2G2Q/wPa&t&s@tM?~P[apnzh1g}L6|qT}' );
define( 'LOGGED_IN_SALT',   'IB+?kBh~N8`Qq/k$zzX:]7#F@);?Vh5.7c?i)mHh2!yL]&__tOq#!d]$hbb={g3q' );
define( 'NONCE_SALT',       'G8WwUgHOgm3l`(_6&!sZnxVl.2.}d^p~V@AD x~i-&9U`i+$:y1;2e@CkYp-:+mM' );

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
