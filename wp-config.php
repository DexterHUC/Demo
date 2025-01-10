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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'food' );

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
define( 'AUTH_KEY',         '$Kg>k_#i(T3`[*^EuX<|Xe^+KTH_<P1J8ax|&+aPtHsh@zou#4AUeRoW+?ORg)pD' );
define( 'SECURE_AUTH_KEY',  '`AiBWkVSgb||J: )=UbNKjg$H31m8%$7~-eD9s<<Ac_iPYj:Vnw_iP3cqbv4M8<R' );
define( 'LOGGED_IN_KEY',    'jTpB<:l!j%l$XL3ny}5f].dL!nRwbN&E%5r|5dS@nmFM_i8BhFTa[?s `Vheg`,@' );
define( 'NONCE_KEY',        '-%}1-XauXC)8?D_%X5z:[&t7(xn=+{TjF CvE-t&vPy8_~*$a~l1@T^(<m#2n(/z' );
define( 'AUTH_SALT',        'fqa$PxX!^U7MzTo>!P_ aOj/639nME}hH:1z_[z~#7}>oQ*T(DiIAQeU;YCP:.qQ' );
define( 'SECURE_AUTH_SALT', 'Uz5FkzGY=`bi%x9}k{B>:ZnMu.^]q/`EN=Vs.a=?ME5+3eI!:po})2(iqnqg|>GI' );
define( 'LOGGED_IN_SALT',   't[aPF[g9XLvfN[gIokc==f#c5@%!Q_[N[Z*Z!fJ_,/o 5/RxooOi]C0O>Rb@L*p|' );
define( 'NONCE_SALT',       '{b:xBi-g^D-h})7/:>Yj r9dJb6+M[R[V-O)Egn;3C0{jD]L1=gLZ+4KUDna|Hw:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
