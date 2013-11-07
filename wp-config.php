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
define('DB_NAME', 'nebel');

/** MySQL database username */
define('DB_USER', 'nebel');

/** MySQL database password */
define('DB_PASSWORD', 'nebeltv');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '934$s;|v;+wrRW6uR+-|HnT|AeL<u:fhm=nLGk59*(CHlhfKy>){.B$;@r`foXlt');
define('SECURE_AUTH_KEY',  '} Fcm)`0^)x^>|fed8xC74T^P`iY&;ENmXIMOCyV4L`zI)<L[.P`qs-AqVs%JVr9');
define('LOGGED_IN_KEY',    '-hs5;N 9#lx!b^n_o2=O!yd,w7).Rot)2^N+CTOv}<|k9B:d}`#6VkqN1C8h#l&>');
define('NONCE_KEY',        'd@rI)H7+w;SqMQhjz3MHKa9VZlz/sd8OTe4gw]aQ>k$bCS:/>1awYg8Bu4o*Q$:z');
define('AUTH_SALT',        '.s)nW10!9<P=|knIk!p7N<<2&eTf@ztJ+N|>mJT2;$SFnz8(=S3{yP?]>5pn(0XW');
define('SECURE_AUTH_SALT', 'c1@61=/n9p`C*h#]9R{aB/T><D]=Nu(PZPKm?4BNKO ZKt%R5^P%UP~D_`OK]~$H');
define('LOGGED_IN_SALT',   '9#q7!#{S#cC#T,=W0Orw{C/J:odkdTP%]$hu}F*(CXw&FXmsg2gH7gAC|<@38P}`');
define('NONCE_SALT',       'NEJj>V|(Hw]/sNfsNXg`@RPT-H_e{a8L_(:RZIo{Aak]u2pm#ODKGKP7eu;a&iGO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
