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
define('DB_NAME', 'hospis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'zgoba-90');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'WVFwM)^Y`L/F>l]5:^_2.~5x+EUr83)`()6/2z}&O,UOWQ{$ANRfM&Cw; Pw-e2O');
define('SECURE_AUTH_KEY',  'UZtPG;EzhUJiAr=/?cW@r|6:PGn{_Qv{PC!,Q+?:b#_YxTg5yG!-g`HZ9G=F5>Fw');
define('LOGGED_IN_KEY',    'O?D;U/`/r!h|[xBltKdwpXLI`:#iwE^LNhz]^K>Z*xOFb0iGVM<C9D,95y>;%x3D');
define('NONCE_KEY',        '?Y>V,9F(HdE1:t[3Mjm>yogh&ZDD.rK~G}.wuW,kb)sUS~M~mrn4i0DbMxw]GGY}');
define('AUTH_SALT',        'GHA4coCD5rpID]Xk# KoGuQqY5A<r^GGr3=$pHiIJCy<nuvxZu?Xnt98bwFB0Qbc');
define('SECURE_AUTH_SALT', '@hh1Z ;1n6Rb<NyW5O+E!-qB5D2|.Eo9)WD*xoUlz[W5jTTpo]%3`NvL,ULPF1Pz');
define('LOGGED_IN_SALT',   'Ha=#{lv@uG2E3t_kUl8;&Ff@Fs]T4fFBcHN%/s8b*7}{n@c#T:U0U/K<:krq+QmD');
define('NONCE_SALT',       'uQg;82[Dq1k6<:H5dXE&cSc;j>} ._exXtQdy;V$aaxpzZy=(57yk>DJmYD3,~;d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pc_';

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
