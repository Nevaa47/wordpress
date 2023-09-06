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
define( 'DB_NAME', 'wprueba' );

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
define( 'AUTH_KEY',         'oh8pm$KBdy3Azjmu3c #}Ek{Im~AW`B_g_S5SmgNB087aVW:%R9+Tg(}O*$9GH}<' );
define( 'SECURE_AUTH_KEY',  'QdeEdg!U@uL:y&[R${(+W%9`~bJ!k-y=;SZ.t:j<G@qZt7h(F,0sk]cxE5y{0Yog' );
define( 'LOGGED_IN_KEY',    '$UK@*LB1>&UDm8QXWls*_T<f6Hh4ec!Iu~ZUxy[$<Q], WZ.KBQC0-^COmu2dF!C' );
define( 'NONCE_KEY',        'xs!*2Y+HAn|AiL]jnLD&a6jy-b=i(Wl<T(tCu/vI[#q%3EAG@Sl3H?8yu#A-fwN9' );
define( 'AUTH_SALT',        'dZogE%K%cIqPyA]Hb3I~8P6?|fQNhAJKE_wRf9DT8=p*0%MWr^|~G<jM@r_#0cQd' );
define( 'SECURE_AUTH_SALT', 'FBSc{arZ(;d*qC[_C7z]#B|1k%Y0e~8Ot^n_Mg35(Z7)L9%FDicW>avXWm@;`z[$' );
define( 'LOGGED_IN_SALT',   '(/TinzY{qoN(c[6|p[j/5]c?.Fz976x94R%3j7>t`T_Ib,rM0Hy*5J+Z#p||w%`t' );
define( 'NONCE_SALT',       '<:+h9)|NX(OB2A-r4apCG{o]<`&QiH.%{{Gha|ibEu3Pw*PWR7*D-dtNZ>Evl.3n' );

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
