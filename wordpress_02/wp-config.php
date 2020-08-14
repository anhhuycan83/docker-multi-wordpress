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
define( 'DB_NAME', 'wp_db_name_02' );

/** MySQL database username */
define( 'DB_USER', 'wp_db_user_02' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_db_pass_02' );

/** MySQL hostname */
define( 'DB_HOST', 'wp_db_02' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'ymZ[[1-X-u21)P%U~z5saZvU4|O^wXA<rVyf4G7P`H-1Q>sWq|X#XN5]nYP~t H-');
define('SECURE_AUTH_KEY',  '{jto<>~3%r R2FP*5n)#G5+)8)Nf#TYntPW~zL(w(!6M$.X>vM^x5/lo/C!&CyUP');
define('LOGGED_IN_KEY',    'B5*,1|PmoxDk+eU)Ib=;P#4+(WisiW8eCamipPnt{rVMXSb]vaKqFSn{Xt9U8V}R');
define('NONCE_KEY',        '6:4I$,yb-=vC3~E,|@6]G(da@0?83Z1b~R^I+?^]<1aLK}Ei^>|_V;L4i]i2.aoV');
define('AUTH_SALT',        '7Q>X,Q)BBM,f&~JN6Upvq4_5#6v$Uu|vsQpQ6S-WaQhg=_jzJkrl%LiCLae.^`(]');
define('SECURE_AUTH_SALT', 'nGs|t,ty&|uTmp-FO7Vd4^RPIZ3Z65q_$:|qTKs0p1?rwlvp9LBZI]F+Jq4]lm]|');
define('LOGGED_IN_SALT',   '(smsd&`#70wV%+J~NB]N}P?tZ6+.dNt#`a[c/:+xcOe+~hA7r!+T9>Wg,H6^~}Z1');
define('NONCE_SALT',       'ZiEq&B^Ahtl}sE{nl+)fPs6aJDJF[!iulGHzO^0+kP^f-Y(_ eK7N:k)Z!dq6<uU');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/* SSL Settings */
define('FORCE_SSL_ADMIN', true);

/* Turn HTTPS 'on' if HTTP_X_FORWARDED_PROTO matches 'https' */
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
$_SERVER['HTTPS'] = 'on';
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );