<?php get_header();?>
<main role="main">
	<div class="m-pageVisual -contact"></div>
	<section class="p-contact">
		<h2 class="p-contact__head"><span>お問い合わせ</span></h2>
		<p class="p-contact__bodyTxt">当院へのお問い合わせやご質問などございましたら下記フォームよりお送りください。</p>
		<div class="p-contact__list">
			<ul>
				<li>●医療に関するご質問はお受けすることができません。何卒ご了承ください。</li>
				<li>●メールアドレスが間違っていますと、こちらからの返信が出来ません。</li>
				<li>●ご質問のご返答に１週間程度のお時間をいただく場合があります。</li>
				<li>●当院にお問合せいただいた個人情報は、診療の目的のみ使用いたします。</li>
				<li>●また、収集した個人情報について本人の同意なく第3者に開示また提供することはありません。 </li>
				<li>●お問い合わせいただいた内容は個人が特定できないようにして、よくある質問などに引用・転載する</li>
				<li>　場合がございます。 </li>
				<li>●携帯メールを入力される場合で迷惑メールや着信拒否の設定をされている場合は@tanabeclinic.com</li>
				<li>　からのメールを受信できるように設定してください。</li>
			</ul>
		</div>
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