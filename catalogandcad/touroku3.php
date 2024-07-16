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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		//送信ボタンの無効、チェックボックスを外す
		$(".confirmationBtn").addClass("is-not-submit").attr("disabled","disabed");
		$(".consentBtn input:checkbox").attr('checked',false);
		//チェックボックスがクリックされると送信ボタン有効
		$(".consentBtn label,.consentBtn input").click(function(){
			if($(".consentBtn input:checkbox").is(':checked')){
				$(".confirmationBtn").removeClass("is-not-submit").removeAttr("disabled");
			}else{
				 $(".confirmationBtn").addClass("is-not-submit").attr("disabled","disabed");
			}
		})
	});
</script>

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

<!--230906追加-->
<script>
	function selectEndUser() {
		var sele_val = document.getElementById("business").value;
		//console.log(sele_val);
		if(sele_val === "エンドユーザー") {
			// エンドユーザーが選択された場合、disabled属性を削除
			document.getElementById("business2").removeAttribute("disabled");
		}else {
			// disabled属性を設定、選択している場合は初期値に戻す
			document.getElementById("business2").setAttribute("disabled", true);
			document.getElementById("business2").selectedIndex = 0;
		}
	}
</script>
<!--230906追加-->

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

<script type="text/javascript">
    var _elqQ = _elqQ || [];
    _elqQ.push(['elqSetSiteId', '69840935']);
    _elqQ.push(['elqTrackPageView']);
    
    (function () {
        function async_load() {
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//img04.en25.com/i/elqCfg.min.js';
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        }
        if (window.addEventListener) window.addEventListener('DOMContentLoaded', async_load, false);
        else if (window.attachEvent) window.attachEvent('onload', async_load); 
    })();
</script>
<style type="text/css">
.formWrapper dl dt {
  width: 249px!important;
}
</style>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7SGTG');</script>
<!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7SGTG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
$gnav = "cad";
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php');
?>
<div id="contactWrapper">
<div id="breadcrumbList">
<a href="/">ホーム</a> &gt; カタログ･CADデータダウンロード（無料）</div>
<br/>
<h1 class="cad" style="padding: 10px 0px 10px 10px;">カタログ･CADデータダウンロード（無料）</h1>

<h2 class="mt30 mb30">会員登録</h2>
	<div class="step mt30 hint-message">
		<img src="../assets/images/contact/regist_input.png" alt="●●●" />
	</div>
<br />
<p style="line-height: 1.5;"> 以下の項目を入力し送信していただくと、IDとパスワードが発行されます。</p>
<p style="color:#c00;font-size:0.9em;">2018年8月9日以前に登録していただいた方も、誠に恐れ入りますが<br />システム変更のため再度登録をお願いいたします。</p>
<form id="mailform" name="mailform" method="post" class="autoConfirm" action="kanryou3.php">
	<div class="step mt30 hide autoConfirmBack">
		<img src="../assets/images/contact/step_confirm.png" alt="●●●" />
	</div>
	<div class="formWrapper">
		<dl>
			<dt class="abs">お名前</dt>
			<dd>
				<ul class="name">
					<li>
						<label for="last_name">姓</label>
						<input type="text" id="last_name" name="last_name" placeholder="山田">
						<span id="last_name_error" class="error_m"></span>
					</li>
					<li>
						<label for="first_name">名</label>
						<input type="text" id="first_name" name="first_name" placeholder="太郎">
						<span id="first_name_error" class="error_m"></span>
					</li>
				</ul>
			</dd>
		</dl>
		<dl>
			<dt class="abs">会社・団体名</dt>
			<dd>
				<input type="text" class="wide" id="company" name="company" placeholder="株式会社 鎌倉製作所">
				<span id="company_error" class="error_m"></span>
			</dd>
		</dl>
<!--
    <dl>
			<dt class="abs">部署・役職名</dt>
			<dd>
				<ul>
					<li>
						<div class="deposi--01">
              				<input class="wide" id="dep" name="dep" type="text" placeholder="部署名" />
						</div>
						<span id="dep_error" class="error_m"></span>
					</li>
					<li style="float:unset;">
						<div class="deposi--02">
      						<input type="text" class="wide" id="title" name="title" placeholder="役職名">
						</div>
						<span id="title_error" class="error_m"></span>
					</li>
				</ul>
			</dd>
		</dl>
-->
    <dl>
			<dt class="abs">業種</dt>
			<dd>
				<p class="cap" style="padding-top: 7px; padding-bottom: 10px;">製品を購入して実際にご使用になる企業様は「エンドユーザー」を選択してください。</p>
				<ul>
					<li>
						<div class="industry--01">
							<select id="business" name="business" title="取引関係" class="transaction" onchange="selectEndUser()">
								<option value="">業種をお選びください</option>
								<option value="エンドユーザー">エンドユーザー</option>
								<option value="代理店">代理店</option>
								<option value="販売店">販売店</option>
								<option value="ゼネコン">ゼネコン</option>
								<option value="サブコン">サブコン</option>
								<option value="設計事務所">設計事務所</option>
								<option value="その他">その他</option>
							</select>
						</div>
						<span id="business_error" class="error_m"></span>
					</li>
					<li>
						<div class="industry--02">
							<select id="business2" name="business2" title="業種" class="transaction" disabled>
								<option value="">前項でエンドユーザーを選択された方は選択してください</option>
								<option value="一般機械・電機">一般機械・電機</option>
								<option value="自動車・自動車関連">自動車・自動車関連</option>
								<option value="自動車整備">自動車整備</option>
								<option value="鉄鋼・非鉄・金属">鉄鋼・非鉄・金属</option>
								<option value="電子・精密機械">電子・精密機械</option>
								<option value="化学・石油製品・プラスチック">化学・石油製品・プラスチック</option>
								<option value="タイヤ・ゴム">タイヤ・ゴム</option>
								<option value="窯業・ガラス">窯業・ガラス</option>
								<option value="パルプ・紙・段ボール">パルプ・紙・段ボール</option>
								<option value="繊維・衣服">繊維・衣服</option>
								<option value="食品・飲料">食品・飲料</option>
								<option value="電力・ガス">電力・ガス</option>
								<option value="鉱業">鉱業</option>
								<option value="農林水産業">農林水産業</option>
								<option value="鉄道・運輸・倉庫">鉄道・運輸・倉庫</option>
								<option value="上・下水道">上・下水道</option>
								<option value="クリーニング">クリーニング</option>
								<option value="スーパー・店舗">スーパー・店舗</option>
								<option value="学校・教育・図書館">学校・教育・図書館</option>
								<option value="産業廃棄物関連処理・リサイクル">産業廃棄物関連処理・リサイクル</option>
								<option value="建築建材・住宅関連">建築建材・住宅関連</option>
								<option value="医薬品">医薬品</option>
								<option value="印刷">印刷</option>
								<option value="その他">その他</option>
							</select>
						</div>
						<span id="business2_error" class="error_m"></span>
					</li>
				</ul>
			</dd>
		</dl>

		<dl>
			<dt class="abs">郵便番号</dt>
			<dd>
				<ul class="yubin">
					<li>
						<p class="icon">〒</p>
						<input class="hankaku" type="text" name="zip" id="zip" onKeyUp="AjaxZip3.zip2addr(this,'','state','city');" placeholder="107-0061" maxlength="20">
						<span id="zip_error" class="error_m"></span>
						<p class="cap">※半角英数字で記入してください。<br>郵便番号を入力すると自動で住所が入ります。</p>
					</li>
				</ul>
			</dd>
		</dl>
		<dl>
			<dt class="abs">都道府県</dt>
			<dd>
				<div class="selectBox prefe">
					<select name="state" class="transaction" id="state">
						<option value="都道府県をお選びください">都道府県をお選びください</option>
						<option value="北海道">北海道</option>
						<option value="青森県">青森県</option>
						<option value="岩手県">岩手県</option>
						<option value="宮城県">宮城県</option>
						<option value="秋田県">秋田県</option>
						<option value="山形県">山形県</option>
						<option value="福島県">福島県</option>
						<option value="茨城県">茨城県</option>
						<option value="栃木県">栃木県</option>
						<option value="群馬県">群馬県</option>
						<option value="埼玉県">埼玉県</option>
						<option value="千葉県">千葉県</option>
						<option value="東京都">東京都</option>
						<option value="神奈川県">神奈川県</option>
						<option value="新潟県">新潟県</option>
						<option value="富山県">富山県</option>
						<option value="石川県">石川県</option>
						<option value="福井県">福井県</option>
						<option value="山梨県">山梨県</option>
						<option value="長野県">長野県</option>
						<option value="岐阜県">岐阜県</option>
						<option value="静岡県">静岡県</option>
						<option value="愛知県">愛知県</option>
						<option value="三重県">三重県</option>
						<option value="滋賀県">滋賀県</option>
						<option value="京都府">京都府</option>
						<option value="大阪府">大阪府</option>
						<option value="兵庫県">兵庫県</option>
						<option value="奈良県">奈良県</option>
						<option value="和歌山県">和歌山県</option>
						<option value="鳥取県">鳥取県</option>
						<option value="島根県">島根県</option>
						<option value="岡山県">岡山県</option>
						<option value="広島県">広島県</option>
						<option value="山口県">山口県</option>
						<option value="徳島県">徳島県</option>
						<option value="香川県">香川県</option>
						<option value="愛媛県">愛媛県</option>
						<option value="高知県">高知県</option>
						<option value="福岡県">福岡県</option>
						<option value="佐賀県">佐賀県</option>
						<option value="長崎県">長崎県</option>
						<option value="熊本県">熊本県</option>
						<option value="大分県">大分県</option>
						<option value="宮崎県">宮崎県</option>
						<option value="鹿児島県">鹿児島県</option>
						<option value="沖縄県">沖縄県</option>
					</select>

				</div>
				<span id="state_error" class="error_m"></span>
			</dd>
		</dl>
		<dl>
			<dt class="abs">市町村番地</dt>
			<dd>
				<input type="text" name="city" id="city" class="wide" placeholder="港区北青山2-7-11">
				<span id="city_error" class="error_m"></span>
				<p class="cap">ビル・アパート・マンション名も入力してください。</p>
			</dd>
		</dl>

		<dl>
			<dt class="abs">メールアドレス</dt>
			<dd>
				<input type="text" class="wide hankaku" name="email" id="email" placeholder="kamakura@◯◯.co.jp">
				<span id="email_error" class="error_m"></span>
			</dd>
		</dl>
<!--
		<dl>
			<dt class="abs">パスワード</dt>
			<dd>
				<input type="password" class="wide hankaku" name="password" id="password">
				<span id="password_error" class="error_m"></span>
			</dd>
		</dl>
-->
		<dl>
			<dt class="abs">電話番号</dt>
			<dd>
				<ul class="denwa">
					<li>
						<input type="text" id="phone" name="phone" placeholder="03-3403-4311" class="hankaku wide">
						<span id="phone_error" class="error_m"></span>
						<p class="cap">※半角英数字で入力してください。</p>
					</li>
				</ul>
			</dd>
		</dl>
<!--
    <dl>
			<dt>
				<p>最新情報のご案内</p>
				<label class="hide autoConfirmBack" for="emailOptOut">希望しない</label>
			</dt>
			<dd>
				<div class="custom01">
					<input class="checkBox" id="emailOptOut" name="emailOptOut" type="checkbox" name="riyu" value="1">
					<p class="hint-message">希望しない</p>
				</div>

			</dd>
		</dl>
-->
<div class="prv mt30 hint-message consentBtn">
	<p><input type="checkbox" name="agree_privacy" id="agree" value="" required="required" /><a href="http://www.kamakura-ss.co.jp/privacy/index.html" target="_blank">個人情報の取扱</a>に同意する</p>
</div>
<input type=hidden name="lead_source" id="lead_source" value="HPCAD会員">


<div class="teisei">
	<input name="back" type="button" id="back" value="前に戻って修正する" class="hide autoConfirmBack" />
</div>
		<div class="submitbtn">
			<input type="submit" id="submit" class="contct-submitbtn disabled-btn confirmationBtn" readonly="readonly" value="入力内容を確認する" onclick="return checkText()">
		</div>
	</div>
</form>
<p class="pagetop"><img src="../share_images/up.gif" alt="" width="9" height="8" hspace="2" align="absmiddle" /><a href="#header">このページのトップへ</a></p>
</div>
<!--    -->
<?
//include( $_SERVER['DOCUMENT_ROOT'] . '/inc/side_product.php');
?>
<br class="clr" />
</div>
</div>
<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/contact.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php');
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/ytm.php');
?>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/contact/jquery.ba-hashchange.min.js"></script>
<script src="../assets/js/contact/autoConfirm2.js"></script>
<script src="../assets/js/contact/varidation_kmkr44.js?240221"></script>
<script src="../assets/js/contact/contact.js"></script>
</body>
</html>
