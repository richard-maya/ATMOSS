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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i6314973_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6314973_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'W.PX1X5xds2qdnulBwX01' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'lU6nEkCYoc2BtaBtZhzx1OwkesjDJmkv3psBDmCSCiN2rAwN7MGr2lZoCbH8sKnj');
define('SECURE_AUTH_KEY',  'VLxblfcxSdZJK2buZVgJarKjRxgg7HsvEHRobiYsTXhCCCFTfE2WLlaqoKplNd0q');
define('LOGGED_IN_KEY',    'bS8CV3aAPzbCemIvkomVvVFT3vN9TVK37otYSvct238D69QR15xgQ8TF4FVhyw4l');
define('NONCE_KEY',        '1oXZk6auRSsizXG8kwSpSnyeyjedIyh56jsW1HdMfQft39G8EBfRSeUYaDeqNqci');
define('AUTH_SALT',        'k2QSAdFHiK2Kiqibn6qwcg9RUpiiR9DXw58khszAabGehfkogSQCQ5iE9x3tVniM');
define('SECURE_AUTH_SALT', 'zcjx8AParcn79880idW2YIX7j98lFUaRxHBEAcWbbASvFi2SyyFliFlby2JBexDw');
define('LOGGED_IN_SALT',   'TZjNZujXMDNABquKFjIfCdB7wFu7mIGRtb9vXiXmkLRyWTKwwOOpRFl9CYMbQsET');
define('NONCE_SALT',       'OT75i2V57ANO9mz0DA1pLkwU4IGhfDwBvgJchMVfky2ZCn40XB6WWAIJrTTqhYcK');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
