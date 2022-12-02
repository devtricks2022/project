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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devtricks' );

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
define( 'AUTH_KEY',         'uC@cn5b|P.$z`ZwRoBn/X9:DN1PR`tL`SvP|}c^sF=QwyowiLb^r/V[bHVa[)+7b' );
define( 'SECURE_AUTH_KEY',  'f+|VJ6`RuV&mQ?#:Wt>20R)g*9J%nI?|!n:!Eyv(M4<5-0}CPbMM+Sf$E!&Uqnr;' );
define( 'LOGGED_IN_KEY',    'T0{XPm*E>p#x<p-^S9(rmtnR;12d0GW{jxOP9q*|;o_[c{8e1Dty<Q<Ay[Cf[nuB' );
define( 'NONCE_KEY',        '[nI0qobJz* E.VYsGf6rD.BjYc{`#<>nsGCLf|z008]^F8H-vu}ng,ulE$U;Vty>' );
define( 'AUTH_SALT',        '=oEa%MO7g$YRcR:W4HAE2/[(haqabF>rqY=02hPn_GsePq8Zp@O^3c)=.v-k(Ju0' );
define( 'SECURE_AUTH_SALT', 'aNQ=-g 0xHN1#VCpF%HCu^n@MD8YbM$3@d$pt`#2Ev3FluGt%#ZSraT;](H7ody;' );
define( 'LOGGED_IN_SALT',   '7)!O obTaJ<0[YHi?p!NPPQk,(^ I$C:ZZ[L7&dHq78gwU-l1F_&Cq{9,q5*yv!*' );
define( 'NONCE_SALT',       'bv_adWO;~%ZPa_c^u*-9@B[hEjaj-:1Dr-(*z#na37w(5$;gbGCH3=XJtXeBC`_p' );

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
