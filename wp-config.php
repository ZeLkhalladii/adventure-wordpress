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
define( 'DB_NAME', 'sayoudev' );

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
define( 'AUTH_KEY',         'w0S$b(iJ]neD9Rcwn]`d-mB^*@UlL4BYzU_t6S]k5 v2$FHmzrlh}LU< %*AHT:u' );
define( 'SECURE_AUTH_KEY',  'RjU ]wap%OGfLnb}0$Bfvoll}W6qtN<A{oHr12H;Kl@g:?~^pb*n]h:N{0y/%e8a' );
define( 'LOGGED_IN_KEY',    'h~[`_hEM%`8G8T(,lLcf8/TYHKP4O=S3A8k BW1/hu#`Xhx&m<?A1T6H54-.fF,)' );
define( 'NONCE_KEY',        'SD&W&2i>I1LkRMcI}vo_OA2mmlL3`.^Wu;(!e/[GD%6T<wS]Kmsgj=dq]N:M)eMg' );
define( 'AUTH_SALT',        ';5Wq$G_a9vjl/Ksv*QX^EYKrg*q90Wtd<1(#(vW{$.RRcop>e3z+@,(||1WuE;)h' );
define( 'SECURE_AUTH_SALT', '4Pi3Mf9[,{ (G a#Z++f?*rJXFw=>8)_WfSlCgf] jDDrO(V{_gsJce5$b5vK=sV' );
define( 'LOGGED_IN_SALT',   'XxNLqR,xjX!9hE<`hY-tEr:f[/kl9vEV*pD*vY.h3|@8yy{3W~j|qd[Y5fz;5Xz4' );
define( 'NONCE_SALT',       '5A1l~U)xBJ{fjsE[A$+}-lk-Kx#2*.aTWwpA FcQ/=YoRY%HZZwl3@cjE|+eN3nY' );

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_MEMORY_LIMIT', '128M');
