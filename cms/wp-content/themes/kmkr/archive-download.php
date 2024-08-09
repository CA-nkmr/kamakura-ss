<?php get_header(); ?>

<div class="content-wrap download">

	<div class="breadcrumbs">
		<ol>
			<li><a href="/">ホーム</a></li>
			<li>ダウンロード</li>
		</ol>
	</div>
		
	<div class="content-body download">
		<div class="page-header">
			<h1>ダウンロード</h1>
		</div>

		<!-- <div class="section">
			<div class="section__inner">
				<ul class="anchor">
					<li><a href="#pickup">ピックアップ</a></li>
					<li><a href="#products">製品紹介</a></li>
					<li><a href="#case">導入事例</a></li>
					<li><a href="#maintenance">メンテナンス</a></li>
					<li><a href="#others">その他</a></li>
				</ul>
			</div>
		</div> -->
		
		
		<div class="section download">
			<div class="section__inner arch">

			<!-- カタログ　-->
			<?php
				//$argsのプロパティを変えていく
				$args = array(
					'post_type' => 'download', 
					'posts_per_page' => -1,
					'no_found_rows' => true,  //ページャーを使う時はfalseに。
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

						array(
							'taxonomy' => 'dl_cat',
							'field' => 'slug',
							'terms' => 'catalogue',                //タームをスラッグで指定('field'が'slug'なので)
						)
					)
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : 
			?>
			<h2>カタログ</h2>
				<ul>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
					<li>
						<img src="<?php the_field('file_thumb'); ?>" alt="">
						<!-- <ul>
							<li>ファイル名：<?php the_field('file_url'); ?></li>
							<li>ファイルの種類：<?php the_field('file_type'); ?></li>
							<li>ファイルサイズ：<?php the_field('file_size'); ?></li>
						</ul> -->
						<p><?php the_title(); ?></p>
                        <p><a href="<?php echo home_url(); ?>/members/?dl=<?php echo $post->post_name; ?>">ダウンロード</a></p>
					</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;
				wp_reset_postdata();
			?>

            <!-- CAD　-->
			<?php
				//$argsのプロパティを変えていく
				$args = array(
					'post_type' => 'download', 
					'posts_per_page' => -1,
					'no_found_rows' => true,  //ページャーを使う時はfalseに。
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

						array(
							'taxonomy' => 'dl_cat',
							'field' => 'slug',
							'terms' => 'cad',                //タームをスラッグで指定('field'が'slug'なので)
						)
					)
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : 
			?>
			<h2>CAD</h2>
				<ul>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
					<li>
                    	<img src="<?php the_field('file_thumb'); ?>" alt="">
						<p><?php the_title(); ?></p>
						<!-- <ul>
							<li>ファイル名：<?php the_field('file_url'); ?></li>
							<li>ファイルの種類：<?php the_field('file_type'); ?></li>
							<li>ファイルサイズ：<?php the_field('file_size'); ?></li>
						</ul> -->
						<p><a href="<?php echo home_url(); ?>/members/?dl=<?php echo $post->post_name; ?>">ダウンロード</a></p>
					</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;
				wp_reset_postdata();
			?>

            <!-- 使用価格　-->
			<?php
				//$argsのプロパティを変えていく
				$args = array(
					'post_type' => 'download', 
					'posts_per_page' => -1,
					'no_found_rows' => true,  //ページャーを使う時はfalseに。
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

						array(
							'taxonomy' => 'dl_cat',
							'field' => 'slug',
							'terms' => 'spec',                //タームをスラッグで指定('field'が'slug'なので)
						)
					)
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : 
			?>
			<h2>仕様・価格</h2>
				<ul>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
					<li>
						<img src="<?php the_field('file_thumb'); ?>" alt="">
						<p><?php the_title(); ?></p>
						<!-- <ul>
							<li>ファイル名：<?php the_field('file_url'); ?></li>
							<li>ファイルの種類：<?php the_field('file_type'); ?></li>
							<li>ファイルサイズ：<?php the_field('file_size'); ?></li>
						</ul> -->
						<p><a href="<?php echo home_url(); ?>/members/?dl=<?php echo $post->post_name; ?>">ダウンロード</a></p>
					</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;
				wp_reset_postdata();
			?>

            <!-- 取説　-->
			<?php
				//$argsのプロパティを変えていく
				$args = array(
					'post_type' => 'download', 
					'posts_per_page' => -1,
					'no_found_rows' => true,  //ページャーを使う時はfalseに。
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

						array(
							'taxonomy' => 'dl_cat',
							'field' => 'slug',
							'terms' => 'manual',                //タームをスラッグで指定('field'が'slug'なので)
						)
					)
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : 
			?>
			<h2>取扱説明書</h2>
				<ul>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
					<li>
                    <h2><?php the_title(); ?></h2>
                            <img src="<?php the_field('file_thumb'); ?>" alt="">
							<ul>
                                <!-- <li>ファイル名：<?php the_field('file_url'); ?></li> -->
                                <li>ファイルの種類：<?php the_field('file_type'); ?></li>
                                <li>ファイルサイズ：<?php the_field('file_size'); ?></li>
                            </ul>
                            <p><a href="https://www.kamakura-ss.co.jp/cad_data_new/<?php the_field('file_url'); ?>">ダウンロード</a></p>
					</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;
				wp_reset_postdata();
			?>


			

			</div>
		</div>


		
	</div>

</div>


<?php get_footer(); ?>



</body>
</html>