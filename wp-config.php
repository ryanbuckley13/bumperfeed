<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bumperman_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '<j[6sQp}W,hv|,p6]s6Rr/<J|mQ=|BP@zQiU:]Tc<#z+C;wr#02>1,~G^%H{saC|');
define('SECURE_AUTH_KEY',  '{OVkFCCvA8Ri)4:OW?9h^~da XIbj?HTNqz=Xe@hlF3<6-vdIOS@2Tyz`e-]i7_@');
define('LOGGED_IN_KEY',    'w5sDQ>+iE:WNQ#-U7N69pAmN4pr!tvb[3}cVRj[:9J3v ZAxbJf9?5CuR/YtR:;A');
define('NONCE_KEY',        'O:a_J)3H?mj|+k~yw.+7 !T5/Zx Ml2d`F-dc-aqB:+whd|BF_VfB-9MT>$`vAx;');
define('AUTH_SALT',        'WxNekb0[Jd+-$ZeMmHosDBmiw)#`|2+swP}&~w7eYdynsaAzk7`!%`ZG_gy-ZSol');
define('SECURE_AUTH_SALT', '}9^>gBnM-xo+>~Eo+HPP[H3/SrMD`O?Qdsr@8Gwu[&g1[#Jk-)C0Kj2APEP|g/g:');
define('LOGGED_IN_SALT',   'RJ]Sn9XSfTJM-a1V|@q[esK|~$2)FUYfDwRjimZn?8#^avkg-k%;itz[?5yYx6u.');
define('NONCE_SALT',       'dc..Q,0|SZ8qKP^/#|ro*/fP}D98{vub45+>qpn&U{(Pf_0C?(oo27|-oLDIi1X]');

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
