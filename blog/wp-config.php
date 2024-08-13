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
define( 'DB_NAME', 'lotusdentalcarec_wp_9mhek' );

/** MySQL database username */
define( 'DB_USER', 'lotusdentalcarec_wp_t9sbq' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Xgz@&eqSR31O3EDV' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'I28Sfi8L4on16*):m4_pgV022MSyq0iq6Yl2#7@Hi/84T%tpN[2h_d;GrM~7]270');
define('SECURE_AUTH_KEY', 'F+f0w]104~31y+[@5i]oe3!I+Ea2r#c+pcl2-0S];7Bv[+610*~~MBS2YNb_%-Gv');
define('LOGGED_IN_KEY', 'a04[(_b381Mt!/#5z/Mh7g8icQ/7%zs)x%2PLz04~H4U4ZmlAxC]%|I6%qE-!7#-');
define('NONCE_KEY', '6A6M1/Q8zk#R1595z1|3P!5[4~#~|NB17/0p+*hb|DG161:9@9[Snt/08aWI%V-y');
define('AUTH_SALT', 'Z5JyFf:Lw!A6G|Ez7IDe9i66:T]Ly&8V35]Xj5lJ619&bkc4R[TqT~jWjU;6(dN7');
define('SECURE_AUTH_SALT', 'F5-#*+T6b030u8ZC8u&f3bJ_l@6294(@mg_lSVJRf0nn*Wk/63mBV+n5]/N3;p-:');
define('LOGGED_IN_SALT', '04!+(57v/ZJe#Hsz(ICxf[!_68s3+15v0|C;9V65U8hp65l~)z9F4Ru8UH:Xq5Jb');
define('NONCE_SALT', ']ZWZUn]5dn;&DI~Bn7|7C843]FbF!xC760(:0dzk22bx6fAn0C*oub#~v8ab32zh');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zd6ES2T2_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
