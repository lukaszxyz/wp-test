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
define( 'DB_NAME', 'abayomi_logistest' );

/** MySQL database username */
define( 'DB_USER', 'abayomi_logistest' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Magik123' );

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
define( 'AUTH_KEY',         'j0tKg8ZQag#*WkgLP)<]#,~>O0)Y]lFy}>TsI!*N4![&g-fAxJ4yJ:b8=*.)+sc`' );
define( 'SECURE_AUTH_KEY',  'Y5Psi>:?FJe{qAmDg4 -OI^xjv|M$|ptmg]mvjG8$=vJiw 41t+h: $msre:;=2.' );
define( 'LOGGED_IN_KEY',    'DG3~PBCsws_iB8p;&oSn-*Iu~/}$J3nSz0TYr_d;||Nu325fijfCl5.&Fa$L8eQF' );
define( 'NONCE_KEY',        '`g.e<:d6_|DDVrw6|t/&`,?MFZi4gD7[7&-u[VITc@:wL=g;(<+IJ6j1|7DR*JZ|' );
define( 'AUTH_SALT',        '0Xy)*7J|% EP_5F|=dw2Kjq Ty+[/=^HVPcLwJhOXDIGp]=Z_PLH!llSCJ-U`X?L' );
define( 'SECURE_AUTH_SALT', 'qea..XGE1^/(lv<y_i1qRC|LP[gM-(D8E}7 >}I?l2u&DLLZ|3vHa0 /&iPz/ xK' );
define( 'LOGGED_IN_SALT',   'Jo3K)e8C*#yr$9{]VoOX6I$xz^IHg6`])O@r.^lO0a-`_0^Srb/TtG.f?qh,N<M_' );
define( 'NONCE_SALT',       'Y/x)fT*:+vx[*`Dmn-XJb!IU^p8pIXcEzUr`nLb+MGlmm<4CvL]Xz>3xK2m+:w|5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wlogisp_';

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
