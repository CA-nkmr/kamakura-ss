<?php

//言語&エンコーディング
//mb_language("Ja") ;
//mb_internal_encoding("EUC-JP") ;

//e-mailアドレス取得
$id_email = $_REQUEST['id_email'];

$ID_CHK = 0;
$handle = fopen ("../secure/cad/member2.cgi","r");
if (!$handle){
	fclose($handle);
	echo "<center>現在ご利用ができません、恐れ入りますがシステム管理者までお知らせください。</center>";
	exit;
}else{
	while ($data = fgetcsv ($handle, 2000, ",")) {
	//emailは1番目
		if ($id_email == $data[0]){
			$ID_CHK = 1;
			$PASS = $data[1];
		}
	}
	fclose ($handle);
}
if ($ID_CHK == 0){
	$error = "※ご入力いただいたメールアドレスは存在しませんでした。";
}
if ($ID_CHK == 1){
//メール送信
//mb_language("Ja") ;
//mb_internal_encoding("EUC-JP") ;
$mailto1=$id_email;
$subject="鎌倉製作所：CADデータダウンロード【パスワードお知らせ】";
$subject1= $subject;
$content1="お問合せいただいたパスワードをお送りしますので大切に保管お願いいたします。" . "\n" . "\n". "パスワード：" . $PASS . "\n" . "\n" . "鎌倉製作所" . "\n";
$body1 =$content1;
$mailfrom1="From: " . "cad@kamakura-ss.co.jp";
// $mailfrom1="From: " . "h.nakamura@ca-inc.co.jp";
//お客様へのメール
mb_send_mail($mailto1,$subject1,$body1,$mailfrom1);
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ダウンロード：CADデータダウンロード｜株式会社 鎌倉製作所</title>

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
<body>
<?
$gnav = "cad";
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php');
?>
<div id="contactWrapper">
<div id="breadcrumbList">
<a href="/">ホーム</a> &gt; <a href="http://kamakura-ss.co.jp/download/index.html">ダウンロード</a> &gt; CADデータダウンロード</div>
<br />
<h1>CADデータダウンロード（無料）</h1>

<h2 class="mt30 mb30">パスワードの再発行</h2>
<p style="line-height: 1.5;">ご入力いただいたメールアドレスへメールにてパスワードをお送りいたしました。
	<br />
	メールを受信してご確認ください。</p>
<br />
<br />
<span class="error" style="color: red;"><?php echo $error; ?></span>
<br />
<br />

<p class="pagetop"><img src="../share_images/up.gif" alt="" width="9" height="8" hspace="2" align="absmiddle" /><a href="#header">このページのトップへ</a></p>
</div>
<!--    -->
<?
//include( $_SERVER['DOCUMENT_ROOT'] . '/inc/side_product.php');
?>
<br class="clr" />
</div>
</div>
<?
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/contact.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/ytm.php');
?>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</body>
</html>
