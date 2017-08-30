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
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YpXoENcl4D6L)aY[zm]tp+I?J8%Mo;jy^Ljji@lyB-4(u:u9-rR>[jlQL3&TRp)D' );
define( 'SECURE_AUTH_KEY',  'eZb:1D6`]Zxt[R`)@.y%@{Y$,F5sU{#$vU$KDQc{dwZFDd]wFnPjHFZ {Z~L2T5k' );
define( 'LOGGED_IN_KEY',    'dRJgQ`>fLRIj;]mup<ZyIzR=^ [b=<&l=GUWnk/AaUPq;%U;tGi;(/!Kb@b,8!vq' );
define( 'NONCE_KEY',        'LjWgC1x-Vm!lo|]h68Pm?h4?s}mluG<]e;WHnCfA!o5 C}w&*IXE/p=+~<Aj5E(:' );
define( 'AUTH_SALT',        '>ie3_{oV5J4{ipE?@VV;eb kJdBcc?YT`3%osCLr^/oFs wc)JAds:RoUxd+vInS' );
define( 'SECURE_AUTH_SALT', '#RlD]oT%ZmhnWx#e$ZfJ>Ka6/q]eKE%H7,(qQ&6&?e&H=v?[donwVN6uVz%>9Th+' );
define( 'LOGGED_IN_SALT',   'V)9UaRJ>^,<o4 2&amaVH2(JFtmW~oEo=GzZpoW#g&uEq*O.qsMI2::8]-DNW5=x' );
define( 'NONCE_SALT',       '/t158y={0/EeRqa:t2@Y TlF6qUMpG+Mst}GYlP@Ja~gAL|?9E,8AZiHlxh;ma>B' );

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
