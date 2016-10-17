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
define('DB_NAME', 'mebel');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'ba0de51');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9=)dEgpKtDm~%UdTgSQPP{@KTay7U@54lR$@c2JZ=CnHc>4v]=0=22`wS2M 4<U1');
define('SECURE_AUTH_KEY',  '<Wbre:%mn3>#[@?ahbL!)tZRM3_KcmH+jEB;MKM6DHIBMQ;!!GY:_ZE/)5U.B:R{');
define('LOGGED_IN_KEY',    '^s,cq{m|*[K8I>sV/:Yxkb)lVxE8q/{KCgM?+/lfwXt!I^:`v#*U$B B.ypAdV?*');
define('NONCE_KEY',        'K4,SwL(w8ml]F7[*0){Kmx=!vj;QEi`@^^J]rR~6UDZ:sAiv4Sf.3(~UQVSe{{13');
define('AUTH_SALT',        ')SEfiX(K5}?@Aovz><1*4BPXTT`m5!FO+U[PfR1^u2FbiF]*2/9$]s1myFS(YELM');
define('SECURE_AUTH_SALT', '^a`*{gMF2FxY_gRxV+$Z|NS8&!^G1fP_3rE ]!b+OnyfXtNQn=Is pW r7nNj2sH');
define('LOGGED_IN_SALT',   '6ezr/h4Y=97VU32-cq{*785P@dQww?y(Rc a|^swMkF-QrxK`P4`#!B]$[a~(Zzn');
define('NONCE_SALT',       'w4YrZ n|)3Ly-)jB87K$bU<NJ7+aP/$+j4jUj>FvJC[?_v3v%i<(T:3R:AKr,YY!');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
