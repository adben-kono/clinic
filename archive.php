<?php 
get_header();

if( is_post_type_archive('yoka') || is_singular('yoka') ){
	get_template_part( 'templates/archive/content', 'yoka' );
}elseif( is_post_type_archive('report') ){
	get_template_part( 'templates/archive/content', 'report' );
}

get_footer();
?>