<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'diplom1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8R^|$a`AhU:S,dq#PG|>/+u4`00jlC8H}S1# -9_|fTAi-@Z^z-a:C.d_63d4{.|' );
define( 'SECURE_AUTH_KEY',  '._Lv*~l#Od S]eC^V[K4wj6Rr(W:2iJ:6M_u vFHjv,K_/ty$fb<A%6}wnYnP{;#' );
define( 'LOGGED_IN_KEY',    '9L:U9zwGj&S?z&.|TL wAQFWNj1da1QH_P+hwb[zvh+v9/3owZ%mXm)wZTJAu][K' );
define( 'NONCE_KEY',        'j>_3KI;}}/9kX,&CF#?+NC66hO/U~VdD06Oyxeh?lzNyvyX]W{+QFp`|Yt:WTSpd' );
define( 'AUTH_SALT',        'u(Lo*LX.(e[FF*~9?7DywODnt@6bqePaxL+UVDc}#S}==f=0N;O_d 1/2@roF+a#' );
define( 'SECURE_AUTH_SALT', '>oy=[iAJaL.1SfDB&`=0OE:=6.56a5f>5 7t:UkQ:@-#Hv<}Ec^tu<`$8v7orjyj' );
define( 'LOGGED_IN_SALT',   'EF#j0FZ%?NKy%.1`;m{+X0Dw+{FTff20C,Vb`=!0R[dtM*|}UhdOJUn ^LnZ@o)X' );
define( 'NONCE_SALT',       'uCW.]EQBT/;8T/pam]1 vMo__|*LJ:t{uaSN/~S*Y+L<,9Eg0/^43pD[7t2+G0Vk' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
