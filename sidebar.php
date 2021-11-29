<aside class="l-sidebar">
<?php 
$now_post_type = get_post_type();
if( $now_post_type == false && is_search() ){
	$now_post_type = $_GET['post_type'];
}

if( $now_post_type == 'post' || is_category() ){
	get_template_part( 'templates/sidebar/content', 'post' );
}elseif( $now_post_type == 'yoka' ){
	get_template_part( 'templates/sidebar/content', 'yoka' );
}
?>
</aside>