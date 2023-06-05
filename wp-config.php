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
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R0pU%E&uQ}f8fsXEg*=/RUEt!%wmR6F/ahv*r:g.3l[Y<K=CO2T8o`]D)aiC,86(' );
define( 'SECURE_AUTH_KEY',  'b#E/IHW#I$XvBq!iG;B30L/M{R.#n-uOER{IJ-AiUgwtUAcYuZ9Vg)]R[~lG?;j-' );
define( 'LOGGED_IN_KEY',    '>Mc Xsw%`l%A9hU74sDAk;u7QihWkENF(SZE:*F*MfBGUh9SsC]OvAL9SR:npki$' );
define( 'NONCE_KEY',        'Y+pm+)$^nnY5HJ(+DI}NC=y}~hOLO3H*x*_vW@;R]~d[RD4Ama8XD,%bNu)S)3e?' );
define( 'AUTH_SALT',        'rT`.ahrn[m{|XA0A4SA@#^2X6fBLJ1K/#zCZXRq|+E_8n{/ZNe0e_vQk2nD:^~ho' );
define( 'SECURE_AUTH_SALT', ')wr/8U$/:OIYbJmB&rgbGBTRA9LIVTKwhr#iOi,os}1$]k`Wc[|[}3cTcD`lLUBA' );
define( 'LOGGED_IN_SALT',   'p0u<QHO?m47cLzO:}nf1`xRd& Y6jYNLFOmv8r=8&(THOo|nl1/Vyb {O27pXcip' );
define( 'NONCE_SALT',       'LA3:mpzScio]5G+!X!rvc]3YOI#k$tyT+.h!=OM48ncZCGjumgQo6ME$KcyVY=f6' );
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
