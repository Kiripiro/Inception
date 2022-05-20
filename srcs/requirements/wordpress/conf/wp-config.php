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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define( 'DB_NAME', getenv('MYSQL_DATABASE') );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         'AGM$,9[%VW`Td^ }_cdUs30x.RvJBf5K$xlU/R{WD|UC`bA>&fTYZ9bowMz&-u?K');
define('SECURE_AUTH_KEY',  '!Wu+E8Dg.PU>Q50!(bR+=t1G{+,qJ7_TU5+!Yq%/&h!b?o:h8W=&GZfq&<YP{%9d');
define('LOGGED_IN_KEY',    '@fis?t+xH@U4Sc#Wo_`WVHY|@53}2Zk].8c~L4f-bgGN?!?U&6h6u)EA[Cz<Z>O5');
define('NONCE_KEY',        'L#b3Cr,w+&wK~tJ17J3&ddUYtRNt|3-GzaL|T<qw;)IUh&#)J6j))0a(Mkm%_?Lm');
define('AUTH_SALT',        'P(++fXe>5 ^:xV|3sk#,de`bp7<aa}%~07{UkdcF~?3-#-);L;Qi&7j/+4dxK6ES');
define('SECURE_AUTH_SALT', 'og<GGD-RM}E!_/-2/~bw`H+)[N)Rrs&nzcx7nrR%l`&$C34+~,9$+)PJ@*!:g:I9');
define('LOGGED_IN_SALT',   'UWO6d8w1h|%X2SU|+J`{dL& @>.+Cm{YbnTN%O)e<0U|+Ww,a<HG31nQzz|v`[Jz');
define('NONCE_SALT',       '?hBg//aXI(}3hUG9*|3>}$8Tt# MVt#&:o*PX]bD+P|g`3byRW+y[/?!RVl#ZXpH');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
