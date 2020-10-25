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
define( 'DB_NAME', 'vacation' );

/** MySQL database username */
define( 'DB_USER', 'rowshon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'munaamin@10' );

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
define( 'AUTH_KEY',         'bGo-mm}wB79N/<W2rvW@74mQ!{K;EFmPoHIr#/k[FNnP.,2uS9Els8}MP>{3 7P.' );
define( 'SECURE_AUTH_KEY',  'RQMd_+zI)_6&fN!1JU+D+@3ymBN/ *Vw ,[XVc+FR71&n[U$NZ0i, jn4%K2)l[-' );
define( 'LOGGED_IN_KEY',    'lWa8o^USSzn`aMck:x?IjV&Jnx_`@1*J)Z@5swG!yG`9Z(k+1=vq|xcpW75Ws8y|' );
define( 'NONCE_KEY',        'zXP!mLYbWL@)Ml[0%vhQEcf17t`,*wY.M0y)[G)Y!W4ZT~oInnYfx(`kE<Cn$uKr' );
define( 'AUTH_SALT',        ' I o0O[5Vi=VncqjpD7+W!952fa-,]sjNJ|6=kc+sA]JZHacd)v>Nd$A5/Z$/Z)2' );
define( 'SECURE_AUTH_SALT', 'uQ~&+Kk7D[B9f^1sQ{N*=WYqM$>{UIiP#0;Xg~~_>-ORI$)1[7xDeK610}HQ;~F ' );
define( 'LOGGED_IN_SALT',   '#)PoZ$DtoQwaqz1^3DD w@t{Z(x2RU7=dC-6gP>*gPGFa?hz%yZ#^*Yfz:Vb=}#+' );
define( 'NONCE_SALT',       '/yqcd/C^<j bk:,uN-Uyc2b~C2h0%`R1HGl*I q{FWg6uwQ&5uk^eJ4fP.8|_ ;3' );

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
