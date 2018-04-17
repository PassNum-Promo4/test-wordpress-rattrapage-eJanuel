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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpressUser');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wordpressPassword');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'v(|=z-.}_TJ$L[!zhfT9N]aB~<RhdA:JJmGPS>>BjuR{74M&~R(#.gc>m;8(SX(H');
define('SECURE_AUTH_KEY',  'Pg=y=+|yUk-kfaE#%uW$?hbdVh*PHy7gw_+R2+I7&!r#Twhu>~?,${hVTugSx3dN');
define('LOGGED_IN_KEY',    'dUh@;BR}Ma9#TC^n+M{tS8dWM2suxd7>^0D&1mvZrk-,c>L)$UisCn9Y%S(a-bM{');
define('NONCE_KEY',        '9n}c4qcU{],L?|]C8%|ou+)sGo-qw])D~buVymI-P|8h=revIIfs|,Dd$+s=IKNp');
define('AUTH_SALT',        '=7i|:z-4p{,XMf?&)9{D#d+I*&3GHT3/%~r3?s>4ybhpk}(M2K))U5&N|jK(Vwe(');
define('SECURE_AUTH_SALT', 'w39&>FW`l|m}$BMV#B6X0mE+f20-U(F7prij6ti^ BU#l-Fid/-9HvM?C^~ZN@ag');
define('LOGGED_IN_SALT',   'j~uMBi0hh l.8](:~k`kfz:n=WRHtLgAn0OTE.1ebOzB_.^U1Q|.ovX|OQu-D!Y)');
define('NONCE_SALT',       'o)ROXpRiez8CqCfsYdl+vx-BLZandF#TVLbmJ`12({`MSxW+g|2[`#GJ$sn :LE8');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');

