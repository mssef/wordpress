<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'wordpress');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+k^qx$lJd;mrF|YZti Q&g7scz%_qJxN+{tw@2iRwgO_|MkHjN< 1/-H@4yc0f^>');
define('SECURE_AUTH_KEY',  'BAj%>c`59B!P?;Z?Mj$baTELt#M)WcXVm_-:_ >pC[A~.Hv`Uo=A_bwgq#hK.,?e');
define('LOGGED_IN_KEY',    ']|i,l80>;HHwp -*AL#wMYo{r-lJ8i8E^imEMnWmv?w75Z7O~l<%U* 58BG&r+Mr');
define('NONCE_KEY',        'Gj1s$:4?-yNQmp(W#HBVGEuP0i@=atSNQ+_2:r10L)N/x rqp8J]X4F@-hxxSQBe');
define('AUTH_SALT',        'UGlq9ji6?OR$)W+*n|+v|$YVi{_/rPR%Gw1PND$dPIq8-J>`FzpY#/}.$%_*jz8e');
define('SECURE_AUTH_SALT', 'JVNJoTV<c-C)4--+#2@[y~c3oT=|:l,IknETE$!)2rz?47~ZGo.TcsI@zRn[~W!#');
define('LOGGED_IN_SALT',   'i)EnKGl -qCR;#1%MN< 9H3j7dvo|_)%6;K.&k=BlB-5|_@gOO?r[[oL|-|BbFO@');
define('NONCE_SALT',       '+Akjm~HCp7kt7$!etqF&LN u+gxI0h?U6%:=EzK8#S}V3_X52nU`uPWNO| l .vp');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
