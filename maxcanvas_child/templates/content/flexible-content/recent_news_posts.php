<?php
$number_of_posts_to_display = get_sub_field('number_of_posts_to_display');
if( $number_of_posts_to_display == '0' || !$number_of_posts_to_display ){ $number_of_posts_to_display = 1; }
$recent_news_posts = get_needs_posts('post', $number_of_posts_to_display, 0, '', 'date', 'DESC');
?>

<div id="recent_news_posts" class="recent-news-posts-container mt-5 position-relative">
	<div class="container-lg">
		<div class="row">
			<div class="col text-sm-start text-center">
				<h2>news</h2>
			</div>
			<div class="col text-end align-self-end d-sm-block d-none">
				<div> <a class="learn-more-news" href="#">View more</a> </div>
			</div>
		</div>

		<div class="row mt-3">
			<!--For Desktop/Tablet-->
			<?php foreach( $recent_news_posts as $news_post ):?>
				<div class="col-md col-12 d-sm-block d-none mb-sm-0 mb-2">
					<div class="news-post" data-postId="<?=$news_post->ID;?>">
						<a class="position-relative" href="<?=$news_post->guid;?>">
							<article class="news-post-article" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($news_post->ID) );?>);"></article>
						</a>
						<p class="news-date mt-1 mb-0"><?=date_format( date_create($news_post->post_date),"d M Y" );?></p>
						<p class="news-title"> <a href="<?=$news_post->guid;?>"><?=$news_post->post_title;?></a> </p>
					</div>
				</div>
			<?php endforeach;?>
			<!--/For Desktop/Tablet-->

			<!--For Mobile-->
			<div class="col-sm col-12 d-sm-none d-block mb-sm-0 mb-2">
				<div id="recent_news_slider" class="recent-news-slider splide" role="group" aria-label="Splide Basic HTML Example">
					<div class="splide__track">
						<ul class="splide__list">
							<?php foreach( $recent_news_posts as $news_post_slider ):?>
							<li class="splide__slide">
								<a class="position-relative" href="<?=$news_post_slider->guid;?>">
									<article class="news-post-article" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($news_post_slider->ID) );?>); background-size: cover; background-repeat: no-repeat; height: 295px;"></article>
								</a>
								<p class="news-date mt-1 mb-0"><?=date_format( date_create($news_post_slider->post_date),"d M Y" );?></p>
								<p class="news-title mb-0"> <a href="<?=$news_post_slider->guid;?>"><?=$news_post_slider->post_title;?></a> </p>
							</li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
				<div class="text-end"> <a class="learn-more-news" href="#">View more</a> </div>
			</div>
			<!--/For Mobile-->
		</div>
	</div>
</div>