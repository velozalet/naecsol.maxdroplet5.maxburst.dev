<?php $background_selection_full_video_value = get_sub_field('background_selection_full_video'); //video / image
//dd($background_selection_full_video_value);
?>

<?php if( $background_selection_full_video_value !== 'youtube' ):?>
<?php if( get_sub_field('full_image_upload') || get_sub_field('full_video_upload') ):?>
	<?php $upload_image = get_sub_field('full_image_upload')['url']; if($background_selection_full_video_value == 'video'): $upload_image = ''; endif;?>
	<div id="full_video_section_container" class="position-relative mt-5">
		<div class="full-video-section-container section-video <?=($background_selection_full_video_value == 'image') ? '__image' : '__video';?>" style="background-image:url('<?=$upload_image;?>');">
			<div class="row justify-content-center <?=($background_selection_full_video_value == 'image') ? 'd-none' : '';?>">
				<i class="fa fa-play-circle" id="fullVideoSectionBtn"></i>
			</div>
			<div class="video-container <?=($background_selection_full_video_value !== 'video') ? 'd-none' : '';?>">
				<video id="full_video_section_video" > <!--controls|autoplay|loop|muted-->
					<source src="<?=get_sub_field('full_video_upload');?>" type="video/mp4" />
				</video>
			</div>
		</div>
	</div>
<?php endif;?>
<?php endif;?>


<?php if( $background_selection_full_video_value == 'youtube' ):?>
<?php if( get_sub_field('full_video_youtube') ):?>
<div class="full-youtube-video-section-container mt-5 position-relative">
	<div class="ratio ratio-21x9">
		<iframe width="100%" src="<?=get_embed_link_youtube( get_sub_field('full_video_youtube') );?>" title="YouTube video" allowfullscreen></iframe>
	</div>
</div>
<?php endif;?>
<?php endif;?>

