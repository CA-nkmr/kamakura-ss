<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'kamakurass_corporate' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'kamakurass_ca' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '1192kamakura' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql301.sixcore.ne.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';+JhxF]G-a89Qemi@=;k lv&ifpd-wzf`8-0Q#WsNg<t:sfTJ&hnJ{37?ijp9U:v' );
define( 'SECURE_AUTH_KEY',  'QQM5~IU[;9g:cU3~G7r3jvgNEK.Fic&/h0~O)Mz$WqC1n2ve}=+o33dy]-B|0@yg' );
define( 'LOGGED_IN_KEY',    'SSK}</vNvd t4E51D&p&]iFzzKVzl}2z5=ZHt?kc&sMx7=[WT^qT>gs6.Ssz$fn;' );
define( 'NONCE_KEY',        '*ZU@:] E@D~iQS8;^)q=!_E?(K.(^_}HvZLONQ^!cRea|hC!1E#hQTPMd$-,pK%7' );
define( 'AUTH_SALT',        '8VI/s>0D M;|wht2l>pA3RB!d-+1=C&bpLpUtE!_`<3-);]RhJh1C*i[BDuV|=p{' );
define( 'SECURE_AUTH_SALT', 'r,7dre|u79~[)`R% OARbsv`7<WTvDH.H2&<E`|}cu- 6=]_bNh:{-t9>]Q}IMJK' );
define( 'LOGGED_IN_SALT',   'R?>3;As<%Hv2]Z.A%+0Z<O 2Q]m;(l@x2pG[$FP=<8a;qb`#T>RZb~} [hiacbf]' );
define( 'NONCE_SALT',       '9gkLZ_]b6H&u/CVk zZ4ent$CHZ]Fl|+$uPm>DVy{{epLqM^mX7d~1v1X(3Vu9u3' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'kmkr_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
