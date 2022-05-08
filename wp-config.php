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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         'K;%x$HmPruU5RrW>>Osz&:Dv`p1%n|1_75ta@,iiB}R/hG!PsiQ|6viFxX=8-B6A' );
define( 'SECURE_AUTH_KEY',  '~i?; u~~G!7%(2<vvU,AiQ9I>(wrxEr*VF+gbGNL~Nl3mB&UZ.KV:%pq-7NdR][}' );
define( 'LOGGED_IN_KEY',    'pK0!og~EkbV9dG>MNP?Iz1NvBVa`6hzH^K0kF7!IiP1M2MhDz;XJ2;}Q}Kd:r<xW' );
define( 'NONCE_KEY',        'Qvb[[_p.8]z|]Wl0Mdpxc^B@=0uX00vfi`x+o[wW*?xB9muf-fYs;(V&-N(>KP1-' );
define( 'AUTH_SALT',        'm^+%=`gr;xbd8$g`Arx!IiYc2k(bFP<H4VFg<*tD3VQ;je$UURw-@tDf)0NmL>C_' );
define( 'SECURE_AUTH_SALT', 'M^#qk6p(79?{^/N5^v6MrSWz{`AJ+N22Ff1|)`>hg+CD+Q+TSxT-{8C$0x|3MM !' );
define( 'LOGGED_IN_SALT',   'gfFP)O3P-[kkIqB4..O5Te{TvZ8|~|FE&uuV7*1tFKUs|,Bv!Et:T_~dNo#![|!W' );
define( 'NONCE_SALT',       '+pPT#i8HynkDx#z0/AWGuDQ&VS3JBP@RbEy1KH=@Ow ,&><U;3b.uf>,yRjjMuB<' );

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
