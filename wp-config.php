<?php
define( 'WP_HOME', 'http://harymilloki1.e-kei.pl' );
define( 'WP_SITEURL', 'http://harymilloki1.e-kei.pl' );
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
define('DB_NAME', 'baza23181_22');

/** MySQL database username */
define('DB_USER', 'admin23181_22');

/** MySQL database password */
define('DB_PASSWORD', '5Sy}4fqU74');

/** MySQL hostname */
define('DB_HOST', '23181.m.tld.pl');

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
define('AUTH_KEY',         '85S0XqgrmWkF9tilOCU6257E0l4HBlHTXKg3D7mJHJz5mNDtFgCSxvPZy2LcY8le');
define('SECURE_AUTH_KEY',  'kIG5byxEJ9EOM9vCRe52hYuqMuVvfYDTQciQZJacVbdwsDGlxmvwn2XfNK9EE9zD');
define('LOGGED_IN_KEY',    'mqAekMRSoxgtfEkQfPyllYc2f4rq43eGY9GbLxOJ1jxAPG1iD91R7zMvRvnSvIIy');
define('NONCE_KEY',        'xhGkCFEpb2QLm0c4H0b0whrIQMrfmv2UNkbo3oCddGkwjsrqMYkNUyeNlIStsMOu');
define('AUTH_SALT',        'O8IMGiHjBqcS9wZTFEklch2XLyn0hHNQNXBxYJVqTsllA4etz39OWePHaGIZYIzI');
define('SECURE_AUTH_SALT', 'fShxwVtBdlpuIJoPPTMmTjk8gxsmWs2Yjq2jyvH0nrWt9KuhXg5reIkKkli48YpF');
define('LOGGED_IN_SALT',   'DE6nKQzi4JOU3MPcnhqSYADucL9UWXP7zmXCtCMxgWlJgC6pSXcsnIuSlbJqHgYe');
define('NONCE_SALT',       '823kKN4RjSWo3fLXsbD2F6rUW4hiFwjbLSCSxvLDjl7Yrug0hdNEJzNLeyUmBrGT');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jc4s_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
