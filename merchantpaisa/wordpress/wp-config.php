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
define( 'DB_NAME', 'merchantpaisa' );

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
define( 'AUTH_KEY',         'V]=^!,X!DDt?J~PI8JZG)_|DlJ8k2L|j%b&u7Ne<Pq{d5rhYWT#Z6x6J9c=4(B?]' );
define( 'SECURE_AUTH_KEY',  'QRuE?i!a:u!k0EFWgr{X)>AxfLTM~):q9g( dZviM1t/.SA5<Nh*)>2y[F&@bq]#' );
define( 'LOGGED_IN_KEY',    'g+d;O<*A7u99JE+#` 1Dmo_P=!O.KWwtWn6VgUc_56-(K/Kx2}qX!sKd&y9ia/Q_' );
define( 'NONCE_KEY',        'E}1b$&Ha$ucfH3]%SN:Y7Rt6bFA6@E5} s>x)CpJkVG/[0b17c]4v(ll%&D+ruND' );
define( 'AUTH_SALT',        '.%B9t!ia5M55-(,T`kcFTbcImg(z`#NP}OsEGr!a%<3M>WjJB_Isq,Vg,T7#Cx%_' );
define( 'SECURE_AUTH_SALT', 'gOQ1@`byg6lgN3Y2V[~})i9l:g%%7DmnCLv]fi(}U,MPI;_P}6_VaoXxbY`m our' );
define( 'LOGGED_IN_SALT',   '01^}UB*%!Ah%S>/C*>BXeGS!`Bz4N]0!P*?-SEjnHc@)pT80Z`Kj-}MW#9[j,]g_' );
define( 'NONCE_SALT',       '8/7Dn~-DI+V>3,[`=3CjbR5ouM]BJ35%h:H<E)@f4[}EyuwLyq=y#!}l6P`2V]8t' );

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
