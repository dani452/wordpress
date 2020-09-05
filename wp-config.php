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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_ecommerce' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l#eKQgt-k=~85b+NA]h:ZRW=9.+q?P&P6lSa?hoCzsZI)6V*IN~:MZK @*(xFRSA' );
define( 'SECURE_AUTH_KEY',  'M_g#GOjtHKrMpjp1>J##nWcpmaON-TgZ8Mhx+thW7X{|1Ac/W8@c)WAOS5cNDKG8' );
define( 'LOGGED_IN_KEY',    'wN0!^!*B?EkJ8V omr/(Ox:U8Ay/r`8]brn}<Ss;*`H`1psrG(S?J52#Bo@CZ/^E' );
define( 'NONCE_KEY',        'a?V~@|[RB=^NmxFGwZllsy<9*^;!#[T|13AY(c,Y6e~>+NBbL<J0#Py]f`+uoU*L' );
define( 'AUTH_SALT',        'eKS.m2?j%{Sx3y-jpq+;D{d7.-@y)x2bRX!C|M)TbMlQ{F(M_AJIF,>OaBQVO*4J' );
define( 'SECURE_AUTH_SALT', '};Ugk9Js:g&k^{/}|0F P&[>Q{_GJY&Fv cgYYT@}zzmBzUmp>f#OG,X9dEK#Vo@' );
define( 'LOGGED_IN_SALT',   '+=/@d]ckn)1!?g?UbDKs:o@er@=@#fRGj:T?W-]Fm.69{=u)(0.rI?f3c,5Vk:%x' );
define( 'NONCE_SALT',       '>8sFsVhF*]s&#4L*-s8=u1+~$+sb$u/RsH#nB6=6_?8|Jh=S4N9t2Mt7G6?:qXid' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
