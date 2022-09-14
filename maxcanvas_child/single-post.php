 <?php get_header();?>
<?php
$news_cat_ID = 5; //This is category "News" of News Post
$number_of_posts_to_display = 3;
$recent_news_posts = get_needs_posts('post', $number_of_posts_to_display, $news_cat_ID, '', 'date', 'DESC');
?>

<div class="single-news-container position-relative mb-md-5 mb-1">
	<?php get_template_part('templates/component/page-banner');?>

	<?php if( get_field('flexible_content_areas_for_news') ):?>
	<section class="single-news-content mt-md-5 mt-4">
		<div class="container-lg">
			<div class="row">
				<?php if( get_field('flexible_content_areas_for_news')['column_1_flexible_content'] ):?>
				<div class="col-md-6 col-12 single-news-content-column_1">
					<?php foreach( get_field('flexible_content_areas_for_news')['column_1_flexible_content'] as $column1_flexblock ):?>
						<?php if( $column1_flexblock['acf_fc_layout'] == 'image_upload' ):?>
							<?php if( $column1_flexblock['image_upload'] ):?>
								<img class="img-fluid my-3" src="<?=$column1_flexblock['image_upload'];?>" alt="<?=get_bloginfo('name');?>">
							<?php endif;?>

						<?php endif;?>
						<?php if( $column1_flexblock['acf_fc_layout'] == 'video_upload' ):?>
							<?php if( $column1_flexblock['video_upload'] ):?>
								<div class="single-news-content--video position-relative my-3">
									<i class="fa fa-play-circle __video--btn" id="singleNewsVideo1Btn"></i>
									<video id="single_news_video1" class="w-100"> <!--controls|autoplay|loop|muted-->
										<source src="<?=$column1_flexblock['video_upload'];?>" type="video/mp4" />
									</video>
								</div>
							<?php endif;?>
						<?php endif;?>
						<?php if( $column1_flexblock['acf_fc_layout'] == 'text_block_column_1' ):?>
							<?php if( $column1_flexblock['text_block_column_1'] ):?>
								<?=$column1_flexblock['text_block_column_1'];?>
							<?php endif;?>
						<?php endif;?>
					<?php endforeach;?>
				</div>
				<?php endif;?>

				<?php if( get_field('flexible_content_areas_for_news')['column_2_flexible_content'] ):?>
					<div class="col-md-6 col-12 single-news-content-column_2">
						<?php foreach( get_field('flexible_content_areas_for_news')['column_2_flexible_content'] as $column2_flexblock ):?>
							<?php if( $column2_flexblock['acf_fc_layout'] == 'image_upload' ):?>
								<?php if( $column2_flexblock['image_upload'] ):?>
									<img class="img-fluid my-3" src="<?=$column2_flexblock['image_upload'];?>" alt="<?=get_bloginfo('name');?>">
								<?php endif;?>
							<?php endif;?>
							<?php if( $column2_flexblock['acf_fc_layout'] == 'video_upload' ):?>
								<?php if( $column2_flexblock['video_upload'] ):?>
									<div class="single-news-content--video position-relative my-3">
										<i class="fa fa-play-circle __video--btn" id="singleNewsVideo2Btn"></i>
										<video id="single_news_video2" class="w-100"> <!--controls|autoplay|loop|muted-->
											<source src="<?=$column2_flexblock['video_upload'];?>" type="video/mp4" />
										</video>
									</div>
								<?php endif;?>
							<?php endif;?>
							<?php if( $column2_flexblock['acf_fc_layout'] == 'text_block_column_2' ):?>
								<?php if( $column2_flexblock['text_block_column_2'] ):?>
									<?=$column2_flexblock['text_block_column_2'];?>
								<?php endif;?>
							<?php endif;?>
						<?php endforeach;?>
					</div>
				<?php endif;?>
			</div> <!--.row-->
		</div> <!--.container-->
	</section>
	<?php endif;?>

	<!--For Desktop/Tablet-->
	<div class="container-lg mt-md-5 mt-5 d-sm-block d-none">
		<h2 class="text-md-start text-center">Related News</h2>
		<?php get_template_part('templates/component/recent-news-posts');?>
	</div>
	<!--/For Desktop/Tablet-->
	<!--For Mobile-->
	<div class="container-lg mt-md-5 mt-5 d-sm-none d-block">
		<h2 class="text-md-start text-center">Related News</h2>
		<div class="row mt-3 justify-content-center">
			<div class="col-sm col-12 d-sm-none d-block mb-sm-0 mb-2">
				<div id="recent_news_slider" class="recent-news-slider splide" role="group" aria-label="Splide Basic HTML Example">
					<div class="splide__track">
						<ul class="splide__list">
							<?php foreach( $recent_news_posts as $news_post_slider ):?>
								<li class="splide__slide news-post">
									<a class="position-relative" href="<?=$news_post_slider->guid;?>">
										<article class="news-post-article" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($news_post_slider->ID) );?>);"></article>
									</a>
									<p class="news-date mt-1 mb-0"><?=date_format( date_create($news_post_slider->post_date),"d M Y" );?></p>
									<p class="news-title mb-0"> <a href="<?=$news_post_slider->guid;?>"><?=$news_post_slider->post_title;?></a> </p>
								</li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
				<div class="text-end invisible mb-4"> <a class="learn-more-news" href="/news">View more</a> </div>
			</div>
		</div>
	</div>
	<!--/For Mobile-->
</div>

<?php get_footer();?>