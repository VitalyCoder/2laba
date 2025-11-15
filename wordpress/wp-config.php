<?php
// ** Настройки базы данных ** //
define('DB_NAME', 'wordpress');
define('DB_USER', 'wpuser');
define('DB_PASSWORD', 'wppass');
define('DB_HOST', 'db'); // Имя хоста базы данных, используемое в docker-compose.yml
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

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