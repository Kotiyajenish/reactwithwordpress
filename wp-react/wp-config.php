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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-react' );

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
define( 'AUTH_KEY',         '%kM#m;J&RnBD.n]{>OPQj+?>0XBh]DoFy~n@8$!F/okc1S7l2g%~<@1k$zr3+oRm' );
define( 'SECURE_AUTH_KEY',  'v?)}ngN5!HD2[:|Bt/spF%JOHD]*o(Q{j/OEFWfptV;m1zGhK@Sj8VNq]:svP`GV' );
define( 'LOGGED_IN_KEY',    '53qM3sq*YS~VN4e1}cdo<aiUFJ%Mgwho@K^r]8J8H->_K4g{fgRU#>lhQd,k33$K' );
define( 'NONCE_KEY',        'Q8X;R+_E_#PZ6>*?I8fJAe]s~sTPa9Gid#D%b!}%mL-Y)52 [xgq|RZJYhFcIr@H' );
define( 'AUTH_SALT',        '/9[VdivN-s@<Si*`bof1UT MQ F+uwk2kK4:<j;$y;A_SD9|=W%,[71=O{&m?:z~' );
define( 'SECURE_AUTH_SALT', ')oR4 2vIBbn8Li2EeS)xpNF_EwI$E{3z%hW?`-Y%Uy/f!l5)@vPiCYt#56nODgxL' );
define( 'LOGGED_IN_SALT',   '~(aAp9IbU?!ZR,?^UZQM0X{!mGJ?;/Z4HVAX^QU!yS8(ut_NOgwZ,BF`!/B(DETT' );
define( 'NONCE_SALT',       '~isEo`S _&$@lT{@T}T*{~yg{4e+Km:Y_6UbJj{9UyNhDv8^_@2l@u]7}LFFf]]Q' );


/**#@-*/

$table_prefix = 'wp_';


// Enable WP_DEBUG mode

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'FS_METHOD', 'direct');

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
