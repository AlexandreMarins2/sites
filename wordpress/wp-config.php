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
define('DB_NAME', 'prosperdesign');

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
define('AUTH_KEY',         'exLka4/g6m{7#q+[286W_m@)?&(}yg1/%ynqLZbnNL-%i7^R&; |Z)1vHk@&u,VO');
define('SECURE_AUTH_KEY',  'i),sn<[yF>Dvy]&?N*Dq>7o&bq`S,I=]q&*3)Pm#tHtD?Jwq|jts{N>kOIsgSR-l');
define('LOGGED_IN_KEY',    'Nuq$[no+rhm-T;2dFI3F[}n1a}40usqVY-xxh@h4-dwi[Iooydgp3_4ngF!k,gqk');
define('NONCE_KEY',        'Jy)Eq,#A`q.<jJ@}I6LbX](GV}5AFmW[=l|(!GqAo AuQy =MOu.Rf$}0RbG8i j');
define('AUTH_SALT',        '-j1^Bdmb{KJ<h+L5*Jn~tggi~.ru%Z+tD1C=whx%6IGqyH}gjki{i>b3Y `6cM[~');
define('SECURE_AUTH_SALT', '=NonaEpX{~ ),dJkZ6V;i!o8uCze$ivCy#jT,CC1jk(UYlOb!u7fM[ (jzFduA5{');
define('LOGGED_IN_SALT',   '8}c~Hbs3rRY(o~4^MT-@35H)E:I}#1Q)tn#MR{_|n&{BHY3<}eH^5+^f4sz7t@(0');
define('NONCE_SALT',       '([$S>a:Z1b2(95yq^NH^e<.,^&*Dwa:KY 3BTxTIP(7eZHFPUPe+yHzV 2gY3eVr');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'pd_';

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
require_once(ABSPATH . 'wp-settings.php');
