<?php
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
define('DB_USER', getenv('WORDPRESS_DB_USER'));
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('DB_DRIVER', 'pgsql');
define('DB_TYPE', 'pgsql'); // Asegúrate de tener esta línea
define('WP_ALLOW_REPAIR', true);

error_log('DB_NAME: ' . getenv('WORDPRESS_DB_NAME'));
error_log('DB_USER: ' . getenv('WORDPRESS_DB_USER'));
error_log('DB_PASSWORD: ' . getenv('WORDPRESS_DB_PASSWORD'));
error_log('DB_HOST: ' . getenv('WORDPRESS_DB_HOST'));
/**#@+
 * Authentication Unique Keys and Salts.
 * @since 2.6.0
 */
define('AUTH_KEY', getenv('WP_AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('WP_SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('WP_LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('WP_NONCE_KEY'));
define('AUTH_SALT', getenv('WP_AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('WP_SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('WP_LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('WP_NONCE_SALT'));

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_HOME','https://vivelunahuana.com');
define('WP_SITEURL','https://vivelunahuana.com');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

define('FORCE_SSL_ADMIN', true);
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
    $_SERVER['HTTPS']='on';

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
