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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         '^dIJ3+ZYw4)x*45.V=x2n:_F7,RLM)qW B+5MOF%sQz+)PH`7EeLu`pVfOEfyoq&' );
define( 'SECURE_AUTH_KEY',  'BVMvsvz?D5CiPob5KqM+1<ZX=)_&;XA@Uaj3a:?gr*ey:St|p(NuW?lt~X:09YBZ' );
define( 'LOGGED_IN_KEY',    'gBJ_>&9LEDUG6=CNHf{NM`Bo/u~52w0o3=_9(0t]B_ ).an}|i?X7l,mlIj+8|$#' );
define( 'NONCE_KEY',        'I ^l;F*p1K-rXfsue#5t,)>IK}R(Z<}40MFY!8VbAzjF;=*}=+|nJV]I[:scTBlm' );
define( 'AUTH_SALT',        '%aI1 Q=:MtjKKd*Dzbc^X#Js2(F{SGVyH#jbH<Yg]0Yz4^0h,{2Aq%NeK,r-_gqP' );
define( 'SECURE_AUTH_SALT', '$Y-Gh!u3J(1J~5D]<UUQo}%B$kW#Gp?]E$Bo7srNDf,*BR16pP.fNsx1 6=1/s1%' );
define( 'LOGGED_IN_SALT',   '`rsv:uC9J>@U}E*}/b;vQ,h_aHq@iFT_CPu]J;wB%LPEwgJlVbYeV!qQe[pfo}x)' );
define( 'NONCE_SALT',       'svyXPA^zN,!/(JONqC &raFzt;5fktjG,9hy3t)YP&doOim<>!x>p7dLkfRX<24!' );

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
