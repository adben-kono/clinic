<main role="main">
	<div class="m-pageVisual -yoka">
		<div class="yokaHeading">
			<div class="yokaHeading__inner">
				<p class="txt01"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/yoka/hero-txt.png" alt="今日のよか"></p>
				<p class="txt02">＜毎週更新＞良平院長のコラム</p>
			</div>
		</div>
	</div>
	<div class="p-yoka">
		<div class="p-yoka__bnr"><a href="https://www.10000nen.com/books/978-4-86626-055-6/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/_common/img-banner01_2.jpg" alt="院長が本を出版しました ママ、もうすぐあえるね おなかの中からハグくむ親子の絆 ソフロロジー 田邉良平（著）／太田知子（イラスト）　心療内科医 明橋大二氏推薦！"></a><center><a href="<?php echo home_url(); ?>/recitation/"><font color="#FC4D52"><u>一部を朗読した動画もこちらからご覧ください！</u></font></a></center></div>
		<div class="p-yoka__main">
			<div class="p-yoka__body">
				<?php if ( have_posts() ) :while ( have_posts() ) : the_post();
				$custom_fields = array(
				    'content' => get_field('yoka_content'),
				);
				?>
				<article class="p-yoka__post">
					<h1 class="head"><?php the_title(); ?></h1>
					<div class="content">
						<p><?php echo $custom_fields['content']; ?></p>
					</div>
					<div class="info">
						<time datetime="<?php the_time('Y-m-d'); ?>"><span class="genericon genericon-edit"></span><?php the_time('Y.m.d'); ?></time>
					</div>
				</article>
				<?php endwhile; 
				else:
					if( is_search() ){
						echo '<p class="nopost">検索キーワードに該当する記事がございませんでした。</p>';
					}else{
						echo '<p class="nopost">該当の記事がありませんでした。</p>';
					}
				endif; wp_reset_postdata();?>
				<?php if(function_exists('pagenation')){ pagenation(); }?>
			</div>
			<?php get_sidebar();?>
		</div>
		<?php if(function_exists('pagenation')){ pagenation(); }?>
	</div>
</main>
<?php get_template_part( 'templates/modules/content', 'footsitemap' );?>