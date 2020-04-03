<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AWux:-Nr0d8T)KBuL96?)xx2`BCSXF6.:r?lrf:X( ?!+aSH/7t$gmCu^haOZ?%D' );
define( 'SECURE_AUTH_KEY',  'eT:5|ANf?rrh(~*PoVOy$blp@{9, }1(qRHL,G~f#YE8]qrg5rk;$yF|5w+DEl]Z' );
define( 'LOGGED_IN_KEY',    ';{9&K<  U of<I<()xd}slw+y_ASw9B^BS.g~ilWoBLy}fh_+c@1SLIMjH{eOVNu' );
define( 'NONCE_KEY',        ':ka,fq9M;!@p}KS.x]2ok7jM*|u^7Po6TGf:q;i2jk IDu&.J(SZ6!U>_@O(*3Z0' );
define( 'AUTH_SALT',        'kEe]8Qn)d&3Vo[_c?W2.+?(uyb=X50$,y{@XjQJkQ}j$$yONN_DS.3Zyl,0*#gnt' );
define( 'SECURE_AUTH_SALT', 'D,^P}MM7*e,TjSEt<%1TTFe<8xa, M0WSj9SN3~xR.-(k&WYq>33fX_aw]Bdx>*{' );
define( 'LOGGED_IN_SALT',   'Z[?{uMmL_xpyht:`b5Wzpi4]nz&kxQPErY6c+NWYqOekrB4E>Y/Eff8un`(.R&nN' );
define( 'NONCE_SALT',       'pq19_&+?l_e[TpwT~T-u|S`<+?pj:A@RI,*Js!UFYHy2YhaxY#ao*]C-.!fg`ZQk' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
