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
define( 'AUTH_KEY',          ':gDHi-MlLc?LX9H_[ir{_~wx5[D8Qd6Mc>1N0b+)+)h:0K`.J8 /s@%}l3X.uR5I' );
define( 'SECURE_AUTH_KEY',   'erSpRi502M2<DWac~+zR9yaV!<{-%Z#u*=6qMN.*)xCllj-R[-YLsIb)Ol6wWOko' );
define( 'LOGGED_IN_KEY',     'lBBgcXGwPc+mr|4xF?F*| *O/A>WdWA[5(Z#-H2DIzru{kSZi);W-6HT-zE&$3Ix' );
define( 'NONCE_KEY',         'm:*y{EPQihb@IutUbk/xzt&.GNMe9!=V~_U{wG43%dR4e#t7*HWVl|Q:Y/Cv|^DH' );
define( 'AUTH_SALT',         '5G5q3NdsiGr%7_+Un|_yQq~.-]mbYs}M-$g^?B=8$}Hw $H^6XOJk{/g#,rISpzc' );
define( 'SECURE_AUTH_SALT',  'q;8[n9^@akwE6sTYatJ]ed|O5m0D{kFm8v%pewvV~DH!loi;Iq{%zX00,8I*Y6P6' );
define( 'LOGGED_IN_SALT',    'Uk+6)3ZqtlHA* Y,ja-Ga5 .NdzG5._lzJ%N%`K%s7B&=rXOfq`:jxIp>qe3)4Pz' );
define( 'NONCE_SALT',        'w=)s3C.;up gAvKS<2gC0HkE?ZvtKXX9Fj0&q]k|fQ:t_-1uDGB?Ejie31!Pj(`r' );
define( 'WP_CACHE_KEY_SALT', '&LuyfGEdR|!$T)2i+&8l& SLPT$$VL!M6qI+[sF1eX/dmZ9&F$LGz7b1P_-$=8X;' );


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
