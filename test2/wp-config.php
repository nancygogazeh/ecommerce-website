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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test2' );

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
define( 'AUTH_KEY',         'e6<794E`-OD} e=c{d2FVU4?CN_Rf=xQH$e)y4@vurL3v5`_&*%U[N2dBEGO-2Ff' );
define( 'SECURE_AUTH_KEY',  '/(ZTj9?_sjDASJdx|e?R,AF|yH{RwG0~pISY;4TAu|+W0i>HW2k-M?>~~uqm?` j' );
define( 'LOGGED_IN_KEY',    'KZb_}~XWCv(X1KqRNW{jN%di=K]4IZJ4,G2RF0X?G`UW@/UgcV+ge)8M)[!6g>CF' );
define( 'NONCE_KEY',        'Cu!gYX-D,SSUCr0Go/Un>XjHk.KZzu&yx$7*Y5oM-#G_iIYPwS:6co2sa~F!P)5]' );
define( 'AUTH_SALT',        '^yy) p{]C,9I^K;*ECSn0sl6n1G16fpU>PCNXN0BHZoQu8Q.IE$b%y^*I@+>W$=>' );
define( 'SECURE_AUTH_SALT', '+ ZVf?]FKCc}&joo9h}7T}1~PRGNsDw0$E{LQn|UXEl](+iM}$~~z]zpv|(&;#i%' );
define( 'LOGGED_IN_SALT',   '9u:%YE_+no}pdnKen&BxiLq&;Fs0PRb3kE#>PFy{x79NN/zbi=Zo.f*LG4CkD&Ml' );
define( 'NONCE_SALT',       '+y;@ty~vW+LrNwy1!_TqfL$q@1&K0vQ#em/qw+]$DWxeTjMn@lpmJioTo>;IHSzu' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
