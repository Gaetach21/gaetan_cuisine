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
define( 'DB_NAME', 'gaetan_cuisine' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '123abc456' );

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
define( 'AUTH_KEY',         'h PKly=Mlv&W@a$<OjiJCF^~Ej~gGhiu-vU0GQ9<iwvC~NU8ORRsLx3dQ2:I;+HP' );
define( 'SECURE_AUTH_KEY',  '^d0fb=lB5{/^n3aNZRB4)ZA=5s4@3U_YSZJ/lek_uCXSK.=f5c;tVoD5imI$7f@C' );
define( 'LOGGED_IN_KEY',    'SPlzh6MjW4SQ()88^Q7y[?exR}?29kn]*#6y%vNB!ki9:V0!ZX OQ2E{#y4:O,^c' );
define( 'NONCE_KEY',        '6+Z9]s*H9y>DI{Z8k<Y%-}Odc{|@W0=d).`e]yXL/W1|:}Rh#gU_F[<_ ,b?((5n' );
define( 'AUTH_SALT',        'RBjt%EqpCsYJbr0DbDZY$2IjlK063lPLr| 2Ns4HO@1]u#d[<WIljkd145hxR*4Y' );
define( 'SECURE_AUTH_SALT', '%!5kdxWu*_$O|)/P=BN=}V7igEl6b^w1-C=ljru=(zHW=CwP&ij/@|~JHq$(-a1>' );
define( 'LOGGED_IN_SALT',   '1{mKcAa4m}V7DEama;KgjG1+um:9i|B;GN&m5q$>vdKHU(|=cU+! [)%@<E4*[CX' );
define( 'NONCE_SALT',       'DC5N cb`m i@:>c P[d3;{rXTRbU=/vH{.QqGIiovbgO8#oCj0 c|:F?2qlxwou6' );
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
