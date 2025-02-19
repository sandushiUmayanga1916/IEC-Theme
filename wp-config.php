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
define( 'DB_NAME', 'iec_lk_db' );

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
define( 'AUTH_KEY',         '*:^a NL{!B?Yo*zmEKtm,.:lrHZyOCb@,B0s 7 hu}a?p*y[_a&Wpe*tvMP7>bl;' );
define( 'SECURE_AUTH_KEY',  'l25{-@XxM4Z/,0TeSni%Z=<g2i*:x.$S/Q.7=>RZTP::E<[R}f_:JX>S?h{)Hsj[' );
define( 'LOGGED_IN_KEY',    'fH&Y==1=EJ)yiPYn}tkLt9S.5Q12t0#Bb@XxYb]jGhcVz.K*A<BrVQd82^w5WGJg' );
define( 'NONCE_KEY',        'ykIL>%<<mApFV`td~Nqxg2&_vC>LTz8UfJl::C=XH)2lRZft]XI-=5a/`{g@{.Iq' );
define( 'AUTH_SALT',        '+l$F!PcP^X<vh]l<3qn{D$4Y!D2Ro9@s?sBcxo.JhO3v0tA}M?dCd0Dc{V(LLi d' );
define( 'SECURE_AUTH_SALT', '2.mehQ:74Ur)Ma?w;`wNDf#+nm!W?MCiyZ,*Bbz&<}P4Z4r6SOM)bd:~+vFB.%Ri' );
define( 'LOGGED_IN_SALT',   'VIbD$&YHuY,(ullKX^<JRA:.c#;Oj#>zwCa!}h|a95&]/Aq o..L3p2G@BDCq+rr' );
define( 'NONCE_SALT',       '%PZ^r{gFl@*-A0Q,vmw+~@m{XC){C;>wq/_[k|eKleX])`7?m4*G=4?Pxxz+YIPq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ic_';

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