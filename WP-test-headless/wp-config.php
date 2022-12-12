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
define( 'DB_NAME', 'wp-headless' );

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
define( 'AUTH_KEY',         'NMC9[AWo:soi{?z^l Zk[}f+|X,Ra5Hx+M0;9`y/2>?sW?Q?Ml0g@Ucw,&1G{G;l' );
define( 'SECURE_AUTH_KEY',  'G_2Br*fUNWDNxg}1bhs%ZP{zm|N6T ]-BL,8c^g::Um(>`pfAcYC}B4.B@_!>{X%' );
define( 'LOGGED_IN_KEY',    '3g<TU<tekqz#ky{; +*<|W+rO^F1C$:!8^6A#{^T@`Vop5fG#<M0KoF:4VkhaIq(' );
define( 'NONCE_KEY',        'd(m9KB-L(lKBdi#BRb)EQyY*MiUR]^|Iksx?5zlA2fjOlBe#a9RtM,3QD2C7%@RT' );
define( 'AUTH_SALT',        'gkz7Y=2Q aY_VM9w/wL(Tn9ar~ZV2G-3RnLb%uH,MtW1Ie1&qJ+Q+rBZ*hy(V$VP' );
define( 'SECURE_AUTH_SALT', ')Pe/Ay(6N61IY#=;hid$Yh%OTeP(eVUv%4YP*ZqHPrL 8cUp{q_.QClK?9)|vSpX' );
define( 'LOGGED_IN_SALT',   'KI[By&KH97+G_k(T]GW4}PotnFGF>=L6i%0`O3Nuyy=wf9u6%FWzk$#/:`nb!eL{' );
define( 'NONCE_SALT',       'SE9[gs,#v|`huBqcjR&dO!}4fStkp82eO#8l-ezsjAk_nN,Q8V>8]Jk;Gba*RFiw' );

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
