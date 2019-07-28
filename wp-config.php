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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(?3+6Rq8a:6apl+YEb9fs??O]GNC&|t-1vjDK*FXDKMFiZ(}g!/D8qlCF4,FC3<|' );
define( 'SECURE_AUTH_KEY',  'WUrtY%2I8M1P=}Y.P|J{O?L:!c[IyB>fA[_5_)r%=$-Ybw-kV~ !t$Q|Y<$: D5p' );
define( 'LOGGED_IN_KEY',    '}krWoOmcTv+4#,hdmw[%oia>2i^M4}}bxJV,]}|N7TUqX 3l]EXR_67~jr0TB0e*' );
define( 'NONCE_KEY',        '{C9-@,7Q}p#nuh0g0 ~zk$)xKJ^2@8Gfy};*T76u@o8]A @ks?LrO0T>rvOZwGT#' );
define( 'AUTH_SALT',        '`$-`wp+gJ[C|&50|&)ePPK6GtG0+6_O/bsx+t177Z|(d6N!@?=o+O}-MK=yM jh*' );
define( 'SECURE_AUTH_SALT', 'p!b(rs#;W~jzXx|xo5@9:Un.jfFLQJ4Z SLXYSeymE&]IBL$$e($:3BI[J?fiVD>' );
define( 'LOGGED_IN_SALT',   'nu*tyd*k?.<1|FZCPi#IcGwtZZBjA|jvsK/F:3G0_oL{6]g{p4IFW+y7/H+x5vAh' );
define( 'NONCE_SALT',       '.S#IFl+t)?u3M!+]gf8#5]?jfr?`VfSxb7sm)py1zl_^Whuiz!]7kslx,J 7!Ir%' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
