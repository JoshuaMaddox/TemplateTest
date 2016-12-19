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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'template-tut' );

/** MySQL database username */
define( 'DB_USER', 'template' );

/** MySQL database password */
define( 'DB_PASSWORD', 'template' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_DEBUG', true );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y5Is_0+_1H0)zpN{mBV@4]6R kobhaeuX-XYId90#|=Y?>!Cl`PR~q_tN7D@|/4x');
define('SECURE_AUTH_KEY',  'HM{KHrx[}f#U%:s25vw)a{r_WVe2v6H-CKkAzNk`H^Gef+qJ iVH`v)jx|zku)|{');
define('LOGGED_IN_KEY',    '>K#H[OUNJ:?2[OjkvhC4} %`*k^?^]!h+Z2d$tOupM]5!jD-y|Yy=SRpZ6YlFw]A');
define('NONCE_KEY',        '!vn0#5,j?37NLW~T^|,_93$fCLA&ftiX}UBVI|5]AM_S0AGeY!i%q7bEq@n7X|jJ');
define('AUTH_SALT',        ']~Jr!@5M&:W+l{RtY%J}7X>9&}t-d$t<lJFx6DAvZB6m*6Xp9#9#f[o%=>/ehEdP');
define('SECURE_AUTH_SALT', '*60`>%ZHgFH+S|0*xz+*%fD7Z$Ccx,]^VpyP18+c^eCaho0!_yL_ux+}5rhXLs*(');
define('LOGGED_IN_SALT',   '!.+R|MsfF+I$7+GU!-L<;4!{/a_+A8%7nm-}r$ZGE%,mR]n_fJFVmZ qc]N@-i%Q');
define('NONCE_SALT',       '$2/6%AM}#/Qg;v.*4Zz^)3# 0h(+@/Et#uiSz(KG&7beS82S80R]<O 9=D|5SI;o');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
