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
define( 'DB_NAME', 'Blog' );

/** MySQL database username */
define( 'DB_USER', 'sebast' );

/** MySQL database password */
define( 'DB_PASSWORD', 'strykewood2210' );

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
define( 'AUTH_KEY',         '-,R{5ar=fsJ+CX.yhR6* /1L.lzahmu;;vZmUx}nrZ`,I75W&NTH]qL7bQ_`2EBy' );
define( 'SECURE_AUTH_KEY',  'SSsUoC@K45!L`=z[ou2h,u=3>F3R +@ a(C@(8y|lHD.B[b8({?]ji:(MxL>(RP-' );
define( 'LOGGED_IN_KEY',    'D`y!(|f*Vsu#,*jSrEvd.-@N**@nc6Q;o(t~4(lBUeyD~i!Lax$R=~zp_+ 4f$H@' );
define( 'NONCE_KEY',        'Ja%6$pTf(90Oa^SzM8+;Mo.~p&xq5NcLuc{dJtNrdLCP^2K&E?Cm=D%a3aPLpFq{' );
define( 'AUTH_SALT',        ']((4.n{<-J9:X4RRC~094QkL/o$/I[CZjqhWqm|iuiHB{4K)IFt>;x/p5c1)P5#Y' );
define( 'SECURE_AUTH_SALT', 'AY!v=fw.;Q+R9jB0jm8f%4v3h%H8*DVzM-fFI4No WwA|r3~l(p=(EA#%ZWd{9k2' );
define( 'LOGGED_IN_SALT',   'iqSsF+cnpd+,Dmq;gZj9{]wf4V7I=ln|sjd77jaTb[etQoa]at{BCs;1MqSb7zCb' );
define( 'NONCE_SALT',       'OisNF*{&Yz@(mMC|>uRGEh1`0T@Q*Hcy8Ej0ZZt~Tu|y(uy]3uAOKO-JVlfd 5cu' );

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
