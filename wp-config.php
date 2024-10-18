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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'l.Kr#TT{CR0w;ufOCNzXR`Z5_00761{e3NaAQi6r;T*c6pd;CArA?=-xR7yMK:q:' );
define( 'SECURE_AUTH_KEY',  '+PG7zqMoH%`#L/Elv:4.eo6Bg6{{GIf-)sJB|s;bKLIx|>pIPv<,TN4FHo:EzQ:y' );
define( 'LOGGED_IN_KEY',    'w*DoPW2rHvQWFh!Zs=YnI/8,QV|GFX[XHfK&iYF>~5bll&%0wbD-/^UQpv!w`L<j' );
define( 'NONCE_KEY',        '9-<ZuU~MxamAtbbmZk18>cbF/$y7)W5tjkyQy=pr_g,Qg]{/o}4z28/z2G8hYmAY' );
define( 'AUTH_SALT',        'TL:dDY#ppWoa}XtuQ*%niVpr%zfxwU6JCf0% niHo.L;.LYR>R1_,YTCNkmC)Kb.' );
define( 'SECURE_AUTH_SALT', 'WNI~]SH$AASQ!BFLa|[IqpkeNW,33cVQK1%UFLs|!agXe*X}k=GHOEws}7U$5A7F' );
define( 'LOGGED_IN_SALT',   '3s$`ITRRhCrSVrgJz=L8g&fa<orecaC}oL0+GGJtF)G:xZNaZ:E;?C$=~&>y|0!2' );
define( 'NONCE_SALT',       'dG}3g?xr$wl5ue7$ ~|e&fvQYZyiI[Jl,Tpl]M>bK co1EaL(:>rOfSE|Wte(l:-' );

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
