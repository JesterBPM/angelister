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
define( 'DB_NAME', 'angelister_db' );

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
define( 'AUTH_KEY',         ' zb%S|&XorjWuU5FW5mnz_yvux0{!U7`YX#AnKws!}D !$}Pf3eZu~AF2>Ce7.$8' );
define( 'SECURE_AUTH_KEY',  'M-C&]J5xJgbCm*`Ct2{V}KmC>,+T.PsoB2J0<iu}ms-m)Fewfj-q:X~1qs_qcDWF' );
define( 'LOGGED_IN_KEY',    'Y8tLucUTCt)K)!IxC)-Zn?DOrCw#Ks>~K4$>BPcKMr,f!yt@OBP?{Gjr-WE1rM$k' );
define( 'NONCE_KEY',        '1ZhxQbMT2@ICPf6ZdU9=GVq|6Bz2o)x*<JB?N-A}#`;[>;N,wTV7E@kGS 9IIoT|' );
define( 'AUTH_SALT',        'NtWRnRv!SMx$W@53T!<Ei?4EOriW;@2.BZGZP.G>0N^H-_!cF37JL_E=314tXRgn' );
define( 'SECURE_AUTH_SALT', './2Fj/<]T@x0bk+%^5]>Wc@nSY;}&Nm=Re@u<F{]|g.6<k]de? gUuR.=8>M0#:N' );
define( 'LOGGED_IN_SALT',   '-x7U$1:R5g~(*]=<?pH3<Yx4lTzDwCUDV/Bon|p8g?R+$E_]B6i$Xc3&DD|#CdiK' );
define( 'NONCE_SALT',       '$meyn|HKCb.rZf^.lknCH?6n>Fz9RG#`QlEwp^kR}t3#@]v:,UGpd]s+`2 `+&Mb' );

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
