<?php $background_selection_value = get_sub_field('background_selection'); //video / image ?>
<?php
dd($background_selection_value);
//dd( get_sub_field('video_upload') ); //https://naecsol.maxdroplet5.maxburst.dev/wp-content/uploads/2022/09/video_1.mp4
//dd( get_sub_field('image_upload') ); //get_sub_field('image_upload')["title"] / get_sub_field('image_upload')["url"]

//dd( get_sub_field('title') ); //About Us++
//dd( get_sub_field('description') ); //Naecsol is a flexible, dedicated logistics company specializing in Cross Border E-Commerce solution......
//dd( get_sub_field('optional_button_link') ); //get_sub_field('optional_button_link')["title"] / get_sub_field('optional_button_link')["url"] / get_sub_field('optional_button_link')["target"]
//dd( get_sub_field('video_upload') ); echo '<br>';
//dd( get_sub_field('image_upload') );
?>
<?php if( get_sub_field('image_upload') || get_sub_field('video_upload') ):?>
<div id="about_us_section_container" class="container-lg mt-5 position-relative">
	<div class="about-us-section-container section-video" style="background-image:url('<?=get_sub_field('image_upload')["url"];?>');">

			<div class="row justify-content-md-end justify-content-center px-md-0 px-3">
				<div class="col-auto section-video-content text-md-start text-center">
					<h2><?=get_sub_field('title');?></h2>
					<p><?=get_sub_field('description');?></p>

					<?php $link = get_sub_field('optional_button_link'); if($link): $link_target = ($link['target']) ? $link['target'] : '_self'; endif;?>
					<?php if($link):?>
					<p>
						<a type="button" href="<?=$link['url'];?>" class="text-center button button-white" target="<?=esc_attr($link_target);?>"><?=$link['title'];?></a>
					</p>
					<?php endif;?>
				</div>
			</div>

		<div class="video-container <?=($background_selection_value !== 'video') ? 'd-none' : '';?>">
			<!--<div class="video-container-color-overlay"></div>-->
			<video autoplay loop muted>
				<source src="<?=get_sub_field('video_upload');?>" type="video/mp4" />
			</video>
		</div>
	</div>
</div>
<?php endif;?>

<div class="container">
	<div class="row">
		<div class="col">col 1....</div>
		<div class="col">col 1....</div>
		<div class="col">col 1....</div>
	</div>
</div>