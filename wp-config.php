<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'instant1_wp294' );

/** Database username */
define( 'DB_USER', 'instant1_wp294' );

/** Database password */
define( 'DB_PASSWORD', 'pBQ4@1@4S9' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'apjq7wy5oqkbydtdpyjykeaw8uf06f7smn80rp0xy8nv1wpzkk6zi0s0oaofx0yd' );
define( 'SECURE_AUTH_KEY',  '98o3idxteyzvpirat4yubtw5fbohg9sntu63t3qgnvhy11wuvh86vzftpeqys7a9' );
define( 'LOGGED_IN_KEY',    'yf6lkvybulvrxpiogdg6urz76awmf8ch25mqozkfe8pyjd4mjiojfka0jpnpv8mn' );
define( 'NONCE_KEY',        '40yr4kpxx6a2apggop82f78m2oxjvklb500kkvl1dyhxbidwi72u6orunbqj3y3u' );
define( 'AUTH_SALT',        'a3tt8ukixoj08ria18mf4umjdydodnjal5llmlcfvscebgezjaosubsmzvd7j191' );
define( 'SECURE_AUTH_SALT', 'bftq2nm7p5ezj0epmquzy3aqm7fb9ncbkv3qmyqtzkm142ly5fmcib5rexazlm4g' );
define( 'LOGGED_IN_SALT',   'poff3dl93ztqxozo3sugcjd5fmvygkqaik9ku9f6slokrtrmb8pumbuk353zcux6' );
define( 'NONCE_SALT',       'stygucv3hftxgetcxizvspwiremlo0kppmkjeuvbaczi3paacyk3zgwe2rwy1ddp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfo_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
