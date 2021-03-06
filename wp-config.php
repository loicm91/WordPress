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
define('DB_NAME', 'wordpressTest');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'tG40.Djy_ Jbv?/ya6o/|qiJ1g)gO [fnUN.;QuAy[hs`qN{hcQJ~=:T^&5ff0_!');
define('SECURE_AUTH_KEY',  'l0`n`WPG#W8dlSQ6HPSj_q33^|7)Lc*8]_:lu3~,bYesarT5yKn/<vq+[]D0eY6W');
define('LOGGED_IN_KEY',    'GJFVy&=JCic9JG(q}6TSiD6Cpd);BBl?^mIrm[Q/Q{cQb4-KyQgV02bn&ce,d+*I');
define('NONCE_KEY',        '?X|Isu0e+a~Ps4prD ^*^Xj})hhT0Z7]~a8&FM{fhNVl13W7j4^K#,ar%G&T+Xq!');
define('AUTH_SALT',        'Rso>5;.5KqI5$}[Zvt8-M@ubAJdsxVm>l5SK-!6OfSolM8jRQ_ZY}<xm1^NMZ-V:');
define('SECURE_AUTH_SALT', 'hj=gC!6;MWk]-j6g&x%T ~lp$zo+ibt*-gwj]b7%IAt)MrB3^rE{G>r>j|n)Nj2j');
define('LOGGED_IN_SALT',   '6GEc=@J`0_+6TpnCP8cD0mXAZ.cO>Cu7KsIl{j,q@][cN#/CPdjn[R?dhD_I=U_<');
define('NONCE_SALT',       '5EbV`eo8^u!g~r]Vbg1t}7:xZ*V*TSA{fyEAfq#ob~C3o YVV4xQ$=DzY~WD0yv!');
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