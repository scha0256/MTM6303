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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'LO6uXVddDTBVF8aDISck7hRqqAlVkDnvNujK0Agz/zlfRzpl8VkaeRZD+RTOS1e7rziCAIOzMKtmhIrT0Ezeyg==');
define('SECURE_AUTH_KEY',  'LLq8rh2IIZky3WQbCNkUkk5vUkqDRp5PzZzbu7PhUkAT5GpYYTjj+idvopSm+9C4TBzUk66DqVvhLYXFHF5LHg==');
define('LOGGED_IN_KEY',    'MUSFnYqFzYbPGGeo0p/1WnRcrpeFfloDoVlRBS7ZiwA0UM9NIKtwyXHqyVKfhE3Ovi+lS1SvfAMWFWMhAqt7hQ==');
define('NONCE_KEY',        'gKSIEYqObcL9zKwJuq1RCrsVLAmja3Y5x7UdL0xEpToZso+HeZYqMiFAUBW+4up1K3qRyGMZpfL2M+eXciilYA==');
define('AUTH_SALT',        'MWVBOciYYhj7zPigeyOOGmB+Nq2LfNHnfFAAiATIQvUVd8dozuPWV0ZBA9LQ3Wlcx1gRjcXhOQgrFj1rUtuVHQ==');
define('SECURE_AUTH_SALT', '3N5Mlm1ehWQRZrUBwOtZYZVf24nkSP7tNW4jbhEmpmn27Q2PzaiuZixPTpk7lwXZVWUBYN03qW0o6QGV8RcbcQ==');
define('LOGGED_IN_SALT',   'Yh3Y1j9x3mm/PRAkJBwJi2Z6JFqbVmNWKk/q6EVoJimenFuy2p8QYOP+QOFFBxhi8PBMeweLEju1vJGRrt8Thg==');
define('NONCE_SALT',       '98oAvV+ZwEOLw6ZNGPiIajLAMwTHAZvbknVHWQg2q29Q6dXW5ymJXvkz8bLX73G5FL5fH/fVRMPRb41dSkwVag==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';



define( 'WP_HOME', 'http://scha0256mtm6303final.local' );
define( 'WP_SITEURL', 'http://scha0256mtm6303final.local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
