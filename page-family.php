<?php get_header();?>
<main role="main">
	<div class="p-about-visual -family">
		<ul class="p-about-visual__list">
			<li><a href="#doctor">院長紹介</a></li>
			<li><a href="#sraff">スタッフ紹介</a></li>
			<li><a href="#group">部門紹介</a></li>
			<li><a href="<?php echo home_url();?>/about/">[当院について]</a></li>
			<li><a href="<?php echo home_url();?>/about/facility/">[施設・設備紹介]</a></li>
		</ul>
	</div><!-- p-about-visual -->

	<section class="p-about-family">
		<h2 class="p-about-family__head"><span>たなべファミリー</span></h2>
		<p class="p-about-family__txt">たなべクリニックではスタッフ一同が、<br class="u-device-pc"><span>「たなべクリニックのスタッフは、誰よりも、たなべクリニックのファンでなければならいない。」</span><br>という、志しを持っております。<br>そんなスタッフたちは皆、たなべクリニックのファミリーです。<br>そして、たなべクリニックに通って頂いている患者さまも<br>みんな「たなべファミリー」だと、私たちは考えています。 </p>
	</section><!-- p-about-family -->

	<section id="doctor" class="p-about-doctor">
		<div class="p-about-doctor__container">
			<div class="p-about-doctor__head">
				<div class="m-guide">
					<h2 class="m-guide__head">院長紹介</h2>
					<nav class="m-guide__nav">
						<ol>
							<li><a href="<?php echo home_url();?>/">ホーム</a></li>
							<li><a href="<?php echo home_url();?>/about/family/">たなべファミリー</a></li>
							<li>院長紹介</li>
						</ol>
					</nav>
				</div><!-- m-guide -->
			</div>
			<div class="p-about-doctor__body">
				<div class="p-about-doctor__main">
					<div class="p-about-doctor__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-doctor01.jpg" alt="院長　田邉 良平（たなべ りょうへい）"></div>
					<h3 class="p-about-doctor__name"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/txt-doctor01.png" alt="院長　田邉 良平（たなべ りょうへい）"></h3>
					<div class="p-about-doctor__content u-device-pc">
						<a href="<?php echo home_url(); ?>/yoka/">
							<p class="in01">りょうへい院長の</p>
							<p class="in02">今日のよか</p>
						</a>
					</div>
				</div>
				<div class="p-about-doctor__sub">
					<dl>
						<dt>●資格・役職</dt>
						<dd>
							<ul>
								<li>日本産婦人科学会認定医</li>
								<li>母体保護法指定医</li>
								<li>日本ソフロロジー法研究会常任理事・達成度向上委員会委員長</li>
								<li>日本母体胎児医学会会員</li>
								<li>日本新生児学会会員</li>
								<li>新生児蘇生法インストラクター</li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>▼学歴</dt>
						<dd>
							<ul>
								<li>久留米大学医学部卒業</li>
								<li>久留米大学大学院医学研究科卒業</li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>▼経歴</dt>
						<dd>
							<ul>
								<li>久留米大学医学部産婦人科学教室入局</li>
								<li>聖マリア病院新生児科勤務</li>
								<li>国立小倉病院産婦人科・麻酔科勤務</li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>▼専門分野</dt>
						<dd>
							<ul>
								<li>胎児超音波診断</li>
								<li>周産期（妊娠～分娩）管理</li>
							</ul>
						</dd>
					</dl>
				</div>
				<div class="p-about-doctor__content u-device-sp">
					<a href="<?php echo home_url(); ?>/yoka/">
						<p class="in01">りょうへい院長の</p>
						<p class="in02">今日のよか</p>
					</a>
				</div>
			</div>
		</div>
	</section><!-- p-about-doctor -->

	<section id="sraff" class="p-about-sraff">
		<div class="p-about-sraff__container">
			<div class="p-about-sraff__head">
				<div class="m-guide">
					<h2 class="m-guide__head">スタッフ紹介</h2>
					<nav class="m-guide__nav">
						<ol>
							<li><a href="<?php echo home_url();?>/">ホーム</a></li>
							<li><a href="<?php echo home_url();?>/about/family/">たなべファミリー</a></li>
							<li>スタッフ紹介</li>
						</ol>
					</nav>
				</div><!-- m-guide -->
			</div>
			<ul class="p-about-sraff__body">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-staff01.jpg" alt="田邉恵美子">
					<h3>常務理事<span><img class="name" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/txt-staff01.png" alt="田邉恵美子"></span></h3>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-staff02.jpg" alt="中村ひとみ">
					<h3>医療部　医療部長<span>中村ひとみ</span></h3>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-staff03.jpg" alt="中小田千鶴子">
					<h3>医療部　教育部長　助産師<span>中小田千鶴子</span></h3>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-staff04.jpg" alt="石﨑奈美恵">
					<h3>医療部　看護課主任　助産師<span>石﨑奈美恵</span></h3>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-staff05.jpg" alt="小嶋美雪">
					<h3>総務部　総務部長<span>小嶋美雪</span></h3>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-staff06.jpg" alt="寺田智代">
					<h3>総務部　医事課課長<span>寺田智代</span></h3>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-staff07.jpg" alt="中尾千穂">
					<h3>総務部　経理課主任<span>中尾千穂</span></h3>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-staff08.jpg" alt="川浪美咲">
					<h3>総務部　サービス課主任<span>川浪美咲</span></h3>
				</li>
			</ul>
		</div>
	</section><!-- p-about-sraff -->

	<section id="group" class="p-about-group">
		<div class="p-about-group__container">
			<div class="p-about-sraff__head">
				<div class="m-guide">
					<h2 class="m-guide__head">部門紹介</h2>
					<nav class="m-guide__nav">
						<ol>
							<li><a href="<?php echo home_url();?>/">ホーム</a></li>
							<li><a href="<?php echo home_url();?>/about/family/">たなべファミリー</a></li>
							<li>部門紹介</li>
						</ol>
					</nav>
				</div><!-- m-guide -->
			</div>
			<section class="content-group">
				<div class="content-group__block">
					<h2>医療部（助産課・看護課）</h2>
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-group01_01.jpg" alt="医療部（助産課・看護課）"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-group01_02.jpg" alt="医療部（助産課・看護課）"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-group01_03.jpg" alt="医療部（助産課・看護課）"></li>
					</ul>
					<p>私たち助産師・看護師は、患者様の健康な心と身体を守り育てるお手伝いをさせて頂き、不安を持って受診された患者様が笑顔でお帰り頂けるようサポート致します。</p>
				</div>
				<div class="content-group__block">
					<h2>総務部（サービス課）</h2>
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-group02_01.jpg" alt="総務部（サービス課）"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-group02_02.jpg" alt="総務部（サービス課）"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-group02_03.jpg" alt="総務部（サービス課）"></li>
					</ul>
					<p>患者さまの身近な存在である、お部屋・ラウンジ担当のアテンダント、エステティシャン、キッチンスタッフ。<br>クリニックが、患者さまにとって過ごしやすい場所であるように、サービス課一同、おもてなしの心で務めてまいります。 </p>
				</div>
				<div class="content-group__block">
					<h2>総務部（医事課・経理課・広報課）</h2>
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-group03_01.jpg" alt="総務部（医事課・経理課・広報課）"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-group03_02.jpg" alt="総務部（医事課・経理課・広報課）"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-group03_03.jpg" alt="総務部（医事課・経理課・広報課）"></li>
					</ul>
					<p>クリニック最初の場所である受付でみなさまをお迎えする医療コンシェルジュ。患者さまにクリニックからのお知らせや医療情報をわかりやすくお伝えする経理・広報は、患者さまが安心して診療に専念いただけるように快適な環境づくりを心がけております。気になったこと、ご質問などお気軽に声をおかけください。 </p>
				</div>
			</section><!-- content-group -->

			<section class="content-license">
				<h2 class="content-license__head">スタッフの所有資格について</h2>
				<div class="content-license__body">
					<div class="content-license__main">
						<h3>たなべクリニックでは、高い医療水準を提供するために<br class="u-device-pc">院内外の研修会やセミナーに積極的に参加しています。 </h3>
						<ul>
							<li>日本ソフロロジー法研究会 認定ソフロローグ</li>
							<li>ALSOプロバイダーコース受講</li>
							<li>NCPR新生児蘇生法インストラクター受講</li>
							<li>J-CLMELS公認講習会受講</li>
							<li>BLSプロバイダーコース受講</li>
							<li>トコちゃんベルトアドバイザー取得　　など</li>
						</ul>
					</div>
					<div class="content-license__thumb"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/family/ph-license01.png" alt="スタッフの所有資格について"></div>
				</div>
			</section><!-- content-license -->
		</div>
	</section><!-- p-about-group -->
</main>
<?php get_template_part( 'templates/modules/content', 'footsitemap' );?>
<?php get_footer();?>