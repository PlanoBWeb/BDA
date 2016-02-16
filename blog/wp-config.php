<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'site13932108512');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'site13932108512');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'bd9481aa');

/** nome do host do MySQL */
define('DB_HOST', '179.188.16.36');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[y-THsipZ-Xvu}|F,t=:DF^mN];lmOR&WOi~{])pngono&K=~>9d+e$eP]B9&{M)');
define('SECURE_AUTH_KEY',  'WQbxT Oe^6#IUnM}V(Cc6OCF&TskPx-4JYhgTap;<h[!@7lXm/}v[ V.S-8mM.UT');
define('LOGGED_IN_KEY',    'Gl@mD FOjd_PAfg.T-BmwIWPI*T1{(p|%HH`vvR~XWwN_PWbNQM-RXLg63[ <?pW');
define('NONCE_KEY',        '|$w|0W.Ca`YUvY9_uh:uYvK(5,&v[3GldQakFZ4BhZG~YM+d}r+QRx|lr+a9.`=8');
define('AUTH_SALT',        '-}IL^VQE,S/l=*~-Gp|hjpFSafhy=3M+JcP |B<oH$Rs&Z)L,+5D4n^NVa01-j1r');
define('SECURE_AUTH_SALT', '&Q?u0>M6&BlBqDu:u|Io[Rb~T~A%<X4%B6M++tdKb`Kn-qBA[aI@Xm*T|} z}hcm');
define('LOGGED_IN_SALT',   '}%WW+{d%:mGJ+*&|[F-E2w$0!fCf97ZW_l($Hi{{N:5GH<88L`Anzr!T:y|6xP)L');
define('NONCE_SALT',       '@lSF9oJ;sFtJ[>~UhgY1!ti[xYo@J{+@.C/B6-$47TknIu +FtKA +O]X}gIh|5n');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
