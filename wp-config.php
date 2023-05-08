<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define('DB_NAME', 'u389210813_mbtees');

/** MySQL database username */
define('DB_USER', 'u389210813_mbtees');

/** MySQL database password */
define('DB_PASSWORD', 'tAaV3tT1');

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
define('AUTH_KEY',         'KH9vQe!nfb_oee@7$1w_K8qQ$6Qy}7jbJL53Cd^L[1/q+zsNF$g&4lEyIup,.2=e');
define('SECURE_AUTH_KEY',  'zVJs.#T}1]lsZ@~B-n[X-jJS/!;L+3WbayMz_#9YyEdPA^1N4]Yr~gf4(;TY(,8J');
define('LOGGED_IN_KEY',    '?D5eq;t<{O <![5]zkhSb N$|c&-4SpH$%tnXTC;7<x^uF1pKpLP3iW4{<=Ks;Qy');
define('NONCE_KEY',        'F^J/F:NqEJZ.9ABiG^v o|T=y%^`PIPv$@xJqGmcM5>OEc}>n~5:|nv$wUd&Jkx8');
define('AUTH_SALT',        'k5P]LE`WCp Vmgyxv.h+8nOcgiHT(bJDeUFRD|&_8=y8a>{.WlRUCbGnV.it<*G#');
define('SECURE_AUTH_SALT', ';xKEi]I1ukCT5yt;P^H]AcTJ).m.230/oQ;=M,v.U)O5vN4yIId)w]z:}{n4EL$G');
define('LOGGED_IN_SALT',   'vK}BgldW.s0/sagL-Be5H^GNxN,jG/Ay/FW.8i8S?iDO;8[+bV_n2oPnUt.%#]k,');
define('NONCE_SALT',       'a1+=-e6I]@9Z4C2gkzl3da_vbJ5Eaiq?=g.2UFY>-J{m6yR~Q/=[t{cN:tJS<z-A');

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

define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
