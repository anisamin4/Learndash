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
define( 'DB_NAME', 'new_stp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'D,@r3*P7nA8TV g+UeEl^Xu1!W7l.Ib4Y.]PhWa22m$@8Fa0a*nOm.]d6-ZT[)*$' );
define( 'SECURE_AUTH_KEY',  ' Z7!3[^gma]06!l# ?CnDkE2<#gJDJ8yOLwk}5Gg-H{7]Jb!N6.B`7YEX*~:Z5!L' );
define( 'LOGGED_IN_KEY',    'X<|6/48q$2Rz.a?r7<<Fh{v|^^D|!3<{V?Le)p:b-}>Jkazf7Dk=a48iBsZ%8Ob@' );
define( 'NONCE_KEY',        '+r.#;>`fmr0 7H/kW`WW+S>T-)JpDRu8?0wA;mX2rT)vlwwaP}=w3hAb^t>,xgZd' );
define( 'AUTH_SALT',        '13sR~9[7#j0[DyYAd31cGXqJa=w,BWYO{U6kLLuG(Dfut84qN#/#n&A^O[Mu.RwM' );
define( 'SECURE_AUTH_SALT', 'buCf CR+,9#xgKQFrh{gB[f3MQBmPK[(jQ?f%F(.cLcYJqWj1jxT3|hu7Z}D}JK^' );
define( 'LOGGED_IN_SALT',   'B>km+PPe}SF>/qi_1>&NAI()^x>Y]htj 44ig12W_A:9mZ,0S4?DI{uw50V+G3]F' );
define( 'NONCE_SALT',       '$ 0f5HiCe/Z4-V:Ib8*U?7#D1HZZGGXK&^1k!P%@PMeCU_3p/qOUSdW9sVA;GrSJ' );

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
