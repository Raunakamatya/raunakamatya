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
define( 'DB_NAME', 'Raunakmasalaandfoods' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'xaF^EUt?TwW6~Ez<Ih`Jkq^f!m4G,*Mz)gL&pZpz=^5$rDbNyIx@~ck:JU~1J^Ut' );
define( 'SECURE_AUTH_KEY',  'os#`1y~0=GN39gT&rB`lq.]D.epsC{[52]j/1;BR?G^h[Yes/M.EAZwLHt)./!my' );
define( 'LOGGED_IN_KEY',    '4N$c@%j+y&S=t<hM5^W0Vsu}nRB^4_d}yzm3#42R,&VuZ,ok4_17%#&fFjp#FC9E' );
define( 'NONCE_KEY',        '(WBeV+u=6 Hu~Pn9hxcL/kWUjaLe[]%gA(x]7}o1A1[$jdU*-Lk6hEQkq]]6QW(~' );
define( 'AUTH_SALT',        'E5|S6leKe*n_+=H|!CY6d2~d1oAGPe%Z{v:MX_OIT`NDePR5kHXpZK%<^6M/Am]/' );
define( 'SECURE_AUTH_SALT', 'UsB+G[.rpETjqar5AYVt?dbj,C2=-$cRzN7^XyL(k%DQjdFnnqlrV;Z+LO)zv1Z)' );
define( 'LOGGED_IN_SALT',   '$;m+IvA`@e1<6b~QNzd-<{M75vpxKBd!M<i[E9FR5yJvY2B:m(ZM5IjaV<wp3H!+' );
define( 'NONCE_SALT',       'b!4g@XJsSk&Q[kWp7FBSv9;:-zUAC~U)YNAd[Bi8AumBO3!5cmgIxZBsHV-%F*>8' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
