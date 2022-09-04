<?php
$buckets_for_slider = get_field('buckets__for_slider_tab', get_the_ID())[0]['buckets_for_slider'];
?>

<?php if($buckets_for_slider):?>
<section id="splide_billboard_sub_slide" class="splide-billboard-sub-slide splide d-md-none d-sm-flex" aria-label="Basic Structure Example">
	<div class="splide__track">
		<ul class="splide__list">
			<?php foreach( $buckets_for_slider as $bucket ):?>
				<li class="text-center splide__slide">
					<img src="<?=$bucket['buckets_icon']['url'];?>" alt="<?=get_bloginfo('name');?>">
					<h4 class="text-uppercase"><?=$bucket['buckets_title'];?></h4>
					<p><?=$bucket['buckets_text'];?></p>
				</li>
			<?php endforeach;?>
		</ul>
	</div>
</section>
<?php endif;?>