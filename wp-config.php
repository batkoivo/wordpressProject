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
define('DB_NAME', 'wd_wp');

/** MySQL database username */
define('DB_USER', 'wd_cms');

/** MySQL database password */
define('DB_PASSWORD', 'BUFErMQD0918zHpP');

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
define('AUTH_KEY',         '>im 2{~.Mkvf4oLp#E4V2<JonJW?_*E`:3CUH&B84-lxXqs93WN8_75+d}(}C)5!');
define('SECURE_AUTH_KEY',  'S=F<9kL43Uy))B6TJ(Kg?Et!lrLGV94!Py-@/~MKc)I*7*ylSMd@b@2avT/WPDh>');
define('LOGGED_IN_KEY',    '<M2N:>?j>fX+0.FngKI^Y)N6 *slO>CD!);VaAy>^<F&NQ]uy,T;i[Ez<PeeIMnL');
define('NONCE_KEY',        '5o(7qm.-S%W&nk5wa{5ig.`y2RUR@/?PB2Q:jV`!#M?v5_tq~!X80 87S .cA,Z*');
define('AUTH_SALT',        '%HN_!x2(T.3$`LKjdk8CJnb/_kn{/Dc4%jd9>Bd>ZX]&wOK/-%2R~CTHg;5E.^px');
define('SECURE_AUTH_SALT', 'B||&FipZ.%TVc~BW7[5^lryLm85>=!jCxYKs@Wd%Z{(U,tja2J:bd5}qaiU@9oq3');
define('LOGGED_IN_SALT',   'h1cnQ!n40toaEh|54Zl|MMr%MTdayjvVM=P6.T9xsRV5Gk$,7J &u4kBY?Da,zw.');
define('NONCE_SALT',       'Rlzk%|jQja|XzHZj3;m{ZwbRi`V9==}cN}R]V][f|2cV KlFvgDT?xc| 8KO%icx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp88';

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
