<?php
define( 'WP_CACHE', true );

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'oladsyne_dataafr' );

/** Database username */
define( 'DB_USER', 'oladsyne_dataafr' );

/** Database password */
define( 'DB_PASSWORD', 'dataafric@2023' );

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
define( 'AUTH_KEY',         'grpkxjo1voqw3steayzrriafcuvrpq3vfsvqrardlhqw8akz0boksxcthub8omvf' );
define( 'SECURE_AUTH_KEY',  'r0ddezolbd72lvmmjtlcfrwhosjejftcyikyj0f3ekdv4lrnl8ybg6yxigdnshwn' );
define( 'LOGGED_IN_KEY',    'wdhhreluongisf8t42zojevc3rx2eahtdvjpjhylow8g0j9jz4nherlecg3tdwfr' );
define( 'NONCE_KEY',        'asqqn6l1onuvq9imsc8hl9po6ffqifczmclgfyjikwhfhhraqwggya1rgn2plzx8' );
define( 'AUTH_SALT',        'y46zemlghiqkc5rd4suzjtftmglexnqohr1aqezl88dlpwuz6z84ykrp3fdjn8rr' );
define( 'SECURE_AUTH_SALT', 'weksrybrslodufd1pl5ijfsm3qjbznjweno54ezjlpeieud1eiqmnaafrweniryj' );
define( 'LOGGED_IN_SALT',   'ysengor1nlealctg7kt0kqw5mc29s5y4rosrkvt1vjms35ceg9wki1gktvh44cu9' );
define( 'NONCE_SALT',       'tuxymwh1uc0oh7769ucjn6hmfcjupgix4w23fhme7cyandkmqcybqotblsd1nbox' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp7b_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
