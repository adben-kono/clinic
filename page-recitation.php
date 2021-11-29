<?php get_header();?>
<main role="main">

	<section id="delivery" class="p-sophrology-delivery">
		<div class="p-sophrology-delivery__container">
			<div class="p-sophrology-delivery__head">
				<div class="m-guide -sophrology">
					<h2 class="m-guide__head">朗読動画</h2>
					<nav class="m-guide__nav">
						<ol>
							<li><a href="<?php echo home_url();?>/">ホーム</a></li>
							<li>朗読動画</li>
						</ol>
					</nav>
				</div><!-- m-guide -->
			</div>

			<section class="content-movie2">
				<div class="content-movie2__video">
					<video src="<?php echo get_template_directory_uri(); ?>/assets/images/recitation/recitation.mp4" poster="<?php echo get_template_directory_uri(); ?>/assets/images/recitation/r_poster.jpg"controls></video>
				</div>
			</section><!-- content-movie -->
		<center><h4>製作著作：<a href="https://wpub.people-i.ne.jp/web/" target="_blank">株式会社唐津ケーブルビジョン</a></h4></center>
		</div>
	</section><!-- p-sophrology-delivery -->
</main>
<?php get_template_part( 'templates/modules/content', 'footsitemap' );?>
<?php get_footer();?>