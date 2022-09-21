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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'eassamer' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ']NG8J8qx4DZ6,[>0c%*Na@9UcP+y-lesN|f.a}!5-#7-y=i[#!/}.Z=N]=|}-?0r');
define('SECURE_AUTH_KEY',  'Rg-KO[itL7Y26U98JCpZ6-R9G-DY-Yvaqz+mF^ASwA3K{M> Mx|%Kkkp`fX*A i9');
define('LOGGED_IN_KEY',    'J|AG]uPQw2~<T->g~x9uAI_:vE`#gI.,y`pIfO:M+NTK;8^.ed0Y9tO+j2DzKUX&');
define('NONCE_KEY',        'C_J[>~er6BMAKs34IOid@&y]z((Z-[>~0J nGNWurDR0%Trbce;qtxw6+&^<0d]z');
define('AUTH_SALT',        'd+ep)hx+i~v=1GR-*4|--L@bUyw/o{(47JTbo9o(ASfk#bV*icDP0-2!PPGdLIID');
define('SECURE_AUTH_SALT', 'QliTW5&RV]w-8r1T-B&rU?Y6B9z$XEgHI*-nz,/R&[1|WQ4lVO==TvpZ_og6a9Gl');
define('LOGGED_IN_SALT',   'a=O,AH>x 82>ru3$A^YD#`h^-l!)Z+z>D 1IJ0:EYG#-h0HT}:dwJiQ?%0oyEje ');
define('NONCE_SALT',       'f%}I(U #^CEOviqB/<ENh!?eof/V[/-Ur9wbsuTeLhoytu%4B.V2H+4]yxSuBnE|');

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

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';