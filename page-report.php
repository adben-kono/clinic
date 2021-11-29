<?php get_header();?>
<main role="main" class="p-sophReport">
	<div class="p-sophReport-visual">
		<div class="p-sophReport-visual__inner">
			<p class="p-sophReport-visual__head">
				<span class="head">ソフロロジー体験レポート</span>
			</p>
		</div>
		<ul class="p-sophReport-visual__list">
			<li><a href="<?php echo home_url();?>/sophrology/">[分娩とソフロロジー]</a></li>
			<li><a href="<?php echo home_url();?>/sophrology/study/">[ソフロを学ぶ]</a></li>
		</ul>
	</div>
	<p class="p-sophReport-txt">たなべクリニックで出産されたお母さんによるソフロロジーについてのご感想です。</p>
	<?php
	$paged = get_query_var('paged');
	$args = new WP_Query(
	    array(
	        'post_type' => 'report',
	        'posts_per_page' => '5',
	        'paged' => $paged,
	    )
	);
	if ( $args->have_posts() ) :
	while ( $args->have_posts() ) : $args->the_post();
	$custom_fields = array(
		'tax' => get_field('report_tax'),
		'content' => get_field('report_content'),
	);
	?>
	<article class="p-sophReport-post">
		<div class="p-sophReport-post__caption">
			<div class="head">
				<p><?php echo $custom_fields['tax'];?></p>
				<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
			</div>
			<div class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/_common/no-thumbnail.jpg" alt=""></div>
		</div>
		<div class="p-sophReport-post__head">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="p-sophReport-post__body">
			<p><?php echo $custom_fields['content'];?></p>
		</div>
	</article>
	<?php endwhile; endif; wp_reset_postdata();?>
	<?php 
	if(function_exists('pagenation')){ 
		$GLOBALS['wp_query']->max_num_pages = $args->max_num_pages;
    	$max_num_pages = $args->max_num_pages;
    	pagenation($max_num_pages);
	}?>
</main>
<?php get_template_part( 'templates/modules/content', 'footsitemap' );?>
<?php get_footer();?>