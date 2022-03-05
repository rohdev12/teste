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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' L]H7:%-:a3]YI<S^>7Z2H6JBQ|$r6Fh~IcxkbJdl ow#h;h5B;_TcSt.CFTWbV&' );
define( 'SECURE_AUTH_KEY',  'eiL0ep$RmgoQL>c;<ln*0U8+TD?nbRlwh7y89O8#b`HO7Fg%M4bMQf1g c.lvW%1' );
define( 'LOGGED_IN_KEY',    'D`wR7{_Vb8g.{V|1eRwhO`@E^eE_opx::~v<;MY|y--5k@X(1:h=$ D4A84dn|CD' );
define( 'NONCE_KEY',        'm9-M/k?FN%qgEvV8_:Mt;44&l69$_0Fs!`rX5OPOzqi`?f}Zk0#nGI[GP(Oh{*Z_' );
define( 'AUTH_SALT',        'O(e20W7.+;NlZR.my7}m,gpry_(W;kA l3(H:ecaABkz6$U@F{[|X+Y->#+6-qtt' );
define( 'SECURE_AUTH_SALT', 'We1@;<|L[O7ROW4,Z/;|iKm7({W]6r{87k]_47ES]Pxc>F+&znDDTFnY#z$j+Z#R' );
define( 'LOGGED_IN_SALT',   '6e1fg 18~J6{hz0i2Qd=daglmANa<4YMNTqA9!<M7P5;=TW*rPEtZ(AL$sIvCBXP' );
define( 'NONCE_SALT',       ':/dy2vtvWxX@=a>YqeqwLLLXq[xqz02q.U;O6/cE3is`%Kr{l2>tU53OG1VNmQ6O' );

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
