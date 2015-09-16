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
define('DB_NAME', 'eshopper');

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
define('AUTH_KEY',         'qTlV#AG#zG`p${}++K#0$6$6l|EGPtBS9hAs2,|4u>U@K>*n1$#Qg52<(kJxvB-w');
define('SECURE_AUTH_KEY',  'v|rE3j+0T>5b,BjZ+)(pN9UX56/@Imm|u{JkwN.EVhkdxo?v7Cd~ecGhzXh$h)K+');
define('LOGGED_IN_KEY',    '6+Z9~?Lkgb6{$7r-JImeDgDNe%@(jJzAbV2pc^Cc%]^|T+n`n7M<&onVaUx@UYuk');
define('NONCE_KEY',        'q5mo$;o}RrqUeYh?d Bgo~-[QW2t<N93Y|:/eAmX4X7yd3#{u#I.`/RIFF-Ph6MG');
define('AUTH_SALT',        'vgg.78b+b>H_pC9^1T1+&>00XfG&`)+7;z%mO.l ^33c]KY[!!;ywq+&[|#Vskz^');
define('SECURE_AUTH_SALT', 'Q,9vP[5-IZI^M4(NqX.fD<4Mg0b7P]{h];=9;EYDeB]x.1eUj=&w?!;$-=;$3_DX');
define('LOGGED_IN_SALT',   '6xB}{mbhHiKgvXyT:nOq-%?]{]nCB|wM7+wPUOL?>|o?sVMtX:jz=cXA-=Cx|PyG');
define('NONCE_SALT',       '+_G.TGkA1Y64BQsiE`}NL-,{W`V3!.og=?HoE^eTIcc-8fq7*9WfxT;C_7K7[jfE');

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
