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
define( 'DB_NAME', 'LP' );

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
define( 'AUTH_KEY',         ' hXLz8oE$W6s=xC2%jw6[6#Fa|.r_A8z<~JOVl9f*_{%B*tY@$2?}or8<x!/^c.f' );
define( 'SECURE_AUTH_KEY',  'g8>;%HFO^%PQay_c]za)*oOUGwcIx=*N]ix0AnFt2$EU;s&U*@=D %6@pW7nihAk' );
define( 'LOGGED_IN_KEY',    'l*Fd5W,u!ie#Z]D>r--S:VS#4xOy~V{2WJVdw O:yBU*]3quc}0H`_2nqf!9=ZEX' );
define( 'NONCE_KEY',        'rLl-{t.Ro ,(|w&cAR8QGn3f!cZk!&#=pJs,}.q}!uWkkSY3z?~25-d*.h%>nQ)1' );
define( 'AUTH_SALT',        'W5i8hW!k:BBiYQ_Um2=F>/F,xK?8$l.>TU$}Kp<AG>Ut~K9X`*XP)9Z%uGv2c{OE' );
define( 'SECURE_AUTH_SALT', ' tDOAG:jM?[P;uTNdm>>^8QAVN0VD2B%1>a92`DuVrsK88,4^.u(oL$@j,{hVP(,' );
define( 'LOGGED_IN_SALT',   '_#WW3nqp YVFdg^sJ.q,Bz7M#Ws^B;~?w-p@_rL[O<z7hrMTc@n5S>+#}C-EAB`*' );
define( 'NONCE_SALT',       'x9A j6WgI[O3EqZ.DkH}=jbeBcjGp=No4!E}JHSm~AR4E8| hLMT^0UAXv3lr)<!' );

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
