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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'CFn$p~$QMrrQR1iG? JUO*VNQ&60{@h+f2K8syA>jHtCk%_lT:|N)r/ 1M~2vO_g');
define('SECURE_AUTH_KEY',  'G}W:|O1O;!$o-!:Zk4;#zOg%sV;-S9q2IYY0Z){BB8;C0H)My7hCBj*C8F{N&?OA');
define('LOGGED_IN_KEY',    'U:-vhu(cC,N+(QHAU?fC=9_y&U;e%X3J`l/u#KCyroA?h>5ZzU0+Gi0&Jf!9eJH*');
define('NONCE_KEY',        '=XgL/^*)kL!r9CwCI%]5a=hnPte8A}AJs=zSknCQ1c17^V:x}02f:Lk^kuC5!RpN');
define('AUTH_SALT',        '=1|p%uUwZew?aB$;4Uqnp/&B;&0U_G$_Gfp=8!Bq16v))&6:~0A^FZ7+CdlRQBEL');
define('SECURE_AUTH_SALT', '$jNc)D-](!{}30xl?0i0o%$7+Z@K#i+^c9ae92@uqm0!Olj<mj2DaXF&L-O6ml)@');
define('LOGGED_IN_SALT',   '4IvjR|Xxa=h>Cmx/#Y;`EZq]]o%Q2pp2IOUT|wx5hi<M5/SuDZ-#!=+.cMzp}hs5');
define('NONCE_SALT',       ' {FO@.^FQ{A8!w:*qLYM/Wzp#}4-:^,m:+rnrw4_X-}m0i(A~{NGO|{ChoJA3S~4');

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
