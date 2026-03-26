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
define( 'DB_NAME', 'fashiondbnew' );

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
define( 'AUTH_KEY',         '%c(#MW*5=5>m!zXhxsA+&wPBH~G5-R`T&@-<Z#^70?lPVC>`fHeEG9Jh<gV5s7cL' );
define( 'SECURE_AUTH_KEY',  '3$0X=eSi<j3]W&0DpC]g!]]QwnZ@^{x)gH)>4qaX`]>#wT`n Y&-:%g_e,1JRD)a' );
define( 'LOGGED_IN_KEY',    '6*1XVP/fHIcJ)#fi:r!|T)f0.h[<hrGdO6D[s/]OgSRQ]wT+a0:}SnK<Y_V|3A->' );
define( 'NONCE_KEY',        'jvV?M@/WHg7x/FJ62?A$%yS5c?u:f4p[guf~q.]N!EB8TrHkUlV#~$PKkQ*]8^)j' );
define( 'AUTH_SALT',        ',CL02KHZ/%bO8 y6)Te(i&5tZiEu}}0d~@88<=nr&q!%WT%jW74wyFc^SFC#BOCZ' );
define( 'SECURE_AUTH_SALT', 'Ap*rN6=W(|7S,=RcxVRHg6sg&d~E}n=s<L98<|3W+2w+c2vp]6yC<~Sw363A(F*S' );
define( 'LOGGED_IN_SALT',   '|YTez{;1qL=#neZxu<>5jl<^L&rX1`hgS(I)C9|/yf`Bj`q[e/}IHof_%Y1NBj9U' );
define( 'NONCE_SALT',       'l~gZikRiIbkdS2u7.Wcs;UF*):9-w ~<TPd{u=U=/b@*OL^zUOmgF2)TdO@%jq9.' );

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

define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
