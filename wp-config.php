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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywebsite_db' );

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
define( 'AUTH_KEY',         'UH[p60X|szf7a{g@k=3L-4H-IpIa828PU74G)eh<&b$y(Mkmg~hn7y[R8?2Env=j' );
define( 'SECURE_AUTH_KEY',  '`&$,8w{yb@TiJ:?iAi-g;x93y<?l&?b6yER]C_X;ksCXL&<:qU}BuX!wPTM]36VI' );
define( 'LOGGED_IN_KEY',    'oOXpK;J7h(=HSu0|b[t]0xF~@:$!Q_BG9x0+r_njslF`#LtxRITa<tgr5#fVs8H1' );
define( 'NONCE_KEY',        'cKWIY2yvUv9T_G|@VO!MHXpJ]X&e5vu92gt]aF]-A:O^qC/|7I?Q:?uO3#Hlr<Ry' );
define( 'AUTH_SALT',        'cW|=[Y4io7A KmBxPpTp)wb>TeO~xJ/6^,5h+bFgxN4kXH5S!Z[FXV?^=BwE!H! ' );
define( 'SECURE_AUTH_SALT', 'sjWe^kQIbYAJ9?AU#Iw> o)hv[T}b<_Kb@0g`Fz^fj2$7ULN|}{_VWlG`C82&>=l' );
define( 'LOGGED_IN_SALT',   'NSHFq1M9dp]Xzy1 *Zj>6|bF9@3S8eq_+^C%1?VZb#[kA-ZSaahPM!7&S d~BcH<' );
define( 'NONCE_SALT',       'Dwt=8EE+ae(v*>4rm->SOjC_UbJI.>&Mq4@X{C(M4?c`h4O(9%,*3cP2cy$dTuM#' );

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
