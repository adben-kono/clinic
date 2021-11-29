<main role="main">
	<div class="p-sophStudy-visual">
		<div class="p-sophStudy-visual__inner">
			<p class="p-sophStudy-visual__head">
				<span class="head">ソフロロジーを学ぶ</span>
				<span class="body">〜 医療従事者の方へ 〜</span>
			</p>
			<div class="p-sophStudy-visual__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sophroology_study/hero-txt.png" alt="育児こそ世界でもっ!!とも重要な仕事である。"></div>
		</div>
		<ul class="p-sophStudy-visual__list">
			<li><a href="#inner_about">研修について</a></li>
			<li><a href="#inner_report">研修レポート</a></li>
			<li><a href="<?php echo home_url();?>/sophrology/">[分娩とソフロロジー]</a></li>
			<li><a href="<?php echo home_url();?>/sophrology/report/">[ソフロ体験レポート]</a></li>
		</ul>
	</div>
	<section class="p-sophStudy-trReport" id="inner_report">
		<div class="p-sophStudy-trReport__inner">
			<div class="p-sophStudy-trAbout__ttl">
				<div class="m-guide -sophrology">
					<h2 class="m-guide__head">研修について</h2>
					<nav class="m-guide__nav">
						<ol>
							<li><a href="<?php echo home_url();?>/">ホーム</a></li>
							<li><a href="<?php echo home_url();?>/sophrology/study/">ソフロを学ぶ</a></li>
							<li>研修レポート</li>
						</ol>
					</nav>
				</div>
			</div>
			<?php
			if(have_posts()): while(have_posts()): the_post();
			$custom_fields = array(
				'facility' => get_field('study_facility'),
				'name' => get_field('study_name'),
				'content' => get_field('study_content'),
			);
			?>
			<article class="p-sophStudy-trReport__post">
				<div class="main">
					<?php if( has_post_thumbnail() ){
						the_post_thumbnail(); 
					}else{
						echo '<img src="'.get_template_directory_uri().'/assets/images/sophroology_study/no-thumbnail.jpg" alt="">';
					}?>
					<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
					<h3><?php echo $custom_fields['facility'];?><br><?php echo $custom_fields['name'];?> 様</h3>
				</div>
				<div class="content">
					<p><?php echo $custom_fields['content'];?></p>
				</div>
			</article>
			<?php endwhile; endif; wp_reset_postdata();?>
		</div>
	</section>
</main>
<?php get_template_part( 'templates/modules/content', 'footsitemap' );?>