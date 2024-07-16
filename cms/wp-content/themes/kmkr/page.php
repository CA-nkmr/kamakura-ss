<?php
get_header();
?>

<div class="breadcrumbs">
	<ol>
		<li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
		<li><?php the_title(); ?></li>
	</ol>
</div>
	
<div class="content-body">
	<div class="page-header">
		<h1>Products<br><span><?php the_title(); ?></span></h1>
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
	

			

<?php get_template_part('body-foot'); ?>

<?php get_footer(); ?>