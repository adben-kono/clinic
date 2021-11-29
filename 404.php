<?php get_header();?>
<main role="main">
	<section class="p-notfound-visual">
		<div class="p-notfound-visual__main">
			<h2 class="p-notfound-visual__head">404エラー</h2>
		</div>
	</section><!-- p-notfound-visual -->

	<section class="p-notfound-content">
		<h2 class="p-notfound-content__head"><span>ページが存在しません</span></h2>
		<p class="p-notfound-content__btn"><a href="<?php echo home_url(); ?>">トップページへ戻る</a></p>
	</section><!-- p-notfound-content -->
</main>
<?php 
get_template_part( 'templates/modules/content', 'footsitemap' );
get_footer();
?>