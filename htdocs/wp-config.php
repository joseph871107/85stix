<?php
/** 
 * WordPress 基本設定檔。
 *
 * 本檔案包含以下設定選項： MySQL 設定、資料表前綴、
 * 私密金鑰、WordPress 語言設定以及 ABSPATH。如需更多資訊，請
 * 前往 {@link http://codex.wordpress.org/Editing_wp-config.php 編輯
 * wp-config.php} Codex 頁面。或者向您的空間提供商諮詢關於 MySQL 設定資訊。
 *
 * 這個檔案用於安裝程式自動生成 wp-config.php 設定檔。
 * 您不需要將它用於您的網站，可以手動複製這個檔案，
 * 並重新命名為 "wp-config.php"，然後輸入相關訊息。
 *
 * @package WordPress
 */

// ** MySQL 設定 - 您可以從主機服務提供商獲取相關資訊。 ** //
/** WordPress 的資料庫名稱，請更改 "database_name_here" */
define( 'DB_NAME', 'wordpress' );

/** MySQL 資料庫使用者名稱，請更改 "username_here" */
define( 'DB_USER', 'admin' );

/** MySQL 資料庫密碼，請更改 "password_here" */
define( 'DB_PASSWORD', '85stix123' );

/** MySQL 主機位址 */
define( 'DB_HOST', 'localhost' );

/** 建立資料表時預設的文字編碼 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 資料庫對照型態。如果不確定請勿更改。 */
define('DB_COLLATE', 'utf8_unicode_ci');

/**#@+
 * 認證唯一金鑰設定。
 *
 * 將這些更改為不同的唯一字串或符號。
 * 您可以使用 {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 私密金鑰服務} 來自動產生。
 * 您可於任何時候修改這些字串讓 Cookies 失效。這將會強制所有使用者必須重新登入。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']LdXKLUCkx-QWJ#_[(m>8;S^5(~,0o@7z/;g~GB!5#u%8gT;4N[80[BP&swi`B{e' );
define( 'SECURE_AUTH_KEY',  '!&ngKXqfmLdQPZ1][}Z;8(M(CTb^_u}U%]8Z!,it/,d-:)XrK$ 7k|hiIt+/],%%' );
define( 'LOGGED_IN_KEY',    ')l0.GTzwRjc$IF]#Eh@bZP=AnU{0F&oRx44aZ#{|!huOcoirE?]txGXcFTM7huO;' );
define( 'NONCE_KEY',        '`$ {}7?X~9KXJ12KU {B)jkZ8+lqh1(/@0JtNXZB,vC>W,ly`NPdhAhMMB4wegaV' );
define( 'AUTH_SALT',        '%a!L_n0TS%$1fq%.yh66g!rJ(}>#_Gb;Hoo9_9zkfP~bp!c@0?B`g~Sl5Iq;~Dy^' );
define( 'SECURE_AUTH_SALT', ']F.Z8IPN$HW2p1:t?5RBWMyZFMftM;<PbWL&W%p<fBOU5 3UF;Q$ZuF2OB@{hu{1' );
define( 'LOGGED_IN_SALT',   'ls9Kj&Fb7`2p>m|&_R05+_}x7;z;ksl2?Lq5nw7-ukS6CjJ8w?n*JymseeYx?HW%' );
define( 'NONCE_SALT',       '&s$.:OrKef?L1Y(jXv0^<Y?+#R Y*sNI-g}~OmBBUd2b4zvxZw-o>,u&;2Rkg3r:' );

/**#@-*/

/**
 * WordPress 資料表前綴。
 *
 * 若您為每個 WordPress 設定不同的資料表前綴，則可在同個資料庫內安裝多個 WordPress。
 * 前綴只能使用半型數字、字母和底線！
 */
$table_prefix  = 'wp_';

/**
 * WordPress 自動儲存間隔
 *
 * 當您編輯文章時 WordPress 使用 Ajax 技術自動地定時幫您儲存文章草稿。
 * 您可更改數值以延長或減少自動儲存的時間間隔。
 * 預設儲存間隔為 60 秒。
 */
//define('AUTOSAVE_INTERVAL', 60 );  // 單位：秒

/**
 * WordPress 文章版本設定
 *
 * WordPress 預設會幫您儲存舊版的文章與分頁，以便您之後可以回復到先前的版本。
 * 這功能可關閉，或是指定最大版本數量。
 * 預設為開啟，若要關閉請將它設為 false。
 * 若您想指定指定最大版本數量，請設個整數。
 */
//define('WP_POST_REVISIONS', true );

/**
 * 快取
 *
 * 若 WP_CACHE 值為 true，當它執行 wp-settings.php 時會把 wp-content/advanced-cache.php 一起執行。
 * 許多快取外掛會要求您將這個值設為 true。
 */
//define('WP_CACHE', false);

/**
 * 啟用多網誌站台與網誌網路功能
 *
 * 若 WP_ALLOW_MULTISITE 值為 true 可啟用多網誌站台功能。
 */
//define('WP_ALLOW_MULTISITE', false);

/**
 * 開發人員用： WordPress 偵錯模式。
 *
 * 將此設定為 true 將可開啟開發時的通知顯示。
 * 強烈建議外掛與佈景主題開發人員使用 WP_DEBUG
 * 於他們的開發環境中。
 */
define('WP_DEBUG', false);

/* 設定完成，請儲存檔案。然後開始 Blogging 吧！ */

/** WordPress 目錄的絕對路徑。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 設定 WordPress 變數和包含的檔案。 */
require_once(ABSPATH . 'wp-settings.php');