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
define( 'DB_NAME', 'start_video' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'j(Z-d?_Jy%{nmW.j_zSji: Ve` gKXR#7+Cp>lt@M.WrYRdR2: CAvC{L-mq>! =' );
define( 'SECURE_AUTH_KEY',  'sR${3V.`/|ZH/(R?qB1Q$eUk0Xb8*e6qv4?$(ptdqqg/*{FV ]qhnF^Zi{E)tYqL' );
define( 'LOGGED_IN_KEY',    'lTexyGT`4:&wS{]&Vyp4Y;hTu=gs(KIif izD3`/;CtS*=k&FyX{^#nyAz?$>~Qf' );
define( 'NONCE_KEY',        'H$GGCgZ9A&KbCzu8=3aYNK,w!0fU5[SiS{v`#dyx!-j;^V(F-ed)`Jz8@yAz>~$y' );
define( 'AUTH_SALT',        'YpN71OEOaPq%MD8wFEUh2W$LS(#ytCt|.`-75_2r+bAl|I9(c{g78|*n]S~]LU6(' );
define( 'SECURE_AUTH_SALT', 'rJ@HGZR[~}w|X;@4K]|b_EA 9MREpynH_%71/>K|r6S1)*/KJ<Z&cJ)DeVQ?+s3o' );
define( 'LOGGED_IN_SALT',   'zlrJGA#FiTe:M{v$8Q3l:mq[w:fElF[6*gv9#EVA=@PUtUY`m}kvfutzedzYf6Ly' );
define( 'NONCE_SALT',       'O $dWI!O;rW63qZmnLSKs{u$1TQd]p]keObTFBFn^OD!|9r#579*{E.OQRio4)LY' );

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
