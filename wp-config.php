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
define('DB_NAME', '10h30');

/** MySQL database username */
define('DB_USER', '10h30');

/** MySQL database password */
define('DB_PASSWORD', 'Trankhigio111');

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
define('AUTH_KEY',         '#`H~}JR|lX-m.-or4+jrXe/(:-M6B?d;-L~QYhSKo*+,/sH:gE}`V^.Y?SU+DAO5');
define('SECURE_AUTH_KEY',  'Q5=i.Ri8`NTh!(rX{|c/~|d%Wr`RpDnArD|AZDmBF.1}+#j7[=G$JAyv44q|=GiF');
define('LOGGED_IN_KEY',    'wqfvK{>hc@p{[Y!8qX|!YO(HgK7t-A1-]YBjSjVlA<E_X+-qTCiuuyj&X>^c2C#u');
define('NONCE_KEY',        'Xv;ssk6#DV,Hec7H-]:SNKZ$|FOq<PF@-6U=k|85CAc%TI};B:s}3kUzV}~^kL!n');
define('AUTH_SALT',        'Mz+eS6HIMn6,&9/@mJ4easYa94Z&TpL(A!.]9v)4Tf-6`_Meo@cbj%!]I{GSd+Xs');
define('SECURE_AUTH_SALT', 'P7b*G;/kA3q?^Pg.|cY;0Z!l96&e,.jHFuI=.wz+S{~f+V~tMYi_6d~f4nS`<e6w');
define('LOGGED_IN_SALT',   'mZp}AZgQT{!3z_cMM4Yo4]XQ*M4FlQ,QmJ4&iW+k|FS(a|lj(6g%Th-ib: 6nlLU');
define('NONCE_SALT',       '48)f>r(L81VGFr4rc8Ja2B7(e]@nqsH_81$#Vfwe2,]7@IdG&3|-s=i.`T.x_.Q[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbtm223_';

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
