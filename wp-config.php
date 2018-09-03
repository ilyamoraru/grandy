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
define('DB_NAME', 'grandy');

/** Имя пользователя MySQL */
define('DB_USER', 'grandy');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'okhlGw2d0yt76HL2');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F2YVOzVp.:H&N|HF%3wV [[G1nzQ3Pbs]5{ka+<b>[6gPo2o:/%%`E@QM*4H APG');
define('SECURE_AUTH_KEY',  'DTY*w/Z!WN7Y,Pt$(Tkr3(v9J_ b_O@E>r`j-SU|m><-I({wq@m/c)tT@[xYi%NM');
define('LOGGED_IN_KEY',    ';]m8)i|#K]97)V#ea}2x(orB#`vZH|);i`z5i9!iA~uOIcxj5h=;se&B@cE[Z-C8');
define('NONCE_KEY',        ',<>J^qc@!Za&v)zV+.@>#<$eY$_ZseChM*fsg`M5AKY9^;YhA|N]k[Ct`9fXi}61');
define('AUTH_SALT',        'sN`C}{7ZeNVWA<?ddOe:&U>fCJ4b$WWe6E`KcC#;TzFb1_2m-Hm9KdBmMaFf?xk3');
define('SECURE_AUTH_SALT', '%3AtMJUzm>!ngm:`4fqs8M;X,b@Qa#`r7yLj(JJId<`%]`I3iVf jy(>;LZ;#`s1');
define('LOGGED_IN_SALT',   'GY]=RxL}PzjXyq{[0%TY&,mt5{*ch9L8]17|2L5,E#Poa$Z(fP^=`mmpku`W#XS;');
define('NONCE_SALT',       '1kHd}@O3kJ|J.tM>B)/TqbO!wL;5eANg!I%l tl<r!A$Bf=_WguEX}xO#)jyqM,[');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
