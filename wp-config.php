<?php
/**
 * Hello World
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_ENV['DB_NAME']);

/** MySQL database username */
define('DB_USER', $_ENV['DB_USER']);

/** MySQL database password */
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_ENV['DB_HOST']);

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
define('AUTH_KEY',         'chumantra');
define('SECURE_AUTH_KEY',  'chumantra');
define('LOGGED_IN_KEY',    'chumantra');
define('NONCE_KEY',        'chumantra');
define('AUTH_SALT',        'chumantra');
define('SECURE_AUTH_SALT', 'chumantra');
define('LOGGED_IN_SALT',   'chumantra');
define('NONCE_SALT',       'chumantra');

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

define( 'WP_SITEURL', 'https://' . $_SERVER['HTTP_HOST'] );
define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

define( 'MYSQL_SSL_CA', ABSPATH . 'cleardb-ca.pem' );
define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');