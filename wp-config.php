<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'agencia' );

/** Database username */
define( 'DB_USER', 'agencia' );

/** Database password */
define( 'DB_PASSWORD', 'josesito&2149' );

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
define( 'AUTH_KEY',         '3g1xs64#+Cgr*5`g*Y{/G_X+5KoI7-=i)5~6c*lsg7YS_6*~[56Yfof=`4SH2o{O' );
define( 'SECURE_AUTH_KEY',  'U;Mo,(I;Tx6ATDo$~I(Q<s[Nq=Sql~8ORkFj&o9{(pp<EI#O/%<(MCShLNbymU^:' );
define( 'LOGGED_IN_KEY',    'PtF;qX0w2jpBHwo{CifZ$U.o([ISwqgK@iW#T*je/;*-W>gpI;Aj`+B;^_dOY<89' );
define( 'NONCE_KEY',        'T.!wma(gIbHN<;Mn=3S*{~b@O{v%x5SCFu3<liwVIf!JsR6$0L6|OCJW{;9J50sB' );
define( 'AUTH_SALT',        '#(7]U1u)irmC)J92%%VSH?mg#*zL;ykG;8vG4Si|{c.g.uTF]M%%OxwThret#.OW' );
define( 'SECURE_AUTH_SALT', ')N[NK.WW@(>Cnq5L<l>/~233db8u;Rm,->8?C/m.)} x.M4R@+SMDR9#B;oG%V!B' );
define( 'LOGGED_IN_SALT',   'H3L)R|5d$KD;:CW[`&qLfvk@;,ZQY~rEiq,kgJlb,&5v|U4&Used@6FNA4W1Z[_ ' );
define( 'NONCE_SALT',       '::)A{.{tOTh%G/{nRRP,V./KNlNF*M+iM.!lo7ne?D|hx=#{> *3h$#@Tix?:L3X' );

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
