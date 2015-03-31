<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'keijzersterk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Tulp6631');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'oD/zb<Rs|0$k,S76[%d%55t0~ZJc<9a?+-%%c,NQe^G=gBU; 1}>+GD2?-0!a,!3');
define('SECURE_AUTH_KEY',  '!b}d>/:7lSFFirRYqfBh-tNW A1q1-L#ba1ish rOdRE56;[Ui[|R/2sz9ClabB2');
define('LOGGED_IN_KEY',    'z0Lk%#d@EV!~GPs6ae)4gA|`,1;1|fw&K3Fy!8ck(QW:YaB;5`D7sPOTTMFz#ivS');
define('NONCE_KEY',        'G26_NfdZ%S5^muAk?~G5z|j}+SJ h6TBo-:WI!~GiYm|L1KSma[EXEa.`HL<a[HO');
define('AUTH_SALT',        'ao_3HR8q(mGF oGqiExp#tP?+4J=2l30kzr@b}Ie[]g&QzG+.yox1gTk1JT5i<?[');
define('SECURE_AUTH_SALT', 'n-{hsfm+k;uVhPhJW|7)Lnt+g&kUI[?&UH^xJ+M23[yvEl@ ~?N3b)/0#{YoI:fJ');
define('LOGGED_IN_SALT',   ',1hcJU=JQ9)L 6M!%cBfr3`]ZJs)o|M9>CO]ydtM_I=]VM<T#k36g+$Jb,tO@`F^');
define('NONCE_SALT',       'h|t{mcGlNbmbpqNq2e>aa82M[y71T~$I{J7xUl{7mJ5, zN)HWgUln,~=VAl6F-k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
