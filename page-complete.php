<?php get_header();?>
<main role="main">
	<div class="m-pageVisual -contact"></div>
	<section class="p-contact">
		<h2 class="p-contact__head"><span>お問い合わせ</span></h2>
		<p class="p-contact__bodyTxt">お問い合わせいただきありがとうございます。<br><a href="<?php echo home_url();?>/">トップページへ戻る</a></p>
		<div class="p-contact__body">
			<?php 
			if(have_posts()): while(have_posts()): the_post();
			 the_content();
			endwhile; endif; wp_reset_postdata();
			?>
		</div>
	</section>
</main>
<?php get_template_part( 'templates/modules/content', 'footsitemap' );?>
<?php get_footer();?>