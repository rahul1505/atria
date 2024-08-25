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
define( 'DB_NAME', 'atria' );

/** Database username */
define( 'DB_USER', 'atria' );

/** Database password */
define( 'DB_PASSWORD', 'FV=G)1_UZI_V' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '(3+ hk,3V01 qe?9I2oi=Tj~Tsa4&5V^^5c)te|`Wkc):M+WJ[y$D@;Cl_TgMs]J' );
define( 'SECURE_AUTH_KEY',   'tf}JbO)?jk:7f..+~gtQ-TWjB`zU9gFKx]hA[tUk},4Y0tWZWDzE*@#ou,`-Qp^(' );
define( 'LOGGED_IN_KEY',     '8azK{{$A4];]Le6O9s2,a0Vq9,jI>V)V8.@}<#*hb-)a9l$]r)&U1inXIueqR^^K' );
define( 'NONCE_KEY',         '1mD=hwkiZA~Kx=A{!Y6Rc9Y07GXIT*K.78TQ{6%. 4>m,aEM+qt_YV77ICK{rm!1' );
define( 'AUTH_SALT',         '+hlW<~7qsfF.-W].Zy~?(DMzVlJ;bNy^?8gDL5 _1~,+2d+9NR-B15l]B rHC{eq' );
define( 'SECURE_AUTH_SALT',  'gLm8euuIAHr=u1g[2~pes,9a}~k3u?!DC$>(2@f7.*OG,ecDH*04om!qmRJLC4=/' );
define( 'LOGGED_IN_SALT',    'E*n|:jXBD%:P%*YvH=*)*9H8?0}Pj1Ec``}sBWXDMk<6^Ek%r!;q}z.eo(sgW,XC' );
define( 'NONCE_SALT',        ']!G0+y1s>-EuV)vJ=7Av8XXVgxa>=fXB=!l5^_+:;~.k2.+g&v[Guw}_qlq7REPR' );
define( 'WP_CACHE_KEY_SALT', ',Cf)~x,LKGN`JL}+gUd$q8,?zO+_omv&@Fboha_.(f%]HmXBX+Z9GQDFSOwUN CZ' );


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
	define( 'WP_DEBUG', True );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
