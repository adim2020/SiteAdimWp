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
define( 'AUTH_KEY',         '=bRfaDx:}@U3~h,(*oURUTuoGT5Lk`RLyh!(7+ 5D+d7dFy{OuUv_Od|!w|B}i#3' );
define( 'SECURE_AUTH_KEY',  'Jl39-*%C*5HX:YA-EU6uTz9( w4h<W;sUk!vIw,*&uJV17)YQ9+v7{XI73a.PMnQ' );
define( 'LOGGED_IN_KEY',    'v})nhbE]ToOK4s)X4zg:@ZQ,yWr1zxfqX~+Yjcyv]+#,qvVw.Q8V.3Peyww{tl`o' );
define( 'NONCE_KEY',        '_ AXCpfOlUm$w(N$[2stWAieR`nsq~n@]E_cH:9Wk><Y{6Te/M{*}egM(|YgcF4h' );
define( 'AUTH_SALT',        'ZZEt<`(fSYqiD<Zm_P!mPJZ..DS HKP21(LX;KP%ESx%oN;zjpN}[`e7=YZWk0s)' );
define( 'SECURE_AUTH_SALT', '^eZ!m(y|rkCm|SCcvvC_@aj/6P*czhu#:/-*H^!aJ;+G}|Sv;>dE=DMMv@?)ZniR' );
define( 'LOGGED_IN_SALT',   'HmqlJo]7+R(loBgG$@zVJXhO>9J(gJuNXv1yHvb57#I#8mqE!#ZNe`Glns*oQ=um' );
define( 'NONCE_SALT',       'Y8Uj(QLM9CY6K,`m$zLIin3D?wx27U~NVBmRI0rM}Mak.@F<[`>q!#]V;WTH]Dd[' );
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
