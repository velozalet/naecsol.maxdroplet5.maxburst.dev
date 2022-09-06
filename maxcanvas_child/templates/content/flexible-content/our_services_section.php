<div id="our_services_section_container" class="our-services-section-container container-lg mt-5 position-relative">
	<div class="row mb-4">
		<div class="col-md-6 col-12 align-self-center pe-xl-5 pe-md-0 text-md-start text-center">
			<div class="content pe-xl-5 pe-md-0">
				<h2><?=get_sub_field('title');?></h2>
				<p><?=get_sub_field('text');?></p>
				<?php $link = get_sub_field('optional_button_link'); if($link): $link_target = ($link['target']) ? $link['target'] : '_self'; endif;?>
				<?php if($link):?>
					<p class="text-md-start text-center">
						<a type="button" href="<?=$link['url'];?>" class="text-center button button-blue" target="<?=esc_attr($link_target);?>"><?=$link['title'];?></a>
					</p>
				<?php endif;?>
			</div>
		</div>
		<div class="col-6 align-self-center ps-xl-5 ps-md-3 d-md-flex d-none">
			<figure>
				<img class="img-fluid" src="<?=get_sub_field('about_us_section_image');?>" alt="<?=get_bloginfo('name');?>">
			</figure>
		</div>
	</div>
	<div class="row mt-3">
	<?php foreach( get_sub_field('services_posts_select') as $service_post ):?>
		<div class="col-sm col-12 mb-sm-0 mb-2">
			<div class="service-post" data-postId="<?=$service_post->ID;?>">
				<a class="position-relative" href="<?=$service_post->guid;?>">
					<article class="services-post d-grid align-items-end ps-2" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($service_post->ID) );?>);">
						<span><?=$service_post->post_title;?></span>
					</article>
				</a>
			</div>
		</div>
	<?php endforeach;?>
	</div>
</div>