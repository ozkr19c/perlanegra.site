<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u565015332_EibUZ' );

/** Database username */
define( 'DB_USER', 'u565015332_EkW0m' );

/** Database password */
define( 'DB_PASSWORD', 'oJkliT8xq4' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'lK0y4Enh+a)S`]e9KI}fOc(:aAG:%M!>,IfU_Bb-g|>>%/h)&/@?>(p`RLs0P&Yh' );
define( 'SECURE_AUTH_KEY',   'g2f&[hM1-E^vm@C}]xSb& >1~nkgfHe{j,9oz (SvIcFwb=~sN9m<t(+mN=-Abo5' );
define( 'LOGGED_IN_KEY',     'dt Hm[y4l;zR9r.ypp}!m-J(yfbH`b(L#fBCc$_|a,iWKIQ_|q,xzjUHsCYCr.(4' );
define( 'NONCE_KEY',         'u|~ }MgV|^D8R#FeHX9a<NEP],8s4u)5L..eII73Z@>pC?R+-e@~HJUEXb^nJLAX' );
define( 'AUTH_SALT',         'JsWv-f!ggT]I?j]s5:7+GcQZ`UIV`rgd1i<:R37N>LL!j^?}o#mC@D($c;$2JCO,' );
define( 'SECURE_AUTH_SALT',  'e#s,;(Teie+y-%5yA$x$Mq$}7vuwR=fw9hgyxgju<*/tM^`J$n!Q- n1Me}<7rzP' );
define( 'LOGGED_IN_SALT',    'm[K|&vCrXIH6F%E-%!Pp*m:i?3LSeA+~H`TmR.KYGh8{Eg&v#JE$M^IdX;]tW}4l' );
define( 'NONCE_SALT',        '_T+%TWSCt^y}iRKr77@BVv11<wNpIWv}PU`SH<qIDYS=a$n+&AI|Y|mt!dU #xMx' );
define( 'WP_CACHE_KEY_SALT', '4(Fh7}U/QT.#R<3+n/M^rc=h59dN?;sqGLbdq|)x9peUyp{<tNpRv7EeX;3j_f.f' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '82d3da7f1d6687db245825ffc6cde9fa' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
