<?php
$number_of_posts_to_display = get_sub_field('number_of_posts_to_display');
$display_control_classes = '';
if($number_of_posts_to_display){
	if( $number_of_posts_to_display == '0' || !$number_of_posts_to_display ){ $number_of_posts_to_display = 2; }
	$display_control_classes = 'd-sm-block d-none';
}elseif( get_queried_object_id() == 60 ){
	$number_of_posts_to_display = -1;
}else{
	$number_of_posts_to_display = 3;
}
$recent_news_posts = get_needs_posts('post', $number_of_posts_to_display, 0, '', 'date', 'DESC');
?>
<div class="row mt-3 justify-content-center">
	<?php foreach( $recent_news_posts as $news_post ):?>
		<div class="col-xl-4 col-md-6 col-12 <?=$display_control_classes;?> mb-sm-0 mb-2">
			<div class="news-post" data-postId="<?=$news_post->ID;?>">
				<a class="position-relative" href="<?=$news_post->guid;?>">
					<article class="news-post-article" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($news_post->ID) );?>);"></article>
				</a>
				<p class="news-date mt-1 mb-0"><?=date_format( date_create($news_post->post_date),"d M Y" );?></p>
				<p class="news-title"> <a href="<?=$news_post->guid;?>"><?=$news_post->post_title;?></a> </p>
			</div>
		</div>
	<?php endforeach;?>
</div>