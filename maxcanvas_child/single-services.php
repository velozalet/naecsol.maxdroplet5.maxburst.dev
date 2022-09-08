<?php get_header();?>
<?php
$get_queried_object = get_queried_object();

$background_selection = get_field('background_selection', get_the_ID());
$video_upload = get_field('video_upload', get_the_ID());
$image_upload = get_field('image_upload', get_the_ID());
$services_list = get_field('services_list', get_the_ID()); //dd($services_list);
?>
<div class="single-services-container position-relative">
	<?php if( wp_get_attachment_url( get_post_thumbnail_id($get_queried_object->ID) ) ):?>
	<div class="single-services-banner position-relative d-grid justify-content-lg-start justify-content-center align-items-center" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($get_queried_object->ID) );?>);">
		<div class="single-services-title--container position-relative">
			<h1 class="ps-lg-5 ps-2 pe-2 text-lg-start text-center"><?=$get_queried_object->post_title;?></h1>
		</div>
	</div>
	<?php endif;?>

	<div class="single-services-content mt-5 mb-5">
		<div class="container-lg">
			<div class="row">
				<div class="col-md col-12 align-self-center pe-lg-5 pe-2">
					<?php if( have_posts() ) :?>
						<?php while( have_posts() ) : the_post(); ?>
							<div class="pe-lg-5 pe-0 text-md-start text-center">
								<?php the_content();?>
							</div>
						<?php endwhile;?>
					<?php else: echo "<p class='no-posts'>" . __( "Sorry, there are no posts at this time." ) . "</p>";?>
					<?php endif;?>
				</div>

				<?php if( $background_selection == 'image' ):?>
					<?php if($image_upload):?>
					<div class="col-md col-12 align-self-center">
						<div class="single-service-bg-image position-relative" style="background-image:url(<?=$image_upload;?>);">
							<img class="img-fluid position-relative" src="<?=$image_upload;?>" style="visibility:hidden; z-index:-1" />
						</div>
					</div>
					<?php endif;?>
				<?php endif;?>

				<?php if( $background_selection == 'video' ):?>
					<?php if($video_upload):?>
								<!-- Alternative: -->
								<!--				<div class="col-md col-12 align-self-center">-->
								<!--					<div class="single-service-bg-video position-relative">-->
								<!--						<div class="section-video">-->
								<!--							<div class="content">-->
								<!--								<i class="fa fa-play-circle __video--btn" id="singleServiceVideoBtn"></i>-->
								<!--							</div>-->
								<!--							<div class="video-container">-->
								<!--								<video id="single_service_bg_video" class="w-100">-->
								<!--									<source src="--><?//=$video_upload;?><!--" type="video/mp4" />-->
								<!--								</video>-->
								<!--							</div>-->
								<!--						</div>-->
								<!--					</div>-->
								<!--				</div>-->
					<div class="col-md col-12 align-self-center">
						<div class="single-service-bg-video position-relative">

							<i class="fa fa-play-circle __video--btn" id="singleServiceVideoBtn"></i>

							<video id="single_service_bg_video" class="w-100"> <!--controls|autoplay|loop|muted-->
								<source src="<?=$video_upload;?>" type="video/mp4" />
							</video>
						</div>
						</div>
					</div>
					<?php endif;?>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
