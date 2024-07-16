<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>工場換気扇・屋上換気扇・ルーフファン｜株式会社 鎌倉製作所</title>
	<meta name="keywords" content="鎌倉製作所,カマクラ,かまくら,kamakura,ルーフファン,クールルーフファン,換気扇,扇風機,送風機,空調,工場,産業用,CADデータ,ダウンロード,排気,エアカーテン,ハッチ,ドーム,排煙,採光" />
	<meta name="description" content="鎌倉製作所は換気扇と換気システムの総合メーカー。産業用換気扇のルーフファン、送風装置、排煙・採光システム機器の開発・製造。工場や作業所に快適な作業空間をつくるための製品、会社情報などをお伝えしています。" />
	<meta name="viewport" content="width=device-width">
<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/google_tagmanager.php');
?>
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/slick.css">
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/layerBoard.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css">
	<?php wp_head(); ?>
</head>
<body>

<?php
$gnav = "home";
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php');
?>
<div class="body__wrap">

	<div class="breadcrumbs">
		<ol>
			<li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
			<li><?php the_title(); ?></li>
		</ol>
	</div>
		
	<div class="content-body">
		<div class="page-header">
			<h1><?php the_title(); ?></h1>
		</div>
		
		<div class="section">
			<div class="section__inner">
				<?php
					if ( have_posts() ) {

						// Load posts loop.
						while ( have_posts() ) {
							
							the_post();
							the_content();
						}

					} else {
						echo 'コンテンツがありません。';
					}
				?>
			</div>
		</div>
	</div>

</div>

	
	

			

<?php
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/footer.php');
?>



<?php wp_footer(); ?>	


</body>
</html>