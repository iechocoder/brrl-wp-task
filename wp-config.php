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
define('DB_NAME', 'barrl');

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
define('AUTH_KEY',         'zn~(mNG!O~e0ghux@04:gmfWO4p]:sB2O#H;C6 XQ*CTWT?oB#X+w1c5,G&M^El@');
define('SECURE_AUTH_KEY',  ']s`:j)+Y5Ju,b#zayqEuzBMF_pe0$OxP;lvYq[{yhsy]#7JniK(R(F[Fq$RY?GT{');
define('LOGGED_IN_KEY',    '{D+;}QMhc7FE@Xe#7 tE%G:#DmwzaYC+28R-,+ItlZC@aX4[f{+Up5xTp{]?c<$O');
define('NONCE_KEY',        ']X=nvAblu9yZ^SC1diY>*hpZys`vQlWo2vHUYM@aU~2}GTtq;YBag)k%{miQFTCR');
define('AUTH_SALT',        'rF2Z>/7)dMuZ&|yj_@EInveBl_c<O#L.H5Km89Z&v5gOKB((h,r0XTu/[j2v{ML8');
define('SECURE_AUTH_SALT', 'jdg,R2XQZY1DHWxqL-tI,b>Q4Q[~]!n+D:fpc{3w~#7{fS;|6jz(gtl }+ s5`3<');
define('LOGGED_IN_SALT',   'DE3 TK 8UZ ?h<beAA~$6)`C8{|<>oC-:19ES9m+^4(gNvc2mC/StmUC]k?NAcd`');
define('NONCE_SALT',       'RcH%bxkc?%VhDwM*8)1eE#@_|l$YINJqLdwq1WRFsRXOz7=1|5OY#ZyAPjp<P3P$');

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
