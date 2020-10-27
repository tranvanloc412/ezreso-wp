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
define( 'DB_NAME', 'ezresoDB' );

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
define( 'AUTH_KEY',         '4sterPbSe+;7=pL>}mT2;(wrW#fP+>5i,D3)Ny7]Qj*x{*7/vV1qIY>v`i%`MEdT' );
define( 'SECURE_AUTH_KEY',  '~?zete/L#et) .gAR2NyVx804fM^n=zQX1j&=B`UB=%KL1mhsZWCDh2tzJlt6AA8' );
define( 'LOGGED_IN_KEY',    'SWU`5>r=j!P(+my3YX.kw>qQd)cr:JWz@5#q7DsXq/+jqqF-DWZ}2O++ 5qM]|ON' );
define( 'NONCE_KEY',        '(fk56r+Lt?#JkLU^74%s:DYAd@@~t[+t~-}iZZoo-Y<$ukjVn$kNR^.S5^D)4F%l' );
define( 'AUTH_SALT',        '6{H,Xv)QuXx9M[94(q_o?jwb~V2.%qoQ@S$1XfR6RfJ#q(^XaH-pFX+CJ7QikDK3' );
define( 'SECURE_AUTH_SALT', ';u_51w!n>{LHBG]nrDo5#Zo.IT]Vl.?&o0ahHv!b_q.3]K1UBYH=I<?&rTx~$uYM' );
define( 'LOGGED_IN_SALT',   'Xi9kbkm8,fm,NEa jsx{tDDZag.;ynZg>F<yn<ZAikFRgTxitNE/,Q]f6M6S|~F6' );
define( 'NONCE_SALT',       'XOQ.@YLsDCiCJYc+METa{8O2sMBm6?DyF.%923)e66Z+]hl^FXfbkFNyM=a_?E#f' );

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
