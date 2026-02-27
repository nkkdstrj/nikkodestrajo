<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nikkodestrajo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'pTnpcn3M2{&I[VArutjit$p?RMk%L)(^?{w5&>7p4G}u!$Ane1z|4 A/Hgj _^N)' );
define( 'SECURE_AUTH_KEY',  'moSee/qY(xm7 Y>RP5+oqp/5$3x^jYUPYw]H(EL*o~F..1QB6:k^?{z{1;8dj^A9' );
define( 'LOGGED_IN_KEY',    'g;-fWcaYYt#n=PH_{8l0;y{YB|KbMUJcRKLb0pw>.h:tn}xkXE=i8w5#trKjEFo)' );
define( 'NONCE_KEY',        'ua/S@tBPny^V==8/va$g~>ueCUIBTaEKccEMY^y>f*]3NT%7/s5XMit|M!->RZE~' );
define( 'AUTH_SALT',        '|[:K6P$feA>!&%X,(/R6Ts3ZClq|G{rEL/i{|_[0`yXh$^2CudXa66oa4kHC9lQR' );
define( 'SECURE_AUTH_SALT', 'fku$tB=2!_E%kO_RaoFrH_3b .FWPTqVr|~e*cZ,-kt{ihZ4|M2d3zy5I~arCt4,' );
define( 'LOGGED_IN_SALT',   '5j (F7}?VZuBv)m<sXdG{)7V<jg|lY@^iH`Eb%PrB7<e=)VS*XH@g+CNN7 6rk7#' );
define( 'NONCE_SALT',       'D49W~F*9|jYyRX }qhp%%)!KY,+SU8-.X58(mm*H~6vq(uozQ0_ny&8~i.tU8NV>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
