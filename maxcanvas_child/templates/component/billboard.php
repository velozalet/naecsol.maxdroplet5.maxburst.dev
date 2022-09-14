<?php
$slider = get_field( 'slider', get_the_ID() );
$sliderCountSlides = count($slider);
$backgroundSelectionValue = $slider[0]['background_selection']; //video / image
$buckets_for_slider = get_field('buckets__for_slider_tab', get_the_ID())[0]['buckets_for_slider'];
?>

<?php if($slider):?>
<div class="billboard billboard-slide">

	<section id="splide_billboard_slide" class="splide-billboard splide" aria-label="Billboard Slide">
		<div class="splide__track">
			<ul class="splide__list">
				<?php $icnt = 1;?>
				<?php foreach( $slider as $slide ):?>
				<li  class="billboard-slide--item d-flex align-items-center splide__slide" style="background-image:url(<?=$slide['image_slide']['url'];?>);">
					<div class="container-lg">
						<div class="row">
							<div class="col-12 position-relative" style="z-index:1;">
								<h1 class="text-uppercase text-xl-start text-lg-center text-center">
									<!--<div> <span>North American</span> <span class="d-md-block">E-commerce Solutions -1</span> </div>-->
									<div><?=$slide['title_slide'];?></div>
								</h1>
								<p class="text-xl-start text-lg-center text-center"><?=$slide['sub_title_slide'];?></p>
							</div>
							<div class="col-12 text-xl-start text-lg-center text-center position-relative" style="z-index:1;">
								<?php $link1 = $slide['optional_button_1'];
								if($link1): $link_target1 = ($link1['target']) ? $link1['target'] : '_self'; endif;
								if($link1):?>
									<a type="button" href="<?=$link1['url'];?>" class="text-center button button-blue me-2" target="<?=esc_attr($link_target1);?>"><?=$link1['title'];?></a>
								<?php else:?>
									<a type="button" href="" class="text-center button button-blue me-2 invisible">default</a>
								<?php endif;?>

								<?php $link2 = $slide['optional_button_2'];
								if($link2): $link_target2 = ($link2['target']) ? $link2['target'] : '_self'; endif;
								if($link2):?>
								<a type="button" href="<?=$link2['url'];?>" class="text-center button button-white" target="<?=esc_attr($link_target2);?>"><?=$link2['title'];?></a>
								<?php else:?>
									<a type="button" href="" class="text-center button button-blue me-2 invisible">default</a>
								<?php endif;?>

								<p class="slide-number--progress mt-4 <?=($sliderCountSlides > 1) ? '' : 'invisible';?>"> <!--d-md-block d-none-->
									<span class="slide-number--progress-current-slide">01</span>
										<?php for($_i=0; $_i < $sliderCountSlides; ++$_i ):?>
											<span class="d-inline-block">&nbsp;</span> <!--active-->
										<?php endfor;?>
									<span class="slide-number--progress-all-slide">0<?=$sliderCountSlides;?></span>
								</p>
							</div>
						</div>
						<?php if($buckets_for_slider):?>
						<div class="row d-md-flex d-sm-none d-none">
							<?php foreach( $buckets_for_slider as $bucket ):?>
							<div class="col-3 position-relative" style="z-index:1;">
								<div class="text-center">
									<img src="<?=$bucket['buckets_icon']['url'];?>" alt="<?=get_bloginfo('name');?>">
									<h4 class="text-uppercase"><?=$bucket['buckets_title'];?></h4>
									<p><?=$bucket['buckets_text'];?></p>
								</div>
							</div>
							<?php endforeach;?>
						</div>
						<?php endif;?>
					</div>

					<!-- IF VIDEO isset for this Slide -->
					<?php if( $slide['video_slide'] ):?>
					<div class="video-container">
						<div class="video-container-color-overlay"></div>
						<video autoplay loop muted>
							<source src="<?=$slide['video_slide'];?>" type="video/mp4" />
						</video>
					</div>
					<?php endif;?>
					<!--/IF VIDEO isset for this Slide -->

				</li>
				<?php $icnt++;?>
				<?php endforeach;?>
			</ul>
		</div>
	</section>

	<?php get_template_part('templates/component/billboard-sub');?>
</div>
<?php endif;?>