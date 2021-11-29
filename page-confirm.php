<?php get_header();?>
<main role="main">
	<div class="m-pageVisual -contact"></div>
	<section class="p-contact">
		<h2 class="p-contact__head"><span>お問い合わせ</span></h2>
		<p class="p-contact__bodyTxt">入力内容をご確認ください</p>
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