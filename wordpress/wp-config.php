<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sfrnn=*w)l>4g4:Gb&6=))U!137y,U<-+Qpn=q0D-D|>HOjag%h_oH|N^eR OLv8' );
define( 'SECURE_AUTH_KEY',  '<j3l)5SDjSOv9J2W_y]l|0x/T=]$&)vEhUV4U {U2HO0IVCTGIODCg+VGQI.c(7K' );
define( 'LOGGED_IN_KEY',    'rdFS!oCLyQHX*ULWLG:&0*A(sY7N%Z*,REm]`Q{99a&WRZGOxuq-2$.j4)IH<a)F' );
define( 'NONCE_KEY',        ';,>CuP/9f-;Lv9tFDXQ&&zqrmmz!7x2@@la~px$|DpQz_2(lnW]wNaXJ3I-gaa_[' );
define( 'AUTH_SALT',        'gX4iCtscmK.R1ow|vFO K5Qz-m 9T>;|wk0(j$+&b{kVQy0f<6x$>iPWuqTo]E?k' );
define( 'SECURE_AUTH_SALT', '/ZRyS5Spg3b!W7Fv<CBFxOz:6a_rD6|$p&$!p8)(~hM6t6_ET!-p7e3cC>iWi(77' );
define( 'LOGGED_IN_SALT',   'yM]PtD_=>[N(I8zxp:OZGLt)I=(q$,Dc>6-i~vf/F~~iX,=8R&|5HBH9jB.;0K/D' );
define( 'NONCE_SALT',       '%%X]1cN VZ]~ 9p.}V3G%^ t5v7e`qM7rVeFoRcLmB^4#,^;l`&!c|S<,$$:bgg{' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli sviluppatori di temi e plugin di utilizzare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungi qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */
define('WP_ALLOW_REPAIR', true);



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
