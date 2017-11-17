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
define('DB_NAME', 'lifestyleweb');

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
define('AUTH_KEY',         '.]Q@CUtcjc%!PZZ&KlNjv9$@a|5`HGz$gUq+>-;vM|b_BuRg3$98~,gz=8xJEU*9');
define('SECURE_AUTH_KEY',  'rct?%Ya.RaBN^~;yQrF(&7ENt%>i@S=M6NK]tH#Wi=X4>8*y&6cRH9^u(D^.$Xdv');
define('LOGGED_IN_KEY',    'C9~Gkt>.>-$(q._P2$8Z;{-v&Fq?!4!MNx$QcTakJK#2.?eu=W&O;y~dRmdb>J=0');
define('NONCE_KEY',        'bC)v5=NK<EKJ@J:Q=.qsV%>oCLW=}24nq)n[|?t2TK0pf/I`Jgh,{}fwT;`V+3Q^');
define('AUTH_SALT',        '4G9>krNOVOk?HNqv)~$Z5W|2z5M$03TX)b$NDpPEGcRc=9_+H.g-N@m;h{w1K2O4');
define('SECURE_AUTH_SALT', 'z=NelBhe[cqAcjIq9_# BeMBx_YO>y*C <!|GlK]1Vbip6Z%gQ^)4.vY0OsVDh6U');
define('LOGGED_IN_SALT',   'b],C3ee;fOo/qH9NwWNXd~{tj|zwfkF*PlGn YlvqOL)w]L9|qTvsy5g=$5q2huA');
define('NONCE_SALT',       'sEAAe|-v_dU.Y0>GP2WDF-;mNl7r%V3QHH/s4a4K&fJ,KV~>j()y/,Z~|Z~Cf%_,');

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
