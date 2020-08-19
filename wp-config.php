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
define('DB_NAME', 'closet');

/** MySQL database username */
define('DB_USER', 'charles_root');

/** MySQL database password */
define('DB_PASSWORD', 'genocide777');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(tW$~X[N%Hc;b;X[ I7op^n/T)q)x$ipVpAlHDwnom:N1yDQ^c*K[gk$btI ^ezg');
define('SECURE_AUTH_KEY',  '79aL:6#`82jf4^L__EHHiE*eSyE%[<vc5`6qi`^;B`h6J7E2jO`djkP$K|i]$+KN');
define('LOGGED_IN_KEY',    '_ty,mgz1lSnx49YXdEz)PNV^W58DMU(jbS;Js9!fad~$gF+hE8z j6<}#n8R:b0 ');
define('NONCE_KEY',        'DsQos^KXMI<CSr|=*3d.<+bF#aw)}wyP7zuAzSh{)A,R1n;?};4|8= %`!3bJ(V_');
define('AUTH_SALT',        '8z1ZaZ5mpgf6b^7r[0#f^^^Y3cP8-*$.:qzR]eh}K~:-5{*T@uYWR`h`]#wa|~+w');
define('SECURE_AUTH_SALT', 'I~)N=v@ReTAAA017WlYRLW%xY%O;AIV*G;hEgML.KTVce=_`?<v!rv9RlfUJ>tFI');
define('LOGGED_IN_SALT',   'xbPbQSJ@Dt)wpsx9gc2%O4)>cY?iA=FZwK}vZCisGe6CI;D5O=Uyst+UL#N0gyHY');
define('NONCE_SALT',       '!*^,:)x=Hy^y&~Q_P^>$saA^:yyPUaPksq;znSh##xLT/.PKB~{ifgh5V4-kx69#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
