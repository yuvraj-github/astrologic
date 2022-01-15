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
define( 'DB_NAME', 'u905095300_astrologic' );

/** MySQL database username */
define( 'DB_USER', 'u905095300_astrologic' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Yuvi@1306' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'H+`hg2?u^T%Hv]kM>.`jU(oOhilBkV$:Yx>JV&M<ok1;tKR@xI0x(M@ailn)]%5?' );
define( 'SECURE_AUTH_KEY',  'gGjsjT*oRysC>4n}!SgY%to/r8RiaAArPQUnIGym^)4<TmsUTn5}L{7ce7[g?U; ' );
define( 'LOGGED_IN_KEY',    '7suil@w/hL7)T).rW>ZKh~OC_x59LjD@#I.H-{^V{=Ig?UWEcOE; vYD<8TzNhtx' );
define( 'NONCE_KEY',        '~cM+g@*c%z/lQ=GZmVoztsD0p=zG^Dt.W~1JA%;6N1JXU@W%n8RED=^HKe>BO3(o' );
define( 'AUTH_SALT',        '+~>OXc2eFN.8l 2V]hafI>C8:^@Stg@HPC8m(1j0)T&Rid/#..`@F+W`w@s+p3g;' );
define( 'SECURE_AUTH_SALT', 'o4jRTRxIGJp~J^3,ys~9lu=Djq!=H0$%e-)aP5tl-;ts.x>5fVdf{_MJ,+n+jB,-' );
define( 'LOGGED_IN_SALT',   '1Bu%Wd#F.@baE]O:hnamR@Hi>u.I9PhARR^Yuq:3f4Djy3b{6,(PIIw=ePU+3zFz' );
define( 'NONCE_SALT',       '!tOxy`kh#+fAw$ENqX)G!bax$h-icDQx-za6|/Z;5D0m~Ba}|ZO?oJYZkiw>Su}o' );

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
