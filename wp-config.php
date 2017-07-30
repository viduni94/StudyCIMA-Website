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
define('DB_NAME', 'studycimaweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Xigj(@eys4MV{Z;k;4>VN$@nrT53:v/^jO*G{bRlH0TLvW egA!fls2;zjpjqILB');
define('SECURE_AUTH_KEY',  '!_fLvK_+,}6| (o**~q<.sq-qB`DN`b0yHE/p{@b(8Fu,`)CyA<u20cZ<,%)j,@N');
define('LOGGED_IN_KEY',    '6OuMVTaC7AM_nJgN&zs5Awa()xo6p$/*m#-zBno%*4d|}jFf`ygf$8>&HUQW>Z*Y');
define('NONCE_KEY',        '8V%I&hT]B~.6k#CX61t /!%5-pS_D:b)W{zHf>>wEv0!8raj9)F:^v,b%J>,E.:C');
define('AUTH_SALT',        'jwLCkRkXw~8o~PPk?uHx?5si!$?fo#&3Q9e^((4fJ~dN|/q f^T;LZ?OG7nqjHEM');
define('SECURE_AUTH_SALT', ']X,M4UA]0 5:8>-MW k0?e<zq>W9ngrv]t],Ym3MHS3W?lVWv.u2&jq;2dB4`w B');
define('LOGGED_IN_SALT',   'vH[kJH(QK3&t[Sf2`2AL|.1oB$S0!*qT!v<0~46:^Z:>&~C@FjrrddPi[ktXJsrX');
define('NONCE_SALT',       'E$v}6e&VBgD:ola0I2jzgs-+X34( W1D~aWfthM@MX27:,!]Sx_:#~UP)|96MK3j');

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
