<?php
// ** Настройки базы данных ** //
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?: 'wordpress' );
define( 'DB_USER', getenv('MYSQL_USER') ?: 'wpuser' );
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?: 'wp_password' );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'db:3306' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Уникальные ключи и соли ** //
define('AUTH_KEY',         'поставьте сюда уникальную фразу');
define('SECURE_AUTH_KEY',  'поставьте сюда уникальную фразу');
define('LOGGED_IN_KEY',    'поставьте сюда уникальную фразу');
define('NONCE_KEY',        'поставьте сюда уникальную фразу');
define('AUTH_SALT',        'поставьте сюда уникальную фразу');
define('SECURE_AUTH_SALT', 'поставьте сюда уникальную фразу');
define('LOGGED_IN_SALT',   'поставьте сюда уникальную фразу');
define('NONCE_SALT',       'поставьте сюда уникальную фразу');

// ** Префикс таблицы ** //
$table_prefix = 'wp_';

// ** Определение режима отладки ** //
define('WP_DEBUG', false);

// ** Абсолютный путь к директории WordPress ** //
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

// ** Настройки WordPress ** //
require_once(ABSPATH . 'wp-settings.php');
?>
