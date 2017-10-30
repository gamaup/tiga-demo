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
define('DB_NAME', 'tiga-demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'L-2u&AZQRJMj c=^g[9w5SYy8ryvTm2YH:rY~|Xh QviY{u(N:5tUf*b|3}q2x3Z');
define('SECURE_AUTH_KEY',  ']$ZR=fN#>?>Q8XJdq9qtLF*Izo^_zP JUQq VI?%dO%_z$Wx3xUhvx,P+Vj]%bq7');
define('LOGGED_IN_KEY',    ',Jg0AQzgbOIy${mr04U0S-i{XL7iZPC w^,b8 D]^5JT/Iw2 pH6bLsIA[]d3zwE');
define('NONCE_KEY',        '^$s=*N`KB:.KKxq^J} <_=[0{5sEYPYKD6|!zo+xpUE9JFFAWk=laE:%C,c[?WI7');
define('AUTH_SALT',        'z~~Ft;*`oLR%cdy4P3# joX)<r*N-Dv(/G~JNja7qtDh/*Bl&(l|QCDKx@cG|Oy5');
define('SECURE_AUTH_SALT', '4vo$Y4_by~r!3mVkG7C9!bt@(^61Z7s,i[55Lp)moS3D)8uwqZdau34]L7PlV^i ');
define('LOGGED_IN_SALT',   'Svn,By_Cml4|Enz}LwW#eL=12$kku2/ H_s~8EA7ky6/daPOLD7n>+.V/r}!yopC');
define('NONCE_SALT',       'xc6#l>j=tWco$S]^EQITw]j{W0iV8oltv525a@8D/]&P_p,<0<n%Ff>@2<[pn5lo');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
