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
define( 'DB_NAME', 'p_programacion_web' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'bbb7aeb39150c47eff9ceed46bfbd1b654e0cea1cf84fd96' );

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
define( 'AUTH_KEY',         'PKMwlb3B-W:utPX&Oyww4WCL%@MMA[3QDndO17I)0!n|:wT>$eZ&TS=o 4A?,MTN' );
define( 'SECURE_AUTH_KEY',  'eolV!uP}nS(<d=QTknW<Ppeqtg!,7*Yc[Y>BLw50!/t_j}/#)DkS!>$X.UDf5:-N' );
define( 'LOGGED_IN_KEY',    '>(wb~Th|mm/W;fveX Q0MmCmvs[&3PCMi0S/4~ADlk7JGX&Jd2*w:^34J+pBE8K-' );
define( 'NONCE_KEY',        '+AQF ]lN:V,9T_%.UT`y$8F_xsb()En>dIED%3XbphJvN:UtcQ2TERT2Q@TN8x40' );
define( 'AUTH_SALT',        'AO?]M<|)8*y $0vgP&Hf#@FV:]Ep^St2Iw2N>@t4qJKDONX;r|9Uh-=/,D!- slA' );
define( 'SECURE_AUTH_SALT', 'kwac)ss-iGU(zFU.:f6-5*X]9:CnXQ)jrp>*i>)*BG`mg9`wpLb~$9rJ<;zmmZJ?' );
define( 'LOGGED_IN_SALT',   'IidlmT<vkr9b.A~%:yDk]{Nz6n!8$!t;bIbBQa~nvS5u]:|7{cxI8&~vCSu(W;b ' );
define( 'NONCE_SALT',       'y:A:8?mQ&{ 6g8XXTAK|[<Ii`I]&UDG11c<.2hX:/hev.1MWI{5CUSO0fSybm/LN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
