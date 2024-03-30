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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'CarbonWordPress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', dirname(__DIR__) === '/var/www' ? 'goldteamrules' : 'password');

/** Database hostname */
define('DB_HOST', dirname(__DIR__) === '/var/www' ? '35.224.229.250' : 'localhost');

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
define('AUTH_KEY',         'E&AkE<4*TyMO!!m+sK@YA+U64+O]k+XQ)h?|(Z2V7p>&uA*-I.Y([I^!>{jH5^:5');
define('SECURE_AUTH_KEY',  '*s-|x|2}fGdOW;5/m:EsLIf-#a88^@+J!Y,Y;qUOM~5K[Fpj$MSJxA8Q<+|p)M/}');
define('LOGGED_IN_KEY',    'p{;-j|}5+8VN296IvPBX9l[_a-gJxSMc7|,:3cA$|2I(lp1|[-)];]9g~G270@Oq');
define('NONCE_KEY',        'os-05<>Bu^TP*?`?rMx?Ho;I-xDz%)R!/+9:Vg&p3_NS8f|A^+~M_.-85%a6c- *');
define('AUTH_SALT',        '-T&4,`~.s<#keXQn}FOIiSn<w)sR}2*R6|]q(Fx4c-s?2@g3l=NB6cqB9XzO~e}c');
define('SECURE_AUTH_SALT', 'o7x[L*LkXaGfNcA#f^OV|/*AI|O|H~Be;AG2sp#/M)(T6&TrY+DJxU)`<`lz<bL$');
define('LOGGED_IN_SALT',   '7p=%26Qp`%+O<il|a~-}5QwN}N2S-u+c*VOW#j]gZ|bD1-|5=X$bL7]rI,y(y@HX');
define('NONCE_SALT',       'S.)#CCLiz*O@U;nS6ctw6f&_-J9D$lG6#DNhnNX8vt-*erqe?:wN56jghX>_vQ3k');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'carbon_wp_';

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
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', '/wp-content/debug.txt' );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true );

ini_set( 'display_errors', 1 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
