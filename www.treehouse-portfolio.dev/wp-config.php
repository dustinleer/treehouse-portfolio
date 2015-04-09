<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'treehousDBalrui');

/** MySQL database username */
define('DB_USER', 'treehousDBalrui');

/** MySQL database password */
define('DB_PASSWORD', 'UFf17LAFIO');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Z~|sCK14G:ZhKRVdGNzgoowck4@||0z!NVCBN08oRYYkNU!ovv@kr7F}}3^>UcJJQ');
define('SECURE_AUTH_KEY',  '~:tKS5D9G[1dSZZhKO-_lw~ho19_[5~|RV8GGNCowVddkZ|:s-z!wCK:008}ZgJNN');
define('LOGGED_IN_KEY',    'EnuUb<$,.<qyQ3AbjMP$.my*fm2A;6*.PXALT6EquXeeTa<;u++.xDL;229.aiLT');
define('NONCE_KEY',        'HlpeahW_#p-_hpH];:_]SaDOW5D-ahhWd[:__|owO155C1dlKSdGOwlsowk:4[[:!');
define('AUTH_SALT',        'OCG54C![hKRowk18@||z!JR4FN}4gVccgJR[svvkr8C|}8!>RYBNU7FnvkjrQY0v@');
define('SECURE_AUTH_SALT', 'wow8G54C![VKRRV8GsgoowVc[@|![sJR4CCF>0oRZVcF@|orUcF@,nrrgn3B^>>$,');
define('LOGGED_IN_SALT',   'oV:0z!!v@JR488F>0ckZz!kr4B,}}4>UcFNNU7BnvYjrUc>}v@$,zFM77B,{YfUU');
define('NONCE_SALT',       '|0|NV8GR4CksVdoRZ|[szzov8F[00|}YgFNNUJv@ckkrg}4@!BJ}jrUcYfI^>rvv$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
