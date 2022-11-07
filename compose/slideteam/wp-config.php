<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'slideteamhyvalocal_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_AUTO_UPDATE_CORE',false);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+W]#)tmRx&*8PJMvREPkTG4Mn|=F 5u)~bKZ|tDor;DR/h?a+i7F?i544wU+>N(-');
define('SECURE_AUTH_KEY',  'C!^@`)f3c-`-U+Wy0E-UZYrfvV2 >@1/fYsrxwE$c+9:c.Pp2!]hz34[3bdOn0|_');
define('LOGGED_IN_KEY',    'K&|oym6m|t]o_5eB:x/eoG6=+aB!^{>&;3{w0&8^cTC*OE>)kW1?+$L;GgOr)Wtk');
define('NONCE_KEY',        'M,m|p==hICa0O<oM-s>LgUb)t?<=e8>PQi9}]A?Aj5t9B382QL2VJbh(Q}?Zl#n4');
define('AUTH_SALT',        ';)dkM[%)+G`$~I&a#6(G_-h%v+Ix@Hf~QS/>us#`xLxlw|KtMOT$S{:hsunD;<nQ');
define('SECURE_AUTH_SALT', 'jOimat-; KS]A+rZcl##&xAoZYd>(jPnR+DIUO7t48$`%0njlEZJnm5kpE.RT5;|');
define('LOGGED_IN_SALT',   'TMqYx?r_(>LG?sM?~N/c7^`z</@V65 :rW`*<=rv2<sIPjj/6&DcAUXC=t|^?Arb');
define('NONCE_SALT',       'tn*,G[~jpnSb<p*tCUY8]__iqB0qYP:w}jeF+e_q+ECWkMd^)V-0y$/P1d_HA^Jo');

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
