<?php get_header(); ?>

<div class="content-wrap download">

	<div class="breadcrumbs">
		<ol>
			<li><a href="/">ホーム</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>/download/">ダウンロード</a></li>
            <li><?php
            if(mb_strlen($post->post_title, 'UTF-8')>20){
                $title= mb_substr($post->post_title, 0, 10, 'UTF-8');
                echo $title.'……';
            }else{
                echo $post->post_title;
            }
        ?></li>
		</ol>
	</div>
		
	<div class="content-body">
		<div class="page-header">
			<h1>ダウンロード</h1>
		</div>
		
		<div class="section">
			<div class="section__inner">
                <?php if ( have_posts() ) : ?>                 
					<?php while ( have_posts() ) : the_post();?>
							<div class="col2">
                                <div class="thumb">
                                    <img src="<?php the_field('file_thumb'); ?>" alt="">
                                </div>
                                <div class="info">
                                    <h2><?php the_title(); ?></h2>
                                    <ul>
                                        <!-- <li>ファイル名：<?php the_field('file_url'); ?></li> -->
                                        <li>ファイルの種類：<?php the_field('file_type'); ?></li>
                                        <li>ファイルサイズ：<?php the_field('file_size'); ?></li>
                                    </ul>
                                    <p><a href="https://www.kamakura-ss.co.jp/cad_data_new/<?php the_field('file_url'); ?>">ダウンロード</a></p>
                                </div>
                            </div>
                            
                            
                    <?php endwhile; ?>
                <?php else: echo 'コンテンツがありません。'; endif; ?>
				
			</div>
            <div class="btn1"><a href="<?php echo esc_url(home_url()); ?>/download/">一覧に戻る</a></div>			
		</div>
	</div>

</div>


<?php get_footer(); ?>

</body>
</html>