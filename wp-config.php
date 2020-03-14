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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Ul>v-fOoG!DNeTG:d>Ryb2K~ 94(CTVCkhUh(=u3C=L6oIYXlt_tio?%t0kTQ6Qe' );
define( 'SECURE_AUTH_KEY',  '_~*[[@oCmMbZ~5ib2zL|E)4HG09@pA(`)zM2 j:Y]cLFXg~ K5HdXE`bl:VN:cSB' );
define( 'LOGGED_IN_KEY',    '%OupNs?[pGS;~nO%3=,:39os#x:Frln+0JUu>xjsZ?Df{/$kw-N,;FxNvE%l!ulf' );
define( 'NONCE_KEY',        'j.?TeV`24:D;`B&`Vqr1=.Bw97-ln`}+Cs}n/XSzf4T *0%Kr&IuEHEMY}fnQ(5P' );
define( 'AUTH_SALT',        'gYr[_.k |$b+BWLZ[lPQ1Ff;4+zvHN#ijErRsZDpyXw/hcg,Wc;<7}nha0L.98UX' );
define( 'SECURE_AUTH_SALT', 'smG{`.eF-dLgQy?QXQL>/^uE.a7~-.?0,WK&/L4$0q0*v|,XZ}M|[|t#Vkq4lzH<' );
define( 'LOGGED_IN_SALT',   '2*)1pT>!MAQzO}<QBKQ>/Zzl-2tn);Bzj>3H[C>scjr&u#o`e!M}I[WP`@JKSZL$' );
define( 'NONCE_SALT',       '>?i-Kd<z-4dls+(,i>}|l]m |-SjneOy5yPkKhtSyPRPS^b0[Z#A7F[^@l{.,C9I' );

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
