<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet"> -->
    <?php
	include( $_SERVER['DOCUMENT_ROOT'] . '/inc/google_tagmanager.php');
	?>
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/slick.css">
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="/assets/stylesheets/layerBoard.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/cms/wp-content/themes/kmkr/legacy_style.css"><!--旧デザイン互換CSS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>

<body id="top">

<?php
$gnav = "home";
include( $_SERVER['DOCUMENT_ROOT'] . '/inc/header.php');
?>
