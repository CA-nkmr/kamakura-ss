<?php
	// title タグ設定
	add_theme_support('title-tag');
	function wp_document_title_separator($separator){
		$separator = '|';
		return $separator;
	}
	add_filter('document_title_separator','wp_document_title_separator');

	// style 読み込み
	function my_styles() {
	  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/style.css', array(), '1.0.3' );
	}
	add_action( 'wp_enqueue_scripts', 'my_styles' );

	// 不要コード削除
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles', 10 );
	remove_action('wp-head', 'feed_links_extra', 3);
	remove_action('wp_head','wp_generator');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'rsd_link');
	function remove_dns_prefetch( $hints, $relation_type ) {
	    if ( 'dns-prefetch' === $relation_type ) {
	        return array_diff( wp_dependencies_unique_hosts(), $hints );
	    }
	    return $hints;
	}
	add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

	add_theme_support('post-thumbnails');

	/**
	 * バージョンアップ通知を管理者のみ表示させるようにします。
	 */
	function update_nag_admin_only() {
		if ( ! current_user_can( 'administrator' ) ) {
			remove_action( 'admin_notices', 'update_nag', 3 );
		}
	}
	add_action( 'admin_init', 'update_nag_admin_only' );

	// function Include_my_php($params=array()){
	// 	extract(shortcode_atts(array(
	// 		'file'=>'default'
	// 	),$params));
	// 	ob_start();
	// 	include(STYLESHEETPATH."/$file.php");
	// 	return ob_get_clearn();
	// }
	// add_shortcode('originalphp','Include_my_php');
	// function flushRules(){
	// 	global $wp_rewrite;
	// 	$wp_rewrite -> flush_rules();
	// }
	// function change_posts_per_page($query) {
	// 	if ( is_admin() || ! $query->is_main_query() )
	// 		return;
	// 	if ( $query->is_date('bell') ) { //カスタム投稿タイプを指定
	// 		$query->set( 'posts_per_page', '1' ); //表示件数を指定
	// 	}
	// }
	// add_action( 'pre_get_posts', 'change_posts_per_page' );

	// ショートコード登録



?>