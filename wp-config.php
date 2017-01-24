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
echo $_SERVER['SERVER_NAME'];


/** Local development credentials */
if ($_SERVER['SERVER_NAME'] == 'lightsourcepeople.com') {
    $dbName = 'lightsou1_production';
    $dbUser = 'lightsou1_admin';
    $dbPassword = '128c%8F';
    $dbHost = '10.169.0.131';
    define('WP_HOME','http://lightsourcepeople.com/');
    define('WP_SITEURL','http://lightsourcepeople.com/');    
} else {
    $dbName = 'lightsou1_production';
    $dbUser = 'lightsou1_admin';
    $dbPassword = '128c%8F';
    $dbHost = '91.208.99.2:1171';
    define('WP_HOME','http://localhost:8888/');
    define('WP_SITEURL','http://localhost:8888/');

}


// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $dbName );

/** MySQL database username */
define( 'DB_USER', $dbUser );

/** MySQL database password */
define( 'DB_PASSWORD', $dbPassword );

/** MySQL hostname */
define( 'DB_HOST', $dbHost );

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
define('AUTH_KEY',         'i~=MH<HjWyD5d#]>-4UK*0;)]ov5~8keVxZ,ykSnoV )]V.1qSlXXKzgGP+ryb#:');
define('SECURE_AUTH_KEY',  ' Ty)v?IUJKc1^kQ-?.sBw|wX;0n*4en7C ||v5mVIj#OA41p|[ee)pf)+;WFNvW#');
define('LOGGED_IN_KEY',    '[0@Bi[fpy)()Vg*ScIRVt+vU%[wKz+-viU=3q^TH_Fd)]tTo,wu{&PF%_-:Hl|o^');
define('NONCE_KEY',        'f0gh|U?;yaykSnW46N%GK )p]7_(Q=>cwvGXni9r;=B-40_jMZC27.d{Qb7zb6%l');
define('AUTH_SALT',        '?d=2}TZy|6>1DJ,-@wBo-l]&._sR`Us$C-mnl]f}q3z@MdZz`wMG?|By!lBN9FFn');
define('SECURE_AUTH_SALT', '^3PZhH>Dg?FnM9t|+ )}xA^Cuo`JuOS.Q`,I*|3uc=)%qv-:zzbAjQI.ay~zM,WZ');
define('LOGGED_IN_SALT',   'r55dGQr<SRVkJJ3oXfwBP/Oit-h 4tZJOZj0qOF1)FMhWg/iJ(pBV.^bT*M&`NL*');
define('NONCE_SALT',       'lF(czL2+b|>!v^{EM8lgvO CHS%gyPWa}9M-k9lw]7cA~x27</Q+cWk!k+YPBqHV');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
    define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
