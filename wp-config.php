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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'psychologyst' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/x$mmS_^m%NF7@8EUkccLv3F_tgp=Pg&&gmvB&hk5NvPC9BM:Yyo6L*R!?(9;e=[' );
define( 'SECURE_AUTH_KEY',  'T}$u}n3;67-;Y,USQ?2a]5v/`%dZ*Z{FFKmC0$nXOCz`wqAk77-dvfI$v`mrWCK4' );
define( 'LOGGED_IN_KEY',    'ESk:9t}^Uq!#d]r~Q9]@3%|QA9&z~@?m)3BL$e<>P0V8=P%w-PKoLN]+[p0<A>i)' );
define( 'NONCE_KEY',        '4rnbO9wo8%=X|Ha:Dhg7oAu2q9hc,?k:3[x&OtB+WmdG8$gV~U|+=S[`m+R}v@ <' );
define( 'AUTH_SALT',        '3Y4e0,9aP]7$+/Ept=4SnYl` Sf`47xJ@VkiQx%#=nv$Z{R@!/~K#>*[*d`xgpm)' );
define( 'SECURE_AUTH_SALT', 'ybVk{qi`!6S@!XBj(E1!!45Y@}VxqpBG`fjM9h=!lTa|eonP^735hcP/7)KU~tx}' );
define( 'LOGGED_IN_SALT',   '=~*ccT^QP]SZZqgQ3-1uX@7~{a&ueOe}*vLmm{>Dr+W[M~QiG8J[bVw?HKg?t<A0' );
define( 'NONCE_SALT',       'mw8Z3e|ONC>By].`0-ThpY$PV{e#Bkqrr*!rQ#@YU5/R*QMNO&&Nppl,A?/)UXCM' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'psycho_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
