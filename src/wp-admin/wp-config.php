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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'z$-T9uC[(@)b$KSB@wo b* |=n&!/M:UN9sMQN.fPdUZrJaPV5- B/Y#wNkF2Er+' );
define( 'SECURE_AUTH_KEY',  'bW(_h;{e]yss~)/7y#k4g5+w^BY#ky([*w{>f%AT{;DL~y09W5& ^+{i^YUwhGW[' );
define( 'LOGGED_IN_KEY',    'mh9Ywi2:H&&0Jm=H6X1PJU97)t>jUC%0$xWqL&m}o]B<@^k|Aj;K}JKD>%hm5Ad:' );
define( 'NONCE_KEY',        'F&F|-YvKfyeW+uTWGF%vQ<u).d|.D pZ]hizf&QP3H&=Hp7]lYE8k>87]yaJ|5;_' );
define( 'AUTH_SALT',        '^@|W_s) HtX_nb~#_lw#%,tk][~iVx_I(^}w+h^k(qgqEZon5blY}bNM-zO4*~@&' );
define( 'SECURE_AUTH_SALT', '10I}k40:JEmL$xD;uJ%vA(uclY[aQho8]?T|K}anUL2/IQo|MW~v8){vaCgohJxQ' );
define( 'LOGGED_IN_SALT',   'r{1C*(MBur=Ip$s7=|@]e(x#R]nP)]1[8JYq]1y.qSwCI9MsI_%U6PAez$$QB<sP' );
define( 'NONCE_SALT',       'Icvi@>*%cPlIUTAj%*-1J#A6|TxXYYn#wbMK>:@U!]#?7H=y7OA_uH)i}.G2tGZ>' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
