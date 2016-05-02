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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'student');

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
define('AUTH_KEY',         ':O_Kqorukp[b{I7tdF-<K>d(b@^|+Aw/%Rl-M+d)~:CNAec-%hx[-K?+zze$-D1H');
define('SECURE_AUTH_KEY',  ',cHu>Vso7s_ kg3apQ.r}o}()w;JA]-Gw:I+l:y7{{J/CT_({COx(cn|pPUj##RG');
define('LOGGED_IN_KEY',    '3-wZf/mX;R9`+r>~{(~pp#dAZT}k~#M@f{>B#a[)tTZKEjB#`9KtYF|Mg_-%o,=o');
define('NONCE_KEY',        '0D~CDp@p.MDp.|}Tbz/#PxtHyL/O8xhzFmX5-Z- T19a#OgDzO9X^Bw3Zm8*B?<2');
define('AUTH_SALT',        '$FR_E$h?~]t&~a1+=Grn@<;P RH@U1.-B[#jO kc@A!QSIe4HIZG=Xd3l)>Oxx|q');
define('SECURE_AUTH_SALT', '|u]X]-G2df9jD2Z^{%;}Es|ir| Us54!.}sx]CpIpR;3-u!jOoxE{V5iu=q6s2~$');
define('LOGGED_IN_SALT',   ']r&-H0:+sO&RM`-,7+fO|_MB:,)H5:m^S$+ayR&456`SpBVSt_wQ#A! %0^*lyzf');
define('NONCE_SALT',       'x56B/=DDOG%t;/xVyoK_z7=gKn:+O(9<y_uvbFzKQ@WGqHoG5]QJ+Plw&I[HK8d=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpphpkursus2016_';

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
