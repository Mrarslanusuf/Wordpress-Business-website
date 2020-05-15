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
define( 'DB_NAME', 'business_site' );

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
define( 'AUTH_KEY',         'tRNY_G86xSLu?c85z`kjn-F,ZwIu2v%&frjbtaw8!#?Pp~Ilp}Jw+&ygRm2C$mhC' );
define( 'SECURE_AUTH_KEY',  'fLz25FWsm^ywsbbwHj);A3iZmGS{*,D,kRLwMd|8Z46u#l_iL|iDjd{2`v;{d)-j' );
define( 'LOGGED_IN_KEY',    'Od_UjL/V1#O58^9&zs E*:C$6!-&hMuPB~ 04*uU-?8fd%SM5v2_KEw->KQ]aan{' );
define( 'NONCE_KEY',        'Y1b)RZV?Bv%q3z2_i$l7O:_qE/%D)s*>Xi1(@_nE-0>Ay hqkI$mT~v~ 1`<r~Il' );
define( 'AUTH_SALT',        '@Fs%+=KOJU1K>JDld[6d/V%s;l|a>k#J{_)dsSOtq@*0,*,_Epwnl%|Y`}Y~8Z^S' );
define( 'SECURE_AUTH_SALT', 's]&0LBTyrgsmJSp0I$w~E(jc~p5~`mR5X#Z@^b0X^XL#8(48P@H^YK);__sY-sDx' );
define( 'LOGGED_IN_SALT',   ',as,U[yk.i%yfC8QcNUjPmS/G)_==NYlkHE-rj]v[t*/OQ&^YEBbo$.n1~v=G)So' );
define( 'NONCE_SALT',       '#MozNCYHGe:hVhAqy7nnWX$J!DXB2U*PWn]9RYnjpc}`B}ZGjO(!+{QqJPDDVfj:' );

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
