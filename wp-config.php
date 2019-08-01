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
define('DB_NAME', 'linkfor-blog');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '?ROPE67aND}-oU%Rb-}T<z<Xq>qQvA M1fdi3=jv=}]tgg{vr{rhn$%-AzZ<XfKK');
define('SECURE_AUTH_KEY',  'Ssbk,hCufq-#TD-[yb!ffV@WwI$vCo=Px#tb>x0vtO6>R2HQcnu8&g~+r0Nb%umF');
define('LOGGED_IN_KEY',    'x{$%}VA&9$i.}h1}jpe`!nVVkgGT>0UaN,Ca-XhhU<C/?e$CygE$Mb;<_a[z%NW&');
define('NONCE_KEY',        'H6%eQR}yYwFvF{d)h<D6IOVnZsveoVSp5;q0G074jLhEWrqc?cNZjC6`@mVG7l?7');
define('AUTH_SALT',        '&w`rCPOk_@acL~y&+q Hn73j>~$uR|_1|{ID$Y{90iW1d,Qi^c%%H-QG>M->Y!S0');
define('SECURE_AUTH_SALT', 'X:xALG M`E7BXKUQiX+I>sz=q2~:eJk3i0.o+Cr* =@[MD^skx+fMjte++2HCU#@');
define('LOGGED_IN_SALT',   'QkkUsNdgXOl~}ZUnwI$=R~-`c1f[.b^ubMsMf,RKx%^wVifJy/eoXdJ+o`|x2f(H');
define('NONCE_SALT',       ';/*]tz+*QDBB l6hG:i#<mt>Ub`5/j3u&=`q3$lw!P.$UGx3e4-/QfRR`y3=kDwl');

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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
define( 'UPLOADS', 'wp-content/uploads' );
require_once(ABSPATH . 'wp-settings.php');


