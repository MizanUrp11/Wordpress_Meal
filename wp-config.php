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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '46Wh+DMOmMv&-!-k1s#>,pfohc?2Oh<^m(BBNz=$s_C4_N[}RC7ltQi,v:X.Wo/x' );
define( 'SECURE_AUTH_KEY',  'ta~q_P#2g6MWH;t$^[JvcoXD0]ogO:yQDbmVRFl?OB2;ML~RpwXO_>%MD|+HW/^[' );
define( 'LOGGED_IN_KEY',    'w-g}80-1;N588(HJt)sk7BB}glZQCqVo|qc@7|jwGUPT+h<7QIGc~3I!OGmCXtQk' );
define( 'NONCE_KEY',        'bZKi)OUJ+G0^!@W7(UbgpP]E+`3(Q4Ph)EfgU4;|S4bkQ+W_5?pKMCzdo0e7](2#' );
define( 'AUTH_SALT',        '?AzRj.5KU+N:Ea%i#}XI8f$juA663U,9FMDg7^f5$nbtT%95R6N<8T5( _skIl9$' );
define( 'SECURE_AUTH_SALT', 'Ev.]e}U#P@Q_?P[3x,}*nhVS3!s =G_JID-o[_]hYl!sKbpjmY+]fHXJ%KC5Icvy' );
define( 'LOGGED_IN_SALT',   ']nS(1YP5tCw4z=f6wUokV1JqqSHik.L:kYl6,y| 3?t,;pwGW:e>bk.{71M]btsk' );
define( 'NONCE_SALT',       ')YYIZ!=TOhsurW5G~Z52u>v]C71eD5JRkr!bZusI^_Bt<q,| W$N&[IJ4hj,No_s' );

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
