<?php
//require("jcode-LE.php");
//
//エラーメモリ初期化
$error = "";
//
//言語&エンコーディング
//mb_language("Ja") ;
//mb_internal_encoding("EUC-JP") ;

//
//入力内容を変数へ格納
$serch = '\\';
$replace = '\\\'';
//各フィールド取り込み
$NAME = $_REQUEST['NAME'];
//$NAME = HANtoZEN($NAME, 2);
//文字化け対策
$NAME = str_replace('\\"', "", $NAME);
$NAME = str_replace("\\'", "", $NAME);
$NAME = str_replace($serch, $replace, $NAME);
$NAME = str_replace("'\'", "", $NAME);
$NAME = str_replace("'", "", $NAME);

//各フィールド取り込み
$NAME2 = $_REQUEST['NAME2'];
//$NAME2 = HANtoZEN($NAME2, 2);
//文字化け対策
$NAME2 = str_replace('\\"', "", $NAME2);
$NAME2 = str_replace("\\'", "", $NAME2);
$NAME2 = str_replace($serch, $replace, $NAME2);
$NAME2 = str_replace("'\'", "", $NAME2);
$NAME2 = str_replace("'", "", $NAME2);

//各フィールド取り込み
$COMPANY = $_REQUEST['COMPANY'];
//$COMPANY = HANtoZEN($COMPANY, 2);
//文字化け対策
$COMPANY = str_replace('\\"', "", $COMPANY);
$COMPANY = str_replace("\\'", "", $COMPANY);
$COMPANY = str_replace($serch, $replace, $COMPANY);
$COMPANY = str_replace("'\'", "", $COMPANY);
$COMPANY = str_replace("'", "", $COMPANY);

//各フィールド取り込み
$DEP = $_REQUEST['DEP'];
//$DEP = HANtoZEN($DEP, 2);
//文字化け対策
$DEP = str_replace('\\"', "", $DEP);
$DEP = str_replace("\\'", "", $DEP);
$DEP = str_replace($serch, $replace, $DEP);
$DEP = str_replace("'\'", "", $DEP);
$DEP = str_replace("'", "", $DEP);

//各フィールド取り込み
$TITLE = $_REQUEST['TITLE'];
//$POSI = HANtoZEN(POSI, 2);
//文字化け対策
$TITLE = str_replace('\\"', "", $TITLE);
$TITLE = str_replace("\\'", "", $TITLE);
$TITLE = str_replace($serch, $replace, TITLE);
$TITLE = str_replace("'\'", "", $TITLE);
$TITLE = str_replace("'", "", $TITLE);

//各フィールド取り込み
$BUSINESS = $_REQUEST['BUSINESS'];
//$BUSINESS = HANtoZEN($BUSINESS, 2);
//文字化け対策
$BUSINESS = str_replace('\\"', "", $BUSINESS);
$BUSINESS = str_replace("\\'", "", $BUSINESS);
$BUSINESS = str_replace($serch, $replace, $BUSINESS);
$BUSINESS = str_replace("'\'", "", $BUSINESS);
$BUSINESS = str_replace("'", "", $BUSINESS);

//各フィールド取り込み
$BUSINESS2 = $_REQUEST['BUSINESS2'];
//$BUSINESS2 = HANtoZEN($BUSINESS2, 2);
//文字化け対策
$BUSINESS2 = str_replace('\\"', "", $BUSINESS2);
$BUSINESS2 = str_replace("\\'", "", $BUSINESS2);
$BUSINESS2 = str_replace($serch, $replace, $BUSINESS2);
$BUSINESS2 = str_replace("'\'", "", $BUSINESS2);
$BUSINESS2 = str_replace("'", "", $BUSINESS2);


//各フィールド取り込み
$ZIPCODE = $_REQUEST['ZIPCODE'];
//文字化け対策
$ZIPCODE = str_replace('\\"', "", $ZIPCODE);
$ZIPCODE = str_replace("\\'", "", $ZIPCODE);
$ZIPCODE = str_replace($serch, $replace, $ZIPCODE);
$ZIPCODE = str_replace("'\'", "", $ZIPCODE);
$ZIPCODE = str_replace("'", "", $ZIPCODE);

//各フィールド取り込み
//$ZIP = $_REQUEST['ZIP'];
//文字化け対策
//$ZIP = str_replace('\\"', "", $ZIP);
//$ZIP = str_replace("\\'", "", $ZIP);
//$ZIP = str_replace($serch, $replace, $ZIP);
//$ZIP = str_replace("'\'", "", $ZIP);
//$ZIP = str_replace("'", "", $ZIP);

//各フィールド取り込み
$ADDRESS1 = $_REQUEST['ADDRESS1'];
//$ADDRESS1 = HANtoZEN($ADDRESS1, 2);
//文字化け対策
$ADDRESS1 = str_replace('\\"', "", $ADDRESS1);
$ADDRESS1 = str_replace("\\'", "", $ADDRESS1);
$ADDRESS1 = str_replace($serch, $replace, $ADDRESS1);
$ADDRESS1 = str_replace("'\'", "", $ADDRESS1);
$ADDRESS1 = str_replace("'", "", $ADDRESS1);

//各フィールド取り込み
$ADDRESS2 = $_REQUEST['ADDRESS2'];
//$ADDRESS2 = HANtoZEN($ADDRESS2, 2);
//文字化け対策
$ADDRESS2 = str_replace('\\"', "", $ADDRESS2);
$ADDRESS2 = str_replace("\\'", "", $ADDRESS2);
$ADDRESS2 = str_replace($serch, $replace, $ADDRESS2);
$ADDRESS2 = str_replace("'\'", "", $ADDRESS2);
$ADDRESS2 = str_replace("'", "", $ADDRESS2);


//各フィールド取り込み
$EMAIL = $_REQUEST['EMAIL'];
//文字化け対策
$EMAIL = str_replace('\\"', "", $EMAIL);
$EMAIL = str_replace("\\'", "", $EMAIL);
$EMAIL = str_replace($serch, $replace, $EMAIL);
$EMAIL = str_replace("'\'", "", $EMAIL);
$EMAIL = str_replace("'", "", $EMAIL);

//各フィールド取り込み
$EMAIL2 = $_REQUEST['EMAIL2'];
//文字化け対策
$EMAIL2 = str_replace('\\"', "", $EMAIL2);
$EMAIL2 = str_replace("\\'", "", $EMAIL2);
$EMAIL2 = str_replace($serch, $replace, $EMAIL2);
$EMAIL2 = str_replace("'\'", "", $EMAIL2);
$EMAIL2 = str_replace("'", "", $EMAIL2);

//各フィールド取り込み
$TEL = $_REQUEST['TEL'];
//文字化け対策
$TEL = str_replace('\\"', "", $TEL);
$TEL = str_replace("\\'", "", $TEL);
$TEL = str_replace($serch, $replace, $TEL);
$TEL = str_replace("'\'", "", $TEL);
$TEL = str_replace("'", "", $TEL);

//各フィールド取り込み
$FAX = $_REQUEST['FAX'];
//文字化け対策
$FAX = str_replace('\\"', "", $FAX);
$FAX = str_replace("\\'", "", $FAX);
$FAX = str_replace($serch, $replace, $FAX);
$FAX = str_replace("'\'", "", $FAX);
$FAX = str_replace("'", "", $FAX);

//各フィールド取り込み
$ID = $_REQUEST['ID'];
//文字化け対策
$ID = str_replace('\\"', "", $ID);
$ID = str_replace("\\'", "", $ID);
$ID = str_replace($serch, $replace, $ID);
$ID = str_replace("'\'", "", $ID);
$ID = str_replace("'", "", $ID);

//各フィールド取り込み
$PASS = $_REQUEST['PASS'];
//文字化け対策
$PASS = str_replace('\\"', "", $PASS);
$PASS = str_replace("\\'", "", $PASS);
$PASS = str_replace($serch, $replace, $PASS);
$PASS = str_replace("'\'", "", $PASS);
$PASS = str_replace("'", "", $PASS);

//迷惑メール防止対策
//各フィールド取り込み
$DM = $_REQUEST['DM'];
//$DM = HANtoZEN($DM, 2);
//文字化け対策
$DM = str_replace('\\"', "", $DM);
$DM = str_replace("\\'", "", $DM);
$DM = str_replace($serch, $replace, $DM);
$DM = str_replace("'\'", "", $DM);
$DM = str_replace("'", "", $DM);

//入力内容チェック、エラー内容をエラーメモリへ
if (trim($NAME)==""){
	$error.="お名前が未入力です。<br>";
}
//if (trim($NAME2)==""){
//	$error.="フリガナが未入力です。<br>";
//}
//if (trim($COMPANY)==""){
//	$error.="会社・団体名が未入力です。<br>";
//}
//if (trim($BUSINESS)==""){
//	$error.="業種が未選択です。<br>";
//}
if (trim($ZIPCODE)==""){
	$error.="郵便番号が未入力です。<br>";
}
if( !preg_match( "/^[-0-9]+$/", $ZIPCODE ) ) {
	$error.="郵便番号の入力形式が違います。<br>";
}
if (trim($ADDRESS1)==""){
	$error.="都道府県が選択されていません。<br>";
}
if (trim($ADDRESS2)==""){
	$error.="住所が未入力です。<br>";
}
if (trim($EMAIL)==""){
	$error.="メールアドレスが未入力です。<br>";
}
if ($EMAIL>""){
	// if (!ereg('^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+'.
		// if (!preg_match('<^[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+>'.
	// '<@>'.
	// '<[-!#$%&\'*+\\/0-9=?A-Z^_`a-z{|}~]+\.>'.
	// '<[-!#$%&\'*+\\./0-9=?A-Z^_`a-z{|}~]+$>', $EMAIL)) {$error.="ご入力いただいたメールアドレスが正しいかご確認ください。<br>";}
	if (!preg_match('|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|', $EMAIL)) {$error.="ご入力いただいたメールアドレスが正しいかご確認ください。<br>";}
}
if ($EMAIL != $EMAIL2){
	$error.="メールアドレスの確認ができませんでした。<br>";
}
if (trim($TEL)==""){
	$error.="電話番号が未入力です。<br>";
}
if( !preg_match( "/^[-0-9]+$/", $TEL ) ) {
	$error.="電話番号の入力形式が違います。<br>";
}
//if (trim($FAX)==""){
//	$error.="ファックス番号が未入力です。<br>";
//}
//if( !preg_match( "/^[-0-9]+$/", $FAX ) ) {
//	$error.="ファックス番号の入力形式が違います。<br>";
//}
if (trim($ID)==""){
	$error.="希望IDが未入力です。<br>";
}

$o = strlen ( $ID );
for ($i = 0; $i < $o; $i++) {
	$rest = substr($ID, $i, 1);
	// if( !ereg( "^[-!#$%&\'*+\\.0-9=?A-Z^_`a-z{|}~]+", $rest ) ) {
		if( !preg_match( "<^[-!#$%&\'*+\\.0-9=?A-Z^_`a-z{|}~]+>", $rest ) ) {
		$error.="IDは半角英数文字を使用してください。<br>カンマ、スラッシュ、ダブルクォーテーションも使用できません。<br>";
		break;
	}
}

if (trim($PASS)==""){
	$error.="パスワードが未入力です。<br>";
}
$o = strlen ( $PASS );
if ($o < 6) {
	$error.="パスワードは6文字以上使用してください。<br>";
}
for ($i = 0; $i < $o; $i++) {
	$rest = substr($PASS, $i, 1);
	// if( !ereg( "^[-!#$%&\'*+\\.0-9=?A-Z^_`a-z{|}~]+", $rest ) ) {
		if( !preg_match( "<^[-!#$%&\'*+\\.0-9=?A-Z^_`a-z{|}~]+>", $rest ) ) {
		$error.="パスワードは半角英数文字を使用してください。<br>カンマ、スラッシュ、ダブルクォーテーションも使用できません。<br>";
		break;
	}
}


//IDが取得可能かチェック
$handle = fopen ("/home/kamakurass/kamakura-ss.co.jp/secure/cad/member.cgi","r");
if (!$handle){
	fclose($handle);
	echo "<center>現在登録ができません、恐れ入りますがシステム管理者までお知らせください。</center>";
	exit;
}else{
	while ($data = fgetcsv ($handle, 2000, ",")) {
	//IDは12番目
		if ($ID == $data[12]){
			if ($ID == "") {
				$error.="<b><br></b>";
			}else{
				$error.="<b>ご希望のIDはすでに使用されています。<br>下記『戻る』をクリックして別のIDを入力してください。<br></b>";
				break;
			}
		}
	}
	fclose ($handle);
}




//★★★エラーが無い場合でID取得可能の場合は確認画面表示
if ($error==""){
	print "

<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<title>ダウンロード：カタログ･CADデータダウンロード｜株式会社 鎌倉製作所</title>
<link href=\"../css/ver4.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"../css/download.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"../js/pro_win-open.js\"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-587344-1', 'auto', {'allowLinker': true});
  ga('require', 'linker');
  ga('linker:autoLink', ['z106.secure.ne.jp'] );
  ga('send', 'pageview');

</script>

<!-- YTM タグ -->
<script type=\"text/javascript\">
  (function () {
    var tagjs = document.createElement(\"script\");
    var s = document.getElementsByTagName(\"script\")[0];
    tagjs.async = true;
    tagjs.src = \"//s.yjtag.jp/tag.js#site=lViScBx,z5DHbhD\";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src=\"//b.yjtag.jp/iframe?c=lViScBx\" width=\"1\" height=\"1\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
</noscript>
<!-- /YTM タグ　ここまで -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,\'script\',\'dataLayer\',\'GTM-T7SGTG\');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-T7SGTG\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id=\"wrapper\">
<div id=\"header\">
<p>産業用換気装置の総合メーカー</p>
<div id=\"logoArea\">
<div id=\"logo\"><a href=\"/\"><img src=\"../share_images/kamakura-logo.gif\" alt=\"株式会社 鎌倉製作所\" width=\"171\" height=\"32\" border=\"0\" /></a></div>
<div id=\"menu\">
 | <a href=\"/sitemap/index.html\">サイトマップ</a> |</div>
<br class=\"clr\" />
</div>
<div id=\"globalMenu\">
<ul>
<li id=\"pro\"><a href=\"/products/index.html\">製品情報</a></li>
<li id=\"case\"><a href=\"/show_case/index.html\">導入事例</a></li>
<li id=\"tech\"><a href=\"/tech/index.html\">技術情報</a></li>
<li id=\"corp\"><a href=\"/corp/index.html\">企業情報</a></li>
<li id=\"dlNow\"><a href=\"/download/index.html\">ダウンロード</a></li>
<li id=\"contact\"><a href=\"/contact/index.html\">お問い合わせ</a></li>
</ul>
</div>
<div id=\"breadcrumbList\">
<a href=\"/\">ホーム</a> &gt; カタログ･CADデータダウンロード（無料）</div>
</div>
<div id=\"pagebody\">
<!-- メインコンテンツエリア -->
<div id=\"content\">
<h1 class=\"cad\" style=\"padding: 10px 0px 10px 10px;\">カタログ･CADデータダウンロード（無料）</h1>
<h2>会員登録</h2>
<!--   -->
<p>下記の内容をご確認の上送信してください。</p>
<table width=\"500\" border=\"0\" align=\"center\" cellpadding=\"4\" cellspacing=\"1\">
<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">お名前</td>
<td class=\"tSmall\">$NAME</td>
</tr>
<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">フリガナ</td>
<td class=\"tSmall\">$NAME2</td>
</tr>
<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">会社・団体名</td>
<td class=\"tSmall\">$COMPANY</td>
</tr>
<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">部署名</td>
<td class=\"tSmall\">$DEP</td>
</tr>
<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">役職名</td>
<td class=\"tSmall\">$TITLE</td>
</tr>
<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">業種</td>
<td class=\"tSmall\">$BUSINESS</td>
</tr>
<tr valign=\"top\">
	<td nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">業種2</td>
	<td class=\"tSmall\">$BUSINESS2</td>
</tr>
<tr valign=\"top\">
	<td nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">住所</td>
	<td class=\"tSmall\">$ZIPCODE<br />
		$ADDRESS1 $ADDRESS2 </td>
</tr>


<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">E-mail</td>
<td class=\"tSmall\">$EMAIL</td>
</tr>
<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">TEL</td>
<td class=\"tSmall\">$TEL</td>
</tr>
<tr valign=\"top\">
	<td nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">FAX</td>
	<td class=\"tSmall\">$FAX</td>
</tr>

<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">希望ID</td>
<td class=\"tSmall\">$ID</td>
</tr>
<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">希望パスワード</td>
<td class=\"tSmall\">$PASS</td>
</tr>
<tr valign=\"top\">
<td width=\"150\" nowrap=\"nowrap\" bgcolor=\"#E6E6E6\" class=\"tSmall\">鎌倉製作所からの広告メール</td>
<td class=\"tSmall\">$DM</td>
</tr>
</table>
<!--   -->
<form method=\"post\" action=\"https://go.kamakura-ss.co.jp/l/843493/2023-09-11/pxfwjh\">
<input type=\"hidden\" name=\"NAME\" value=\"$NAME\" />
<input type=\"hidden\" name=\"NAME2\" value=\"$NAME2\" />
<input type=\"hidden\" name=\"COMPANY\" value=\"$COMPANY\" />
<input type=\"hidden\" name=\"DEP\" value=\"$DEP\" />
<input type=\"hidden\" name=\"TITLE\" value=\"$TITLE\" />
<input type=\"hidden\" name=\"BUSINESS\" value=\"$BUSINESS\" />
<input type=\"hidden\" name=\"BUSINESS2\" value=\"$BUSINESS2\" />
<input type=\"hidden\" name=\"ZIPCODE\" value=\"$ZIPCODE\" />
<input type=\"hidden\" name=\"ADDRESS1\" value=\"$ADDRESS1\" />
<input type=\"hidden\" name=\"ADDRESS2\" value=\"$ADDRESS2\" />
<input type=\"hidden\" name=\"EMAIL\" value=\"$EMAIL\" />
<input type=\"hidden\" name=\"TEL\" value=\"$TEL\" />
<input type=\"hidden\" name=\"FAX\" value=\"$FAX\" />
<input type=\"hidden\" name=\"ID\" value=\"$ID\" />
<input type=\"hidden\" name=\"PASS\" value=\"$PASS\" />
<input type=\"hidden\" name=\"DM\" value=\"$DM\" />
<br />
<table width=\"500\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
<tr>
<td>
<input type=\"image\" src=\"../share_images/submit_btn.png\" alt=\"送信\" name=\"submit\" />
&nbsp;&nbsp;&nbsp;<img src=\"../share_images/back_btn.png\" onclick=\"history.back();\" alt=\"戻る\" /></td>
</tr>
</table>
</form>
<!--   -->

<p class=\"pagetop\"><img src=\"../share_images/up.gif\" alt=\"\" width=\"9\" height=\"8\" hspace=\"2\" align=\"absmiddle\" /><a href=\"#header\">このページのトップへ</a></p>
</div>
<!--    -->
<!-- サブメニューエリア -->
<div id=\"subMenu\">
	<div id=\"contTitle\"><h3><a href=\"http://kamakura-ss.co.jp/products/index.html\" class=\"link\">製品情報</a></h3>
	</div>
	<div class=\"cate\"><h4>気化放熱式涼風装置</h4>
	<p><a href=\"/products/cool_roof_fan/index.html\">クールルーフファン</a></p>
	<p><a href=\"/products/cool_clean_fan/index.html\">クールクリーンファン</a></p>
	<p><a href=\"/products/cool_unit/index.html\">クールユニット</a></p>
	<p><a href=\"/products/cool_gym/index.html\">クールGYM</a></p>
	</div>
	<div class=\"cate\"><h4>産業用換気装置</h4>
	<p><a href=\"/products/roof_fan/index.html\">ルーフファン</a></p>
	<p><a href=\"/products/clean_fan/index.html\">クリーンファン</a></p>
	<p><a href=\"/products/unit_fan/index.html\">ユニットファン</a></p>
	</div>
	<div class=\"cate\"><h4>産業用送風装置</h4>
	<!--<p><a href=\"/products/mist_gym/index.html\">ミストGYM</a></p>-->
	<p><a href=\"/products/gym_fan/index.html\">GYMファン</a></p>
	<p><a href=\"/products/portable_fan/index.html\">ポータブルファン</a></p>
	<p><a href=\"/products/air_curtain/index.html\">エアカーテン</a></p>
	<p><a href=\"/products/unit_heater/index.html\">ユニットヒータ</a></p>
	</div>
	<div class=\"cate\"><h4>採光・排煙システム機器</h4>
	<p><a href=\"/products/hatch_series/index.html\">ハッチシリーズ</a></p>
	<p><a href=\"/products/dome_series/index.html\">ドームシリーズ</a></p>
	</div>
	</div>
<!--      -->
<div class=\"clr\"></div>
</div>
<div id=\"footer\">
<div id=\"footerLogo\"><img src=\"../share_images/kamakura-logo_j.gif\" alt=\"カマクラ\" width=\"122\" height=\"29\" /></div>
<div id=\"footerMenu\">
<p>| <a href=\"/products/products/index.html\">製品情報</a> | <a href=\"/products/show_case/index.html\">導入事例</a> | <a href=\"/products/tech/index.html\">技術情報</a> | <a href=\"/products/corp/index.html\">企業情報</a> | <a href=\"/products/download/index.html\">ダウンロード</a> | <a href=\"/products/contact/index.html\">お問い合わせ</a> | <a href=\"/site_info/index.html\">サイト利用規約</a> | <a href=\"/products/privacy/index.html\">個人情報保護方針</a> |</p>
</div>
<div id=\"copyright\">All Rights Reserved, Copyright &copy; 株式会社 鎌倉製作所</div>
<div id=\"google\">Search powered by <img src=\"../share_images/google-logo.gif\" alt=\"google\" width=\"46\" height=\"16\" align=\"absmiddle\" /></div>
<div class=\"clr\"></div>
</div>
</div>
	<!-- YTM タグ -->
	<script type=\"text/javascript\">
	  (function () {
	    var tagjs = document.createElement(\"script\");
	    var s = document.getElementsByTagName(\"script\")[0];
	    tagjs.async = true;
	    tagjs.src = \"//s.yjtag.jp/tag.js#site=lViScBx,z5DHbhD\";
	    s.parentNode.insertBefore(tagjs, s);
	  }());
	</script>
	<noscript>
	  <iframe src=\"//b.yjtag.jp/iframe?c=lViScBx\" width=\"1\" height=\"1\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
	</noscript>
	<!-- /YTM タグ　ここまで -->
</body>
</html>
";
}

//■■■エラーの場合はエラーメモリ内容表示
if ($error!==""){
	print "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />

<title>ダウンロード：カタログ･CADデータダウンロード｜株式会社 鎌倉製作所</title>



<link href=\"../css/ver4.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"../css/download.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"../js/pro_win-open.js\"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-587344-1', 'auto', {'allowLinker': true});
  ga('require', 'linker');
  ga('linker:autoLink', ['z106.secure.ne.jp'] );
  ga('send', 'pageview');

</script>

<!-- YTM タグ -->
<script type=\"text/javascript\">
  (function () {
    var tagjs = document.createElement(\"script\");
    var s = document.getElementsByTagName(\"script\")[0];
    tagjs.async = true;
    tagjs.src = \"//s.yjtag.jp/tag.js#site=lViScBx,z5DHbhD\";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src=\"//b.yjtag.jp/iframe?c=lViScBx\" width=\"1\" height=\"1\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
</noscript>
<!-- /YTM タグ　ここまで -->
</head>
<body>
<div id=\"wrapper\">
<div id=\"header\">
<p>産業用換気機器の総合メーカー</p>
<div id=\"logoArea\">
<div id=\"logo\"><a href=\"/\"><img src=\"../share_images/kamakura-logo.gif\" alt=\"株式会社 鎌倉製作所\" width=\"171\" height=\"32\" border=\"0\" /></a></div>
<div id=\"menu\">
 | <a href=\"/saitemap/index.html\">サイトマップ</a> | <a href=\"/e/\">English</a> | <a href=\"/c/\">Chinese</a> |</div>
<br class=\"clr\" />
</div>
<div id=\"globalMenu\">
<ul>
<li id=\"pro\"><a href=\"/products/index.html\">製品情報</a></li>
<li id=\"case\"><a href=\"/show_case/index.html\">導入事例</a></li>
<li id=\"tech\"><a href=\"/tech/index.html\">技術情報</a></li>
<li id=\"corp\"><a href=\"/corp.index.html\">企業情報</a></li>
<li id=\"dl\"><a href=\"/download/index.html\">ダウンロード</a></li>
<li id=\"contact\"><a href=\"/contact/index.html\">お問い合わせ</a></li>
</ul>
</div>
<div id=\"breadcrumbList\">
<a href=\"/\">ホーム</a> &gt; <a href=\"/download/index.html\">ダウンロード</a> &gt; カタログ･CADデータダウンロード</div>
</div>
<div id=\"pagebody\">
<!-- メインコンテンツエリア -->
<div id=\"content\">
<h1>カタログ･CADデータダウンロード（無料）</h1>
<h2>会員登録</h2>
<br />
<p>入力内容確認画面　※エラーがあります</p>
<p class=\"error\">$error</p>
<br />
<br />
<p class=\"error\"><a href=\"touroku3.php?NAME=$NAME&amp;NAME2=$NAME2&amp;COMPANY=$COMPANY&amp;DEP=$DEP&amp;TITLE=$TITLE&amp;BUSINESS=$BUSINESS&amp;ZIP=$ZIP&amp;ADDRESS=$ADDRESS&amp;EMAIL=$EMAIL&amp;EMAIL2=$EMAIL2&amp;TEL=$TEL&amp;FAX=$FAX&amp;ID=$ID&amp;PASS=$PASS\">戻る</a></p>
<p class=\"pagetop\"><img src=\"../share_images/up.gif\" alt=\"\" width=\"9\" height=\"8\" hspace=\"2\" align=\"absmiddle\" /><a href=\"#header\">このページのトップへ</a></p>
</div>
<!--    -->
<!-- サブメニューエリア -->
<div id=\"subMenu\">
	<div id=\"newproBTN\"><a href=\"/products/new_products.html\" class=\"link\"><strong>新製品情報</strong></a></div>
	<div id=\"contTitle\"><h3><a href=\"http://kamakura-ss.co.jp/products/index.html\" class=\"link\">製品情報</a></h3>
	</div>
	<div class=\"cate\"><h4>気化放熱式涼風装置</h4>
	<p><a href=\"/products/cool_roof_fan/index.html\">クールルーフファン</a></p>
	<p><a href=\"/products/cool_clean_fan/index.html\">クールクリーンファン</a></p>
	<p><a href=\"/products/cool_unit/index.html\">クールユニット</a></p>
	<p><a href=\"/products/cool_gym/index.html\">クールGYM</a></p>
	</div>
	<div class=\"cate\"><h4>産業用換気装置</h4>
	<p><a href=\"/products/roof_fan/index.html\">ルーフファン</a></p>
	<p><a href=\"/products/clean_fan/index.html\">クリーンファン</a></p>
	<p><a href=\"/products/unit_fan/index.html\">ユニットファン</a></p>
	<p><a href=\"http://kamakura-ss.co.jp/products/charging_air_system_fan/index.html\">給気システムファン</a></p>
	</div>
	<div class=\"cate\"><h4>産業用送風装置</h4>
	<p><a href=\"/products/mist_gym/index.html\">ミストGYM</a></p>
	<p><a href=\"/products/gym_fan/index.html\">GYMファン</a></p>
	<p><a href=\"/products/portable_fan/index.html\">ポータブルファン</a></p>
	<p><a href=\"/products/air_curtain/index.html\">エアカーテン</a></p>
	<p><a href=\"/products/unit_heater/index.html\">ユニットヒータ</a></p>
	</div>
	<div class=\"cate\"><h4>採光・排煙システム機器</h4>
	<p><a href=\"/products/hatch_series/index.html\">ハッチシリーズ</a></p>
	<p><a href=\"/products/dome_series/index.html\">ドームシリーズ</a></p>
	</div>
	</div>
<!--      -->
<div class=\"clr\"></div>
</div>
<div id=\"footer\">
<div id=\"footerLogo\"><img src=\"../share_images/kamakura-logo_j.gif\" alt=\"カマクラ\" width=\"122\" height=\"29\" /></div>
<div id=\"footerMenu\">
<p>| <a href=\"/products/products/index.html\">製品情報</a> | <a href=\"/products/show_case/index.html\">導入事例</a> | <a href=\"/products/tech/index.html\">技術情報</a> | <a href=\"/products/corp/index.html\">企業情報</a> | <a href=\"/products/download/index.html\">ダウンロード</a> | <a href=\"/products/contact/index.html\">お問い合わせ</a> | <a href=\"/site_info/index.html\">サイトのご利用について</a> | <a href=\"/products/privacy/index.html\">個人情報保護方針</a> |</p>
</div>
<div id=\"copyright\">All Rights Reserved, Copyright &copy; 株式会社 鎌倉製作所</div>
<div id=\"google\">Search powered by <img src=\"../share_images/google-logo.gif\" alt=\"google\" width=\"46\" height=\"16\" align=\"absmiddle\" /></div>
<div class=\"clr\"></div>
</div>
</div>

	<!-- YTM タグ -->
	<script type=\"text/javascript\">
	  (function () {
	    var tagjs = document.createElement(\"script\");
	    var s = document.getElementsByTagName(\"script\")[0];
	    tagjs.async = true;
	    tagjs.src = \"//s.yjtag.jp/tag.js#site=lViScBx,z5DHbhD\";
	    s.parentNode.insertBefore(tagjs, s);
	  }());
	</script>
	<noscript>
	  <iframe src=\"//b.yjtag.jp/iframe?c=lViScBx\" width=\"1\" height=\"1\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe>
	</noscript>
	<!-- /YTM タグ　ここまで -->

</body>
</html>

" ;
}
?>
