<main role="main">
	<div class="m-pageVisual -news">
		<p class="m-pageVisual__head">新着情報</p>
	</div>
	<div class="p-newsContent">
		<div class="p-newsContent__main">
			<div class="p-newsContent__body">
				<?php if ( have_posts() ) :while ( have_posts() ) : the_post();
				$cat = get_the_category();
				$cat_name = $cat[0]->name;
				?>
				<article class="p-newsContent__post">
					<h1 class="head"><?php the_title(); ?></h1>
					<div class="info">
						<time datetime="<?php the_time('Y-m-d'); ?>"><span class="genericon genericon-edit"></span><?php the_time('Y.m.d'); ?></time>
						<span class="cat"><span class="genericon genericon-pinned"></span><?php echo $cat_name;?></span>
					</div>
					<div class="editor-style">
						<?php the_content(); ?>
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
<?php 
if( is_single() ){
get_template_part( 'templates/modules/content', 'footsitemap' );
}?>