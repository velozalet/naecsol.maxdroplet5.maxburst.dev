<?php
$our_clients_section_background = ( get_sub_field('our_clients_section_background') ) ? get_sub_field('our_clients_section_background') : 'https://naecsol.maxdroplet5.maxburst.dev/wp-content/uploads/2022/09/banner-color2.png';
$testimonials_posts = get_needs_posts('testimonials', -1, 0, '', 'date', 'ASC'); //dd($testimonials_posts);
$our_clients_logos = get_sub_field('our_clients_section_logos');
?>
<div id="our_clients_section_container" class="our-clients-section-container mt-5 position-relative">
	<div class="background-image d-sm-grid d-block justify-content-center align-items-center">
		<div class="bg-image" style="background-image: url(<?=$our_clients_section_background;?>);"></div>
		<div class="our-clients-section-content position-relative py-5">
			<div class="container">
				<h2 class="text-center mb-3"><?=get_sub_field('our_clients_section_title');?></h2>

				<?php if( count($testimonials_posts) > 0 ):?>
				<div id="testimonials_slider" class="testimonials-slider splide" role="group" aria-label="Splide Basic HTML Example">
					<div class="splide__track">
						<ul class="splide__list">
							<?php foreach($testimonials_posts as $testimonial_post):?>
							<li class="splide__slide">
								<div class="text-center px-3 py-3">
									<div class="title-testimonial my-2"> <span>“</span><?=$testimonial_post->post_title;?><span>”</span> </div>
									<p class="text-testimonial"><?=cut_string($testimonial_post->post_content,250);?></p>
									<div class="text-testimonial-full d-none">
										<div><?=$testimonial_post->post_content;?></div>
									</div>
									<a class="learn-more-testimonial d-block mt-lg-5 mt-0 mb-3" href="#" data-bs-toggle="modal" data-bs-target="#learnMoreTestimonial">Learn more</a>
									<p class="reviewer-of-name mb-0"><?=get_field('name_of_reviewer',$testimonial_post->ID);?></p>
									<span class="position-of-reviewer"><?=get_field('caption_under_name_of_reviewer',$testimonial_post->ID);?></span>
								</div>
							</li>
							<?php endforeach;?>
						</ul>
					</div>
				</div>
				<?php endif;?>
				<div class="mt-5"></div>

				<?php if( count($our_clients_logos) > 0 ):?>
				<div id="client_logos_slider" class="client-logos-slider splide mt-3" role="group" aria-label="Splide Basic HTML Example">
					<div class="splide__track">
						<ul class="splide__list">
						<?php foreach($our_clients_logos as $client_logo):?>
							<li class="splide__slide text-center"> <img src="<?=$client_logo['client_logo'];?>" alt="logo of clients / <?=get_bloginfo('name');?>"> </li>
						<?php endforeach;?>
						</ul>
					</div>
				</div>
				<?php endif;?>
				<div class="mb-3"></div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part('templates/component/_modal_window_testimonial');?>