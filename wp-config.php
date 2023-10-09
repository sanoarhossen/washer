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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'WmT/FC/OlED{(P*$l$pTy!:>T=&o_q#}`CvgpW.]gLg4mM/GN!;nP(.z.VN!LK$}' );
define( 'SECURE_AUTH_KEY',  'A!*IVG]4.^~WuNHrE^!1{Pn6r0]:&DV+3eWSuU%5 n3KBa>U2(q;- 5E^tv`BcTf' );
define( 'LOGGED_IN_KEY',    'fn5WF:s;AGusTJxkB4kF^&82zo]Zon&#4Z0ME|B>eA1sfaSWh6i[o3&w$Z*l{ ob' );
define( 'NONCE_KEY',        '){P@$*c|pAhd;hte/qh~_OR1$!]/OrxbB90pF~{rBVXRT|a,GBP<6G]4OS!SJlVl' );
define( 'AUTH_SALT',        '=N3N!<(TW:[uwsZpc[ic&~uxL#CDT5QZG||{qWr*I1KO C7&=]s~!L ,5NtQ9$+0' );
define( 'SECURE_AUTH_SALT', 'nvLG^|DEIinO$l7|i32kC|R15*E5}VgtF+f(Ep8- 8Oq%CZ4H8eMvooI+/YQQu=,' );
define( 'LOGGED_IN_SALT',   'N#.QCnL,>x~ca?yDRqc/58lBhe7hL6zb&2z24FC+IDk6j$Ir3kmruFp|g_%(C[ (' );
define( 'NONCE_SALT',       'BMwogJ3Mrp,N~wMxd2mgAI7C>3iW0Jqo/83z{r,#fBo!;/NS4P[5[|U9WmLw#~Jm' );

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
