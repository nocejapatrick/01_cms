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
define( 'DB_NAME', '01_cms' );

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
define( 'AUTH_KEY',         '3{>9U^;):jAgm)$V</RpHT FogFW_%Ld^#QgA=bg8_keLCK=mvb$NkLC:9h9Rp[Q' );
define( 'SECURE_AUTH_KEY',  'qta2 2gg}xYfcY Y:>ZH/1@,:n]#ajP-cnN^==NFXCW.kOA%{`P9TjvTHI,]4Bsn' );
define( 'LOGGED_IN_KEY',    '$$k@w e^1B.?FbJgC! 3P26Ry>94ZY0K=[D-`A^[1SbmMy;j/Vtw[j3=v};zsKOZ' );
define( 'NONCE_KEY',        'rTMZ9*8e?W!QwY4oWzli2LXOx,@lDG8lamx+e`zv-K{ZI|Yqvmc^ _? J158{:}l' );
define( 'AUTH_SALT',        '7xy,7w;~8708(S1s,Tz;]0PecL!RGavwS}r -bEI^-BvL3fRl&SOYaNsCKdq]1;k' );
define( 'SECURE_AUTH_SALT', 'HMMC.Z:91C,B-J5y2|fl7c@q=,%!G[6D.^AAPB#cvkb[wmV!VDfcDtow P5lr;$_' );
define( 'LOGGED_IN_SALT',   '=@DB?aVce7 M(|0kPzN6!_rX-q91j!Dxh:[G&S]uHk4C#vhomz 6h5|0J[y%_Pmf' );
define( 'NONCE_SALT',       'x){Rly?O)v_ ELoI=+!m{1@~DEVE[q@Sct7oQ$+*fi0Z|H~m?}k?_MG/>oC;=;6s' );

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
