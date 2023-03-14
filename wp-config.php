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
define( 'DB_NAME', 'cafeine' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'jE1X$^hhuN Cp1c(!K-/wj+O JAgZR7S5|;Y@<x^A3M:co3-e(-;eAsdWrC9L=L.' );
define( 'SECURE_AUTH_KEY',  'VEkqO(*h=n^;,TB0D{5YzE#dGTNB>9zYa-r~5MH=:i lH*=OEPp.!ByFMtoDOQC_' );
define( 'LOGGED_IN_KEY',    'Li_c$C,Ig8V*r;2IAyeGxR[D*1tlCQ=t CEG@KRYy*Bem&nnW!}AR6gt5om4l+um' );
define( 'NONCE_KEY',        'v@D#xM/V-m0Wcb#ls{OWRCfBoB[+J]6iuz9|)-SHE(euIF.?Iq#J~hvxU!kM<DXD' );
define( 'AUTH_SALT',        '08l&zTg~y~x#-7{ ,w~xfZV*]K9q;BK|}[S.;_p7Dc: CUL_FEU6__@O}FUYfJpg' );
define( 'SECURE_AUTH_SALT', '9+WozgF E:7!V!_}&hghJwvdP|=/KdiUU8`/.+sjP)^O$BO+S?}`U&O7c%teRa)g' );
define( 'LOGGED_IN_SALT',   'Oyv(-F-0:NpP4% N-8,$f%b;>2H7/0hbEQqZM*~?xx$0cYjk}8)1iv;KMTUBPKAM' );
define( 'NONCE_SALT',       '@ZD}G3CN`sp5I,Y%I5/xR5Vz{DC~#cmjgG2sqNU(8:1deg(|xdn}qZBrwcceQ^ u' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
