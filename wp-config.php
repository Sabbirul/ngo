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
define( 'DB_NAME', 'ngo' );

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
define( 'AUTH_KEY',         '}*3Z3 QdkE}r=g-_PlRA=,I>Be%AotI$|>~7]>Gb:jPRV281c1TN?C}X$Ds@7P]_' );
define( 'SECURE_AUTH_KEY',  ';vkXJ5FgstHG,ScA:gOoZN~o%~uDga3ng?tK200=SopCbf q4<gGLxrWhs*H|Tq6' );
define( 'LOGGED_IN_KEY',    '/pDP$B5lhf ~k}~$vB]-;GgJ16o-E!B=ZXSZ:ai9;ZZd#m&,VR/W5H/]mrxJWL+z' );
define( 'NONCE_KEY',        ':|L6s*YYV>K4GRe)$s=k2sdY~/v/c7:G/NKH:L4qMIin-[1(:`_WFRYgH{W96V>j' );
define( 'AUTH_SALT',        'vUhZoL>IQ5j2^yEw~C@$qy:OjzHMnt7pT?X]`WxduxQJ26I8FdHKr|B!G< ;@ 8%' );
define( 'SECURE_AUTH_SALT', 'zQ]7UU8;@kM&6,&[PH)v5!HVowNyFX$=M,t&^@XT!@-]k8L3CSn*-Q4MTalvL[Fd' );
define( 'LOGGED_IN_SALT',   'U*l%P_=^>tX.#uHeQc~-q#O%|8S?UU;UdfKdN=vIlR0ixm.+RI:6P]?7_N#-X2=*' );
define( 'NONCE_SALT',       'E5F+[ktcbm&|7>?Vi2*=i([YHRQx0#P)$p,w+1Pvzr/HXV^gVK(TGB]x^;5HKCi>' );

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
