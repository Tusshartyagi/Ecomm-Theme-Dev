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
define( 'DB_NAME', 'alhadiya' );

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
define( 'AUTH_KEY',         '+7d7xYX;8@bJWxxg&Vh9zpMnUN~vV0J;MucWB^[`&K{$uWZb[h{|-9z~BDgZVN s' );
define( 'SECURE_AUTH_KEY',  '#=V|+<-@T{%R;y{4v7d+{( udPIBv@i|k1jF+vD;s6={`>x^{[?ES)q`tYTiJ%uj' );
define( 'LOGGED_IN_KEY',    'O 50 1jxIY35I$5N]GIa;B{sgM^W/g }McOPl;W[)R+/g$lM2QREP..t<hQsbPok' );
define( 'NONCE_KEY',        'rAbWX:GU{`JIlv^Bx}~?_SM6(owe_<~,gr-]V!++vq9w&-t-0B7EH{Jjbm,Q|uJ-' );
define( 'AUTH_SALT',        '6`4z(4J; TI%A51&qJ?]Vu1^j~iFM1))g!8#TAeWs5>k.#=>}6.I $/z=_I#~]&t' );
define( 'SECURE_AUTH_SALT', 'Lb*B]*J]q!&78L75kr#7zPb?=rXn[U5 >g*c^qs.Hdb%;Nz*[M9z=z{QE<HN}@ZO' );
define( 'LOGGED_IN_SALT',   'z#,1#?b.wHXC*|,^NEW~Z[#P)7oau<lCx:*}WPo}Sn-]l 9y.oT@nn06dX{9MCJ9' );
define( 'NONCE_SALT',       '>;amAb:fp>H vi#RcoE$zi0h>c$qC6q84fNfqMaJ9/(2e1NHEMD0Qa/;G?d#!;(J' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
