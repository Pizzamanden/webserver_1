<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4gTAs1}&p<pt/f0GKqs>TI`8HbcX$Ur@J*%Z?Pj@jnasjN+0Zuf}q&!C{$(Cm?;L');
define('SECURE_AUTH_KEY',  'K ^j2[i{zaN,6t8si)O/{B2@j>>)5P? y0,QFAgpdgO=|eG[Q3_<a1_3R^C6V.#(');
define('LOGGED_IN_KEY',    '#2s<#PU@L@RKc _&R1uk!pJ hY_0)f#^X-9EHuMS)b$2 ;q9#+I`bZ4CXoD_9=M)');
define('NONCE_KEY',        '6s=<MTi+jgb8;3xd:_g- d^Q*fCZba0{>oRN;t=m>wm>-,`U,a1HfQiVHHU9t}vb');
define('AUTH_SALT',        's)l(;winJcY{{=*7{*>)HVq0ycaujlESW4g#1cxNWgnj&aiBHh ~NUA~GK_>S/gd');
define('SECURE_AUTH_SALT', 'QcR+u0WJny$h%~4ShBU?oR>-2j1Zim*VvWuxS{S=-WNJhI{|iU3wam<WFih|&l~X');
define('LOGGED_IN_SALT',   'oYv24}G(&/?tq3cIh}I1G!J)]:8SMHu-wPw]xt/WKl}Yn cNjZCAq=:C1+z$j=g>');
define('NONCE_SALT',       'h}y|nSf3[_p.:|p/.zX3XF@,euWWgx57A2`dlO(l#LZiWmQs??w9R]q|1uoH|EnK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
