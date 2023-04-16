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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'fadamar' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'senha' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'tx.]f&rfmz-||-^d;a9!oJ*9uvv+l37VmaQ4%a5~+OFjF<J]]5[35~48F*)+7XiK' );
define( 'SECURE_AUTH_KEY',  '!}wh+ZCv~L7i(59,7w?dn4xlfFTAx1]Yn:z5WU@ ~wbxjD-PfE85]cAy@nWl{YL8' );
define( 'LOGGED_IN_KEY',    '$Bo=yw7cfRzk.JJ-SKU+v>hrpo#A jF8,y[%b/`n@ ga[r(olve@3/6<uG8Q`=k|' );
define( 'NONCE_KEY',        'KO=bDA:Yb@9xX5k9]1S*#KY>`Ws~XM}j`|n|d<&15hD~n,8W%[UnrF9(*ZCkw(Kj' );
define( 'AUTH_SALT',        'Pik|&m;DMCVSWIKF^JNs&;DCExyO;?h6[J+qpe`caf:_2ke~oaCbDJ Ex1v~D$I,' );
define( 'SECURE_AUTH_SALT', 'E6Dk?(:8,V5Q{zKCc%[&> lakKT i^A|;_N=G[TSDNTD8D;Y=9.%LHGkA2-*~fUX' );
define( 'LOGGED_IN_SALT',   '+2 L[7H+`zPnP{FR?AoPC.=nqbw7_-3zqZPWKl%:kl}YyGt=,V)gTo[SUzk3=w48' );
define( 'NONCE_SALT',       'P>Zo|V*(<D89|[@nX` x)^H~erLAxy|jo02IbXRV@Wz}tNIU NkN)`~=1:*:uTjS' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
