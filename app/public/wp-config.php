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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'Zx]oh[~N<1l-@,VD3YJetewq>VYO1uWYmn=KFE9f,yBKiC1fGS^u}Gom~ET!a&Dv' );
define( 'SECURE_AUTH_KEY',   'coh2XI2R7,)nOuK]pawCwN6?,xXN#X]9|E5|JSRw-g=+Fi86j- #W1?$~HkBPTpp' );
define( 'LOGGED_IN_KEY',     'k+74[o4_~1!9sG.9`iEie7K<|eds_E0z29);3]!.!~u0p2NdrxG64|<_O[WrOO[0' );
define( 'NONCE_KEY',         ',iHl+c,_P=o|G)N-=iRtlBFOi ;Bj~*G#&)7V)^vx4T0*pGYeVerkYn<3LDKfLX:' );
define( 'AUTH_SALT',         '-(l^;-<nHL_#Tra%!DK,]v:6%$Z>H!RrT}vr<6BYzo|[$M3SvIp]WE7/5gwCM`/z' );
define( 'SECURE_AUTH_SALT',  'M3]W+f>}8*f3*,}.F)y|QOh/CxA*1S52b*)Wy+W7a#sk;Ij&fi5swI~FiV85`.nY' );
define( 'LOGGED_IN_SALT',    '`e=CC]4]m!jDPeNi:p/.}$Ugg;,|&=J6.LnxCvt5BM3YaFN,3e5^ESR2+:H}UX/(' );
define( 'NONCE_SALT',        '[9^+HmU@Kb}Rfv5R$?ghlbfIujB7l{.[|bNC2txQ7_!v{yGISI;-MA7*6 RQe#AU' );
define( 'WP_CACHE_KEY_SALT', '0I:UPktq@#)-u&#zp.ztjcE%*J5gbJch<11w9LFKzM[`%u5AB)a<=#d^Q[njGn<-' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
