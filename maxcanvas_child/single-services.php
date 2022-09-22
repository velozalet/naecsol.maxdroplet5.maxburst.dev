<?php get_header();?>
<?php
$single_service_bunner = get_field('service_bunner', get_the_ID()); //dd($single_service_bunner);
$single_service_title = get_field('service_title', get_the_ID());
$single_service_subtitle = get_field('service_subtitle', get_the_ID());
$background_selection = get_field('background_selection', get_the_ID());
$video_upload = get_field('video_upload', get_the_ID());
$image_upload = get_field('image_upload', get_the_ID());

$services_list = get_field('services_list', get_the_ID());
if($services_list){
	$services_list_cnt = count($services_list); //dd($services_list_cnt); //26
	$services_list1 = []; $services_list2 = [];

	$xx = $services_list_cnt / 2;
	$xx1 = ( is_int($xx) ) ? $xx : intval(ceil($xx));  //dd($xx1);
	$xx2 = $services_list_cnt - $xx1;
	for( $i=0; $i < $services_list_cnt; $i++ ){
		if( $i > ($xx1-1) ){
			array_push($services_list2, $services_list[$i]);
		}else{
			array_push($services_list1, $services_list[$i]);
		}
	}
}
?>
<div class="single-services-container position-relative mb-5">
	<?php if( $single_service_bunner ):?>
		<?php get_template_part('templates/component/page-service-banner');?>
	<?php else:?>
		<?php get_template_part('templates/component/page-banner');?>
	<?php endif;?>

	<div class="single-services-content mt-5 mb-5">
		<div class="container-lg">
			<div class="row">
				<div class="col-md col-12 align-self-center pe-lg-5 pe-2">
					<?php if( $single_service_title ):?><h2 class="mb-3"><?=$single_service_title;?></h2><?php endif;?>
					<?php if( $single_service_subtitle ):?><h5><?=$single_service_subtitle;?></h5><?php endif;?>
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
					<div class="col-md col-12 align-self-center">
						<div class="single-service-bg-video position-relative">
							<i class="fa fa-play-circle __video--btn" id="singleServiceVideoBtn"></i>
							<video id="single_service_bg_video" class="w-100"> <!--controls|autoplay|loop|muted-->
								<source src="<?=$video_upload;?>" type="video/mp4" />
							</video>
						</div>
					</div>
					<?php endif;?>
				<?php endif;?>
			</div>
		</div>
	</div>

	<!--For Desktop/Tablet-->
	<section id="services_list" class="services-list d-md-block d-none">
		<div class="container-lg">
			<div class="row">
				<?php if($services_list1):?>
				<div class="col services-list--1">
					<?php foreach( $services_list1 as $service1 ):?>
					<figure class="d-block mb-0">
						<?php if( $service1['service_icon'] ):?><img class="me-1" src="<?=$service1['service_icon'];?>" alt="Naecsol Service icon"><?php endif;?>
						<figcaption class="d-inline-block position-relative"><?=$service1['service_title'];?></figcaption>
						<p class="mt-2 mb-2"><?=$service1['service_subtitle'];?></p>
					</figure> <hr class="mt-0 mb-4" style="color:#002557;">
					<?php endforeach;?>
				</div>
				<?php endif;?>
				<?php if($services_list2):?>
				<div class="col services-list--1">
					<?php foreach( $services_list2 as $service2 ):?>
					<figure class="d-block mb-0">
						<?php if( $service2['service_icon'] ):?><img class="me-1" src="<?=$service2['service_icon'];?>" alt="Naecsol Service icon" ><?php endif;?>
						<figcaption class="d-inline-block position-relative"><?=$service2['service_title'];?></figcaption>
						<p class="mt-2 mb-2"><?=$service2['service_subtitle'];?></p>
					</figure> <hr class="mt-0 mb-4" style="color:#002557;">
					<?php endforeach;?>
				</div>
				<?php endif;?>
			</div>
		</div>
	</section>
	<!--/For Desktop/Tablet-->
	<!--For Mobile-->
	<section id="services_list_mobile" class="services-list services-list--mobile splide d-md-none d-block" role="group" aria-label="Splide Basic HTML Example">
		<div class="splide__track">
			<ul class="splide__list">
				<?php foreach( $services_list as $service ):?>
					<li class="splide__slide text-center mb-0">
						<img class="me-0" src="<?=$service['service_icon'];?>" alt="Naecsol Service icon" >
						<h5 class="mt-2"><?=$service['service_title'];?></h5>
						<p class="mt-1 mb-2"><?=$service['service_subtitle'];?></p>
					</li>
				<?php endforeach;?>
			</ul>
		</div>
	</section>
	<!--/For Mobile-->

	<section id="services_list_request_forms" class="services-list-request-forms mt-md-4 mt-sm-0 mt-5">
		<div class="container">
			<div class="row">
				<div class="col-12 text-xl-end text-md-center text-center mt-3">
					<button type="button" href="#" class="text-center button button-blue me-sm-2 me-0 mb-3" data-bs-toggle="modal" data-bs-target="#servicesListRequestQuote">Request a quote</button>
					<button type="button" href="#" class="text-center button button-white" data-bs-toggle="modal" data-bs-target="#servicesListRequestDemo">Request a demo</button>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('templates/component/_modal_window_request_quote');?>
	<?php get_template_part('templates/component/_modal_window_request_demo');?>
</div>
<?php get_footer();?>
