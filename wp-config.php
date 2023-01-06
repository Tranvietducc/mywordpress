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
define( 'DB_NAME', 'wordpress_demo' );

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
define( 'AUTH_KEY',         '7bvq7).1PqbD.8A&P~+@DT6GP_UF,|?kC&ZtP8q*([>98p5GvCodLC1ko![0jL+$' );
define( 'SECURE_AUTH_KEY',  '$e/kj&O!&{[(L4MQI1n;8=E&iAor|~SbzVBW?f<IB-O(qb%}r8XVwl:X8?SyA@_f' );
define( 'LOGGED_IN_KEY',    'feo&;8@Q]0cou)]c!D:^uj!.FrS^bhUnI4M|u9U>]=uH>Km{5,RQ9Z&uf6E)NgML' );
define( 'NONCE_KEY',        'h,{<_CdVy_#+$aiF :?}F)aCta~I6*c@&NOIW,P 0ufCC40{WXXd#7kRNAPbHt;I' );
define( 'AUTH_SALT',        'v[,tMXSD3$lC1[[c<5b(B#2 ],PHV>>}mW}O9f,++W4%wCc}x3vvJwu2kdz>S@j`' );
define( 'SECURE_AUTH_SALT', 'j%RPXT}_62BBRXAA9n?rA1iMQq_H[ ++?hzG]T~|G]w=VxHi+ozgQ4eqT=6ofUDx' );
define( 'LOGGED_IN_SALT',   '7>b2CdwmH5?88{TXRGZ&)d+<mS.pt^gS^s_|>a5zn]!mo2b4{kff2V%V. ] HJ0#' );
define( 'NONCE_SALT',       ',`Ld2)!@k.Y-Ktm$<$V-+,S*6Q3}K$oN;I=kQzAj~4= mL9*iIS_ut-~$Ph~FS4D' );

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
