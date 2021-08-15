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
define( 'DB_NAME', 'DB_NAME_TO_REPLACE' );

/** MySQL database username */
define( 'DB_USER', 'DB_USER_TO_REPLACE' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DB_PASSWORD_TO_REPLACE' );

/** MySQL hostname */
define( 'DB_HOST', 'DB_HOST_TO_REPLACE' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'ZqUMKp{M)ThQ05X$aHtt+1b>%sA*<@m|fo(th_#V+$)Ji@}GSNpDE7L=0-Ul49FR' );
define( 'SECURE_AUTH_KEY',  '3e_dp#;+h)~H&1S/-,zkr]|}Fx_&Z/:9ni9J!8D4MWB|YG3YBgh4862$0j4<nV,h' );
define( 'LOGGED_IN_KEY',    '5)<f0[;*&KL<X9c4m(D2 @Xfz]zuUEZ0``lD?E RH?@_}n,yBlnCMwmKROXX8P}I' );
define( 'NONCE_KEY',        '`Ja*(BK[!N?h^:w;9!=gJc09I_%-_8{5BZsf9zl`2BEj4}mYk)2-S)s(|j$`tXo ' );
define( 'AUTH_SALT',        '}?~EW1P @$HCxf@e/t=HO+n6M5+W=9LnC8%ZMsD8[Kjvxq;0*63fMqmH84>f4#Lc' );
define( 'SECURE_AUTH_SALT', 'aWsZ@QVEfmo]Bbf$^A(IC8_}9c/ %2/by?4/2+lg+BB_A-Yt Xd(E!qmvdr;QU?u' );
define( 'LOGGED_IN_SALT',   'QxS^>i>)!S>pxp=E6(D7gR9W%W{Eu3=5u7~x_C2YQl,;z)[ h;MG)[`5gA|E.lO{' );
define( 'NONCE_SALT',       'LO_l(>o?[$bwN`@OPBH/*X;:u%1O8SBMy%cmB7xog`%<(Zrc5U7<LE6}UN,.DF8Z' );

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
