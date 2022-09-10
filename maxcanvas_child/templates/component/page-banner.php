<?php $get_queried_object = get_queried_object(); ?>
<?php if( wp_get_attachment_url( get_post_thumbnail_id($get_queried_object->ID) ) ):?>
<div class="page-banner position-relative d-grid justify-content-lg-start justify-content-center align-items-center" style="background-image:url(<?=wp_get_attachment_url( get_post_thumbnail_id($get_queried_object->ID) );?>);">
	<div class="page-banner-title--container position-relative">
		<h1 class="ps-lg-5 ps-2 pe-2 text-lg-start text-center"><?=$get_queried_object->post_title;?></h1>
	</div>
</div>
<?php endif;?>
