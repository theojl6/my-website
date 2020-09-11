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
define( 'DB_NAME', 'my-website_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'vR+J`65Kt[+{P-{?G<Fqe.D0#fIx(3ch_fmv.>T{DWRYP5!h99AD^F%%CC]?PCN]' );
define( 'SECURE_AUTH_KEY',  '^fl5i1Y {;-^ef5/:<hybW9z&k]w2w?qKb$Uu+h,+95?-9Ha,!pbw/TiLKUm7(W(' );
define( 'LOGGED_IN_KEY',    '[H>aY]D(5{XS](7[-*?qPC40e#$&uW<1GJ4CgqwmPOhfK> K&W~Ha{2FXOtE,WJ7' );
define( 'NONCE_KEY',        '[PX+q.iAGpZgo6NV~YrmYi$?ql]8,G!LHjegQ&j.Kodx:+js=ywGq2er:ia^dL;D' );
define( 'AUTH_SALT',        'Pgl#b }M5GnIxb>iG #<ZY*rC93rKNxDfWn- 8}ELb|-^a,PLi3}p:Ps&$8N&w)J' );
define( 'SECURE_AUTH_SALT', 'c=Uqo~3U^VAwRrY9j?& 0226ru^}EbpE@%KULQ*68Ij.,.~oYK&>jK[nC-IvT&y4' );
define( 'LOGGED_IN_SALT',   'cz~gg$gO1GJ.-Uu}T_P3,sX?7M8@g7}+#] %,FscpAmZ;KTnS`TQ;3-;/NK);jq>' );
define( 'NONCE_SALT',       'vQb!j.Zb:YXn`(>7obiU_dCreZRk/UR8Iv^as]a3g9n2eXK#/_B%&~ejA~jr`?S[' );

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
