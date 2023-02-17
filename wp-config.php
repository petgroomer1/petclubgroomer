<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'grooming-pets' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', '' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K+%LQ2,9j.cj}8jPZzv&om?(Z~u27XlNt:w/<4Qf!L:qUr5uBp4uCqXhw$;:0/s|' );
define( 'SECURE_AUTH_KEY',  'O@|x,fJ+.C3$_tF54L0~* <Tj{u5s|G@b2^7k17983z&LcgmAj+#|zT`+>Jm@h2j' );
define( 'LOGGED_IN_KEY',    'dffP+t%+!S143jtC6X%k(^!Y<QH N3nr!g&h#l_5E+a-_Qf7W$C csl;Gw&n<<VZ' );
define( 'NONCE_KEY',        'R<H/I*[Op+/Atsw|;Zr6EW Lz0O|=6{$To0D0cp#ZIk.Nc(hXBz_z}6KF/2r$sY:' );
define( 'AUTH_SALT',        '~HUI(JozK1~u~5*u0D/c@gzgGm}:EiDYxnn}?TnT0|lu~1v!>+.2.-7Jg9PHyjoI' );
define( 'SECURE_AUTH_SALT', '1H@ekH:ZuOFe=WW0<XM#Rk&2):50vK#!Ez6K4/W?hJ!maTB-XR838}/[7rWzc1aO' );
define( 'LOGGED_IN_SALT',   'V9%2[<5{+Et>)OwEH-D l{ *-,k)a6K3DsI.%~wJ9xdElO-]X&(AIFyH( hHQ:7~' );
define( 'NONCE_SALT',       'g?Dg>QQAzF>}J<._KWQSUs:HAzsBVCk&Rl41)V%nGG(AH3tA#839qf6@(7bA]*Dw' );
/**#@-*/
/**
 * WordPress database table prefix.
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
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';