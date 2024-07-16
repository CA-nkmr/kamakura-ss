<?php get_header(); ?>

<div class="body__wrap">

	<div class="breadcrumbs">
		<ol>
			<li><a href="/">ホーム</a></li>
			<li>お役立ち資料ダウンロード</li>
		</ol>
	</div>
	<div class="content-body movies documents">
		<div class="page-header">
			<h1>お役立ち資料ダウンロード</h1>
			<p>各種資料をダウンロードしてご利用いただけます。</p>
		</div>
		<div class="section">
			<div class="section__inner">
				<ul class="anchor">
					<li><a href="#pickup">ピックアップ</a></li>
					<li><a href="#heat-safety">暑さ対策</a></li>
					<li><a href="#colum">コラム</a></li>
					<li><a href="#reports">工場向け調査レポート</a></li>
					<!-- <li><a href="#others">その他</a></li> -->
				</ul>
			</div>
		</div>
		
		<div class="section gr">
			<div class="section__inner arch">

				<!-- ピックアップ　-->
				<?php
					//$argsのプロパティを変えていく
					$args = array(
						'post_type' => 'documents', 
						'posts_per_page' => 4,
						'no_found_rows' => true,  //ページャーを使う時はfalseに。
						'tax_query' => array(	//タクソノミーに関する指定はこの中にすべて
							// 'relation' => 'AND',	 //条件1,2をどのような関係で指定するか

							array(
								'taxonomy' => 'cat_documents',
								'field' => 'slug',
								'terms' => 'pickup',	//タームをスラッグで指定('field'が'slug'なので)
							)
						)
					);

					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) : 
				?>
				<p class="ls-cate" id="pickup">ピックアップ</p>
					<ul>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
						<?php $url = get_field('url'); ?>
						<?php $thumbnail = get_field('thumbnail'); ?>
						<li>
							<img src="<?php echo $thumbnail; ?>">
							<p class="title"><?php the_title(); ?></p>
							<a href="<?php echo $url; ?>">資料ダウンロード</a>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif;
					wp_reset_postdata();
				?>

				<!-- 暑さ対策 -->
				<?php
					//$argsのプロパティを変えていく
					$args = array(
						'post_type' => 'documents', 
						'posts_per_page' => -1,
						'no_found_rows' => true,  //ページャーを使う時はfalseに。
						'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
							// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

							array(
								'taxonomy' => 'cat_documents',
								'field' => 'slug',
								'terms' => 'heat-safety',                //タームをスラッグで指定('field'が'slug'なので)
							)
						)
					);

					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) : 
				?>
				<p class="ls-cate" id="heat-safety">暑さ対策</p>
					<ul>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
						<?php $url = get_field('url'); ?>
						<?php $thumbnail = get_field('thumbnail'); ?>
						<li>
							<img src="<?php echo $thumbnail; ?>">
							<p class="title"><?php the_title(); ?></p>
							<a href="<?php echo $url; ?>">資料ダウンロード</a>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif;
					wp_reset_postdata();
				?>

				<!-- コラム -->
				<?php
					//$argsのプロパティを変えていく
					$args = array(
						'post_type' => 'documents', 
						'posts_per_page' => -1,
						'no_found_rows' => true,  //ページャーを使う時はfalseに。
						'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
							// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

							array(
								'taxonomy' => 'cat_documents',
								'field' => 'slug',
								'terms' => 'colum',                //タームをスラッグで指定('field'が'slug'なので)
							)
						)
					);

					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) : 
				?>
				<p class="ls-cate" id="colum">コラム</p>
					<ul>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
						<?php $url = get_field('url'); ?>
						<?php $thumbnail = get_field('thumbnail'); ?>
						<li>
							<img src="<?php echo $thumbnail; ?>">
							<p class="title"><?php the_title(); ?></p>
							<a href="<?php echo $url; ?>">資料ダウンロード</a>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif;
					wp_reset_postdata();
				?>

				<!-- 工場向け調査レポート -->
				<?php
					//$argsのプロパティを変えていく
					$args = array(
						'post_type' => 'documents', 
						'posts_per_page' => -1,
						'no_found_rows' => true,  //ページャーを使う時はfalseに。
						'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
							// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

							array(
								'taxonomy' => 'cat_documents',
								'field' => 'slug',
								'terms' => 'reports',                //タームをスラッグで指定('field'が'slug'なので)
							)
						)
					);

					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) : 
				?>
				<p class="ls-cate" id="reports">工場向け調査レポート</p>
					<ul>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
						<?php $url = get_field('url'); ?>
						<?php $thumbnail = get_field('thumbnail'); ?>
						<li>
							<img src="<?php echo $thumbnail; ?>">
							<p class="title"><?php the_title(); ?></p>
							<a href="<?php echo $url; ?>">資料ダウンロード</a>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif;
					wp_reset_postdata();
				?>

				<!-- その他 -->
				<!-- <?php
					//$argsのプロパティを変えていく
					$args = array(
						'post_type' => 'documents', 
						'posts_per_page' => -1,
						'no_found_rows' => true,  //ページャーを使う時はfalseに。
						'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
							// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

							array(
								'taxonomy' => 'cat_documents',
								'field' => 'slug',
								'terms' => 'others',                //タームをスラッグで指定('field'が'slug'なので)
							)
						)
					);

					$the_query = new WP_Query($args);
					if ($the_query->have_posts()) : 
				?>
				<p class="ls-cate" id="others">その他</p>
					<ul>
						<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
						<?php $url = get_field('url'); ?>
						<?php $thumbnail = get_field('thumbnail'); ?>
						<li>
							<img src="<?php echo $thumbnail; ?>">
							<p class="title"><?php the_title(); ?></p>
							<a href="<?php echo $url; ?>">資料ダウンロード</a>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif;
					wp_reset_postdata();
				?> -->

			</div><!--section__inner-->
		</div><!--section-->

	</div><!--content-body-->
</div><!--body__wrap-->

<?php get_footer(); ?>

</body>
</html>