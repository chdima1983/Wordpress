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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'r?[f#Lx,NqxVNPBEg$0L/Hsaun9|UJ{AT[3{X^5U4Mb(pP&URS;#EG?&e^5:x2/E' );
define( 'SECURE_AUTH_KEY',  'Fh<_mTPD},yup-9VtT|5=M`nEq-UNSv^ZJX(s*!S+[j%iC@aoP3[9coY{:LH:ZY`' );
define( 'LOGGED_IN_KEY',    'H9_M6fRq2$p>=}_z`tlEBziV ln4@CmA*iNfF3!N<5#;NTcjM2#%x&7/|zBIC7BJ' );
define( 'NONCE_KEY',        'w/>vhmKxknD uSo6FXVb%<CU!M-qC]x~wh}J{#LppYbrw{R9rxQ4L-@90y<w103l' );
define( 'AUTH_SALT',        '`x2_.}z5(7a1^OO)Jj>Kg;qU4>;j1&}C-@/@2n,74AxmRg&T7Z!}|Yc$]WAQ=>eo' );
define( 'SECURE_AUTH_SALT', '&7w%~M[2iOTs{0C?J*k~ =1XE_-gTk;?6)=*ft#$BYH=qz6ONh`iui5 Gr~_)y_,' );
define( 'LOGGED_IN_SALT',   'gtw2$<7tkE2y.b&y=go,`Rap,8o_ _Cf7@|q>8kc%+FpvAXk{s^y.%~Y1QGSWd*]' );
define( 'NONCE_SALT',       '56RMq6X:j6mX~hja<RA`<LSv)4,Q&X0L:wQ~9 Y!`lEvT EEw)Xt@Si9ilKn1oJM' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
