<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blogzonna');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'nqiV48YF,QipD$}U)D,&QchyF/fJW_z~XjrK3KI)-:3>@hDEuskOi{9Yza5QvA:@');
define('SECURE_AUTH_KEY',  'JIl_J4^^hqEu;q4y7y^cJ6T5om]G-<@[(p>iP,VF42O#DEIF!A:18q4lvwA AnIV');
define('LOGGED_IN_KEY',    '4@^W9y|0;Owvwm%lN^D:ZD{3Q^?`j)Qr:6#G99yi1rRLA9PfK?5`lU9J#nLj}BAa');
define('NONCE_KEY',        'UrdW{beDzjo~9+ic_UH~X0:-z~MZnyR7IF8&ffbiU09*=@tl(|D$Svv:kyq|A|K<');
define('AUTH_SALT',        'i0(W|IzlTFak/t6D112^%otsjAv3skn%<=JK=By>?H6**z~8aN/o3h|]hd1B2Eh7');
define('SECURE_AUTH_SALT', 'Tkf8SM @TDmEWqa:Y~90pFp`UDIvrFnP`,5p@_M_[e|:+<y8lupxBZVQt{kYZE?b');
define('LOGGED_IN_SALT',   '8H@FG9O0C~]Sjgn9c4%1(`Zf5Q1fZH.l Kc5M`+=PM&kI6br|x(acMA3qnS^q1&!');
define('NONCE_SALT',       'FsRD. ?ae*6w6D07;lG/fJu,=~]BfC~hi6byB>Rd21?4b`sFrK:Rx`_#ylOt}f?j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
