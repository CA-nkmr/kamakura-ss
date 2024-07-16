<?php get_header(); ?>

<div class="body__wrap">

	<div class="breadcrumbs">
		<ol>
			<li><a href="/">ホーム</a></li>
			<li>ムービーギャラリー</li>
		</ol>
	</div>
		
	<div class="content-body movies">
		<div class="page-header">
			<h1>MOVIE<br><span>ムービーギャラリー</span></h1>
			<p>カマクラの製品や導入事例などを動画でご紹介します。</p>
		</div>

		<div class="section">
			<div class="section__inner">
				<ul class="anchor">
					<li><a href="#pickup">ピックアップ</a></li>
					<li><a href="#products">製品紹介</a></li>
					<li><a href="#case">導入事例</a></li>
					<li><a href="#maintenance">メンテナンス</a></li>
					<li><a href="#others">その他</a></li>
				</ul>
			</div>
		</div>
		
		
		<div class="section gr">
			<div class="section__inner arch">

			<!-- ピックアップ　-->
			<?php
				//$argsのプロパティを変えていく
				$args = array(
					'post_type' => 'movies', 
					'posts_per_page' => 3,
					'no_found_rows' => true,  //ページャーを使う時はfalseに。
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

						array(
							'taxonomy' => 'cat_movie',
							'field' => 'slug',
							'terms' => 'pickup',                //タームをスラッグで指定('field'が'slug'なので)
						)
					)
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : 
			?>
			<p class="ls-cate" id="pickup">ピックアップ</p>
				<ul>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
					<li>
						<div class="thumb">
							<?php the_post_thumbnail( 'medium' ); ?>
							<p class="time">再生時間：<?php the_field('time'); ?></p>
						</div>
						<p><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>">詳細はこちら</a>
					</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;
				wp_reset_postdata();
			?>


			<!-- 製品情報-->
			<?php
				//$argsのプロパティを変えていく
				$args = array(
					'post_type' => 'movies', 
					'posts_per_page' => -1,
					'no_found_rows' => true,  //ページャーを使う時はfalseに。
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

						array(
							'taxonomy' => 'cat_movie',
							'field' => 'slug',
							'terms' => 'products',                //タームをスラッグで指定('field'が'slug'なので)
						)
					)
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : 
			?>
			<p class="ls-cate" id="products">製品紹介</p>
				<ul>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
					<li>
						<div class="thumb">
							<?php the_post_thumbnail( 'medium' ); ?>
							<p class="time">再生時間：<?php the_field('time'); ?></p>
						</div>
						<p><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>">詳細はこちら</a>
					</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;
				wp_reset_postdata();
			?>

			<!-- 導入事例　-->
			<?php
				//$argsのプロパティを変えていく
				$args = array(
					'post_type' => 'movies', 
					'posts_per_page' => -1,
					'no_found_rows' => true,  //ページャーを使う時はfalseに。
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

						array(
							'taxonomy' => 'cat_movie',
							'field' => 'slug',
							'terms' => 'case',                //タームをスラッグで指定('field'が'slug'なので)
						)
					)
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : 
			?>
			<p class="ls-cate" id="case">導入事例</p>
				<ul>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
					<li>
						<div class="thumb">
							<?php the_post_thumbnail( 'medium' ); ?>
							<p class="time">再生時間：<?php the_field('time'); ?></p>
						</div>
						<p><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>">詳細はこちら</a>
					</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;
				wp_reset_postdata();
			?>

			<!-- メンテナンス　-->
			<?php
				//$argsのプロパティを変えていく
				$args = array(
					'post_type' => 'movies', 
					'posts_per_page' => -1,
					'no_found_rows' => true,  //ページャーを使う時はfalseに。
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

						array(
							'taxonomy' => 'cat_movie',
							'field' => 'slug',
							'terms' => 'maintenance',                //タームをスラッグで指定('field'が'slug'なので)
						)
					)
				);

				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : 
			?>
			<p class="ls-cate" id="maintenance">メンテナンス</p>
				<ul>
					<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>	
					<li>
						<div class="thumb">
							<?php the_post_thumbnail( 'medium' ); ?>
							<p class="time">再生時間：<?php the_field('time'); ?></p>
						</div>
						<p><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>">詳細はこちら</a>
					</li>
					<?php endwhile; ?>
				</ul>
			<?php endif;
				wp_reset_postdata();
			?>


			<!-- その他　-->
			<?php
				//$argsのプロパティを変えていく
				$args = array(
					'post_type' => 'movies', 
					'posts_per_page' => -1,
					'no_found_rows' => true,  //ページャーを使う時はfalseに。
					'tax_query' => array(                      //タクソノミーに関する指定はこの中にすべて
						// 'relation' => 'AND',                     //条件1,2をどのような関係で指定するか

						array(
							'taxonomy' => 'cat_movie',
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
					<li>
						<div class="thumb">
							<?php the_post_thumbnail( 'medium' ); ?>
							<p class="time">再生時間：<?php the_field('time'); ?></p>
						</div>
						<p><?php the_title(); ?></p>
						<a href="<?php the_permalink(); ?>">詳細はこちら</a>
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