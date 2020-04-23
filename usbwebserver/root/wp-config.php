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
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '|w0*x!p)3kNo1R!`lBen<P9pTz5r`2s>Ehe&`rCeJTXh*Y}<+l,;gQ)7Bt4VFN0Q');
define('SECURE_AUTH_KEY',  'Y(;+>]=/LkDn6mTmJ{x-Fz*$E<$n#A&mIYgf/,Lqjc+M>9Hwnnk@Wz++TDX~l<rA');
define('LOGGED_IN_KEY',    'DXT~5i49k)mxXwB~U&rH{CQ1rs8:RxNJ^QaqLZU7TPY;/u_ob)wP~Y!8G j-P4^}');
define('NONCE_KEY',        '!YnG?_^ELWc8%:/u0V-HZ+2NyME|dMR~$<({^@% fpR,W>,]-A?@9`0j]Ud4Rc;X');
define('AUTH_SALT',        'WmCv0&h7NAM_Pb#:Jwh=zHop-{Uo.HUsTWWg+phfy!o2ZE/gv#]/fkmT%{rHlT.~');
define('SECURE_AUTH_SALT', 'AESqGkv@rf>_IsY,{l)7bXg8Bi3.:Y~^P3YsWi;4A[GGOFP%LM5]UB[tO*!KkTkr');
define('LOGGED_IN_SALT',   '[1>kicHB57=^XR81GaB&GNn*SMntRm`aiE#uI/Ns(5.Au%+/ xyiAuG8LWl)n5fT');
define('NONCE_SALT',       '/sO^$[[TWF2/GkfnHs$Vh^K.884L91p.(LH_i0zw P45Q?<Me8JjmY,<gZm3w.%>');

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
