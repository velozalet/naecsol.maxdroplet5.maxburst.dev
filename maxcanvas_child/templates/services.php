<?php
/**
 * Template Name: Services
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>

<?php
$section_selection_content_homepage = get_field('section_selection',6);
$our_services_section_content = [];
foreach( $section_selection_content_homepage as $item ){
	if( $item['acf_fc_layout'] == 'our_services_section' ){ $our_services_section_content = $item; }
} //dd( $our_services_section_content );
?>

<div id="our_services_section_container" class="our-services-section-container container-lg mt-5 mb-5 position-relative">
	<div class="row mb-4">
		<div class="col-md-6 col-12 align-self-center pe-xl-5 pe-md-0 text-md-start text-center">
			<div class="content pe-xl-5 pe-md-0">
				<h2><?=$our_services_section_content['title'];?></h2>
				<?=$our_services_section_content['text'];?>
				<?php $link = $our_services_section_content['optional_button_link']; if($link): $link_target = ($link['target']) ? $link['target'] : '_self'; endif;?>
				<?php if($link):?>
					<p class="text-md-start text-center">
						<a type="button" href="<?=$link['url'];?>" class="text-center button button-blue" target="<?=esc_attr($link_target);?>"><?=$link['title'];?></a>
					</p>
				<?php endif;?>
			</div>
		</div>

		<?php if( $our_services_section_content['about_us_section_image'] ):?>
			<div class="col-6 align-self-center ps-xl-5 ps-md-3 d-md-flex d-none">
				<figure>
					<img class="img-fluid" src="<?=$our_services_section_content['about_us_section_image'];?>" alt="<?=get_bloginfo('name');?>">
				</figure>
			</div>
		<?php endif;?>
	</div>
	<div class="row mt-3">
		<?php foreach( $our_services_section_content['services_posts_select'] as $service_post ):?>
			<div class="col-md col-12 mb-md-0 mb-2">
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

<?php get_footer();?>