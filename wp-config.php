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
define('DB_NAME', 'db_1ae56a4e');

/** MySQL database username */
define('DB_USER', 'user_1ae56a4e');

/** MySQL database password */
define('DB_PASSWORD', '(934$Av1GQ.5&U');

/** MySQL hostname */
define('DB_HOST', '10.194.111.8');

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
define('AUTH_KEY',         '>~[r]S4cdm9MBFR`JU_3QSiPj+ULxlwA-5Fn)z2<+FR:LP+;`GOCTl)7j}g!Bqau');
define('SECURE_AUTH_KEY',  '%RM}1m~7KT{eSjQrFJOn5wgS.{2$?M>d3p;s#CizM//9t9m<z!+Do7LJ>3%i1{JG');
define('LOGGED_IN_KEY',    'YMn+NVx:#4.b-^$Bd@+.TR)>PA{gA;+Y}9Cv@oq86ige*8Ve^u+~j@Z,hQN-}^1f');
define('NONCE_KEY',        '+{6M;1}w}@R_pN58M Jo_cF~YgrOJr{+vLwOTx#5<bMnC*N[F>xXY};uo(=O}y,u');
define('AUTH_SALT',        '8jGP;*?+v#ukJ2Y@g++;IkDk^9%mi>FK]9-cy_#,*kr_Vsxh86bc+^3j)AOC;Mp&');
define('SECURE_AUTH_SALT', 'HM^)~<+=lHRzglj->19m3 KRq$(6S`o[T.A`_1i-.1ss-I/mS%o[m(Rm1)4:wohj');
define('LOGGED_IN_SALT',   ',>M)SgE{<@_4IvqI$q<$|p7leiM>6S+uNn_W9;|g=ctD(Gri}bMMx68yysU~R ];');
define('NONCE_SALT',       't~/D;2k2FV9`>64n<1SuMLz6s0D-3vxia@3!&1RI+td= oxG,|g>Gz?%#(~JQY|$');

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
