<?php 
$modifiClass = '';
$now_post_type = get_post_type();
if( is_page('sophrology') || is_page('report') || is_page('staff') || is_page('classroom') || is_page('study') || is_page('hospitalization') || is_page('consultation') || is_page('about') || is_singular('report') || is_singular('study')){
	$modifiClass = '-main';
}elseif( is_page('voice') || is_singular('voice')){
	$modifiClass = '-voice';
}elseif( $now_post_type == 'yoka'  ){
	$modifiClass = '-yoka';
}
?>
<div class="m-footSitemap <?php echo $modifiClass;?>">
	<div class="m-footSitemap__inner">
		<div class="m-footSitemap__column">
			<p class="m-footSitemap__head"><a href="<?php echo home_url();?>/">トップページ</a></p>
		</div>
		<div class="m-footSitemap__column">
			<p class="m-footSitemap__head"><a href="<?php echo home_url();?>/about/">当院について</a></p>
			<ul class="m-footSitemap__list">
				<li><a href="<?php echo home_url();?>/about#overview">クリニック概要</a></li>
				<li><a href="<?php echo home_url();?>/about/family/">たなべファミリー</a></li>
				<li><a href="<?php echo home_url();?>/about/facility/">施設・設備紹介</a></li>
			</ul>
		</div>
		<div class="m-footSitemap__column">
			<p class="m-footSitemap__head"><a href="<?php echo home_url();?>/consultation/">診療のご案内</a></p>
			<ul class="m-footSitemap__list">
				<li><a href="<?php echo home_url();?>/consultation/">外来診療のご案内</a></li>
				<li><a href="<?php echo home_url();?>/consultation/hospitalization/">入院のご案内</a></li>
				<li><a href="<?php echo home_url();?>/consultation/voice/">患者さまの声</a></li>
			</ul>
		</div>
		<div class="m-footSitemap__column">
			<p class="m-footSitemap__head"><a href="<?php echo home_url();?>/sophrology/">分娩とソフロロジー</a></p>
			<ul class="m-footSitemap__list">
				<li><a href="<?php echo home_url();?>/sophrology/">分娩とソフロロジー</a></li>
				<li><a href="<?php echo home_url();?>/sophrology/report/">ソフロ体験レポート</a></li>
				<li><a href="<?php echo home_url();?>/sophrology/study/">ソフロロジーを学ぶ</a></li>
			</ul>
			<p class="m-footSitemap__head"><a href="<?php echo home_url();?>/classroom/">教室のご案内</a></p>
		</div>
		<div class="m-footSitemap__column">
			<p class="m-footSitemap__head"><a href="https://y.atlink.jp/tanabeclinic/" target="_blank">診療のご予約</a></p>
			<p class="m-footSitemap__head"><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">新着情報</a></p>
			<p class="m-footSitemap__head"><a href="<?php echo get_post_type_archive_link( 'yoka' ); ?>">今日のよか</a></p>
			<p class="m-footSitemap__head"><a href="<?php echo home_url();?>/contact/">お問い合わせ</a></p>
		</div>
		<!-- <div class="m-footSitemap__column">
			<p class="m-footSitemap__insta"><a href=""><span class="genericon genericon-instagram"></span></a></p>
		</div> -->
	</div>
</div>