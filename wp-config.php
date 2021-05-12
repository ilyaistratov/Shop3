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
define( 'DB_NAME', 'shophi' );

/** MySQL database username */
define( 'DB_USER', 'shophi' );

/** MySQL database password */
define( 'DB_PASSWORD', 'User-12345' );

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
define( 'AUTH_KEY',         'fUP${zl0+hIe<W?oG|SmrR(]>CO)(}#4ceo[*^B08QZwv4Z)&u/$5+O/)3C<xqki' );
define( 'SECURE_AUTH_KEY',  '{w(^>U8eG~l8i`OG6y[RmZkl~~NtL`uJ$lR&ULd{A@NVg%b|y@maKF%D3~o=/_St' );
define( 'LOGGED_IN_KEY',    '4,z./i+-rl>nkP`(_0.f@XFY#ujaEQa1o@X9>W6{^#aLp,%0?g)%oA?u QugCqbl' );
define( 'NONCE_KEY',        '![a8JHUm8HLnJ (JD%C=}?Yk.j^Vymr/k@0nut[Gar*9Yp:G4EhpcI?p!|9xe-6c' );
define( 'AUTH_SALT',        'Mb@mCM=^`z[h]p[qI$NPafKFvV6wU.IM-y_|F%r=({PvIsWw]j|T:P{3D.z*Mc[8' );
define( 'SECURE_AUTH_SALT', 'z#s7St9]+3MQq)yw,1vGq104c6uSsR6o?~sr)8 WQzAHt/wq9J1>SE9BNeK;yCta' );
define( 'LOGGED_IN_SALT',   'PX&2bMHu$8Z_T)Us+tt/(i*h/Wv~Cw11iD*DQQ+8xrtarx66=pD)rw&cp=~[F1Uu' );
define( 'NONCE_SALT',       '=kM{xy$<T)B&NMtM9qhS?Awj>{m!#t8eNHsAwrL2skf1<*C#Xx9IZ8.Hjj`lm.|U' );

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
