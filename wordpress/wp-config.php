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
define( 'DB_NAME', 'trade' );

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
define( 'AUTH_KEY',         'O%DG]<k5.n({@?jc kb5J96m/xbY4he@Cv1zQ5@fa:TvxJ8Li>DDO$mA=b`AS&/n' );
define( 'SECURE_AUTH_KEY',  'vj%}DWQ+G?hwQUjN],SNmSQ=dEzgL4u}B=VBtyW,[]wZP>U=3g9Ec5x9^0hyBmZa' );
define( 'LOGGED_IN_KEY',    '2ZPyFO%x+mkB)HOG}>@WRCarTa de`v}dgFmmjjPEqqkMnjoG_X3C&BzwR48r?0[' );
define( 'NONCE_KEY',        'ZO11*D-;dD9g2<Jku[wm7OI^)A,?`T-K)Ch]}JolRj,<Wzy5QC-nJk41V*d8FL|a' );
define( 'AUTH_SALT',        '%=YIEsI1xY+7Wgm{^r0[9 iU3pZrIqCOZlXH%3D:h @DN&xPN>fU s <F {O)fhY' );
define( 'SECURE_AUTH_SALT', 'pFTvL6/g&NE2,L%,KaWwg8 hu<BinlTh Q,BBI!5=|rfDQsp9@pTgmfBM3cKnc1c' );
define( 'LOGGED_IN_SALT',   'sY8bkfFv|k04,xrhK!L4-~Ik>j0/o+oEO)#Z]Qi$:D*2gH1vY{b{@JClGs$A[>2(' );
define( 'NONCE_SALT',       '_TbUIu+O8fJh!>9APN_:@W4Zx3Eh[o{nE/bml^W!k>_3Asbcue[8w_Up#|#xjeL}' );

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
