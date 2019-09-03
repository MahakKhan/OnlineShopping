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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'zk+.SeniCGb+paaMmU3tfCQVvHfQ{:@iZpNe=Sy}GlgDIp4wSB`fT+VzGuK_o.:y' );
define( 'SECURE_AUTH_KEY',  '|x3shT{s{kr~Pu$6*ft^Ac$?vkZBJ$1P1h_$TBlAB9cur7x?bZ?o==Vs-|_;F_vc' );
define( 'LOGGED_IN_KEY',    'Y/q& :dAMv1@vg02t-gX.+bn)N&D;hW&ka2[pG-~Py5~AZ;E+lb,WSQ:FO.T@cKP' );
define( 'NONCE_KEY',        'o0~ ?e%/rgufg+6`qxJL$xZE}?-KJ,cs@(,;]i6 !jK9Hnvi(mk?toW=Gi$hqXZb' );
define( 'AUTH_SALT',        'N?~XKlPN;0G7$,#Fh1@4~:2S ZxGrY[%e.5iRhHK)2YP-L5nkb[>A5>GV-O>}LR=' );
define( 'SECURE_AUTH_SALT', 'Vx#s {dYWb:5tfUV,-GpiLwuz>])uPv+#Y+<`H.C5el}LxloIS QI9r;pumh[tFU' );
define( 'LOGGED_IN_SALT',   '!AjZj:[z9&+cw%ri~sg|+EdlKC,e[HRU|!W17M)Q$?Go$HcWs5;S9kg;u=IhA}Jv' );
define( 'NONCE_SALT',       'Iag0~@}ICUcpbKf4B{0^t6zAi/sSY]u$57d:|u_ki6A<yGEUAWeAqfgK@J2&#i0 ' );

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
