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
define( 'DB_NAME', 'Test_LB' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'Test-LB-admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'c&q.KXL7~rrRWLG~oa=3iu@|ABH!tO3OHb&+;An}$`xfy3((2^[$4IJx,x,zo]gI' );
define( 'SECURE_AUTH_KEY',  'O_ZQ<&1bz_}[V[fH!-L786~/as!>)9}UgW)LXL_( ;Dc(jWL>y|q/Vi]bVC[$mU&' );
define( 'LOGGED_IN_KEY',    'XOYRbAv7s=vfa;j(`Yv^HzMw5DlK,dW-?dX%$7P, B<SQwld=nDAKSH~ap>Su4z?' );
define( 'NONCE_KEY',        'wqauws,&UQw`4[%ADo:iSKEdymz,#-SZ%{T&c!SZT`veGxx3OhLkz-vjQvl8b{KX' );
define( 'AUTH_SALT',        'y%YL%i/N<!7wC3VQ4yphi#xSSr842Yh<?M[Ou#*wa1`i0Q@:MQPL8bp[Dfy0yd<}' );
define( 'SECURE_AUTH_SALT', 'G k:]fD-[1LnU%m%D}~ 2meI utmnb0_7;~)+*anp1v9Qb2T9O}a,X&r%4hLJV@t' );
define( 'LOGGED_IN_SALT',   '$ BwC9{5Ax7dhuAw2duqQ+L07*SQrT=n^hr6}KHfl&&A,6>HtYW{?umXN7sHP,mg' );
define( 'NONCE_SALT',       '@z7ezfW`<%?vU3:ZmSaIgabgf!qgZf&.yY[JB>H4xC+jY<9@HVD6Ri[K<lWY^7l=' );

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


@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
