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
define('DB_NAME', 'fstemplate1-5');

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
define('AUTH_KEY',         'gM!>8l2;8eB)n|nBJ`j5 1EnKRh_Ra(3epr9W8X~$Z!@&#=0_ztag?wL6I{}$9jZ');
define('SECURE_AUTH_KEY',  '.z(>0)C7P/5$j(M$X<B/ibD%^O#dtyB4|:a^nlU?_}~F-(7j^_-(u#w)CS%UWv|T');
define('LOGGED_IN_KEY',    'KN9H}ofPW-Orc-g5ypJ]MnG]<7Hql$GJ@?$qNzXz^hwAmD(;?Xq}VroqjUVPxUal');
define('NONCE_KEY',        'VhOcCo_g<yi)R&XXGBYv(G&1Opt---`oI&yp1vXpf*I9fu-k!W=66}qF8f.z*%;V');
define('AUTH_SALT',        'qT:~*6%.qrI%EbnTz~p|<JMPhn*9j=r@_|i)<KQK;wV9^,1A~dU9~P/<l;~,oA;L');
define('SECURE_AUTH_SALT', 'qEtl>?0b4dm!{MK3_yK,i_+MAn>u}XuYHUhGlmyb:i5.AaTYtxay{RyfX3M.lH2{');
define('LOGGED_IN_SALT',   ')g{C-R#LKl{T:1<,C6x^T?unvM#B}1Do#,DugJaIMy2d*K^rel0lr9tL$iO*?Q1Y');
define('NONCE_SALT',       'o+=Lo<~9f7[G~48Io` XePFU;RT-){;c)xSfc_(@Wf@NGM3=#|x<4`)Mb#S&?h7B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_fstemplate1_5';

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
