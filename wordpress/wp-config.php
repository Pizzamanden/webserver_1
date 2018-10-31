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
define('DB_PASSWORD', 'ayw48dxs');

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
define('AUTH_KEY',         '[>m#aFV8[8j1Mp3lVt_T:grxII!@@2O&Lxvrs[ISZ#3dGV<|M{JX5bN>eYNpol8C');
define('SECURE_AUTH_KEY',  '>/1`qK!MJyuL_9C,#{p*;!XZhbcecPC.{QR[0+^1k)EnHYl$G{;}+|P.QwEq,s +');
define('LOGGED_IN_KEY',    '#Q_K*.V)H`N+g)~hwDb-<>%O&?r0Z1xC6{Zy,yi250KCR@l~8~X=8NRA104MN0(M');
define('NONCE_KEY',        ')I:3xclczUU`fCz`=}[^665[+xV.&R;u*p%3LSseS)1lJMeaNSeQ#^aaz44OJ_86');
define('AUTH_SALT',        '&qq@=QBv4Kaw:u uXT}U8H~R*,|R&hxisNTpSbIjsPBfMRHIY:;}HYj}m;8[lcvt');
define('SECURE_AUTH_SALT', 'r:X _vE4mKq8}DAzI( rbn&4O,K*^x-oQ}?|>6t!!C%?6aH,iZug4SL8-:<<MaJ@');
define('LOGGED_IN_SALT',   ':69(O;nU~ii?x>~Dn!Zidn?6rn3Xwh%N*lsI^yk-O/bD}/M:a5Bww|`r{`rqWN*U');
define('NONCE_SALT',       'Hk|p~;e,p.@E#l:/4-p~d&*99=DHv^_]nD{m< JOfQteAo%Kr*mwZ?vsi!tJV^!f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_';

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
