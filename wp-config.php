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
define( 'DB_NAME', 'basebjuw_base64' );

/** MySQL database username */
define( 'DB_USER', 'basebjuw_base64' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N47H!39SU!]P(p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'tuo9o8vk8x7pm7yj4u2xw91m6vax1lp8ps9bz1mdj0ym2eqbacawf5lkf6u4pjch' );
define( 'SECURE_AUTH_KEY',  'aae7psyq23yipw5oarkroximsgqagtkhexg3bx9oisbpgfr16roi1okelo6e89on' );
define( 'LOGGED_IN_KEY',    'ezox88mfxvadelah0uuen3xeotxo4eifmpuvynyea4tsuq0vcwn2paeshvqya5tv' );
define( 'NONCE_KEY',        '5xtblsxohr1lbyu5h0wkx6bevxkfo51niamapxseexgissfv42xfowuo9aquimnk' );
define( 'AUTH_SALT',        'a41fib491atxzsfkvyehikyit7aevjuhylqmmclrmjxyijxufkplrhxjg3meetmj' );
define( 'SECURE_AUTH_SALT', 'uholerlnq70dfb7kdt99e475lutu5sddhbx63dpjz1k7guvaneeypg2agr3ugs9z' );
define( 'LOGGED_IN_SALT',   'klikj2ztmgzzhkwvcrkurpmzp1edwx8gghewdcnq1ehgubkuietpfudwglqqugt5' );
define( 'NONCE_SALT',       '6kwqs7nbyj2djmirnnahkjpnub8drxzorlqz3xbfekl00qnxt0paeh1udxjzzv58' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxa_';

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
