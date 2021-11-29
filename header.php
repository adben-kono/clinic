<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120198312-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120198312-2');
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
<meta name="keywords" content="産科,婦人科,産婦人科,たなべクリニック,ソフロロジー,佐賀,唐津,糸島,伊万里">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/_common/favicon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/images/_common/touchicon.png" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&family=Noto+Serif+JP&display=swap">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/font/genericons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/editor-style.css">
<?php wp_head(); ?>
</head>
<body>
<header role="banner" class="l-header">
	<div class="l-header__contact">
		<p class="reservation"><a href="https://y.atlink.jp/tanabeclinic/" target="_blank">診療予約(再診)</a></p>
		<p class="contactform"><a href="<?php echo home_url();?>/contact/">お問い合わせ</a></p>
	</div>
	<div class="l-header__container">
		<h1 class="l-header__logo"><a href="<?php echo home_url();?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/_common/logo-header01.png" alt="医療法人虹心会　たなべクリニック産科婦人科"></a></h1>
		<div class="l-header__menu">
			<div class="handset"><a href="tel:0955-74-4171">
				<span></span>
				<p>TEL</p>
			</a></div>
			<div class="month"><a href="https://y.atlink.jp/tanabeclinic/" target="_blank">
				<span></span>
				<p>再診予約</p>
			</a></div>
			<div class="insta_t"><a href="https://www.instagram.com/tanabe_clinic/">
				<span></span>
				<p>インスタ</p>
			</a></div>
			<div class="menu"><a class="js-header-hum" href="">
				<span></span>
				<p></p>
			</a></div>
		</div>
		<nav role="navigation" class="l-nav js-header-nav">
			<ul>
				<li>
					<a href="<?php echo home_url();?>/about/">当院について</a>
					<ul>
						<li><a href="<?php echo home_url();?>/about#overview">クリニック概要</a></li>
						<li><a href="<?php echo home_url();?>/about#history">クリニックの歴史</a></li>
						<li><a href="<?php echo home_url();?>/about#thought">クリニックの想い</a></li>
						<li><a href="<?php echo home_url();?>/about#lesson">いのちの授業</a></li>
						<li><a href="<?php echo home_url();?>/about/family/">たなべファミリー</a></li>
						<li><a href="<?php echo home_url();?>/about/facility/">施設・設備紹介</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo home_url();?>/consultation/">診療のご案内</a>
					<ul>
						<li><a href="<?php echo home_url();?>/consultation#obstetrics">産科</a></li>
						<li><a href="<?php echo home_url();?>/consultation#gynecology">婦人科</a></li>
						<li><a href="<?php echo home_url();?>/consultation#cancer">がん検診</a></li>
						<li><a href="<?php echo home_url();?>/consultation/hospitalization/">入院のご案内</a></li>
						<li><a href="<?php echo home_url();?>/consultation/voice/">患者さまの声</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo home_url();?>/sophrology/">分娩とソフロロジー</a>
					<ul>
						<li><a href="<?php echo home_url();?>/sophrology#effect">ソフロロジーの効果</a></li>
						<li><a href="<?php echo home_url();?>/sophrology#delivery">分娩について</a></li>
						<li><a href="<?php echo home_url();?>/sophrology/study/">ソフロロジーを学ぶ</a></li>
						<li><a href="<?php echo home_url();?>/sophrology/report/">ソフロロジー体験レポート</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo home_url();?>/classroom/">教室のご案内</a>
					<ul>
						<li><a href="<?php echo home_url();?>/classroom#prenatal">産前教室</a></li>
						<li><a href="<?php echo home_url();?>/classroom#postpartum">産後教室</a></li>
					</ul>
				</li>
			</ul>
		</nav><!-- l-nav -->
	</div>	
</header><!-- l-header -->