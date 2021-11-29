<main role="main" class="p-consulVoice">
	<div class="p-consulVoice-visual">
		<div class="p-consulVoice-visual__inner">
			<p class="p-consulVoice-visual__head">
				<span class="head">患者さまの声</span>
			</p>
		</div>
		<ul class="p-consulVoice-visual__list">
			<li><a href="<?php echo home_url();?>/consultation/">[診療のご案内]</a></li>
			<li><a href="<?php echo home_url();?>/consultation/hospitalization/">[入院のご案内]</a></li>
		</ul>
	</div>
	<p class="p-consulVoice-txt">たなべクリニックの良いと思ったところ、良くないと思ったところ、みなさまの率直な感想をお聞きしました。 </p>
	<?php
	if(have_posts()): while(have_posts()): the_post();
	$custom_fields = array(
	    'voice' => get_field('voice_tax'),
	    'content' => get_field('voice_content'),
	);
	?>
	<article class="p-consulVoice-post">
		<div class="p-consulVoice-post__caption">
			<div class="head">
				<p><?php echo $custom_fields['voice'];?>様</p>
				<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
			</div>
			<div class="img">
			<?php 
			if( $custom_fields['voice'] == '入院患者' ){
				echo '<img src="'.get_template_directory_uri().'/assets/images/consul_voice/thumbnail01.png" alt="">';
			}else{
				echo '<img src="'.get_template_directory_uri().'/assets/images/consul_voice/thumbnail02.png" alt="">';
			}
			?>
			</div>
		</div>
		<div class="p-consulVoice-post__head">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="p-consulVoice-post__body">
			<?php foreach( $custom_fields['content'] as $content ){
				echo '<h2 class="head"><span class="genericon genericon-edit"></span>'.$content['heading'].'</h2>';
				echo '<div class="body"><p>'.$content['body'].'</p></div>';
			}?>
		</div>
	</article>
	<?php endwhile; endif; wp_reset_postdata();?>
</main>
<?php get_template_part( 'templates/modules/content', 'footsitemap' ); ?>