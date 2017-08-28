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
define('DB_NAME', 'db_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'MAKfu$8ZL6R&|JZ  sH(ckd_cA4x/=ywy}9UltEr|rk $W9l[kX3:6=t_{/83eef');
define('SECURE_AUTH_KEY',  '+|kwrV248dm6FiugVYkK5VOxrpP>5n=Zp}Q,rmFuCPMw`cE@vzB`OQ?99gT^hJE,');
define('LOGGED_IN_KEY',    'd3BTh.*K73]>I7voX9uESrVZTzu|2?~ge>YRV<6]le)8NRN6dJ.w>ZrNz2p!?R W');
define('NONCE_KEY',        'nb*~u=e3KgGrR4Zrk=gxc</vS,ueG1dh2q@<[7Q<WoF&P1IXL9Ah?ui++r{$DJKq');
define('AUTH_SALT',        'rv1~#ax W~#.*q:?v7w^~iZT.prKGWPqN@hz2D>N,p$r;R7P.q,cL&vu)5oYUR]z');
define('SECURE_AUTH_SALT', 'J,E|LtTb3v(Mu:+_lc8XU`W;pW]o6Y{3HPYMkMJ+[p;!5&,wBFkB=/>/Pd_Mvlrs');
define('LOGGED_IN_SALT',   'h#-d.<!$.|Qc4ghNLHpZknO S**Myol=rqbXySd,VbTSkCS3h5$G794W~qX(%1IM');
define('NONCE_SALT',       '!&h-&e(Yz!INy&]X(/l96t@5 R`:hm}+%1~iSs:g7n?3=bL5r7WwZ6)|:zEK mJz');

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
