<?php
//phpinfo();
//require("./jcode-LE.php");
//
//言語&エンコーディング
//mb_language("Ja") ;
//mb_internal_encoding("EUC-JP") ;
//
//入力内容を変数へ格納
$serch = '\\';
$replace = '\\\'';

//各フィールド取り込み
$LAST_NAME = $_REQUEST['last_name'];
//$NAME = HANtoZEN($NAME, 2);
//文字化け対策
$LAST_NAME = str_replace('\\"', "", $LAST_NAME);
$LAST_NAME = str_replace("\\'", "", $LAST_NAME);
$LAST_NAME = str_replace($serch, $replace, $LAST_NAME);
$LAST_NAME = str_replace("'\'", "", $LAST_NAME);
$LAST_NAME = str_replace("'", "", $LAST_NAME);

//各フィールド取り込み
$FIRST_NAME = $_REQUEST['first_name'];
//$NAME = HANtoZEN($NAME, 2);
//文字化け対策
$FIRST_NAME = str_replace('\\"', "", $FIRST_NAME);
$FIRST_NAME = str_replace("\\'", "", $FIRST_NAME);
$FIRST_NAME = str_replace($serch, $replace, $FIRST_NAME);
$FIRST_NAME = str_replace("'\'", "", $FIRST_NAME);
$FIRST_NAME = str_replace("'", "", $FIRST_NAME);

//各フィールド取り込み
$COMPANY = $_REQUEST['company'];
//$COMPANY = HANtoZEN($COMPANY, 2);
//文字化け対策
$COMPANY = str_replace('\\"', "", $COMPANY);
$COMPANY = str_replace("\\'", "", $COMPANY);
$COMPANY = str_replace($serch, $replace, $COMPANY);
$COMPANY = str_replace("'\'", "", $COMPANY);
$COMPANY = str_replace("'", "", $COMPANY);

//各フィールド取り込み
$DEP = $_REQUEST['dep'];
//DEP = HANtoZEN(DEP, 2);
//文字化け対策
$DEP = str_replace('\\"', "", $DEP);
$DEP = str_replace("\\'", "", $DEP);
$DEP = str_replace($serch, $replace, $DEP);
$DEP = str_replace("'\'", "", $DEP);
$DEP = str_replace("'", "", $DEP);

//各フィールド取り込み
$TITLE = $_REQUEST['title'];
//TITLE = HANtoZEN(TITLE, 2);
//文字化け対策
$TITLE = str_replace('\\"', "", $TITLE);
$TITLE = str_replace("\\'", "", $TITLE);
$TITLE = str_replace($serch, $replace, $TITLE);
$TITLE = str_replace("'\'", "", $TITLE);
$TITLE = str_replace("'", "", $TITLE);

//各フィールド取り込み
$BUSINESS = $_REQUEST['business'];
//$BUSINESS = HANtoZEN($BUSINESS, 2);
//文字化け対策
$BUSINESS = str_replace('\\"', "", $BUSINESS);
$BUSINESS = str_replace("\\'", "", $BUSINESS);
$BUSINESS = str_replace($serch, $replace, $BUSINESS);
$BUSINESS = str_replace("'\'", "", $BUSINESS);
$BUSINESS = str_replace("'", "", $BUSINESS);

//各フィールド取り込み
$BUSINESS2 = $_REQUEST['business2'];
//$BUSINESS2 = HANtoZEN($BUSINESS2, 2);
//文字化け対策
$BUSINESS2 = str_replace('\\"', "", $BUSINESS2);
$BUSINESS2 = str_replace("\\'", "", $BUSINESS2);
$BUSINESS2 = str_replace($serch, $replace, $BUSINESS2);
$BUSINESS2 = str_replace("'\'", "", $BUSINESS2);
$BUSINESS2 = str_replace("'", "", $BUSINESS2);


//各フィールド取り込み
$ZIPCODE = $_REQUEST['zip'];
//文字化け対策
$ZIPCODE = str_replace('\\"', "", $ZIPCODE);
$ZIPCODE = str_replace("\\'", "", $ZIPCODE);
$ZIPCODE = str_replace($serch, $replace, $ZIPCODE);
$ZIPCODE = str_replace("'\'", "", $ZIPCODE);
$ZIPCODE = str_replace("'", "", $ZIPCODE);

//各フィールド取り込み
$ADDRESS1 = $_REQUEST['state'];
//$ADDRESS1 = HANtoZEN($ADDRESS1, 2);
//文字化け対策
$ADDRESS1 = str_replace('\\"', "", $ADDRESS1);
$ADDRESS1 = str_replace("\\'", "", $ADDRESS1);
$ADDRESS1 = str_replace($serch, $replace, $ADDRESS1);
$ADDRESS1 = str_replace("'\'", "", $ADDRESS1);
$ADDRESS1 = str_replace("'", "", $ADDRESS1);

//各フィールド取り込み
$ADDRESS2 = $_REQUEST['city'];
//$ADDRESS2 = HANtoZEN($ADDRESS2, 2);
//文字化け対策
$ADDRESS2 = str_replace('\\"', "", $ADDRESS2);
$ADDRESS2 = str_replace("\\'", "", $ADDRESS2);
$ADDRESS2 = str_replace($serch, $replace, $ADDRESS2);
$ADDRESS2 = str_replace("'\'", "", $ADDRESS2);
$ADDRESS2 = str_replace("'", "", $ADDRESS2);


//各フィールド取り込み
$EMAIL = $_REQUEST['email'];
//文字化け対策
$EMAIL = str_replace('\\"', "", $EMAIL);
$EMAIL = str_replace("\\'", "", $EMAIL);
$EMAIL = str_replace($serch, $replace, $EMAIL);
$EMAIL = str_replace("'\'", "", $EMAIL);
$EMAIL = str_replace("'", "", $EMAIL);

//各フィールド取り込み
$TEL = $_REQUEST['phone'];
//文字化け対策
$TEL = str_replace('\\"', "", $TEL);
$TEL = str_replace("\\'", "", $TEL);
$TEL = str_replace($serch, $replace, $TEL);
$TEL = str_replace("'\'", "", $TEL);
$TEL = str_replace("'", "", $TEL);

//各フィールド取り込み
$PASS = $_REQUEST['password'];
//文字化け対策
$PASS = str_replace('\\"', "", $PASS);
$PASS = str_replace("\\'", "", $PASS);
$PASS = str_replace($serch, $replace, $PASS);
$PASS = str_replace("'\'", "", $PASS);
$PASS = str_replace("'", "", $PASS);

//迷惑メール防止対策
//各フィールド取り込み
$DM = $_REQUEST['emailOptOut'];
if($DM){
  $DMstr = "希望しない";
}else{
  $DMstr = "希望する";
}

//MySQL接続
$link = mysqli_connect('mysql301.sixcore.ne.jp', 'kamakurass_dmcj', 'Ch2xy5C9u2yg', 'kamakurass_cad');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
//    echo "データベースの接続に成功しました。\n";
}

$escaped_email = mysqli_real_escape_string($link, $EMAIL);

$sql = "INSERT INTO `kamakurass_cad`.`users` (`id`, `email`) VALUES (NULL, '$escaped_email');";
//echo $sql;

if (mysqli_query($link, $sql)) {
//    printf("%d 行をINSERTしました。\n", mysqli_affected_rows($link));
}

// 接続を閉じます
mysqli_close($link);

//exit();

//CSVファイル書込み
//読み取りモードで開く
/*
$fp=@fopen("../secure/cad/member2.cgi","a");
$date=date("Y-m-d");
if (!$fp){
	fclose($fp);
	echo "<center>処理が正常に終わらなかった可能性があります。<br>ブラウザの『戻る』ボタンで戻って再度登録お願いいたします。</center>";
	exit;
}else{
	flock($fp,LOCK_EX);
	fputs($fp,$EMAIL . "," . $PASS . "\n");
	flock($fp,LOCK_UN);
	fclose($fp);
}

//クッキー有効期限設定
$expire = time() + 90*24*3600;

//クッキー名(任意)
$cookieA = "kamakuraA";
//ID
$cookieB = "kamakuraB";
//PASS

//クッキー発行
setcookie($cookieA, $EMAIL, $expire);
setcookie($cookieB, $PASS, $expire);
*/


//メール送信
//mb_language("Ja") ;
//mb_internal_encoding("EUC-JP") ;
$mailto1="cad@kamakura-ss.co.jp";
//$mailto1="ptstaff@dmcj.co.jp";
$mailto2=$EMAIL;
$subject="鎌倉製作所：カタログ CADデータダウンロード会員登録受付け";
$subject1=$subject;
$subject2=$subject;
//$subject1=mb_convert_encoding( $subject, "EUC-JP", "SJIS" );
//$subject2=mb_convert_encoding( $subject, "EUC-JP", "SJIS" );
$content1="CAD会員登録がありました。";
//$content2=$COMPANY . "\n" . $LAST_NAME . $FIRST_NAME . " 様" . "\n" . "\n" . "この度は鎌倉製作所：カタログ･CADデータダウンロード会員へのご登録ありがとうございました。" . "\n" . "今後ともよろしくお願いいたします。" . "\n" . "\n" . "このメールはプログラムによる自動返信メールです。" . "\n" . "※このメールへの返信はできませんのでご了承ください。" . "\n" . "\n" . "鎌倉製作所" . "\n" . "＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿" . "\n" . "◆お名前：" . $LAST_NAME . $FIRST_NAME . "\n" . "◆会社・団体名：" . $COMPANY . "\n" . "◆部署・役職名：" . $DEP .　"・"　. $POSI . "\n" . "◆業種：" . $BUSINESS  . " " . $BUSINESS2 . "\n" .  "◆住所：" . $ZIPCODE . "\n" . $ADDRESS1 . $ADDRESS2 . "\n" . "◆E-mail：" . $EMAIL . "\n" . "◆TEL：" . $TEL . "\n" . "◆鎌倉製作所からのメルマガ：" . $DMstr . $FROM;

$content2 = <<< EOM
{$COMPANY}
{$LAST_NAME} {$FIRST_NAME} 様

この度は鎌倉製作所：カタログ CADデータダウンロード会員へのご登録ありがとうございました。

弊社のCAD図面をよくご利用いただくお客様は、
下記URLを「お気に入り」等にご登録いただきますと、
次回以降、再ログインせずにそのままCADダウンロード画面にアクセス可能です。
https://kamakura-ss.co.jp/cad/file_list3.php
https://kamakura-ss.co.jp/catalogandcad/catalog/index.html

今後ともよろしくお願いいたします。

このメールはプログラムによる自動返信メールです。
※このメールへの返信はできませんのでご了承ください。

鎌倉製作所
＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿
◆お名前：{$LAST_NAME}{$FIRST_NAME}
◆会社・団体名：{$COMPANY}
◆部署・役職名：{$DEP} {$TITLE}
◆業種：{$BUSINESS} {$BUSINESS2}
◆E-mail：{$EMAIL}
◆TEL：{$TEL}
◆鎌倉製作所からのメルマガ：{$DMstr}{$FROM}
EOM;
//echo "cont=" . $content;
//$body1 = mb_convert_encoding( $content1, "EUC-JP", "SJIS" );
//$body2 = mb_convert_encoding( $content2, "EUC-JP", "SJIS" );
$body1 = $content1;
$body2 = $content2;
//echo "body=" . $body;
//$mailfrom1="From: " . $EMAIL;
$mailfrom1="From: " . "cad@kamakura-ss.co.jp";
$mailfrom2="From: " . "cad@kamakura-ss.co.jp";
//$mailfrom2="From: " . "h.nakamura@ca-inc.co.jp";
//カマクラ製作所ご担当へのメール
mb_send_mail($mailto1,$subject1,$body1,$mailfrom1);
//お客様への控えメール
mb_send_mail($mailto2,$subject2,$body2,$mailfrom2);

//SalesForce Web-to-リード呼び出し
$url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
 
// Salesforceの組織ID
$oid = '00D28000000eiON';
 
// 登録内容を変数に設定
$lastname=$items['lastname'];
$firstname=$items['firstname'];
$email =$items['email'];
$description=$items['description'];
$title=$items['title'];
$title=$items['type'];
$customfield1 =$items['customfield1'];
$customfield2 =$items['customfield2'];
 
$fields = array(
 
// Salesforceへのパラメーター
'00N28000007t4bQ' => urlencode($BUSINESS2),
'00N2800000C2grc' => urlencode($BUSINESS),
'00N28000007GxTw' => urlencode($DEP),
'title' => urlencode($TITLE),
'city'=> urlencode($ADDRESS2),
'company'=> urlencode($COMPANY),
'debug' => '1',
'email'=>urlencode($EMAIL),
'emailOptOut'=>urlencode($DM),
'first_name'=>urlencode($FIRST_NAME),
'last_name'=>urlencode($LAST_NAME),
'lead_source'=> urlencode("HPCAD会員"),
'oid' => $oid,
'phone'=>urlencode($TEL),
'retURL' => 'http://',
'state'=> urlencode($ADDRESS1),
'submit'=>urlencode('送信'),
'zip'=> urlencode($ZIPCODE),
//'debugEmail' => urlencode("xxx@xxxx"),
);
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string,'&');
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST,count($fields));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//print $url ."\n";
//print $fields_string;
$result = curl_exec($ch);
curl_close($ch);
//print $result;
//exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>カタログ･CADデータダウンロード（無料）｜株式会社 鎌倉製作所</title>

<link rel="stylesheet" type="text/css" href="../assets/stylesheets/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/stylesheets/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../assets/stylesheets/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css">
<link href="../css/ver4.css" rel="stylesheet" type="text/css" />
<link href="../css/products.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/pro_win-open.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
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
<script type="text/javascript">
  (function () {
    var tagjs = document.createElement("script");
    var s = document.getElementsByTagName("script")[0];
    tagjs.async = true;
    tagjs.src = "//s.yjtag.jp/tag.js#site=lViScBx,z5DHbhD";
    s.parentNode.insertBefore(tagjs, s);
  }());
</script>
<noscript>
  <iframe src="//b.yjtag.jp/iframe?c=lViScBx" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
<!-- /YTM タグ　ここまで -->
</head>
<body id="cadDL">
<?
$gnav = "cad";
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php');
?>
<div id="contactWrapper">
<div id="breadcrumbList">
<a href="/">ホーム</a> &gt; カタログ･CADデータダウンロード（無料）</div>
<div class="mt20 mb20" style="line-height: 1.5;">
<h1 style="padding: 7px 0px 5px 10px;">カタログ･CADデータダウンロード（無料）</h1>

<h2 class="mb30" style="text-align: center; font-weight: 400; font-size: 34px; color: #0076C3;">登録完了</h2>
<div class="textcenter">
<p>送信を完了しました。 <br />
ありがとうございました。</p>
<p><a href="/cad/file_list3.php">「カタログデータダウンロード」</a>よりカタログPDFをダウンロードしていただけます。 </p>
<p><a href="/catalogandcad/catalog/index.html">「CADデータダウンロード」</a>よりCAD図面をダウンロードしていただけます。 </p>
</div>
<!--
<p class="pagetop"><img src="../share_images/up.gif" alt="" width="9" height="8" hspace="2" align="absmiddle" /><a href="#header">このページのトップへ</a></p>
-->
</div>
<br class="clr" />
</div>
</div>
</div>
<?
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/contact.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/ytm.php');
?>
</body>
</html>
