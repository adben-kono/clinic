<?php 
get_header();
$value_post_type = $_GET['post_type'];
if( $value_post_type == 'post' ){
	get_template_part( 'templates/archive/content', 'post' );
}elseif( $value_post_type == 'yoka' ){
	get_template_part( 'templates/archive/content', 'yoka' );
}
get_footer();
?>