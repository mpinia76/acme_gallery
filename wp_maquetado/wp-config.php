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
define( 'DB_NAME', 'wp_maquetado' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`P%tMo6008TcmT=AK)wf-# unV]C3K=STHBa}|!gHkSI6/pEk  wR-r{/ JK<C?h' );
define( 'SECURE_AUTH_KEY',  '>OlXaJE6yB&@*7{@#EWfq#I4DcClqI!pp0o]<)IMXA$VT!CE<2h5>Q$He0 bNsIR' );
define( 'LOGGED_IN_KEY',    'EDmz %<?tj+;GsM<A}]~)R.sDAQ>e9u y&jGma:e#SXL@ms$nJmMQ9:C]bS.v@kR' );
define( 'NONCE_KEY',        '4j5_t-44&;w>YGB](TI;h9o?|-r3/|m502{/{&C&K._&,|u4d<58HV_2d=-,d<B}' );
define( 'AUTH_SALT',        'Zs>U7aq{X3[Vo;|[iD<6[9Y)d$Nf)^L(kQecfEn@s#ISa/.oKbt736FhSy,%KYO%' );
define( 'SECURE_AUTH_SALT', 'eYx^X!z!G&?%vayaUJ#Hs;U1&5[:YM%5SW3*{]1p38;HbywHBQtmiW6hLE y|KMB' );
define( 'LOGGED_IN_SALT',   'h(_?M#Uh:ZfFBc9*vi}<>o0dm)-h[?wgdqrQjg)1{XQx$wV+[wU_y?|rusiCFbDb' );
define( 'NONCE_SALT',       '>V=rc`+wGI:e3I8tebNo]W?15?QbuTV,O*/zk=ABgH@giy,YQz*~=b-E4u~8|Z|y' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
