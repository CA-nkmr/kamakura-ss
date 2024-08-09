<?php
/**
 * Template Name: 会員登録
 *
 * This is the template that displays all pages by default.
 */

get_header();
?>

<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

<div class="breadcrumbs">
	<ol>
		<li><a href="<?php echo esc_url(home_url()); ?>">ホーム</a></li>
		<li><?php the_title(); ?></li>
	</ol>
</div>

<div class="content-wrap members-form">

	<div class="page-header">
		<h1><span><?php the_title(); ?></span></h1>
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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script> -->

<?php get_footer(); ?>