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
define('DB_NAME', 'mahedi_db');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'I]9=G*%1hwC4HH7GrQIoj(BMb$bEU .#=nVxz5l-vZ-yjX}p)Y^>)z#GyJY~YZto');
define('SECURE_AUTH_KEY',  'tBqxP$*dIim5ojP/-0bsh4d]%VtJz=+4lOD9-3Qo@-msL0KT7BIL-p>F[3`,(-y^');
define('LOGGED_IN_KEY',    '(Jx`hzl^nhN6Mj,ouJf-iIh,xHR7[#y8:OrBN52s6mm).SvT-@)(LkmjB;P~r?S.');
define('NONCE_KEY',        'v*kr,w)L|+7VM]QiQJfCs_+/]{5A*^R#1{oaOr$IrgEuzy Ya1p(DUd.3ZPNh0mr');
define('AUTH_SALT',        '/P)BBm]FpXjO.bwgAnBSp^U%,cy4ns7.u/RRd>}T|7Ah1#,?%r>xw=&8VY(IP_%H');
define('SECURE_AUTH_SALT', 'B58zAU!te<~{:#|@0Tcni6w]2i_U8CuDwiQwk}yC4>,<xrD(m-c:ONA)s;b,8jqg');
define('LOGGED_IN_SALT',   'CCqghsuq4pF1K+,E^3SWF<E|h{9}^uiO?5)=Nx.h[4#@e/^>_ l~j2:GsOZuVoQA');
define('NONCE_SALT',       '[hTPt$@!szx%TbrD-U.GtbDS4B5CuvFM;G:mH!#^q119o!k_Ijv+H8AyX$*I2Z5s');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
