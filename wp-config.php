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
define( 'DB_NAME', 'word2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '6z~3BxqC>fKf:p[N5KxbMFTuw.|Je?NcP4KvtB.6]+j21zPuk=mP/xdCL@(Dmx[)' );
define( 'SECURE_AUTH_KEY',  'x]svpS2&)lUR/Twlk}$^{.)_(e$0$DNtFDpIm}]u3NHkT9oW)ovCh=%Acs?s[-eL' );
define( 'LOGGED_IN_KEY',    ')Jl*&{0fEP3w5WU18(Feha0@tLMMpvDBLP%HyZCf/3OJr,`Y&M?-7Mll>0u-Ay;S' );
define( 'NONCE_KEY',        ')9h/p|hel<Ky<:Sm[tz3P?2S~vs!jUg4Y?7KF{CV3(=6vbLTghjy-EZjiJE7ZWZg' );
define( 'AUTH_SALT',        '}v 4Jmycw47xj>}D#<upYF{jT)f,d3L% sr<}nK&pRQJ?Npjo9RVtd<?^B7=YOYc' );
define( 'SECURE_AUTH_SALT', 'cGtre[!-8yL!^S#]z2`[[O}<}+rD@zp,B?2x:Po=&YQXP+cB_sg%ebJ[BAwdZtx)' );
define( 'LOGGED_IN_SALT',   'GN;k:URX~Lbq9JkB(8c`p.n*TO..ZU$w=IHUJEEV?I*M-^^S>UVjh8r:>foVx*i:' );
define( 'NONCE_SALT',       '%j?j*Uy:VIXJT=j~SPIY#oI]M0sldS=>b>G<3!8&R+b*ZfPXk7SCt!uBijq?.-i<' );

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
