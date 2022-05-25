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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'second' );

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
define( 'AUTH_KEY',         'wB.eC8@+(GG@8G93fo=V.WLe`kQw2U*R3Op|Go<@jusHNG/LX|TvJ{Q&:;^;@ctq' );
define( 'SECURE_AUTH_KEY',  'hVZlUs:;1]xH#1F!Dnqd-U~#X,HahA(L*|BnQ[[;cR(9k{lTRlOIdc0=~Ya ;p^9' );
define( 'LOGGED_IN_KEY',    'w1[S&)#q6Ja!R2SsP;`@F<x(cw3KaoiS8f(Qmfw5T#)pA]$u0*h;*bA_:$*g_D:M' );
define( 'NONCE_KEY',        '27Yo5hG=y{83GS=cB)ukB6cqC)GF8=/Bq7)ddH778w;pr%(s~:dOnu HX#V[3mSt' );
define( 'AUTH_SALT',        'W5&}uF8!~ M^N<PbRbq6wmqpoQ:L&|jhjsa,!l+M+BL*#O3z@.2V60g]oPuB;B>J' );
define( 'SECURE_AUTH_SALT', ')H5O*+sFd>nGO~+Uw8M.tgjj=l^9mrm%FD1C?`W6Qp[_[~5;s2QT5G/,{U!imw-v' );
define( 'LOGGED_IN_SALT',   'y@A/%[7$&8Kcg7[CzZiNmaJd&{}6Lo/+TF4H>Lu-zj+QE;ATfV1!9l7SI&B#Rya*' );
define( 'NONCE_SALT',       '6v40a55B(,DVs;B7MX]acMWhl$~r68:c+u.gyF%8UNT<9X9K6<a=WG&NK^ f>E3O' );

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
