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
define('DB_NAME', 'menuiserea123');

/** MySQL database username */
define('DB_USER', 'menuiserea123');

/** MySQL database password */
define('DB_PASSWORD', 'uFtxd6FUMSYD');

/** MySQL hostname */
define('DB_HOST', 'mysql55-56.perso:3306');

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
define('AUTH_KEY',         '1ZTxU6hDWtXrdQZxSMpzbj/2lPbLr/47nXjNmhato8YIcjuHjljRJmzWnVPA');
define('SECURE_AUTH_KEY',  'vIsxKqDwx8F8RfuKFVBmdUACMHSx3MB3PFmlHc6AE+CtcymE/a3vI3+JoZHK');
define('LOGGED_IN_KEY',    'WkRpwpr3YDp0Xygl+AfYlWLHJKmaJNa9PGSTvp7NzicJIfmzGKV0cRbL2MIe');
define('NONCE_KEY',        'EnK7qXkJgxMdrPAhxUs5MHBZicHPSeRudIoe8elNZpfE5kXydqJTzov0Th2h');
define('AUTH_SALT',        'DnW5WV9H80ryU4vRDnPpdtKPH8MlKFbisySuOXUglfLsd/lXaVBHV9n8WrmI');
define('SECURE_AUTH_SALT', '+WebRGElag8kU0J5Cj7ApQcNkSqv+FrGrd/syT5VDK5j/0HBRkDyuj09NIzg');
define('LOGGED_IN_SALT',   'c4tmOsIIvhy/7hQWjUoh+TZz7vFOmjan7q3kldMioWR6VkWD16aMgnSYGDGD');
define('NONCE_SALT',       'WjfdOdFNUNtJTV02R9oXBuIzSl9xAvtm28nPbPMZ0LAYYPNytOpvwJJ9p3ct');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod848_';

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
