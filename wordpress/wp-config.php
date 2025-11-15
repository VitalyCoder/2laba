<?php
// ** Настройки базы данных ** //
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: getenv('MYSQL_DATABASE') ?: 'wordpress' );
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: getenv('MYSQL_USER') ?: 'wpuser' );
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: getenv('MYSQL_PASSWORD') ?: 'wppass' );
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'db:3306' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ** Уникальные ключи и соли ** //
define('AUTH_KEY',         'заменить');
define('SECURE_AUTH_KEY',  'заменить');
define('LOGGED_IN_KEY',    'заменить');
define('NONCE_KEY',        'заменить');
define('AUTH_SALT',        'заменить');
define('SECURE_AUTH_SALT', 'заменить');
define('LOGGED_IN_SALT',   'заменить');
define('NONCE_SALT',       'заменить');

// ** Префикс таблицы ** //
$table_prefix = 'wp_';

// ** Определение режима отладки ** //
define('WP_DEBUG', filter_var(getenv('WP_DEBUG'), FILTER_VALIDATE_BOOLEAN) ?: false);

// ** Абсолютный путь к директории WordPress ** //
if ( !defined('ABSPATH') ) {
    define('ABSPATH', __DIR__ . '/');
}

// ** Настройки WordPress ** //
require_once ABSPATH . 'wp-settings.php';
?>
