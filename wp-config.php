<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'john' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Pour permettre d'installer des plugins sur Linux */
define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'B!cC1p.d _A!GQbi^Lz*Ff[$MKlAD57^P}O}:{87MrG?_Msb25!d9_PW{MJy14n:' );
define( 'SECURE_AUTH_KEY',  'N0G8[z@QqLH BQyJmhToy8T</swT3vnGQy7<rFFS@j(4x_G|+nSG& F!P(9_m;#M' );
define( 'LOGGED_IN_KEY',    '0?ooQn8Ae+v94qr1o>kT=En~o^,sHR%Qp-|;+!M]z5V,}&{D;qF~W-@X!=.6}YS]' );
define( 'NONCE_KEY',        '{(Om7&^L)N|M7YLLZOo|ThV*.MoV1)Z]I$i.FIY+g<oG&C9sOYY$E7I{tW3b(Ew^' );
define( 'AUTH_SALT',        'ASx6Gs*y/h)rUY@T:MmGW?D@sy8M8.@,[)7<aQmhoZA],m#Z8w>KGRdk+^}E~,*.' );
define( 'SECURE_AUTH_SALT', 'QBz m*m@7e|{uc#5iiRZhKUX5Wm)@dXg<Dp20)JR~-t;lh.`!QY:eS^p~XwW&er+' );
define( 'LOGGED_IN_SALT',   'y1SOb#_7@#,WPFGVaW#1%EEC;Ik& 2:<{w)UzI$r2hrG{-JKZP`&~=S]Bn:# vH6' );
define( 'NONCE_SALT',       'f&QHW`,6!1#iGy& 4sYEp#f,R_qpQ:%-;=YDqDZCfk+3|EH<ATDC~B? &y.mq[ty' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_follow_andrew';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
