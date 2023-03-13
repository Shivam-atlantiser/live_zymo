<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'live_zymo' );

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
define( 'AUTH_KEY',         '_VMs&B]o<Yf)[XX9iEi2s<_k/zyN,I;0PkoqhBn$!UMRTxJ:}QU0PQ@Nq6H*U6C|' );
define( 'SECURE_AUTH_KEY',  'b/E0e(z.+zBNb6R1CZ{^)4lm8B:$1&r#=%]621EdzcC*S3HT13[lT~p@o.V6&9]K' );
define( 'LOGGED_IN_KEY',    'wLRW-?AJdllk4SEDAq^BP3Xu6S5QZ>iJ>Q0AovM(0CN&9$BK_p!cx!3></C%6WZq' );
define( 'NONCE_KEY',        'v!pVyalNYuc^SpF]@)2rsxvEbJR{jxihq<kaa=)ZQmDFXrb%{<tn2Xxv:vLU9j_!' );
define( 'AUTH_SALT',        'Q,@]WkT[IHcR9a@H?*@{zFlGB=AV[_#N9%!r G-h&4pXp+QqxaZQxWv#,LEI{[V ' );
define( 'SECURE_AUTH_SALT', 'yXPe6?Z%18!^Ft uwB/A{OB{l8=UA|22+;_)/JeRv,x{~M|Zj3T8.>a&o(KiY sO' );
define( 'LOGGED_IN_SALT',   '#tJXxKX-P%%w^JJ(mLK$M?6S_jv@.o=:f#@b^{a3oG+@eM{YXQB7#|0T=VLYsfN)' );
define( 'NONCE_SALT',       '+LJr?nGAK$$9ofNg3sb{O9.g^v+?{qr[9Mmzuq|])}IAX9CWrV_;,9LT6?h!`$]I' );

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
