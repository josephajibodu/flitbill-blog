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
define( 'DB_NAME', 'flitbill-blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'Q9%W`jWJ&Irs!3 p;VJTJ&0bL@qUbpyeq>[1RGMR/y/goR%CEG>##ZARPr3hl>6&' );
define( 'SECURE_AUTH_KEY',  'ekQ3AaI*DkdSD5,QvpI3w/HlL{5.^>cQ?jr*z8TcR|^R6=r*l@{^yk,.]fMcA2.J' );
define( 'LOGGED_IN_KEY',    ')iWnkY+2>2p04+NpQc5Z({b^6VdcZgx OQB*:n-V/VSycWb<-VQM_Lnt4Z;3k^S/' );
define( 'NONCE_KEY',        '(.=sg>SgbST1ON3:]%(G[m(=twgy=*T>0|0mpR:7W=/Kj_H&2h1vd<|n++6*)@nU' );
define( 'AUTH_SALT',        '>qmjfRR$s@DcoDg^ErR~h2@`?tyt+r$W8dl8-hP-fyn/J+[s%O_M-:0A-K{4OhX^' );
define( 'SECURE_AUTH_SALT', '.|5W,NPq.}+>aT^8#OD@JVErucY8K(}gGl<R&){$?6Y5$gz1pNPG6u9PShS=pyL%' );
define( 'LOGGED_IN_SALT',   '=GFCL9 NDOmWlWZZPij/fD2c0W[D:m0!P.DU_p5l=1dYwp@O<:T.Co4l}*qz]w7M' );
define( 'NONCE_SALT',       'nohv|(Q}IOh< aHxp587qxEzdOF4_goW-^B?c*tbS;c~Pp}.<I/+F*hZy0pL{RlR' );

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