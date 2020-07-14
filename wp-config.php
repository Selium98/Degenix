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
define( 'DB_NAME', 'degenix' );

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
define( 'AUTH_KEY',         '8OU<[F@&}`@AOv}Tp/9YPS(r=D$5_<O5|ocnfYUE&s@SBHi8eoUJ;>&ocV-9j<G9' );
define( 'SECURE_AUTH_KEY',  'Y<z)F3SDS:&(9Z;}[CS,(4Mo XQ*BQQ./7+sf]S&zVX|LedRnBk+p{%Y[<5pXac8' );
define( 'LOGGED_IN_KEY',    '{whPz@OJQ.2VW<:L=aEWvo/X[I<E{lOcuKwM]hT-/IB3NrK;wvS/bA+zO#P-<lcj' );
define( 'NONCE_KEY',        '~6cci~l0>oP~IUi.^SE5L=rLk`WZ#MdD?{z^M]udoXRX!NQ#^o4&WxJY6Z.q@X! ' );
define( 'AUTH_SALT',        '|fUupME!LDbfoD(Cb@SQ5T.FmM<$q]&LkTNE1Z7d*%UgY#An,6_sk(?y75a249*.' );
define( 'SECURE_AUTH_SALT', '$f9uQ^DINSCvmmx.F3*VCtXvg]w6kR:%!yX`q]#=Z#_UKLt!7c$V?;7CkS8v`<x+' );
define( 'LOGGED_IN_SALT',   ')aY:k~XJRb,D()]c6H}C!-)kCwm`m>9rl8RHSSz{OP1(+KXH}7cl8$:J-~UZU@[>' );
define( 'NONCE_SALT',       'I+Jpa=~x!L;.;)xQW2OiOQJ e&O)cal2}j(V1I(grC)~._?PK%brJLVfCHZW~C~$' );

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
