<form action="<?php echo home_url( '/' ); ?>" role="search" method="get" class="l-sidebar__searchBox">
	<input type="text" class="l-sidebar__searchBox__window" name="s" value="">
	<input type="hidden" name="post_type" value="yoka">
	<input type="submit" class="l-sidebar__searchBox__submit" value="検索">
</form>
<p class="l-sidebar__head"><span class="genericon genericon-comment"></span>最近の投稿</p>
<ul class="l-sidebar__list">
	<?php
	$args = new WP_Query(
	    array(
	        'post_type' => 'yoka',
	        'posts_per_page' => '5',
	    )
	);
	// ループ
	if ( $args->have_posts() ) {
		while ( $args->have_posts() ) { $args->the_post();
			echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
		}
	}
	?>
</ul>
<p class="l-sidebar__head"><span class="genericon genericon-book"></span>アーカイブ</p>
<ol class="l-sidebar__list">
	<?php
	$args = array(
		'type'            => 'yearly',
		'limit'           => '',
		'format'          => 'html', 
		'before'          => '',
		'after'           => '',
		'show_post_count' => true,
		'echo'            => 1,
		'order'           => 'DESC',
		'post_type'     => 'yoka'
	);
	wp_get_archives( $args );
	?>
</ol>