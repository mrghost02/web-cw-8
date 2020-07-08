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
define( 'DB_NAME', 'cw8' );

/** MySQL database username */
define( 'DB_USER', 'Ghosty' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cBrbdjCBaD3Fc485' );

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
define( 'AUTH_KEY',         'nFfEzDY@Xn^~cposJ#l|VRR)e&NNpzYDY34ynq0I=pc<2wKJ=k7@`PZ)}*iVDzA0' );
define( 'SECURE_AUTH_KEY',  '?u^|:}J%hK#QnTb0R!kuyw?Vq :&|yHXwUNX3hG 0C4C8WeXiXbX ZkW)8.B``Ko' );
define( 'LOGGED_IN_KEY',    'R6=};gZ(u2eR<H3a?{Yi]so3+YFDZ+wZ$;ti.6y=[U9`]?.M6.[;Vl*S=mxHxIPm' );
define( 'NONCE_KEY',        '4s`&Ia`I>k9Ug=N,0G-Bb:[JNL!&X!Y]kB!k7)yCe:^I-o@VW7q]Bvd@M7T{qdyf' );
define( 'AUTH_SALT',        '}a{t`^^IR+cn*$[oGeF[**_@TktUKDY#VOqj!5YY$KT)+wv_&$uiVRSC!XKqJ0pj' );
define( 'SECURE_AUTH_SALT', '/-P}[KWwiTzUV]M,660n@hqv+:0DVGy>^p*c;L?n~MMF^m(nKSV<8O4M_)m4=Z4#' );
define( 'LOGGED_IN_SALT',   'D!(oKQwObn]XF0czKKs0lAuqePSvMSr,X({lRNz{bTpp)b2buQ,cD:cixX?ew_*)' );
define( 'NONCE_SALT',       'rQl~5*A-~iIb.xCh%~@yCb&90997DR`Gfqb+b0c[$A,#OC]4PIx|i<Q<6Meg*JT?' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
