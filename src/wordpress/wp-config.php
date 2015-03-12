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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'snarc');

/** MySQL database password */
define('DB_PASSWORD', 'snarc');

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
define('AUTH_KEY',         '4$vnGg9EzX,PgW_@4Wt`%vgar+|@CI$i=SLp+Z>t*-g.^s|zYOo-F2>k%}]miZDu');
define('SECURE_AUTH_KEY',  'US@S.bjRV.PD5ID#VD+iAz|FTyYk]1(s]; _<aYGv},X SeF!>!-jK<f7H;M{+(-');
define('LOGGED_IN_KEY',    'yS-2L~6cPLGBH;raiclB#9ms=.KSua?8<nZ6&+i@PJ)}$AKuCoESNSY(1[:>rA2~');
define('NONCE_KEY',        '%mZ`t-70c6:+EO>4B5QZ3V|Feh A?.Q1|c.wNrn2]Zkx;`ZQJ-tpXE9G6|o!1Jv9');
define('AUTH_SALT',        '$2MW6X.y?vzu_y1AfRt&7KK-F81_b$@[zfCR(?ii8ybnbK{k!2T-V+|u-p?=;UB(');
define('SECURE_AUTH_SALT', 'Hk9s80Elq}?M/SesV^W=|rZ6KTD#/fDI`<_l+6|J!nQ)0OBr~7&76mO|_]cUj[_2');
define('LOGGED_IN_SALT',   'Z*[gs/+u,/5rcnT[agOeQ-[HcNpK-an5[~-1VTZ-IU+Hk)-z[9+g0Rn$)PU,8eHC');
define('NONCE_SALT',       'WD$7= jb?@^mHLW#%8epr#n|~R8|ylm/gD_--vmM/69yG+ f`T]P^+]^#}:~|2=|');

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
