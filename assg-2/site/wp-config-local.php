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
define('AUTH_KEY',         '4BKthHRQUW6CsosQPQ7deSVWY5EEJzFZaxMeFAdWwjXGU8+MBig825lM0J6bTm7IaTgQ/Z/sr+j+Q9wLDe4Wyw==');
define('SECURE_AUTH_KEY',  'WBVIB84svLAGQv+19X+Kjas0/btlAPmwlYPaaVYGlwAzw5IvqPl+rReAahfkhiKsIROA9yDs70nF+yEX8y5Kyg==');
define('LOGGED_IN_KEY',    'aHyNXodJcr5g12+SAj+SuRGqM68iQ9nVC6BVjdlLPXf1MDkyXGwMI+Yc508FlEpO3ike3qIzrUYimo8k37z/Zw==');
define('NONCE_KEY',        'N09e23oPUOIE5a6+w6ObO4cYerbjDNc66uJ4CuqBBzAuvi6J764MetVUdAiataGph6rrAZPtINi3lO8nmSb85w==');
define('AUTH_SALT',        '6ynd2WIEJDROUDirH9LWx8UYelClAuy5SFHg84i5iQlUNI06lZXAGyw+A/ObidUIt4niKXTPvTZv3hiNGdbfRQ==');
define('SECURE_AUTH_SALT', 'tkOXc/xFO2slAh1SWWm0QPf9pKHr/3HFAKJ/zArZSuwRuYHpjJXX2MWi1v+mrzrmA/pOlWkS38Zn8YLmE3nNoA==');
define('LOGGED_IN_SALT',   'hgZAt9rNhfNOCGevaMBcAR/i0f+s7Ysly7qsH/Oo3wC7+bIrUP6GJNAmf3aocSlGwzBX3koMoRXpE7SdmdqIwQ==');
define('NONCE_SALT',       'KqhxjDeO93CZYc4fDhq22Wv5TfvLQsUgKOEv3nmLYnD5ypGphujqQs43wQJ0pXYCGk4Cb/d6/WfUaKW7MkwuSg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_HOME', 'http://scha0256mtm6303assg2.local' );
define( 'WP_SITEURL', 'http://scha0256mtm6303assg2.local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
