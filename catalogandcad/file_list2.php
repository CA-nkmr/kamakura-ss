<?php



//言語&エンコーディング

//mb_language("Ja") ;

//mb_internal_encoding("EUC-JP") ;



//IDとPASSのデータチェック

$ID = $_REQUEST['ID'];

$error = "";

if ($ID == ""){
		$error = "Eメールアドレスを入力してください";
		$href = "/cad/index2.php?error=$error";
		header("Location: $href");
		exit;
}

//MySQL接続
$link = mysqli_connect('mysql301.sixcore.ne.jp', 'kamakurass_dmcj', 'Ch2xy5C9u2yg', 'kamakurass_cad');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
//    echo "データベースの接続に成功しました。\n";
}

$escaped_email = mysqli_real_escape_string($link, $ID);

$sql = "SELECT count(*) FROM `users` WHERE email='$escaped_email';";
//echo $sql ."\n";

if (!$result = mysqli_query($link, $sql)) {
    die("データベースに接続できません: $sql\n");
}

$row = mysqli_fetch_array($result);
//print $row[0] ."\n";
//var_dump($row) ."\n";
$count = intval($row[0]);
//var_dump($count) ."\n";
//exit;

if($count == 0){
		$error = "認証に失敗しました。正しいEメールアドレスを入力してください";
		$href = "/catalogandcad/index2.php?error=$error";
		header("Location: $href");
		exit;
}

mysqli_free_result($result);

// 接続を閉じます
mysqli_close($link);
//exit();

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
<h1 class="mb30">カタログ･CADデータダウンロード（無料）</h1>

<h2 class="mb30">ご登録が確認できました。</h2>
<div class="textcenter mb30">
<p class="mb20">日頃よりご利用いただき、ありがとうございます。<br />
過去にご登録いただいたメールアドレスと照合ができました。</p>

<p class="mb20"><a href="/catalogandcad/catalog/index.html">「カタログデータダウンロード」</a>よりカタログPDFをダウンロードしていただけます。 </p>
<p class="mb20"><a href="/cad/file_list3.php">「CADデータダウンロード」</a>よりCAD図面をダウンロードしていただけます。 </p>

弊社のカタログPDF・CAD図面をよくご利用いただくお客様は、<br />
上記リンク先ページを「お気に入り」等にご登録いただきますと、<br />
次回以降、再確認が必要なくそのままCADダウンロード画面にアクセス可能です。</p>
</div>

<!--
<p class="pagetop"><img src="../share_images/up.gif" alt="" width="9" height="8" hspace="2" align="absmiddle" /><a href="#header">このページのトップへ</a></p>
-->
</div>
<br class="clr" />
</div>
</div>
<?
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/contact.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/ytm.php');
?>
</body>
</html>
