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
define('AUTH_KEY',         '~+:EMq}goD)0xJW-;*%Q=4Ng)3YC=LtI-0B8vfL4@G-`k_2-@tv*1Z%Kb!ES[]!-');
define('SECURE_AUTH_KEY',  '1AX*@C8@}dx5;[:Wi(>kEw)Uy#I~qW#WsxW)3yh1)3aUm,%v)-|%(&6.p@n.W@1H');
define('LOGGED_IN_KEY',    '=us|Xe(A<DZt|UC8fxW__wM>i_r7K>4ETK;IrV9|DcYN2>Jtv]}B7zl+10Aj(3+h');
define('NONCE_KEY',        'NtIdc-j9PV9SS<#q|dQDzGmEjGcbk:EU3aot->6/3IVF/lOB`GPr* 86M0|LnwsZ');
define('AUTH_SALT',        'f3`*%GXE$~neohT-7wuB]92@)I8w]pUf(~0$KfcbTb9>hL<Z^_E925RW)!%9 }fZ');
define('SECURE_AUTH_SALT', '-y9UO}oqnvjm_a+jk(+qx7NwxUg[EDDQ.eT=>Z%9rDlW]|*_os2%45=z_LD*tHc7');
define('LOGGED_IN_SALT',   '=+&/)*[*{AiVM@uGTf12=Y~KCUT+]i(ltlT4[z@@:[L,++KG|-_R<$9m|9]+amj0');
define('NONCE_SALT',       'rh-r@ BXqJj7N~{y~(`FT,A*2*6g+0X26p.AKa ]{Jon[v<+[M*frpQ{~3]QMlm-');

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

define( 'MYSQL_SSL_CA', ABSPATH . 'ca.pem' );
define( 'MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');