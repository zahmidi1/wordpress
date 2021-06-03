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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'biy&?(88^o)Q8Rc0}}$&*xvaDhq;o7Q+Uq;:JXIuiDHcjPD]~KKDN+nz Yg^~h{!' );
define( 'SECURE_AUTH_KEY',  'L`Y#j=H62V>nQBHm TCFz*UJLhuw#Xc3C`[J~|rv)x0n>H>rbv*V?Nzjo[<9pfpJ' );
define( 'LOGGED_IN_KEY',    'L=PG`5T$LiKAQVTcTR[JDjW0w!^w_gK$PS*CGd#FzjZ7{L;/k/~tm+J-_CyBH%`=' );
define( 'NONCE_KEY',        '|v*)H4LRoV#PZ$GOm+^?2GlCA,=FErO;Z%cEIS_|<aP}2=2%/QU3LCUn5hTgM$6X' );
define( 'AUTH_SALT',        'k]]C[6iC/?.aM@Z$i25KsM[v262<$XYe.OZ/2vVrA+zPhZG+6>;wA?2NI.Gm5}9<' );
define( 'SECURE_AUTH_SALT', '!A[?bN~}3X=3Po7oI6f-dUa%Ki/ddg)pL-nv#v1lg(zYmbJ/7X@D3o WN|b?uL^;' );
define( 'LOGGED_IN_SALT',   '@Qw-7E#suT2T[m!Xxkur,U~Z*Z]yAyLag%aT_(H#Qo{EMP.Y8gpro68qMWgfyAey' );
define( 'NONCE_SALT',       '[ Q4{pQQOEQn.&FcbV9@B_aP6FN{Gtm#Wm<l7jJPj<k+Bo[Yp[e^?a/5QNe}0%ni' );

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
