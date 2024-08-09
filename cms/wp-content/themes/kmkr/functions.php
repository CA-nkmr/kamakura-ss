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


	// 記事の自動整形を無効化
	remove_filter('the_content', 'wpautop');
	// 抜粋の自動整形を無効化
	remove_filter('the_excerpt', 'wpautop'); 
	// ContactForm7の自動整形を無効化
	add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
	function wpcf7_autop_return_false() {
		return false;
	}




	//
	function hide_category_tabs_adder() {
		if (!current_user_can('administrator')) {
		global $pagenow;
		global $post_type;
		if (is_admin() && ($pagenow=='post-new.php' || $pagenow=='post.php')){
			echo '<style type="text/css">
			
			#cat_movie-tabs, #cat_movie-adder {display:none;}
			
			.categorydiv .tabs-panel {padding: 0 !important; background: none; border: none !important;}
			</style>';
		}
		}
	}
	add_action( 'admin_head', 'hide_category_tabs_adder' );


	function is_parent_slug() {
		global $post;
		if ($post->post_parent) {
			$post_data = get_post($post->post_parent);
			return $post_data->post_name;
		}
	}

	// 日本キャスト追記
	function init_session_start(){
	  session_start();
	}
	add_action('init', 'init_session_start');
	//add_filter( 'wpcf7_load_js', '__return_false' );
	//add_filter( 'wpcf7_skip_mail', '__return_false' );
	add_action('wpcf7_validate', 'custom_validate', 1, 2);
	function custom_validate($result, $tags) {
		if ( $submission = WPCF7_Submission::get_instance() )
		{
			$current_form = WPCF7_ContactForm::get_current();
			if($current_form->title == '会員登録'){
				global $wpdb;
				$table_name = $wpdb->prefix . 'custom_users';
				$posted_data = $submission->get_posted_data();
				$email = sanitize_email($posted_data['your-mail']);
			    $user = $wpdb->get_row($wpdb->prepare(
			        "SELECT * FROM $table_name WHERE email = %s",
			        $email
			    ));
               if ($user) {
                    foreach ($tags as $tag) {
                        if ($tag->name == 'your-mail') {
                            $result->invalidate($tag, "すでに登録されているメールアドレスです。");
                        }
                    }
                }
			}
		}
		return $result;
	}

	add_action( 'wpcf7_before_send_mail', 'wpcf7_customize_submit', 1, 1 );
	function wpcf7_customize_submit($response) {
		if ( $submission = WPCF7_Submission::get_instance() )
		{
			global $wpdb;
			$table_name = $wpdb->prefix . 'custom_users';
			if ($response->title == '会員登録') {
				$posted_data = $submission->get_posted_data();
				$_SESSION['form_step_1'] = $posted_data;
			}
			// 会員登録確認時
			if ($response->title == '会員登録確認') {
				$email = sanitize_email($_SESSION['form_step_1']['your-mail']);
			    $user = $wpdb->get_row($wpdb->prepare(
			        "SELECT * FROM $table_name WHERE email = %s",
			        $email
			    ));
				$result = $wpdb->insert(
					$table_name,
					array(
						'email' => $email,
					)
				);
				add_filter("wpcf7_feedback_response", function ($response) {
					$response["downloadpath"] = $_SESSION['dl'];
					return $response;
				});
			}
		}
	}

	// メールアドレス初期値設定
	add_filter('wpcf7_form_elements', 'custom_wpcf7_form_elements');
	function custom_wpcf7_form_elements($form) {
	    $contact_form = WPCF7_ContactForm::get_current();

	    // 会員登録フォームの初期値設定用
	    if ($contact_form && $contact_form->id() == 383) {
			if(isset($_SESSION['email'])){
				// フォームHTMLに対して正規表現で初期値を設定
				$form = preg_replace('/(<input[^>]*name="email"[^>]*value=")[^"]*("[^>]*>)/', '$1' . esc_attr($_SESSION['email']) . '$2', $form);
			}
	    }

	    return $form;
	}
	// メールアドレス初期値設定
	add_filter('wpcf7_form_tag', 'custom_wpcf7_form_tag', 10, 2);

	function custom_wpcf7_form_tag($tag, $unused) {
		$contact_form = WPCF7_ContactForm::get_current();
	    // 会員登録フォームの初期値設定用
	    if ($contact_form && $contact_form->id() == 383) {
			if(isset($_SESSION['email'])){
				if ($tag['name'] == 'your-mail') {
		        	$tag['values'] = array($_SESSION['email']);
				}
			}
	    }

	    return $tag;
	}

	add_action('wp_footer', 'custom_wpcf7_redirect_js');
	function custom_wpcf7_redirect_js() {
	    ?>
	    <script>
	    document.addEventListener('wpcf7mailsent', function(event) {
	        // 特定のフォームIDに対してのみスクリプトを実行
	        if (event.detail.contactFormId == 406) {
	            var param = event.detail.apiResponse.downloadpath;
	            location = 'https://test.kamakura-ss.co.jp/download/' + param;
	        }
	    }, false);
	    </script>
	    <?php
	}

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

//問い合わせフォームのリアルタイムエラーチェック
// function theme_name_scripts() {
// 	wp_enqueue_style( 'validationEngine.jquery.css', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css', array(), '1.0', 'all');
// 	wp_enqueue_script( 'jquery.validationEngine-ja.js', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-ja.min.js', array('jquery'), '2.0.0', true );
// 	wp_enqueue_script( 'jquery.validationEngine.js', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js', array('jquery'), '2.6.4', true );
// 	}
// 	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

