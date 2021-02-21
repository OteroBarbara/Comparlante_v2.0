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
define( 'DB_NAME', 'comparlante' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'y1NS*B/UMcu0 OWj/Q^$LCSz=-blED9Nr?I#s>)/.c*n>>xr/t&oh^-&G*!]*BKK' );
define( 'SECURE_AUTH_KEY',  '1R<o!4wVCO=f}njUdguzypA5%vW Q$IR)]8v~[k~1.{FGD.E4;^o9PVbp-S$u]N ' );
define( 'LOGGED_IN_KEY',    'cxEfQo~r#tf0BYYEDF,.WaIjDlmmze,Hh4(>``[gw`U6M{L(W~hEuyb&okAdXiJ:' );
define( 'NONCE_KEY',        ',?2Q:NKZz5b%:DCAumLFV1U#0EKW?e9NK+c~kX=w+n:Oj9yx^ Q30DglzG}4bAJ~' );
define( 'AUTH_SALT',        ' jpH<m}w4~ >%3qtU 4?$4GcNv%WC-O[7^, SF>~8EXe|m}QQHc/M:2vi!]u@7(-' );
define( 'SECURE_AUTH_SALT', 'K#x-q5dWjk9}V%{hT 7_;E0t}xLS0rJ],ejR .3EcrGAu}C?3#_>jl0n^5nv;z<z' );
define( 'LOGGED_IN_SALT',   'Namfm15O59MT]NRoiO@eFmzo8>`eZ0)cMQ=tl))A%`8:#e3yF[|)Q{w{Lrf>&3>O' );
define( 'NONCE_SALT',       '=%{?+Z9~EsQ9i7p|5|>?N>]8T7z~$Csnr=pxq/w]LdNdf2SO.Qrj8XkVfjI%D[X3' );

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
