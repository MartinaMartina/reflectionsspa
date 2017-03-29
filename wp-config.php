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
define('DB_NAME', 'reflectionsspa');

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
define('AUTH_KEY',         '2tp3k:7Spbpq(!.0-NS_y{B;bxZ6)#D[(A 9yBOh79(LjEx3N20@f9G]ag^|>bXG');
define('SECURE_AUTH_KEY',  'pzWExA<VS,8|ZMv=O+bEk%Cpuh8ek<+YtCs<:G5Dp=]*Du$zH`f!Yi$I>D%txI*)');
define('LOGGED_IN_KEY',    '*I@^-ms#[-,6UZ&PMw.*(42.&uc%[K.r;wpbd`C8~pe<9~4-u{?r(Ak/N|:r:th[');
define('NONCE_KEY',        '0)GwNdlqcIhPN{{6K%I5{_Vj8TGDO%wvZsuG:6E6k[skQ >e|jL|~gprQA=s$7i$');
define('AUTH_SALT',        '_L.kG3ROH0l 7 kKA;_o#A%T/xnkIq_/`b~m[6guG<D(@ hpE&%Pe`M~F$p=j7MZ');
define('SECURE_AUTH_SALT', '4%C%Ot0qhYjP][.tl*v12Bz.0iFRJ}%tDo[000~QxNQM)SWMOJUqpRq;dvUIsy.A');
define('LOGGED_IN_SALT',   'XAaPj)dM{EYW$y?z8F?(j8`b ()Ck1iGb7-kG&`4T3w(v0SPY Y},!8~]bIFQpIC');
define('NONCE_SALT',       '3?LgR@1wiDc`v2(P2&{]81oA-]DYF<Pa0*LDRHl-*LaV?bQ)bPPN@QX$`Y4TW*5t');

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
