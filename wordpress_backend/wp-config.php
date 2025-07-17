<?php
/**
 * As configurações básicas do WordPress.
 *
 * Este arquivo é usado durante a instalação para criar o arquivo wp-config.php.
 * Você não precisa usar o site, apenas copiar este arquivo para
 * "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do Banco de Dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o seu serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'nome_do_banco_de_dados' );

/** Nome de usuário do banco de dados MySQL */
define( 'DB_USER', 'usuario_do_banco_de_dados' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'senha_do_banco_de_dados' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Codificação de caracteres do banco de dados a ser usada na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

/** O tipo de colagem do banco de dados. Não altere isso a menos que saiba o que está fazendo. */
define( 'DB_COLLATE', '' );

/**#@+*
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada uma para uma frase aleatória diferente!
 * Você pode gerá-las usando o serviço de chaves secretas do WordPress.org:
 * @link https://api.wordpress.org/secret-key/1.1/salt/
 */
define( 'AUTH_KEY',         'coloque sua frase única aqui' );
define( 'SECURE_AUTH_KEY',  'coloque sua frase única aqui' );
define( 'LOGGED_IN_KEY',    'coloque sua frase única aqui' );
define( 'NONCE_KEY',        'coloque sua frase única aqui' );
define( 'AUTH_SALT',        'coloque sua frase única aqui' );
define( 'SECURE_AUTH_SALT', 'coloque sua frase única aqui' );
define( 'LOGGED_IN_SALT',   'coloque sua frase única aqui' );
define( 'NONCE_SALT',       'coloque sua frase única aqui' );

/**#@-*/

/**
 * Prefixo das tabelas do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um prefixo único. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: modo de depuração do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * É altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define( 'WP_DEBUG', false );

/* Isso é tudo, pare de editar! Feliz blogar. */

/** Caminho absoluto para o diretório do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos incluídos do WordPress. */
require_once ABSPATH . 'wp-settings.php';


