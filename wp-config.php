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
define('DB_NAME', 'bosscutz');

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
define('AUTH_KEY',         'ea4%4CQnd[}Q/L.^G^xM.guOJd8Ha0#;d7UF<lMnW++Ak~!{C$TP,X5iW._&BN8o');
define('SECURE_AUTH_KEY',  '!tSh7WK+7*MrR,=Z}kisar.ZrpK 5%UuwY=Egynzua m02?3EDUv%%*rVarl*_4d');
define('LOGGED_IN_KEY',    ',}G1qX<<X!l&,MO1>gFSY6P_`bG5_85>-`M^eITQSdWoRKfn3K=ugUbzU(p%8FI:');
define('NONCE_KEY',        '<+E#c2`u.we6x|pSaY^RjD9S2MsKKJHzl%&.1o4!;}DSOF}$PqFUCQAlK^V,ywlF');
define('AUTH_SALT',        'lY~#?pZ*1s3QdWR@}9mCW0Shm{ 0V%O&-h.spcTDM%h%0?!1](~?ivy_eln6L]v]');
define('SECURE_AUTH_SALT', 'tL2zVd- {%`IUnAoS.ErBru-NK`;bxf1jINb0q#Q`QT=V[upA;0Gd{&C~Xd]X6I ');
define('LOGGED_IN_SALT',   '[dx/mh/P%njgn+Q5ayd]f@.qq?%K`sf/@!sa-H!]f#&&7K&dKg@46iFUE,j6v.xD');
define('NONCE_SALT',       '^)lr<bdsL&$Oo(AN<6L#Wq++(kqSAyb%K:8@u,ygLgol.HwWe:Sru}vj3df1FmHs');

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
