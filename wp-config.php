<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'gretanumbdd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'adminyss' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Adm1ny55!' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<7]pF n44_L>@f mJ%0SY5s[;!I]ht81|$]/{KJ:z$ry,-*B5]uHI`n<Xos.VwID' );
define( 'SECURE_AUTH_KEY',  'dj**Y(OU Q|b0Tz1M.2B--R&&]?6f`c.0FdNcC?D|>-}92~:Jj%w`mPnH<ED0$s#' );
define( 'LOGGED_IN_KEY',    'y]D#3]o]4eY3oAb1PRn.A<5olos}BGCZLv.vSM4,2e3Kw0{C*LGkwQpe/}`T@1B-' );
define( 'NONCE_KEY',        'WkX/ Zp_jC>{~)ywh~iOb9dZ$Q)N_vE}hKF4$}%p~~~bbhX3~J0R?%I41k%[si4w' );
define( 'AUTH_SALT',        '(JDwob%#<&+hqH3/&O>TC4#5:]/TJt02e)d$q^aSIn&3$.a4Vk<#;.VxVz^W#sG.' );
define( 'SECURE_AUTH_SALT', 'a1}ZPK*==^F_X[Xu21eF4BUAyy|lx,1PllWp[vx7|Ma*unTY*h0/Yuj=d[]}b?(:' );
define( 'LOGGED_IN_SALT',   '7wt(f D_(C>P]1wB.)*~3bNsWg4.c6b`jN4,aD8Ejh%J??Vf#k4Mc.>|-3GlpX6R' );
define( 'NONCE_SALT',       '?P%y(B~`Pa__~p`v*utnAoiBc{tv@C[E3(-SC*{[r*XMF=;3Q`yq~9<u^y;uA=a!' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpgnum43_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* multisite */
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'velaynum.greta.fr');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
