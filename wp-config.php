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
define( 'DB_NAME', 'ttt' );

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
define( 'AUTH_KEY',         'rsqXJU$u(bk[NS1zOlopp*YQc/`jA!Fm.-&|;IRtgJ~APB74(&6d-gR v,weC{A9' );
define( 'SECURE_AUTH_KEY',  'G}<-%xCP+[C)^7$o[G:&79H,p@8~u&Q?G*=z#MEhxu]b q.*})&jRjGi1*cQ/Y8D' );
define( 'LOGGED_IN_KEY',    'tIS7y0J1LI/*n;1*KdlhlRK2u}/GF~ I[fiAXFs@-[yDwx`oX<NY&R8NGC^sHFXR' );
define( 'NONCE_KEY',        '!aL6>O0GPvRn!_1:?AP$Kj%S_HrF]ZjFzpv%,WV&T*$`sg2Cegfn/8C<jNVxMC?T' );
define( 'AUTH_SALT',        '(+.SbD}&1liQj9}W(isuIr$#N>_`bX&qQDK,Vc$D0Xrwte5L7y$Us`PU1xdc}z_O' );
define( 'SECURE_AUTH_SALT', 'V-e/eX3Mioj/_;0tw4x-wK4&!|2%cI#Q#H0(lObq:%g9[K6A8`g+fo<#x;Ev[U]w' );
define( 'LOGGED_IN_SALT',   'i@yVUD7H$q,L-0*<)X_zk(-Gvs$r$V<O9BI{$?8K/{G<.P,;j`%HU^G-=HD-y!sl' );
define( 'NONCE_SALT',       'mc!I#[{;P.K!mNDkvzH3R1kgwEnl@?nX:yel/^Y]MulW]*6TFy5cY6#zM#DMt/Ja' );

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
