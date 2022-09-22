<?php
$get_queried_object = get_queried_object();
$single_service_bunner = get_field('service_bunner', get_the_ID());
?>
<?php if( wp_get_attachment_url( get_post_thumbnail_id($get_queried_object->ID) ) ):?>
<div class="page-banner position-relative d-grid justify-content-lg-start justify-content-center align-items-center" style="background-image:url(<?=$single_service_bunner;?>);">
	<div class="page-banner-title--container position-relative">
		<h1 class="ps-lg-5 ps-2 pe-2 text-lg-start text-center wow--animate wow fadeInUp" data-wow-delay="2s" style="visibility:hidden"><?=$get_queried_object->post_title;?></h1> <!--wow--animate wow fadeInUp / style="visibility:hidden"-->
	</div>
</div>
<?php endif;?>
