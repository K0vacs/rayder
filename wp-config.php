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
define( 'DB_NAME', 'rayder_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '%%l,#Fv8^7zGm-@<qeKkvcp0=6iJv!=x/~FW6&Xzqc#,h=/vU) <6dyPpegs%sw ' );
define( 'SECURE_AUTH_KEY',  'H[RwJz^IQ_vsl[x2F+ic#46j81N5m}5+1{:2-K*@> 0A,0{2pP?@VhVA|Wn!N]{`' );
define( 'LOGGED_IN_KEY',    'c:HbunWKI)btykH[p#+wXULDli oQ+f#2i=CkFGY9O5)YYU7fxwN839#ig h1DuV' );
define( 'NONCE_KEY',        'cR:,ez03iMIkw)d;$P|G ]IZ:.[=RB@dh~T5fYMm%m[PtC@XRGPFCrD`MCb(W?n_' );
define( 'AUTH_SALT',        'P}|YjmKi?5{3 4_{]rCSePt%9L:W4thCV7yG{$*vOT.(s9&zOHYx--qCd*Q/ib(v' );
define( 'SECURE_AUTH_SALT', 'aBk~Y>-|&6CRJ$$&YPw6Dn1F $7Y|jiQ< `g}7Zz1_)X~AhS`b4DRa/^$j*X7[N%' );
define( 'LOGGED_IN_SALT',   'EUko8,0S:Z74y<<2zZ$`R `Bo#jioWdOy61fY.wn4^RlADGp%O4bbsLMw[o=G*9r' );
define( 'NONCE_SALT',       '$yDH}y!^e9%2|QF=K5{R/A66PNQ$<iz<>sV0:-O0*U@-HJ~BGjs:knfC+n!85T&b' );

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
