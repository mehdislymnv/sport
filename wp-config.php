
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
define( 'DB_NAME', 'sport_wp' );

/** MySQL database username */
define( 'DB_USER', 'root1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/* Ubuntu  plugin install */
define('FS_METHOD', 'direct');
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
	define('AUTH_KEY',         ')!LD=d)Yu$;FSANN~n.1>[[2XI0nbTb.9ID-hB?^v&89%w2fF)SDT8r9M:&aF){)');
	define('SECURE_AUTH_KEY',  '(~z7Sr+R>$+Plryibg!zzA0^D%O+opIi!O[n4@p:O~4yomO`xJ+)7id24|--~=N4');
	define('LOGGED_IN_KEY',    'yY<!Q9GDM}n;8luT|[u$JXqwk-YX,*[Z?.(le=H>[1|8s|UrmvYy&xJ!xj|:sl:6');
	define('NONCE_KEY',        '|Fa3$-.g!EELF6cQ-^~j!LbK#ydjD-KQ9Ez5UR/J8/aupj65KaPXVzsU/ g({|}t');
	define('AUTH_SALT',        'KQVV@7xrVsA5/UU2(:hZh|MDEbL}Z8nP>7|xK2qg$@=WBu)!]Nw+_f~G~G/sx[Z>');
	define('SECURE_AUTH_SALT', 'h}QYA^;O+~.[3e>{xH:{`/u8+02D}mKk&G3 80:w&40arwpFW7LXLpu#[#-}=BJ=');
	define('LOGGED_IN_SALT',   'D?P/?vL0 IKP-rIKwi,;O~TgUrZ$ :iU~Hkmp/3G*uX3/|s,BGRMae8C1-[c>eYP');
	define('NONCE_SALT',       'yZ9Cuzq]EASfko{|-H>sFw?8sY d?/4WZA|VsSQa7G-+M2=OS]2Cvr.yU]=+$Lm[');

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
