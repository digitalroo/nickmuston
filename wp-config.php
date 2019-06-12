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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codespace_db_nickmuston' );

/** MySQL database username */
define( 'DB_USER', 'codespace_spaceuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '(lZ7T+N#eEw,aX=R[6T[#Zn0' );

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
define( 'AUTH_KEY',         'uIW#g_JaPPYa=.9qxe_W,;xy;x7}=XT2j;hc;5><JS3w*gGZryF^ 6QR<1: <Z9~' );
define( 'SECURE_AUTH_KEY',  'yj]Jni*5N7f?@sRm!H];hLWqn g *E;]-5JQ=~[TT&~p(^9fs@5eeaJ@r_W5}TX{' );
define( 'LOGGED_IN_KEY',    ']MwBEFa=O?i=+^w9Y9z=oB4hn.%I2Yo6@]SDT.zN,Xb*22X5_=XXJ{CFL&YTeTk]' );
define( 'NONCE_KEY',        'tO3be|?J#RE*BF}*#V_x#[1D1?rDH]UdP(qR9xSS.V<4#!}h49rI(5|xta:7}22~' );
define( 'AUTH_SALT',        'QS1(`dD*Q9=_@3+K#zw/suSw{!G(XFu~IMbCypDM~4+tA|Iv{eBji@S[*dX@B=w~' );
define( 'SECURE_AUTH_SALT', 'tE&-d$*5fAo/)G})m_iGM[EruFB]}5tFo~2s38cDqU%~(9Mbhtze@Nvw/]XHX6v,' );
define( 'LOGGED_IN_SALT',   'Q*jp;T?0lO;t37s2<aISVa(vRzFM=$8@UvGUi6dp0*fVy4A-TD5;C5nd69Bil.JH' );
define( 'NONCE_SALT',       '=Q03ks:}9R!dw:Tj<m*?1xx!mh{j{TGJCM(Fnz#8`GNA2$#;2*PR)QUfG_d?UEY ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
