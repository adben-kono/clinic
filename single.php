<?php 
get_header();
$now_post_type = get_post_type();
if( $now_post_type == 'post' ){
	get_template_part( 'templates/archive/content', 'post' );
}elseif( $now_post_type == 'yoka' ){
	get_template_part( 'templates/archive/content', 'yoka' );
}elseif( $now_post_type == 'voice' ){
	get_template_part( 'templates/single/content', 'voice' );
}elseif( $now_post_type == 'report' ){
	get_template_part( 'templates/single/content', 'report' );
}elseif( $now_post_type == 'study' ){
	get_template_part( 'templates/single/content', 'study' );
}
get_footer();
?>