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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LRtKN21bW7QCVr/3TRkbhxmYmchyqO6dks50nnaKhhRmCWAi1DcOR8B5BJTN7L+YgspCXaodc8leUHyyw7XkBA==');
define('SECURE_AUTH_KEY',  'nc2vlsc6PqO7FcWy7CLsi9ngmfisFGRzZwNIUKd/c6E3gdn7Kqz2Tx2qyFS7pcniqIHt5v3AXrCsYtgy8wWZTg==');
define('LOGGED_IN_KEY',    'jVXxgerUHtcKT+tph174ilmeKcQnEdCiWv3AL6F9+GoTDDNYMqE+Z7+gVFOSbWUEoGTQwoL11PmxFXv9JGTmpQ==');
define('NONCE_KEY',        'Np/rTr9qhTIQEho7Esf9/e4SDwpbY9QW5NiEpUtVRsSxDNX1WWDnsPcJLyGMtHR/2J2v1rqdOpwXf2wYX/ICIw==');
define('AUTH_SALT',        'BbhC8TQdZ+AnYcG4t++saKCoCTpLNaeXFmmbdI0/wMgTc89KVV4VhalD4tCfOkAzKTrc7VAr451coH1Nh/8p/w==');
define('SECURE_AUTH_SALT', 'yHfxIILtjoo0Fq5R/G8q5iAZMs445vQ2fTU+ROJ8UV4XRglYCS2C9AI2Kn9Gay6GEvGt3yUx0NgXp3hZaDVcVA==');
define('LOGGED_IN_SALT',   'FttGDsmsmUiNNuvz1C3h+9fO0syWtEaLRlJav+l7L8xMt4bGiVSJoss81HVMh6QeG3k0fEUi5fAn8SQkGAZlIg==');
define('NONCE_SALT',       '5FbYw/qo+BUywD71JE1xYrV73WkKlk5zevRkPrVz6/y6N7TNZHZ/rjoXcYmT2KSIBc2suj2FWXw0wk9mdkGQ2w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
