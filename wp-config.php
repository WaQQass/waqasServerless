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
define( 'DB_NAME', 'serverless1' );

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
define( 'AUTH_KEY',         'A^J2ps6{:iH]6u;zd;xHv)/?UTlu5l&vLaOTrC!(d:{I5R2^&t8nN>jaH__(i-&S' );
define( 'SECURE_AUTH_KEY',  'WEu_Dv|mXB-ZPU5&<a|AL=5*^(EIn~G;FGLmW#qpPCC7oJt^o-/./3c0dkjN{ET!' );
define( 'LOGGED_IN_KEY',    'EB7^nmXSEL7if3<mWyA,J@5%!.37G]bMjAv}_})7UDU93#5ofQYdT8Ou~&VZ 5i`' );
define( 'NONCE_KEY',        'X?coZ M`!^*.Oa>U}rAC Xpfl`;,P;ns&ka^4]*BF<yI5rpIV(1Qyg~+Rf-mXxO7' );
define( 'AUTH_SALT',        '!x[e~j%f0k,=+!Ki*DZ6&I=R~!k.+$Dn$%74[(&zOq~^O;rZ/S1|Vhm)QXmVo|UQ' );
define( 'SECURE_AUTH_SALT', 'YCLei}U8!XhQdn4#AGix&`:d,Ej>%Da-^sOq[bqM{(28<mwaIIhXHWf+x&.oA;[^' );
define( 'LOGGED_IN_SALT',   'rU|#?P{6+389y!pyc@k>IeLrnVybH?_Z/d)v}GvUNp-{1(puW8*,Xz$|unwGawA_' );
define( 'NONCE_SALT',       '*6!};RrUDOQE^]cEFn`&_b?>RX2^: [gdmr{hE<YGTyI;;85a=x&T~5-I,&Msug?' );

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
