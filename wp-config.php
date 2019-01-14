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
define('DB_NAME', 'tiendamia');

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
define('AUTH_KEY',         '13zPnBAnE[)VH~l/?6HK.Jo.MK;6yAB|C<&0DU:J6A7P^][=]Tm)6G;55>S8ql&^');
define('SECURE_AUTH_KEY',  '?$6M(h?9f8FcM,&0fIdP/OMCgG:XW2~Qs8C(:z+o??0=-|tMlPW]C/.V1HY;^-)D');
define('LOGGED_IN_KEY',    ';MvRi{+smHb5szrP!vxZrAhwgtplo~XpmL]c: <BP`}D09(w,ZIbevJZ?!#Mgrf#');
define('NONCE_KEY',        ':55lO]T@,|7&]NZ|b0f{owv?/^:L_ /5aXK.$}K.N+[1X;(>p&mX)We2My+6p0b:');
define('AUTH_SALT',        ')ey/y6^Es^ko<t4`N0:D VI83V37s7+9to0SjN/q88%RZkC@IyF^7RZrsb9:,.<v');
define('SECURE_AUTH_SALT', '/=.6/C7sA*>eL]_};T1|:Xb4M5?.`3[Q~5v {N,s`4C17[ F$W M =sBJolOFFCu');
define('LOGGED_IN_SALT',   'G>5bH^z+__@QA,ghRES6,gCF^zbYRcq8U>Y(XZ-7f)yzQ{{:Hu;WL*1q~rrw+fCB');
define('NONCE_SALT',       'Q?]dUJh7t7,,U}~5nx%G_$|[ihxfk(PJV6,wc+~-Q2RY.2{C4]mm{9ZUL<Je>i0;');

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
