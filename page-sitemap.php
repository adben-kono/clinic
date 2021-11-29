<?php get_header();?>
<main role="main">
	<div class="p-sitemap-visual">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sitemap/bg-visual01.jpg" alt="サイトマップ">
	</div><!-- p-sitemap-visual -->

	<section class="p-sitemap-content">
		<div class="p-sitemap-content__container">
			<h2 class="p-sitemap-content__head"><span>サイトマップ</span></h2>
			<div class="p-sitemap-content__body">
				<div class="p-sitemap-content__column">
					<ul>
						<li><a href="<?php echo home_url();?>/">トップページ</a></li>
						<li><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">新着情報</a></li>
						<li><a href="<?php echo get_post_type_archive_link( 'yoka' ); ?>">今日のよか</a></li>
						<li><a href="<?php echo home_url();?>/staff/">スタッフ募集</a></li>
						<li><a href="<?php echo home_url();?>/contact/">お問い合わせ</a></li>
						<li><a href="<?php echo home_url();?>/sitemap/">サイトマップ</a></li>
					</ul>
				</div>
				<div class="p-sitemap-content__column">
					<ul>
						<li>
							<a href="<?php echo home_url();?>/about/">当院について</a>
							<ul>
								<li><a href="<?php echo home_url();?>/about#overview">クリニック概要</a></li>
								<li><a href="<?php echo home_url();?>/about#history">クリニックの歴史</a></li>
								<li><a href="<?php echo home_url();?>/about#thought">クリニックの想い</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo home_url();?>/about/family/">たなべファミリー</a>
							<ul>
								<li><a href="<?php echo home_url();?>/about/family#doctor">院長紹介</a></li>
								<li><a href="<?php echo home_url();?>/about/family#sraff">スタッフ紹介</a></li>
								<li><a href="<?php echo home_url();?>/about/family#group">部門紹介</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo home_url();?>/about/facility/">施設・設備紹介</a>
							<ul>
								<li><a href="<?php echo home_url();?>/about/facility#facility">施設紹介</a></li>
								<li><a href="<?php echo home_url();?>/about/facility#equipment">設備紹介</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="p-sitemap-content__column">
					<ul>
						<li>
							<a href="<?php echo home_url();?>/consultation/">診療のご案内</a>
							<ul>
								<li><a href="<?php echo home_url();?>/consultation#obstetrics">産科</a></li>
								<li><a href="<?php echo home_url();?>/consultation#gynecology">婦人科</a></li>
								<li><a href="<?php echo home_url();?>/consultation#cancer">がん検診</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo home_url();?>/consultation/hospitalization/">入院のご案内</a>
							<ul>
								<li><a href="<?php echo home_url();?>/consultation/hospitalization#hospitalization">入院の準備</a></li>
								<li><a href="<?php echo home_url();?>/consultation/hospitalization#room">お部屋</a></li>
								<li><a href="<?php echo home_url();?>/consultation/hospitalization#food">お食事</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo home_url();?>/consultation/voice/">患者さまの声</a>
						</li>
					</ul>
				</div>
				<div class="p-sitemap-content__column">
					<ul>
						<li>
							<a href="<?php echo home_url();?>/sophrology/">分娩とソフロロジー</a>
							<ul>
								<li><a href="<?php echo home_url();?>/sophrology#effect">ソフロロジーの効果</a></li>
								<li><a href="<?php echo home_url();?>/sophrology#delivery">分娩について</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo home_url();?>/sophrology/report/">ソフロロジー体験談</a>
						</li>
						<li>
							<a href="<?php echo home_url();?>/sophrology/study/">ソフロロジーを学ぶ</a>
							<ul>
								<li><a href="<?php echo home_url();?>/sophrology/study#inner_about">研修について</a></li>
								<li><a href="<?php echo home_url();?>/sophrology/study#inner_report">研修レポート</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="p-sitemap-content__column">
					<ul>
						<li>
							<a href="<?php echo home_url();?>/classroom/">教室のご案内</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section><!-- p-sitemap-list -->
</main>
<?php get_footer();?>