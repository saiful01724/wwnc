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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wwnc' );

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
define( 'AUTH_KEY',         ']Y~!f7tI,>K6n&ecFYJplniFW:&Yu B+[x<y8=oBhO=L&U6vrTzqhnas~7(hSu%8' );
define( 'SECURE_AUTH_KEY',  'd*G~>Wg2`qC^#v<y}^o`:iMDvfvD:pK@1MV*)-(M<4D:zuA|P#>$SaSD`)OO?YGX' );
define( 'LOGGED_IN_KEY',    '79DGoi5Dg:fBr,D4|aOmdqMS|1g9ncRDwYwSTCNVm]MO.~uZ,NRX|wUM5C$TT*Bl' );
define( 'NONCE_KEY',        'f4%L,XTB@n2=oTonZO0~WYd5KY8GX73y)e:oVlg0PaiC}p,Be8clR9Jr{Y&DukrE' );
define( 'AUTH_SALT',        'HitT*,^+8FjBz!tu9BqKrg8}?f2k>O52f:j1hLfk^c/F3dC`dEB~`8KaK}pEhc65' );
define( 'SECURE_AUTH_SALT', 't&fdN;: Xq3>nYJ/$Ab[4`H-dU_~levl:o2Klk>Z0slaN<N(Sxj=v3jI|on>~D{]' );
define( 'LOGGED_IN_SALT',   'Ns1{Iuqp{24!UMEKLKS*U|c+ PmxaSjo~j0Iun3*YwBqrWKa->qX5PWzwciOR%Xb' );
define( 'NONCE_SALT',       'TVJR@&aIqKBs%KyvN3_VJJb,};(8.dla6P%KmC~*Gv1p!ToLCwj=_JkS<vm+uIm:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
