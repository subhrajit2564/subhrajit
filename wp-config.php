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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         '[5%~s1zS.ly6}.8TK.qmQM|uRXJ~w}]3!?OF^(0EOsVz|IJ4U>Q#^UojqmXtKU@u' );
define( 'SECURE_AUTH_KEY',  'buhC[c.:wDIAuEGrB02mR8P]R97+$|s!oklUS6admLg/]>9&id`qETAkdVAWOBX{' );
define( 'LOGGED_IN_KEY',    '6;ub9h~]x!QZO/y/m51OZ9^Xd{wxZ(~Y]<I~zDY( }3~n8$w zYoOKEca$.W`@ij' );
define( 'NONCE_KEY',        'p7Ol@GveCy{$8/FPORV3h ,sYkT0Ey*n/&y]@v9bph $}6bZ$6IjUd4^cv1Tq2kQ' );
define( 'AUTH_SALT',        'sZ!Xz.V};0t{lp ^WGV!KQ1yA_/Ya|%8bVCvAvWk4AC(Srh}+oku}V7%/VRn%~UA' );
define( 'SECURE_AUTH_SALT', '`k/>EU09_aN#1A[4d:8vbI>}tu3$X/KM(Yv=BeF=S^m>`?cu, W{%ON8K)>`lIZs' );
define( 'LOGGED_IN_SALT',   'm]ZM:m]5=1p2ZSI!]x )!*8Z0[XtdFDv#rh5%,P!XM1gcxc4W3Ffn{-qhV2AH/HV' );
define( 'NONCE_SALT',       '^M)x}b^L}mvVlKAD|b?9$aofFf>N_?p@?@,B}Ek+ZMdXjeE*Q$$nc`UAL,Y^pnb.' );

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
