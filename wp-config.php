<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_ti6b_2211500066' );

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
define( 'AUTH_KEY',         '|d}+mzQoYlT4 XzYtf6}E/N}3w.&w<Sg/J?|G(pV*gW[kq-?dSF*/.MB*Fp6)qAD' );
define( 'SECURE_AUTH_KEY',  'U<M2F?~Zq)RNGsxGCVx.#?/?^Dp!mWuS:sovv:&Z !NB~90<k2!au|~c5S#@t%q8' );
define( 'LOGGED_IN_KEY',    '(r%afIWnEIOk]!I3c:QL[3#PO!wRK2{h6uSC-%OEN>xx|$Jq+a~S[,2}b-j6H?-,' );
define( 'NONCE_KEY',        'J>V;V$}UQJM7Xm|!`=:[R&Kn9s.B_]G/wB)IZXfnA.@=6f.G2d.y]N7D^(6p[g92' );
define( 'AUTH_SALT',        'k!$`(;00Y5^BALnTFdVi7HNPF^X03H^5?nv|/]OX>+7lh)%Qa>T#ZhC/U_]]r%5k' );
define( 'SECURE_AUTH_SALT', 'j8e7BIQ-y=hg&/*YHj-3^?=LD2_})4OvX.?n<@?&VhYfwE$$V=|ca7WDWQkgx7Rp' );
define( 'LOGGED_IN_SALT',   '9 1w-)NW.`2M)Bg1|loNdYG7o:;Q{Cc&2=Q|+zsUhg9Y7k8WdoQ IbEt=6xXr7l_' );
define( 'NONCE_SALT',       '{N:)C7:j[f:#c|!VgqHfv9xL85Ek}Q#rcDM`$F6|B;zsaSik}~?5r3_#NAkg^kPu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'san_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
