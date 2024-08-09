<!-- 日本キャスト追記 メールアドレスチェック-->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    global $wpdb;
    // 無効な文字列は除外
    $email = sanitize_email($_POST['email']);

    $table_name = $wpdb->prefix . 'custom_users';

    // メールアドレスの存在チェック
    $user = $wpdb->get_row($wpdb->prepare(
        "SELECT * FROM $table_name WHERE email = %s",
        $email
    ));
    if ($user) {
        // メールアドレスが存在する場合
        wp_redirect(home_url('/download/'.$_GET['dl']));
        exit;
    } else {
        // メールアドレスが存在しない場合
        $_SESSION['dl'] = $_GET['dl'];
        $_SESSION['email'] = $email;
        wp_redirect(home_url('/members/registration/'));
        exit;
    }
}
?>

<?php
/**
 * Template Name: 会員ログイン
 *
 * This is the template that displays all pages by default.
 */

get_header();
?>


<div class="content-wrap download">

    <div class="breadcrumbs">
        <ol>
            <li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
            <li><?php the_title(); ?></li>
        </ol>
    </div>

    <div class="content-body download">
        <div class="page-header">
            <h1><span><?php the_title(); ?></span></h1>
        </div>
        
        <div class="section">
            <div class="section__inner">
                <div class="col2">
                    <div class="thumb">
                    <?php if(isset($_GET['dl'])) { $dl = $_GET['dl']; } ?>
                    <?php
                        //$argsのプロパティを変えていく
                        $args = array(
                            'post_type' => 'download', 
                            'name' => $dl,
                            'posts_per_page' => 1,
                        );

                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                    <img src="<?php the_field('file_thumb'); ?>" alt="">
                    <p><strong><?php the_title(); ?></strong></p>
                    <?php endwhile; endif; ?>
                    </div><!-- /.thumb -->
                    <div class="info">
                        <h2 class="mb40">メールアドレスを入力してください。</h2>
                        <form action="" method="POST">
                            <p>Web会員の方はご登録メールアドレスをご入力ください。<br>
                            登録がお済みでない方はメールアドレスと必要事項のご登録をお願いいたします。</p>
                            <div class="col2">
                                <div class="col">メールアドレス</div><!-- /.col -->
                                <div class="col">
                                    <input type="text" value="" id="email" name="email" class="login">
                                    <input type="submit" value="次へ">
                                </div><!-- /.col -->
                            </div><!-- /.col2 -->
                        </form>
                    </div><!-- /.info -->
                </div><!-- /.col2 -->
                
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



<?php get_template_part('body-foot'); ?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script> -->

<?php get_footer(); ?>