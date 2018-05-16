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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         's#[-+.|]1]c{jz5VI%[Cr^wz:X;yNcm6v*LXfSu!lN;R!~C)CZb$G@/SV:nUrsJE');
define('SECURE_AUTH_KEY',  '6!$/lXpsTX4h#.kz`}bW%B+H)lE*.V}4s+_qQ=>1JlDxTx)fvVlX^uyqwebNa#hA');
define('LOGGED_IN_KEY',    '+?|8;b$a.6w((QXif5x/&~dBE|nxg-v|.{<V--<yE4&t%W3BMo>SjvU3mm11A1_o');
define('NONCE_KEY',        'Soi&Vr{X}*s2YBhf:w4lSwWL|WG`.t->>3[Yhb__DNxzND`^M$D3$:1-QUVp/+/I');
define('AUTH_SALT',        '*8Nh8fPAu-qe.psA!5]D]iGd?|of^cas0}~)I_FCY|a)=JJ^`Zzj(-!0<,/8?uw1');
define('SECURE_AUTH_SALT', '%#<k4C&|P$7$]+HU0]B%V=z469nn~B3h`g7&%Q,plZX7Hi/)1bfD*[(ptcDz9]Q7');
define('LOGGED_IN_SALT',   '0b%O3jUQGp^i*zny-wFI69DWnF 2ZTK39`K+Gl$< }Fq2/^|7lrpl`[}.(_<vcxz');
define('NONCE_SALT',       '_ORdwXTZsqh8[vwI<rj7Iy_yI+;2oK,(>uNOgE~K7wbHoZ(.gca#kj[[,W.Fecj8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz_';

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
