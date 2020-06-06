<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'demoprod_curtainsdealer' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'demoprod_dev-wp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'r8m6eO83gMD' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9#wdIcs~w98q[j6a)mD9FW]1Y>[T EO:=LFV=ThmEeAyw7+R f$-&US}S?M^=]7L' );
define( 'SECURE_AUTH_KEY',  'UoH=ra}!`KsV;Bwo_gqJuUpd%bQJ1K~eEvS5c|IQU~Z-q,z)fi6(N>kTpI;h7mo/' );
define( 'LOGGED_IN_KEY',    '/zEt:37^vSX@U@Af^O|=Fsk+Z(_<;aUvLhYw5_PPoP2Dk1A7_$u+q?lt&f&HMTI2' );
define( 'NONCE_KEY',        'Hkz${eM3&p*I~l)V{{L/4@h82r9PzI|/@%@4RClE ._q.m=V{L[V/E^ZW=6S[_vw' );
define( 'AUTH_SALT',        'XixzIs:6iq@C@]MMQU;5gskZKf4%pg%T3M@?2W~xJrc|^Yl:K9pLrRLr%=!63>o!' );
define( 'SECURE_AUTH_SALT', 'Ezs6f]zp92cE#4pNZ0bw,/dQ*D$x9$_Y3OmVNc]L&bU!:H1Z#|>Lez? EB[ioZ4o' );
define( 'LOGGED_IN_SALT',   'sQK|dpKL2|YrVW=qH`j`dkK78#yd5s(;Lo=&?/LB[AGIqih/ jGaaHaFyMLa{7.{' );
define( 'NONCE_SALT',       '&;K4;xNMnZ?-[Tds-ON5sKH*U6jb>/fJ8]q:V3r|=0/?(%|tfLS4y YHvx#A,hY&' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
