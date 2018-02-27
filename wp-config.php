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
define('DB_NAME', 'cost_db');

/** MySQL database username */
define('DB_USER', 'cost_user');

/** MySQL database password */
define('DB_PASSWORD', 'c0st_us3r');

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
define('AUTH_KEY',         'xo6tz wT5FZQ=EJip<gu&QAfLUxr8u!Qc)xe3b.;%F,0@X_=`2$AL?)E?NJt^lko');
define('SECURE_AUTH_KEY',  'DWQo;+<4=4L!#+&A>8,Il{).>6bbhi[EJ{2DzHYF%+&p7b.2W@kWtcEnA?x*kJar');
define('LOGGED_IN_KEY',    '#L<~E#QeaHzwKc`/v)d3r|gVpzoBJ,@rir9LwX]YU-/IC=hrOQ}CdA9tBdpql,>,');
define('NONCE_KEY',        'pD,2G`W?130Gb=q!$lbFZ(&:Y[p; :F!g R+l=;j&fawDV_xn~l`&z.d|r@geE:2');
define('AUTH_SALT',        '9)=hbXKpn{} 72IPlQ,BZ<s(U+7%i]!`2bNugI/fK2heK5iMHr(A75)$cQ+g*xko');
define('SECURE_AUTH_SALT', '!XQKw)dh~=k<`:!)JAqQ!cd,IJ86 1E/7eav5 pmQ?RyD>EI63J73r1APi6d{.XK');
define('LOGGED_IN_SALT',   'qz#jdW3>]SKEOwr{B<l)4tq$3D?V(`HP-4<P}][dD=v[uuCrfeDwA Dp:yOz]MXq');
define('NONCE_SALT',       '>[V0PC/0X*.DpRj<.bzf?>JP6PUAA5VrY )J#=NZA1B3mrJStLX]ET4E)cwOc<@Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_snb';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
