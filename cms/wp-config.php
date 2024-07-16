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
define( 'DB_NAME', 'kamakurass_ca' );

/** Database username */
define( 'DB_USER', 'kamakurass_ca' );

/** Database password */
define( 'DB_PASSWORD', '1192kamakura' );

/** Database hostname */
define( 'DB_HOST', 'mysql301.sixcore.ne.jp' );

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
define( 'AUTH_KEY',         '6N?1#5#(owEzHAZr!_2#I#8SBt0,u)y^^!ft]xgx3@,Fx$ql!AnH7t/Q5T5Ym]MB' );
define( 'SECURE_AUTH_KEY',  '~3LkAR;|MTc[?<IK.WStyvKN9/`;8JAfZ{rA*g/s,cR0&w-8!1ws9w!cc={@RGYf' );
define( 'LOGGED_IN_KEY',    '?xy=PiRAgXo*2CtK)Sh7p[dJoy}+(6CS2[1DzzRY$;(iI1gauYxi0h67a$j;?WI@' );
define( 'NONCE_KEY',        '+e?Cs1xHnntKiA!6 v1oi{RC3M|C[C:-udPv8l_g@|(cGOQRdRPY%Us(a[69%MRT' );
define( 'AUTH_SALT',        '41/Gz*fXT=-Va,*4%7]!:_}i,Wpn0G|G!>CqjUMR,qQY#~(.R!}+rg[snR43j*`Z' );
define( 'SECURE_AUTH_SALT', 'vC_7X9+!yj409ECc~2|]-hw?Q`bnv]MsWw?noIlmx=&HsRFpr_h:z7y}=ri1VeQp' );
define( 'LOGGED_IN_SALT',   'a7~[}*Ec|8@.y:E:G7xpA gnKo {`d]:GwOo -h1]j0NZ`c^kW;Ws,OMAQ0C@=[-' );
define( 'NONCE_SALT',       '}{){*ry|T8GPwGN,jbz@mn[9c$v8SXPphny]t,Wy@|-EN8TWhn0HpLfK||KM4Wmw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kmkr_';

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
