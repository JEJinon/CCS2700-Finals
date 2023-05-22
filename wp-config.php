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
define( 'DB_NAME', 'finals-jinon' );

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
define( 'AUTH_KEY',         'giX]UM#VZ^D(|ptwnpbq8/ZqeR[g+zt)+3~jF&|| @wjOHZXHBz+N$eCGZuMebTn' );
define( 'SECURE_AUTH_KEY',  'O^.7W(6#} 0JEOTl[w&I+%C//4-`BW.#X}Fkv%_(*==9+(o0wgR:dD~@8L>+ `s|' );
define( 'LOGGED_IN_KEY',    'I?QRCE5{u-$j-CNl%5/14?EQ#kGxuj5?;G+/t1_jbl]Fv$X!lhDxy7t{a!K9})~F' );
define( 'NONCE_KEY',        'u$HQ^|wuCN];j5*$V1z730Wt^pN,F84wwnx%IxJ(,W?oEv+IwB(%*f0`;KZZC-6E' );
define( 'AUTH_SALT',        '{K`ptI&5H*!6~TCfZ|Vy=BE_1OU_cx:=jX, dA,f>xBT/&_ 7^!OH|tOUstXZr+T' );
define( 'SECURE_AUTH_SALT', 'ZV^Em*?rmX:xs#,xU4r dSW3&)UDbBTtUs[5q[m8f=f+JX-#IUO;I?U,/#8=UNJ`' );
define( 'LOGGED_IN_SALT',   '1b!v@<RrbH<)hJbk#ZZo1NkvhpJ31SbI3![g/SFt9!s%T=,X~{HQIRSfK:8X9>>b' );
define( 'NONCE_SALT',       'Jn)HAc Ggq^W!adj0{P~6>K,j}M&-Pu4=m3GPf0d}zwHFImwJN`>KE/N&$|$8D>J' );

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
