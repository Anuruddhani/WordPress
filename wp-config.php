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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         't{cfVuUp,{!C=IFwh{.s2b1[MYg+is<$],=wH4Y-KaAh/M~83==b-ovdaU (VsNa' );
define( 'SECURE_AUTH_KEY',  'Ar~ZUsZv6l}H5 wj3+-~C0jbeUvm1^zyPfZHY+|JZJeiU`&]]U6(c(w_%=3|L7^G' );
define( 'LOGGED_IN_KEY',    'LAgG|/=z]&ca#GYPj>R1~lj)0|(JrTAqy$|IpT3$D7nKW)P|w!xsk>F)$l+ytb4.' );
define( 'NONCE_KEY',        '9YmzN:>vQw(C0|K@{%x*6I.vl.SS8+8uDy!:$$3Aq~qW:~{H)qC7zDuR%ix=bD;v' );
define( 'AUTH_SALT',        '+}ll~aQR*da#As!LtJoE.xu&.yN8B5u|sWB|uV%{TtbaO,!ri9UiI$gPu#1q:Tzz' );
define( 'SECURE_AUTH_SALT', '42*KjS2i;7yYc$I`F[w(#q@t_FI;}b@;Zjgns&irE5grw~*j0qn|s0ONo$bk{_hy' );
define( 'LOGGED_IN_SALT',   ' OK$;U0EbQP[SNakryT->@-}t0r>L AS/}QiP/B>ss:z3=}vh<(*.MN!%.$g&uD&' );
define( 'NONCE_SALT',       'g~{:eg=EDZ$Nk@a0k;qY|M.o0Z-{kDtsl_w3k,{=92O(q?%h(xgy1&.$.KC>P@c@' );

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
