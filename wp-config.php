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
define( 'DB_NAME', 'osgaluh' );

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
define( 'AUTH_KEY',         'uA+,~Syx$ZQ*.Y0uJlIUcy/9>/iG#]i/CBP+iXw={PBW4xb;l>RTLFo9FJy}FAT5' );
define( 'SECURE_AUTH_KEY',  '|pBVeXBL&.N}I8|x03*oNiz*:uuEo5PE}CU*WU$7Js( o~FfeY6/GMABd1)*}|dT' );
define( 'LOGGED_IN_KEY',    '49@Fhy/-E&TIM{Tm.LQ#+ZZrBPjV3bK.9qr9sc[+SC3%}U?R^1Qw7|6QVc4ydNH`' );
define( 'NONCE_KEY',        'XXx7e0YsDTJ=v_hm-85WP1%Gtv6b]vp::$1Uh}M?YyWQ~n-q=jr~+JpURBN/3^0V' );
define( 'AUTH_SALT',        'A65U]g l-[t$:Xqyj#9Y#e7&dLbh]dsATqX%~cLdRc<MRXN5!B}6GhRJTdpWk_Lq' );
define( 'SECURE_AUTH_SALT', 'YXj[7)N,?+ir^NKzZAPC-AnOo?}WfXKI67+jR#$*:y? 5#t[h%(8%tCcFS`f!DhQ' );
define( 'LOGGED_IN_SALT',   'KKaemKp`aXmYe]y+$<p/ 3}j08oz??<#Hsw>);fWJSEwj*4z512uMIpw58)=UQkg' );
define( 'NONCE_SALT',       'BiVt$e_/=<!?yRHM/O^!9f32ILJBv,yTYSDxiouE%i/]^Gjqt,M-a.we0kSc3&G@' );

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
