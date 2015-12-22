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
define('DB_NAME', 'word');

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
define('AUTH_KEY',         'cwM8de}2![+A|&/$5Os&3m*6+67|&StNema8tjbE-]-<3A]DbR-?6v@n[`=I;)T;');
define('SECURE_AUTH_KEY',  '|1t]u#qH`F!.`XL24X39wU{bBYck$kUX]JPk|tn5k:^|H5@Ga O}a3!nfm_X7QR/');
define('LOGGED_IN_KEY',    'Gegt_wZPPeb%C-ME#M})U)|sgv=&:7u=f}R[,xJZgIoN;0/@v]&K!0zSKC;?9[M&');
define('NONCE_KEY',        'nGydQR>|6!+^B{N/k_8:I]4/(p-A?<qu?-}Xh3/Gj/k//u#Fac{Zkcwy.-yrPE8r');
define('AUTH_SALT',        'R=3|<`^VR#?x#6AzM~k~^LMK,AL%/44d!6DhL$zPB,>;j&--+IdnH:5|N<<@5/5:');
define('SECURE_AUTH_SALT', '`iO&,[+h/d/XE4:h?=:j:MUfw%+.N(lDPZ%+T~d.8O;9q7QOQC=J9_)kc+s-fz-t');
define('LOGGED_IN_SALT',   'm$Q~T[4TA WQqAlm-b9_Vo4;WR3A]K--/cZImrzD~Q6G~~}PHq-QzY%Z~y)SVp_h');
define('NONCE_SALT',       'RjQzx2OTMM4622j2%uHLV~-:~%&RjM|^0-iOXYK|cu{oc08+o/ejk(Fb(wEVPtmE');

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
