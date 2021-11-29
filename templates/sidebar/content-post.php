<div class="l-sidebar__adBnr"><a href="https://www.10000nen.com/books/978-4-86626-055-6/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/_common/img-banner02.jpg" alt="院長が本を出版しました ママ、もうすぐあえるね おなかの中からハグくむ親子の絆 ソフロロジー 田邉良平（著）／太田知子（イラスト）　心療内科医 明橋大二氏推薦！"></a><a href="<?php echo home_url(); ?>/recitation/"><center><font color="#FC4D52"><u>一部を朗読した動画も<br>こちらからご覧ください！</u></font></center></div>
<form action="<?php echo home_url( '/' ); ?>" role="search" method="get" class="l-sidebar__searchBox">
	<input type="text" class="l-sidebar__searchBox__window" name="s" value="">
	<input type="hidden" name="post_type" value="post">
	<input type="submit" class="l-sidebar__searchBox__submit" value="検索">
</form>
<p class="l-sidebar__head"><span class="genericon genericon-pinned"></span>カテゴリー</p>
<ul class="l-sidebar__list">
	<?php 
	// postのカテゴリ一覧表示
	$term_all = get_terms('category');
	foreach( $term_all as $term ){
		echo '<li><a href="'.get_term_link($term->slug,'category').'">'.$term->name.'</a></li>';
	}
	?>
</ul>

<p class="l-sidebar__head"><span class="genericon genericon-comment"></span>新着記事</p>
<ul class="l-sidebar__list">
	<?php
	$args = new WP_Query(
	    array(
	        'post_type' => 'post',
	        'posts_per_page' => '4',
	    )
	);
	// ループ
	if ( $args->have_posts() ) {
		while ( $args->have_posts() ) { $args->the_post();
			// タイトル文字数制限
			if(mb_strlen($post->post_title, 'UTF-8')>14){
				$title = mb_substr($post->post_title, 0, 14, 'UTF-8');
				echo '<li><a href="'.get_permalink().'">'.$title.'…</a></li>';
			}else{
				echo '<li><a href="'.get_permalink().'">'.$post->post_title.'</a></li>';
			}
		}
	}
	wp_reset_postdata();
	?>
</ul>
<p class="l-sidebar__head"><span class="genericon genericon-book"></span>アーカイブ</p>
<ol class="l-sidebar__list">
	<?php wp_get_archives();?>
</ol>