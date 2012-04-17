<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db041816_wordpress');

/** MySQL database username */
define('DB_USER', 'u041816_epa');

/** MySQL database password */
define('DB_PASSWORD', '42ijrkasFBD9@uHs');

/** MySQL hostname */
define('DB_HOST', 'dbint041816');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>?n`a!h!RohSWyCRw2|j&7ZpA|`KD^*}OmH$_l<IKWLYv}G2^I{/w>Id19+lx>{0');
define('SECURE_AUTH_KEY',  'AZl |.7x`NE;V!JlC`Fqyz-#*7O+|`IZVZNa&MY1GKS-;HGpalYlP~r{eJ[9_mk|');
define('LOGGED_IN_KEY',    'M `_gJ%Q<%T-&Bv6>4+::&I+u5_eIsWHyAZqJuWnKy+*_FN0=1:+P-bV.07ZM|QN');
define('NONCE_KEY',        'ZYS)#B7jmDG29n |9N{O+V[V%Rl4eX/vw QE(^/]3;)b+)FWFL8oXkuLMXJM#6W|');
define('AUTH_SALT',        'UQ)> RAUd0?b[4BnxAAOP9_;S>yQQ,V}Wbt&)Yvx*Rr,sP|n`=Q@-thu2uA7+/}$');
define('SECURE_AUTH_SALT', 'Ykg)Dw;xmd*?Cp-rY|9qz}*r;FYlhxm*T aGY=:$oWfKik#o>QM.z!ma=LERW:jK');
define('LOGGED_IN_SALT',   '9WdU8?hZt~YxSA4@X=ZZVi}qeb]<^&/yi_3h6N[?#+)=3U9d/;MEh9A.[KC!?+bY');
define('NONCE_SALT',       ':WHEa]Bg2D9E3(a2fKkH{UWIV6oAo9=5HMYg>lbt4z@1-U.BcjOg%6;qrZ.BxoOF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'nl_NL');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
