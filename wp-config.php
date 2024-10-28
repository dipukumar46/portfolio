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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '7H[5p9x_?>Hnq*E}1V<(_~)}]iuDoV:kH~dE99rwCZiyjB{acI{ P-B3,U)>Hwo|' );
define( 'SECURE_AUTH_KEY',  '8kt;/98Wz^E+n3 F=+4(|2Mw8?}3(*5%)thpU S)?h-LXhsfF:YUGIBP:-HQm&q~' );
define( 'LOGGED_IN_KEY',    'i9EN}9Y&E$LmCS%J/A69o0>$h7Bgn3E*C;rsfG8>;t)s,sOQmK@4s6>1c_pHu*7@' );
define( 'NONCE_KEY',        '<:1ayv2z}/zHoi*|{K6mK%pW~f Bh&|8KT?eq4:gIN%exIkqSD|;q1+Mx@x_FUbV' );
define( 'AUTH_SALT',        'I%tfkZDaSZBYp]6n!zw%itPSs9T_FIM7%Y=$Mei.yM2/stT=!JyS-;J#][4U^t%{' );
define( 'SECURE_AUTH_SALT', 'ot[4>CbAv5fnWZ,-LhbvU@|C1`lea|KIlnWi31=$f_WE9?FZ8LW;3p`]_v.5#`.^' );
define( 'LOGGED_IN_SALT',   'hET<?HQ3Hyl-jX!gwYE|X{SK#9;C@t[A>gk[@0}*`)ZD4@LQigv2$y Nqaif^mtn' );
define( 'NONCE_SALT',       '+p9)&egc;7U;PUA!K9T1YyoZ vn)i~n%Oz@nTu8H;f^y/O~r[&LCN3cs-%h0K)JG' );

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
