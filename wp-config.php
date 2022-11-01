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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'b/KvF}8H{Iabz$?J gg}n_*hhHP,`YAAE6=.sA}|)`yN!roQd51+B1]N4/gAobz*' );
define( 'SECURE_AUTH_KEY',  'KP,mL%D}aMUJk[3_?r`K6 `b#$%N]j{fG-GERw]}~}MfmH-/^v+qi$03h&[?[DN!' );
define( 'LOGGED_IN_KEY',    'EaJW|,YWr{$~xCdJ!(4nBBse!4m{`z{P:-tb[Lb<L1U~g{j`zcoUul$9gwGf:VB`' );
define( 'NONCE_KEY',        'JO~+b3?.r:5x7~Wq7AV?BkK;(<&>|OycLZyKZz ]/0&EK&OZ}p(J*G2M)qSogg.t' );
define( 'AUTH_SALT',        'U/FB`iX7Ql?bFL8Us7]PAJ{t)>!0:<>, 93C6KrwKG:.dVi#Xz>d=<V;cv/-w9 E' );
define( 'SECURE_AUTH_SALT', 'vNDWJvT2P?YSjtz{T~<8s)No)l6Q9?po^l,IMlH7Q4rEmL&=4fYg1Bc9u;#+tC&n' );
define( 'LOGGED_IN_SALT',   'LPPy-kRid%$q%q*22Z3YiF[>NPdjc& tGR*f`5<rOvUO)o}wHu}bka 14vej8%?F' );
define( 'NONCE_SALT',       'TaAZ:Sx|jBudc]1CY;Sd L6X.)QA5CG3Zo5Q|Zx,wA.uHtZSSC-6-Dk{t6]Ap_w]' );

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
