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
define('DB_NAME', 'wp_demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'cI`+H!^-6=%]=AVE6KPa#z},RBXAEbKelc^Fkg{BqSsI=T;%7mR<KH<tgu PS#{u');
define('SECURE_AUTH_KEY',  '7QF6xfAHd-$p8^,Wc,w$NuyU&yO(Kz?u:>#M0JB]R/ynecm<Jb>[3WoXS,c*)E19');
define('LOGGED_IN_KEY',    'Zw]J=xc8?,Q<Z!Fs[3jVluGm[{T/Ulj-6m_* J04j}:O^<9wX9!g;%#LzARI%om(');
define('NONCE_KEY',        'T+UKQ SP6weg-.__^0m7Pat{)t7aeb9S)]2_Nh4U rdBu?FC~0R7XqTNPSZs`jQr');
define('AUTH_SALT',        'j3~oJfb8;WvHBWLWixCgJM>g&!T?S&`>s}($uj[p:K(4vDWGOVo-ZNMPnjDUA5#W');
define('SECURE_AUTH_SALT', '_QL#=0?[:f[^_^_<((YaWl#R7>JVWXBO~aIK8QynE+r52h[qa+/#/B}jaN/Z>du6');
define('LOGGED_IN_SALT',   'QHXarv:#AcvL&7!q>yktor2hD9onWr;1Go|kRim%F296OoE+}f>l-3we0tBsV.?e');
define('NONCE_SALT',       'vGU?CWkbI<2D.G+U9*K.,`f*K!~,T].q/`OigR6oNFW:D7Uj;1aZBA-i>r[L58zr');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

