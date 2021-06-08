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
define( 'DB_NAME', 'namaste' );

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
define( 'AUTH_KEY',         '$g|7rmLUzbZYAPD8/R9~-77rbT.%wZ8cP8LZR3vh~FoD|y#0&9Mf<[wUus<xwbP0' );
define( 'SECURE_AUTH_KEY',  '1ab!T7m~v#E5{%jpa<!CA!icpcR45`T^2tg%6B6-(PR1H!/r@k#$h3:QD.2N$w{+' );
define( 'LOGGED_IN_KEY',    ')utE.79DPc6<xrMS)p]Lu_;(pZ;iH+e#t+6Cqagbc h,ddyJ*+q437u_c) V,$=R' );
define( 'NONCE_KEY',        'JJOdHc-(gl*)|L{.IK`$;l3/g=TN;iVHD#oS^ct@iPH%K^rsmY<rK4[(mlXlrO{_' );
define( 'AUTH_SALT',        '0#|Tm]#v{o7lA-;Q?pVP?A;$QuC!@LLTK(Mm~3(_!_L}XynXLenvw$oaeRjh52du' );
define( 'SECURE_AUTH_SALT', 'bFz,U_/Tz#dtnPIf`_a:oy=UNaB/[ElQ*A@A_f>v5;5B<69kt6nzqxanud{T(Z!%' );
define( 'LOGGED_IN_SALT',   'c&m8K cJ=UqxfK1CLn`A)Y_}w1oS+!`vqP8HH!n6K^X;<1og#MB_oEtuzDo6b;es' );
define( 'NONCE_SALT',       'f-O4_PYF?/3oQ1Pmxc[wQa~WFF$sE9qWSSi2(>u1Te)2%(xjmY<tZ`a|p7jz|5O.' );

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
