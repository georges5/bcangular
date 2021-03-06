<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'jourblanexangula');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'jourblanexangula');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'AngularWP1');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'jourblanexangula.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o>#MB4vvlAd?%#<]x[/7h<n9].hyLQqE|e OL,Sjs@vW5 @DQ02(MNkmJqwP:~D+');
define('SECURE_AUTH_KEY',  'a?n6eVW-B6I/4;0q%/%W%d:X}3lVfhZKfv1rCoih&.Nf8q?25Vp+}@Sfz[Dy}/yR');
define('LOGGED_IN_KEY',    'w5:YG=`:S-D(Y?/&jS!lmY0Gc-E67wkuQ!j=BlEW:u5T*f bJ4HHDJ]2FqfYTLA+');
define('NONCE_KEY',        'R8+ed:8,-@i$~+w5^+{-@FIHLe]Pe@+V}U_%)lLe_E!wUo?BGZ6[B@6B/N*%fJDU');
define('AUTH_SALT',        '?K9lg(N,SB8aB^m&Y8vG(9-k|C>C^c&*iIVAj_;F7e4a1.;R%uFH.L{x{<$&<F}@');
define('SECURE_AUTH_SALT', 'F|IA6<2 |ZVkSMM(UKcy*mt0, (R|vZ.u^w(-{ox$;6|dm-!Q4&,jtylL$=3z6U2');
define('LOGGED_IN_SALT',   'zf<[q-HfCsDREXa4oT|gFW#Y=/.!KXjzo.o`Szk!|&C&g-VER:/F%,Eh^[|gDIAL');
define('NONCE_SALT',       'oR;:({-E8>@f/;bGF$Q[^e+Kz5z_2~~vo9L|(GZv_k6c.Oz+#,N:aCV+Pk[2L!p]');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'awp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');