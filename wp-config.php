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
define( 'DB_NAME', 'dwystore' );

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
define( 'AUTH_KEY',         'j&?1>p]}NnA/=o_O){l-F]X(f$IU`HCFN?uC=*i/08=h9nO=z]+XU;a_^#4(yzda' );
define( 'SECURE_AUTH_KEY',  'g~%?Wc~AN2!=%VqI&efjI!%Jlc9>*0SHkNLI>MN@cSl[Vd#_0oj3<2L3=Mb4n{c,' );
define( 'LOGGED_IN_KEY',    'U328&8Dv.IGDN&x/ L#u_!KTiG=q.~X,|o`N7}QBUf45CwjSE6&FP ak8,l9ID;c' );
define( 'NONCE_KEY',        'w:RX1HT#l,Q97~jB$<=kU`m#f%Zau|6OSjES2e8I*4#lBKl?=;hc9zCy;Z<~!1A@' );
define( 'AUTH_SALT',        '%H9FI^+<r92xhRfL6,lc{g%$a*sWMUg>n}#n|3%ZhC.]3%i?IDi-`xP*);<q[y4x' );
define( 'SECURE_AUTH_SALT', 'wRj(R2qo}Q=kGt6}&}o 1*vipQb4!8y}!54.XHmj,GoMpL5e43Dr+>hgs?J+UI}z' );
define( 'LOGGED_IN_SALT',   's57qb=<PZ}`1(YM^s}tpIzL^9}i<01a4(cman.gI]*!^_W[omh?J[aN.OF9{~d))' );
define( 'NONCE_SALT',       'p9.UrgM W0}ord{c><z 6^ri)fTqe-@m05aSy>b`e].M?9)q~tu:.gV`T}KKi*(h' );

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
