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
define ('WP_MEMORY_LIMIT','256M');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'WPDB');

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
define( 'WP_MEMORY_LIMIT', '128M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GITmQ2]wm*9|MzVlOD1H1=ERtTzr|=g/QINRV,UR@nD|Z3=<)FqjjAoCjcJX}d2W');
define('SECURE_AUTH_KEY',  'K-zW$Z6h5{ck2sm-WcSd$:SS<gYa7*1y?1F#V*lr.u}%vm#@HM`xd/|OXH}|SF`c');
define('LOGGED_IN_KEY',    'B&#CqbIc~u[0+7R%ppC~ma.Bq.127!nBCzYBsn*+;BC1j[.IZ*=VW!5kQ4%NqyEj');
define('NONCE_KEY',        'ZH.KZJ6EN`r/uhr#G?2zD:SYE5.]om4>`Nf$9p~#j>s!`jIh=>6H1n0tZq6o]3|,');
define('AUTH_SALT',        'HlX`.s-A6nK}VYTj7L4~,?oei+b[bV T;5+vjybjB7zSP;hT<{%fpWNC>|a.|n-:');
define('SECURE_AUTH_SALT', '.Au)TZ)>=@yPZACr8aD_p%OmE:?|g6LtS%%KrB4<5+KUHk!DOG`PG(o|zesH*Srn');
define('LOGGED_IN_SALT',   'g|tF:-T_}9r1TCDbfWBJ.J9Ko|HzD!Q.WanM6$R+,x{k6$yj}kyP,bgN]/?MEv1{');
define('NONCE_SALT',       'ovW*W}c^j!GoL?D9+e:~|D2ILf-2?v>MI,G%;>41-IS7Ds@7UY&btOr,}F}Vf_eV');

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
require_once(ABSPATH . 'wp-settings.php');define( 'WP_AUTO_UPDATE_CORE', false );
