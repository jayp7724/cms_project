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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'vipuldemo' );

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
define( 'AUTH_KEY',         'Uc:k/4N|Z3AuQ=?!v2nijZ,7B5d9ha`^Fl}|?I0PIriujcw_&o>g>Jtl$=1m8!u#' );
define( 'SECURE_AUTH_KEY',  'w=rNWI+iExkI~EV*JS~ 0-b7;OK4s0R5irmcH7}gC,>^@K(yX7:o1@fPyqEl?oK<' );
define( 'LOGGED_IN_KEY',    'Bo(4j;,R05rpTZvf[izhs rIY<`B*RKQ,XTjAwVilXqr%`fEPXxqb]WQ [e.nAqN' );
define( 'NONCE_KEY',        't?z(A#gqleu[V<l:Vpv_79 }Ew6YkmB|4<-.$f?QEtd lDtVd`s7(URDMdh:]7m^' );
define( 'AUTH_SALT',        '!:Exg(jD=aCO5hJs8 G[ WlX1tjyDcfbmx,dX9xJ5}tB0L;/3UJ,EQeZqtF{Hjbn' );
define( 'SECURE_AUTH_SALT', ' 4`{V&fV$h0:LRzO,_!h%[H zdD_[}UU_[7I0,Er v/okzyV<F{UgNW{Zamdb(x^' );
define( 'LOGGED_IN_SALT',   'MOS+DkA|LGT~)(uC?W%Z.24v_c^Lc=aG )~x/|cI&/{@9FaAk!gKK_JnGyCBixJ8' );
define( 'NONCE_SALT',       'f;jSW|2wYKj+Y?_$31a|>W&|Y;{O^:V?|c[;I KQuF{=~(c=|[~h+QxG$xY{6U)V' );

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
