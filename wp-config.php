<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'prosoft_task_db' );

/** MySQL database username */
define( 'DB_USER', 'prosoft_task_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'u0z(EH;{SB6;' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J2kx8C.2EFq0c]|mexdS6`URo1lb]NXAQJ&*F20Q*P##=Ob v!_cv=Djhz,L!EbC' );
define( 'SECURE_AUTH_KEY',  '}yHpUk)Vt(aV24<>Ka^tYsH2w [HWnz+^!&_Itx_.6,wL!.E7pswf*AE08swiU*J' );
define( 'LOGGED_IN_KEY',    'a~x_ufDTV;k}SZ@vkq6I+jqww`Lb:~^FW3YdBkV#!h5Z:m`/57=^ _[*,QodN}ti' );
define( 'NONCE_KEY',        '|D.*<&0QT-nAp^yK,jLw{u{;DIYW6=_@z0e}8)3cj]/RutN0B@L5,d.HThOKlaDq' );
define( 'AUTH_SALT',        'c6o?ebE32R;~MxGVU+1LgKt(=ia{9 ]G,J6B2iQmCy=(cmd|BJTiv;yXdS}c0S2y' );
define( 'SECURE_AUTH_SALT', 'TFIjr=&Sw(U;0>Uv:DDYF>J1s-d|[hbs>hT~m5= 2.)$W]v1s*JkX)36qzT1)xFv' );
define( 'LOGGED_IN_SALT',   '. :y1 y#<<,h~t|5iV`Rn&Q,]k%Er|7>1rbaEJ(Vpc86Z/f>aK8Ix]|e;4AhGl +' );
define( 'NONCE_SALT',       '7T|USb)lRIN^AR}XPWH@W=QaEm/E<s?F}-%7na</7JMVH2q_qvEK|5G-npKE,#sh' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define('WP_MEMORY_LIMIT', '512M');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
