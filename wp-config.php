<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'creativerh');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'giuliosa');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Giulio93#');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q)JnO&|{[ I5g*UwS7YF-=e:^e%84Q8,bKpC;fg7W_U8ko?YnfQUT0;)]@5+1R#~');
define('SECURE_AUTH_KEY',  'NtII.WvX-$V6euy0=gBrdb^+2`}+sY#~esFy:$<0T`aZ/BG,K?IEvq|i9Wp9kW]R');
define('LOGGED_IN_KEY',    'cUFEo$qTs~Ik:QQ0H@LN(^D7%JsJ]h2-/c7dw@c|dA^QN!I;1/dQ1)9=faN}VtK,');
define('NONCE_KEY',        '|@:l)/#P=n/$pMh|Ppi^2vKD5;=5+P(h>_e,An#}1:u9|{yndJTAB&{,lr-1yGFJ');
define('AUTH_SALT',        '7Ct7T]L~$*pCG6FleP[Vcorg^3UnObH5L7[hS*uS`([OB69KzaG);GP)p=C+:-RT');
define('SECURE_AUTH_SALT', '.wlQL|ev{{Cb|UBJrv=F2a?%uP4P.$n$;1=r!Wk%tdr2aVnLQ[oXS~fiK9R`e@`{');
define('LOGGED_IN_SALT',   'Pv|o2%c5v>s+&d^C4ZGj;sbUJ0N-tj|%|}(yn*8!yVc7x tS+7>w=6`3Gbm 7sy5');
define('NONCE_SALT',       '?KsS-vSF`)^<-Mo;|P|K+Q,t|cZ,Z2-yBRL(7{H8|ld01TvLsEF1nKlR}W#vl%<Z');


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define( 'WP_DEBUG', true );

define( 'WP_MEMORY_LIMIT', '64M' );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
