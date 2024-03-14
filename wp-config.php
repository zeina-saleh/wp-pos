<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'FTDcZ{_?|2z#|?$^1~m%11#jt6h`]h+iTG9J9WI.Ey^MHgHfcsk_@-q8iC_kyokp' );
define( 'SECURE_AUTH_KEY',  '%%C}!{JSkme(|tD%3$q>[aR)xYAxjf+zzOrh|6;pb39q-3M7;(96g^W(A%,v$Z7L' );
define( 'LOGGED_IN_KEY',    'q5X&[w3d3O{]]e/]H+%V(D*zQd9.:ceQj#S!+4-TGQ,5iwNm}7N+ey5#n ;/`HLd' );
define( 'NONCE_KEY',        'BU.tjRA*!Li:/F Xic<J>vk<&Q5FO.4k`Yf i}q$Ax0^v?7%P#jCtH8ai7<CmBGJ' );
define( 'AUTH_SALT',        'K$Gw9sfGi^.G0,164:aEuv7sS2iK5Be}U4<X>HT|T/1:<}x46kTMcD8u _ILd)SP' );
define( 'SECURE_AUTH_SALT', 'e?{V )A]R2@$niO`JDB;FI5ygc#kE=GrSsl3K/r0rJ}GK+w07WHp@NR0p{(+Y.tx' );
define( 'LOGGED_IN_SALT',   '8XNk^yxD{^h<v!g#o&4zOYd-ca].a{:g~+*csC]M;ToM>m0gcP7<dTZWg+4xq^Ba' );
define( 'NONCE_SALT',       'XV`iIO9!6eEnty8cVs>/LzYq?!H?m]^cS1|dVQpCi=eAyh9$7hwb9T.tB UjfiLa' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
