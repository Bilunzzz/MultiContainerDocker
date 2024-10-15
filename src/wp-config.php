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
define( 'AUTH_KEY',         ')HXv[4Wf[)<)T{8snN*/oI$xWJ<[Zyy:tm9X[r[K2n[#&02*#<m8N6->y)C=Y?V[' );
define( 'SECURE_AUTH_KEY',  '9IJaxCrD7o6zThzca2O*%^9D>!rM|1-a+W,q)On*&1x.Ih5J~MkkdI!QvUr.,:yu' );
define( 'LOGGED_IN_KEY',    'Yai$z>coc_4Oe?mO:]HxhYU )/ay4lC_HRFGo>}U3(a,.:Sn-XyTT>J8#S7/86<k' );
define( 'NONCE_KEY',        'L3f|q%u~Q|LwJ>0YPv[ODhltCj`/;seA%B|RW>GJ0;<F{W@?pcnNeyTVv<#?}IH+' );
define( 'AUTH_SALT',        'i*h*Jq#5vDv0jEz#`Qg1+[I8(ix[`(*OreYU0<AHH9J}q][d}mV?l}1CG|&SZZXS' );
define( 'SECURE_AUTH_SALT', ':Y)7b};l?|{;{PxO8FR$GAAp$*cNVDsAdm$c.eaZ0}^:lRmvt?E;r qXuE$TyG[u' );
define( 'LOGGED_IN_SALT',   '9,23(.Lh&.d1}n1Z5BN[!:/X|N:p+g2|+v;PVJX<p:GDXL!p1XD:nM7xJK])4[Q{' );
define( 'NONCE_SALT',       '`SAa4Vfe}&]h[MUF]IR?^N~a0%5L`9L?JBBbp1|`AgD>9zX;NF0/QMC[Kj~NTl=f' );

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

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');

