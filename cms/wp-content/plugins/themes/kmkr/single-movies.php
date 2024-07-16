<?php get_header(); ?>

<div class="body__wrap">

	<div class="breadcrumbs">
		<ol>
			<li><a href="/">ホーム</a></li>
            <li><a href="<?php echo esc_url(home_url()); ?>/movies/">ムービーギャラリー</a></li>
            <li><?php
            if(mb_strlen($post->post_title, 'UTF-8')>10){
                $title= mb_substr($post->post_title, 0, 10, 'UTF-8');
                echo $title.'……';
            }else{
                echo $post->post_title;
            }
        ?></li>
		</ol>
	</div>
		
	<div class="content-body movies">
		<div class="page-header">
			<h1>MOVIE<br><span>ムービーギャラリー</span></h1>
		</div>
		
		<div class="section gr">
			<div class="section__inner">
                <?php if ( have_posts() ) : ?>                 
					<?php while ( have_posts() ) : the_post();?>
							<h2><?php the_title(); ?></h2>
							<p class="time">再生時間：<?php the_field('time'); ?></p>
							<div class="mov-wrap">
							<?php the_content(); ?>
							</div>
							<div class="comment">
								<?php the_field('comment'); ?>
							</div>
								

                            
                    <?php endwhile; ?>
                <?php else: echo 'コンテンツがありません。'; endif; ?>
				<div class="back_mov-ls"><a href="<?php echo esc_url(home_url()); ?>/movies/">一覧に戻る</a></div>
			</div>
			
		</div>
	</div>

</div>


<?php get_footer(); ?>

</body>
</html>