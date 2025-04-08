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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'zDW$~tlzqPAW4A-GVDEOPaj6u#86zDW_Ka2(CKkQ5*kJ}_JdcBO[/pe[y3P6n}?s' );
define( 'SECURE_AUTH_KEY',   'rPrBR0j).9{kAET>r.(LB@<^cG*{Y59xBt69mIOuI|!pQ~1&@fBtP=ci.^2:m#|C' );
define( 'LOGGED_IN_KEY',     ',AKH-RALE7vI$lgvgoKI`!dZ9-bG<=s=~a3XAhWER&@MnPG^s`G;R_#U0Ax4gb;G' );
define( 'NONCE_KEY',         '9SH3&=(]ZKXN(?t(i4UfUM,f5Dwh#f%EgNo^C}|dw/L)Q`A}dIhRP:>2hZir,lcS' );
define( 'AUTH_SALT',         'S0:%]w4XXiCS%g~3{M<0ak8kv5OgZM$yj6OjUc[9OCLo(Rc9.EGGo$ut?AkhaS]f' );
define( 'SECURE_AUTH_SALT',  '3J]7ZS`z?GA.ad9J5x$$PjsK 6Qpv$r=*#.Q19;ZaT<Nuci$a/W5f&YJE>)@-6.G' );
define( 'LOGGED_IN_SALT',    'HAtMe+y$p>$Q;W+{&?n6)dGupEZ^(Gp_w&N#RttpKXC6KMFLEJ>],ol 8EY]~~:4' );
define( 'NONCE_SALT',        '!z e2z3(jF4kwea{9jM|65sj70L;c/NR[]%6qK|E8[pnkP~ZJ[&P]tROYr`r^17t' );
define( 'WP_CACHE_KEY_SALT', 'Qv4;I2VM<vjtxD(GpJ_(=E&)Qv a2oJA7pznfI-`S]s.<uKW/ugu!,}?pD+=!Ux>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
