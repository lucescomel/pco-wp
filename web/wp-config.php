<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-pco' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'docker' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'docker' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '9/zdxTT?m!dDuTsf54KUfp;b0&nW|NM:v4{KP1jAqj5|H@ 8571(<]{wenMnwlpk' );
define( 'SECURE_AUTH_KEY',  'X]^Nu2-Pi5~!1I(o}93xAp<CxmPu7kX|IX=:2KtAI=RQ&n@H8NoD,XFBN0}I}N}K' );
define( 'LOGGED_IN_KEY',    '0v|6{ u7nCCqUU}^r%adzB>#1Mw]]U6?~T(FzpeGeO)6E&S=S=;.>LNF,lM(1DDM' );
define( 'NONCE_KEY',        'ZHA5se(>(M(P`N !`apTb[T3D_e[AX &5$#ke^>0!ZKBK1WWk~?&0P$#~Wijf AL' );
define( 'AUTH_SALT',        ':BQCm$v1UoyKy`|Zt=$Ka?geP(j`L1{s&(54!fN%6A/#p7FINP%U0.Ad|3!R[j|$' );
define( 'SECURE_AUTH_SALT', '9^FTkfGH{xg}2^hMN{eI /egUl6y+`^X?Gh.[isku7y7S3U+h:yi(OrK{}5VJDR$' );
define( 'LOGGED_IN_SALT',   'lb`2},NM7|<44sYSn=73GKY&ReJ$s0]xMyfDe%<Z{5a+[u1T5r);2A G<gyIYFD+' );
define( 'NONCE_SALT',       '[E)BS1[cJ 6EUJ*%{2yMfwYE05QuC0Ljfb`^LnIp{dPi`;$I@<(m~7:).^Jrq{Q2' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
