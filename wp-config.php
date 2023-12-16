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
define( 'DB_NAME', 'taro_testcite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']:5OiNxUcPn)hoChN8PZ$I-qb2Rw]V*RkojQ)s$s5qP*,6AlL`80}8%(oWs-%*{Q' );
define( 'SECURE_AUTH_KEY',  'pcR^=5<ZU Fae 8Ost0RvB(~I!y_A@-e+NpvUt`usf0aTOp)&yAopiJgfz!ff V#' );
define( 'LOGGED_IN_KEY',    '/L%0@s4+lY0q&uqTa/_P7opLEiNJ>n*M#h@lP5 1|L{V,:02Z~`[<S=9uOMg_l0E' );
define( 'NONCE_KEY',        'XlwE$N4RXsMSSX}E[8fkJ9u%4UuIG`C1U,]xS7x}t&,BX]GGtz<l,/9Syce6!kx{' );
define( 'AUTH_SALT',        'TO`jk>k _Pe+GaQQS3;!Yya>#)`@*Q0G<9;]TuOWnW+-LxzCYjF3xlVM|;d+O%iz' );
define( 'SECURE_AUTH_SALT', '%|n>b)_4L46n1f-x!3Z9s<Xy+*!aehdnhXX*B>sen9bb`7RYvgEN!,!hwox}P[4h' );
define( 'LOGGED_IN_SALT',   'f]{4vaI5}+G4~kN!1kBL{]t#WBqzS-{FDqi}=J){-4gFn`<WiF#>}cPz@{0=|yB?' );
define( 'NONCE_SALT',       'jgkzA(*Vyh^gU2J Dom<5l~a*Q+4m|5>*wVNUE%vY/G6,9Ht:lPj|H<t4D~ wAJ1' );

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
