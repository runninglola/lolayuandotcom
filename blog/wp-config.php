<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lolayuan_wo1063');

/** MySQL database username */
define('DB_USER', 'lolayuan_wo1063');

/** MySQL database password */
define('DB_PASSWORD', 'IBXWTsQpQKnr');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'J_S^S%kuwqVx_I/i(DUw?|eqpd>g=$g/lu$$CL>M)H|h%f_rh-WyO)=j@oiQx{Infnd^Xza?lD(K+hpc^r@Iw?)B{wZfZmKdF$K@*X*KBBvgvIS@GoOS!;z()@Wh}BRU');
define('SECURE_AUTH_KEY', 'm[Kf>dKfzmdtpj%qt!Hg>Ot[wMvqyfOdj+jnbhV{Kx<QbDb)%hZar[O@Pf$To>SIvHdoIs@RQ?JavgTW}yXhfc}rkPSgwg+[y&v(K@;>>-tIt|F_Fli^}D*KT=$hMK&)');
define('LOGGED_IN_KEY', 'gjEbmumTvSRD;By|jzUBS@L%DRtg{I|PTBSD|Dq<{u]^%{i_vWFw%Sgms?hRI<;/$MC@vct=GJv^dUWV}Tz}]p@h{}*;<oe?yePz?S+PJ;)}D-c<Rbw[Yu-rnY%jIib?');
define('NONCE_KEY', 'jD$V%QOAo<Nvw-!<=Tq|nlIZoy];tw<{!rHzZ*=bkAZ_koeXXWg-kg%|Aq%)O(Bi?MM[dc<IA-h>q&s>&{ib=veNbc;vL>*fg{I?-i^((dk|nDmFR[kXM!tS}+^}uq>S');
define('AUTH_SALT', 'jWF$%hHH(@*rQqDVK/YvKCN+(cVt)}tA%sgt_<Z&O-qLwpuYtxgMb_lOLMMtwV_%yONu)eeu|=nLuV(]w;bYpuS]^C)z?*ZzlNe;jAn)q%A$fH+@M){A=<rLH]vSenV$');
define('SECURE_AUTH_SALT', 'gFlS-G(IHeSdmS;;}{SGZ|%h/@x?JgDQZMf^Q(kgdsvyui;I^xdYHJt}qk[]tb*nwxn?]ynhoK%dw]hY-Y@YYjk&QDepJc*!KTENpNEtLxxmZTS)>DRk/g<uk+^_QFOO');
define('LOGGED_IN_SALT', 'KvuTK{cM|?;-kjrT/gW)]sv$c?)cvKoKO_A)xDuI?bYqS<}zlHP{Q/EEjghCWqjkpx(os-p{(>*f)S@RMgD}lAear%qDeXHDe/ExgifOR+NXKbF-/tW?hQ)=JbTh!eDi');
define('NONCE_SALT', 'Z_{ukAgMrHB*a?l(e}jc!]N+sHl|$i|&k$WNWhY!/>{@mE-su(jmgs=$OenZfxyMNyYM&ffukaQXJmnLgu/;e-PU!L{nt^{)fOQZeWqSFy*w&=vVbdM|*C-uT}XwCH[>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_qayp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
