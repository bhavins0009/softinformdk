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
define( 'DB_NAME', 'softinform' );

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
define( 'AUTH_KEY',         'X_J<cr)C%=^#{@%Lz,KJbTi`<^,j?DU|!{fIkh2WxGF[MVNZMFA[[OIr.=aPPD!p' );
define( 'SECURE_AUTH_KEY',  'W!N#qL~M&Bo=S:|:O%GL=#]t+K&U|WS=)3[@KXu*qtw<I.104FY,rO,~HF%y0D/d' );
define( 'LOGGED_IN_KEY',    'X`[z*zU,)i;+]4#LwSZtsJ4*WLScM!m#vG-=>j;OF/L&(T6kvPqd8.fryy.3+_ph' );
define( 'NONCE_KEY',        '_amtJeP#GKy4CD2_A.i}1R{{&93%kqZ>%m2*BeKNH )VG-|N`Va[HS{j!B0v l{[' );
define( 'AUTH_SALT',        '~nVxZN*5wJx4fQ^xh=BE!|Sf.gTCKd44 Yl,V$ Zeji#Ihx#MEtl=`YW<K^*%]rE' );
define( 'SECURE_AUTH_SALT', 'Qx?W`e]V<-B^+j;6,ByV0!;=tA|/cit2zVHMyzD%N_J*=1g 99AA#p,,VGr<Z8%F' );
define( 'LOGGED_IN_SALT',   ')Nyeiuh)pm (SG;YZW+0u%>@70kbDu@j#0{x1.YVNhArRVq,BkFFE/<<~IUXn6UN' );
define( 'NONCE_SALT',       'ky<S!#:K)#~HXoRjzpe[MBY I8^aDca[c%BE&!8fi lBBh+b2.Ej1$?iCT!%y5%-' );

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
define( 'WP_DEBUG', true );


define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/softinform/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
