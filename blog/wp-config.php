<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */


// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress');

/** Database username */
define( 'DB_USER', 'doadmin');

/** Database password */
define( 'DB_PASSWORD', 'AVNS_A-9K9pbCqiCxPb0273r');

/** Database hostname */
define( 'DB_HOST', 'db-mysql-nyc3-92708-do-user-18902954-0.k.db.ondigitalocean.com:25060');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

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
define( 'AUTH_KEY',         '3O. UR*<nf6>kklF,xaoXo(lhtpCzTZMRG1-i4jU)nCLKaP/@P!Mq[nqov$k@~@w' );
define( 'SECURE_AUTH_KEY',  'xc$G`D<iu5!;)+gWvu_p8Q{D6Bf%{QWKQ^QyBWQ<liSP&2]J?i1_E#Y9 rnjB4E%' );
define( 'LOGGED_IN_KEY',    'm(fwVR wH:d+sp>`5_`w$VEM^;!2pG{[wAMnZc%^EZ{b&T7wr$&jT4/8Mh]Koq/$' );
define( 'NONCE_KEY',        'ZaR$Id?saVuetw&mSB5.5kUkb>}t5i0x!FlcMY{=A#/P)ej$sS>{__Ec4XYvP!Y,' );
define( 'AUTH_SALT',        'Kae/](NqQ]cIlFX2la2C55dG5j#M+3UkS`/nSg(y*t+pjOIU=^NBSHDkBgFN%4|G' );
define( 'SECURE_AUTH_SALT', 'Fa}gQCR7p~9WCnVL$c$DNsh jv8=}O+9*py)mtod@v3bI_nD>(*uw|e4jE}5*w8y' );
define( 'LOGGED_IN_SALT',   '?yLmnvD7nR>erL%{$*ENp79cQrc,iJl!%2XgEY%#0c/SZ;W/q>f!lSL~QM&T?uTn' );
define( 'NONCE_SALT',       'lqd(H^9mw!R(qn&YoBXd0TMyM5FETXP-2+3quW(Mbm $>+I&j3!ZlC_7P|X>8+<)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false ); // Para evitar mostrar errores en la página

/* Add any custom values between this line and the "stop editing" line. */
 
@ini_set('display_errors', 0);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
