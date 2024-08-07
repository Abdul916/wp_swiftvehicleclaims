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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'swiftveh_wp_hfi17' );

/** Database username */
// define( 'DB_USER', 'swiftveh_wp_a80jl' );
define( 'DB_USER', 'root' );

/** Database password */
// define( 'DB_PASSWORD', '?@_N41v$eB#qvP6z' );
define( 'DB_PASSWORD', '' );

/** Database hostname */
// define( 'DB_HOST', 'localhost:3306' );
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'Af3|skgsN2LJ[pbn4%a1lv0zW4h[Et8P3F27G#7yt-&7w~2#YE)@*T-vb7n(rxz/');
define('SECURE_AUTH_KEY', 'je]_h+-L0[ys3~d/P3D#)9wdH-C!czc-n_~:x8!2!c6flSwd~z!7w65]y7~/TY*:');
define('LOGGED_IN_KEY', 'Dz+baU6(nIeEo]I!477:W2n9@J[oPtF_4q96DFC4Ni8pJG4UpE(8gAg3t0]7[66@');
define('NONCE_KEY', 'r7~i@K6]4jYK412SJv%1lG97xH~[4z|B6]pU2ou4*3BG@h*71G6UfTb/@wOm1B+4');
define('AUTH_SALT', 'qw5s1mG8;2|@@+3C9T&A]kuVw(!5b3nv0A5PVH2&M9bbe]LB1+6pi3vbAQbA]wU-');
define('SECURE_AUTH_SALT', '2kb36R2;otbH;Rq)2:znHnaQ~j3/1UL4|[L/C~;j7u3/T8gg3ASV0|94nY)s~T#J');
define('LOGGED_IN_SALT', ';39;)|3J*f+XwDYs5ju%SJ9G*6Iqp[/_H8ke73pQf&jwB94tb2+wutY1]uYy-84k');
define('NONCE_SALT', 'x+4oV%8Q;E:rD0dnSsu0&g+cKq[p(P3@i5A]/PY_6Y_d3QoCze1d()0jG3(]70-8');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'z4PkM0_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
