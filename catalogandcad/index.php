<?php

//言語&エンコーディング
//mb_language("Ja") ;
//mb_internal_encoding("EUC-JP") ;

// $error = $_REQUEST['error'];

$error = "";
if( isset($_REQUEST['error']) ) {
    $error = $_REQUEST['error'];
}

// $error = isset($_REQUEST['error'])?($_REQUEST['error']):(””);
// $error = isset($_REQUEST['error'])?($_REQUEST['error']):(array());

//クッキー名
$cookieA = "kamakuraA";
//ID
$cookieB = "kamakuraB";
//PASS

//クッキーの有無を判断
/*
if (isset($HTTP_COOKIE_VARS[$cookieA]) & isset($HTTP_COOKIE_VARS[$cookieB])) {
	$href = "/cad/file_list2.php";
	header("Location: $href");
	//echo $HTTP_COOKIE_VARS["kamakuraA"];
	exit;
} else {
*/
	//ログインページ表示 ココから------------------------------------------------------------------------------------------------
	print <<< EOM
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ダウンロード：カタログ･CADデータダウンロード（無料）｜株式会社 鎌倉製作所</title>

<link rel="stylesheet" type="text/css" href="../assets/stylesheets/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/stylesheets/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../assets/stylesheets/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css">
<link href="../css/ver4.css" rel="stylesheet" type="text/css" />
<link href="../css/products.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/pro_win-open.js"></script>



</head>
<body>
EOM;

$gnav = "cad";
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php');

	print <<< EOM
<div id="wrapper">
	<div id="breadcrumbList"><a href="/">ホーム</a> &gt; カタログ･CADデータダウンロード（無料）</div>
	<div id="pagebody">
	<!-- メインコンテンツエリア -->
		<div id="content">
			<h1>カタログ･CADデータダウンロード（無料）</h1>
			<p>カタログデータ及びCADデータをダウンロードしていただけます。<br>カタログデータはPDF形式、CADデータはDXF形式です。<br>データをダウンロードいただくには、会員登録が必要です。<br />
			未登録の方はお手数ですが、<a href="touroku2.php">会員登録</a>をクリックして必要事項を入力し、会員登録を行ってください。</p>
			<p style="color:#c00;font-size:0.9em;">2018年7月以前に登録していただいた方も、誠に恐れ入りますが<br />システム変更のため再度登録をお願いいたします。</p>
			<p style="color:#c00;font-size:0.9em;">2022年3月より会員登録が必要となりました。</p>

			<p>※<a href="/privacy/index.html">個人情報の取扱いについて</a> </p>
			<form name="form1" method="post" action="file_list2.php">
				<div class="mid">
					<h4>■ ご登録がお済の方</h4>
				</div>
				<div class="formWrapper">
					<span class="error_m">$error</span>
					<dl>
						<dt class="abs">Eメールアドレス</dt>
						<dd>
							<input type="text" id="id" name="ID">
						</dd>
					</dl>
					<!--
					<dl>
						<dt class="">パスワード</dt>
						<dd>
							<input type="password" id="pass" name="PASS">
						</dd>
					</dl>
					-->
					<div class="submitbtn">
						<input type="submit" id="submit" class="contct-submitbtn disabled-btn confirmationBtn" value="ログイン">
					</div>
					<!--
					<dl>
						<dt class=""><a href="saihakkou2.php">ID・パスワードを忘れた方はこちら</a></dt>
					</dl>
					-->
				</div>
			</form>
			<div class="mid">
          		<h4>■ 未登録の方</h4>
        	</div>
			<div class="formWrapper">
				<div class="formArea"><a href="touroku3.php">会員登録</a></div>
			</div>


			<p class="el-documents-title">お役立ち資料ダウンロード</p>
			<p>各製品についてのチラシをダウンロードしてご利用いただけます。</p>
			<div class="formWrapper">
				<a href="/cms/documents" class="el-documents-link">お役立ち資料ダウンロードページへ＞</a>
			</div>
			<style>
			.el-documents-title {
				font-size: 130% !important;
				font-weight: bold;
				background: url(../share_images/h1_bg.gif) repeat-x;
				margin: 0 0 10px 0 !important;
				padding: 2px 10px;
				border: 1px solid #ccc;
			}
			.el-documents-link {
				font-size: 16px;
				font-weight: bold;
			}
			</style>
		</div>

EOM;
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/side_product.php');
	print <<< EOM
<br class="clr" />
</div>
</div>
EOM;
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/contact.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/ytm.php');
	print <<< EOM
	</body>
	</html>
EOM;
//ログインページ表示 ココまで------------------------------------------------------------------------------------------------
//}
?>
