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
define('AUTH_KEY',         'NZE8kRqbkfN+j9UBpYMp/NW9b2XV5c74H6GwtxvaVVcY6wKsjNnjjjAXcE6sfo5saif2SDtvon0fqib9QQHIKQ==');
define('SECURE_AUTH_KEY',  'isdaGACPk1tNHkdHwOIRQjjE4/PyvIN6upNmu9s5kL8tX/1K1hwdb6ASgFU08fJ1KWZASXAGJVos6xnp0ySGsg==');
define('LOGGED_IN_KEY',    'keurARhwSdbxkMTkTxCCW92gSYUQ/PXvEfg2vuYVVZTkEEiOx6iJmM+hRoC270nyTznizeQUs/2Sd+XN0WYMUQ==');
define('NONCE_KEY',        'Xq1HljpI36RG1kdyhRCxXHpsmh1GL7FtjS8GjXvCj54CbCr1hHoByeq9FLvEDFjh2wo9jaR6UmaboFQPPOO/Pw==');
define('AUTH_SALT',        'GpooVYhgKgWJjvlodq2Ktp7vbFGRmZ+GrNeRjYJtYze+bblNlcrV+iYoyg+Rf/OCeSkPm5PLJbU5npTNmPF2Qg==');
define('SECURE_AUTH_SALT', 'yQytSGEkAdKgTqiVek/iAM+Q7t3VgiEHTdYBMbF24b2OnFs8Lwk/8yD6OZ3r2YQy99R54rRbpu3iyh5cUPKODA==');
define('LOGGED_IN_SALT',   'gqf8Z2j0GZkVHwOFWP/hyBFGAHBtujSB8keJLY77i5NDBUiLZ+0KcOFzEf7XnmkgGWH0FqDWSEwim1fi6CthvA==');
define('NONCE_SALT',       'QLDBBzUijtuyTYt+iqvq2LleU+WCQeHdhfhwwYHO8cVcvKO51MrN4mi5OQvNlMjwCjFx5smQBHgnhPCXCrr1FA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
