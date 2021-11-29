<?php 
get_header();
$now_post_type = get_post_type();
if( $now_post_type == 'post'){
	get_template_part( 'templates/archive/content', 'post' );
}elseif( $now_post_type == 'yoka' ){
	get_template_part( 'templates/archive/content', 'yoka' );
}
get_template_part( 'templates/modules/content', 'footsitemap' );
get_footer();
?>