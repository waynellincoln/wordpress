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
define( 'DB_NAME', 'school' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?|SP(pe($qP0#]0mz($exBftGpB?qi]=ond#f IJA7BOdNN*h6|qjbNW?g*[Hl1#' );
define( 'SECURE_AUTH_KEY',  'o8yHC)I]}t8z4dcRx}!>i6;^&4}4=tCCJi%/@Hph$S^={&hXr]9N{b#HBq/-~PJK' );
define( 'LOGGED_IN_KEY',    '9Wq&Y,j&-P$;NV ?g. d4qe5qHCY%/I-%Z<KqgKB{g-P6LA9r#=#[b.|@pVxx3M:' );
define( 'NONCE_KEY',        'd)@{ (N2cCB&l,7jJs+l~Q6ep3q%A;?K1V3dw_Uk<iA~Y7%s7(y}bm/IX3;/:=!^' );
define( 'AUTH_SALT',        '2`~9NWwV&vw9&wD/RiWiIul4M6>!iM7og2?_0pB.9CN&OKOpM?`ACD9|9}Rc15(^' );
define( 'SECURE_AUTH_SALT', ':w;<~?=H2)<Nvz>&,ul]Rn36Eu!S;c8QFn%ca:fkAi441T)Iy0j-#@nc0GaH4[NH' );
define( 'LOGGED_IN_SALT',   'Ms4}c.>3Iig!(v[$QHL~Q,-hFizi=Q]:!l@TaM~Q$^Z1ir `-Z0{Q_q{K[eZV!aJ' );
define( 'NONCE_SALT',       '@S499X4*2LdRz5f|;_k?a%akkQ^=0@edfW%Kpp!5-I4,)RlJR:Fy8]z!IHf{p?Tz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
