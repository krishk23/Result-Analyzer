<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'page' );

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
define( 'AUTH_KEY',         'ma7biCjT*P8E&/fZ5MA[a}MmIaVVkCWT5D:Y]PpQiMR]%33QM7D,l4);MW7&r{nE' );
define( 'SECURE_AUTH_KEY',  '$|8;CWXe}7i%U<YaI<GKE!*XSRNEI7D/1jGs^%Gz.u}ON_3}AX;sgcJcP: 7.3Ia' );
define( 'LOGGED_IN_KEY',    '/>#H(1c3Yu0Z(<P8hFt5_QZg=xA|7Cv=bVo8g`tW@~PS}p<Q|H%#$-Dv>Y<N^#JI' );
define( 'NONCE_KEY',        'gXBH ^*CCvA,uSXEzrIiOL_k?jPQ%G(N(b~vks=[SQdKtPVdB`0rrf7}%%A$bPq{' );
define( 'AUTH_SALT',        ']Q>X)jd<4OG7H6.DIXoq)MIjV@l?/g6&vMgWQy|-[e,7,=dnhGZ3,_+*J@6_lbVm' );
define( 'SECURE_AUTH_SALT', 'LX4i3@I|4]<e2cF*O?&H-=1?H:CQ`Lf?d6f_q0@A7He5H;xuui&- =pAKN-B|[S]' );
define( 'LOGGED_IN_SALT',   '{fQMB$YD9XqhpHc!LTaf{Sq(/dh@|-6cFF%j9(cC_ylXA*mVVPWC(b)HlTTwBHBP' );
define( 'NONCE_SALT',       'A,Nvr> t&(y:NV/.mF^1]>q1K%PcCUU&W.T{=V@WBZMEuu(LqoxjD(aKX;IuBs;j' );

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
