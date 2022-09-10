<?php
/**
 * Template Name: Contact
 *
 * @package maxcanvas
 */
?>
<?php get_header();?>
<?php

?>
<div class="contact-page-container position-relative mb-5">
	<?php get_template_part('templates/component/page-banner');?>

	<section class="contact-page-info-block">
		<div class="container-md">
			<div class="row py-5 mt-5">
				<div class="col-md col-12 text-center">
					<a class="contact-page-info-block--address" href="<?=( get_fields('options')['site_settings']['link_on_locationgoogle_map'] )? get_fields('options')['site_settings']['link_on_locationgoogle_map']: '#';?>" target="_blank" data-bs-toggle="tooltip" title="Show On Google Map">
						<figure><img src="<?=get_stylesheet_directory_uri();?>/img/address-icon.svg" alt="Naecsol Address"></figure>
						<h5>Address</h5>
						<p>
							<?=( get_fields('options')['site_settings']['location_place'] )? get_fields('options')['site_settings']['location_place']: '';?>
							<?=( get_fields('options')['site_settings']['country_and_city'] )? get_fields('options')['site_settings']['country_and_city']: '';?>
						</p>
					</a>
				</div>
				<div class="col-md col-12 text-center">
					<a class="contact-page-info-block--phone" href="<?=( get_fields('options')['site_settings']['site_telephon'] )? get_numerics( get_fields('options')['site_settings']['site_telephon'] ): '#';?>" data-bs-toggle="tooltip" title="Call The Phone">
						<figure><img src="<?=get_stylesheet_directory_uri();?>/img/phone-call-icon.svg" alt="Naecsol Phone"></figure>
						<h5>Phone</h5>
						<p><?=( get_fields('options')['site_settings']['site_telephon'] )? get_fields('options')['site_settings']['site_telephon']: '';?></p>
					</a>
				</div>
				<div class="col-md col-12 text-center">
					<a class="contact-page-info-block--email" href="mailto:<?=( get_fields('options')['site_settings']['site_email'] )? get_fields('options')['site_settings']['site_email']: '#';?>" data-bs-toggle="tooltip" title="Go To Send Email">
						<figure><img src="<?=get_stylesheet_directory_uri();?>/img/email-us-icon.svg" alt="Naecsol Email"></figure>
						<h5>Email</h5>
						<p><?=( get_fields('options')['site_settings']['site_email'] )? get_fields('options')['site_settings']['site_email']: '';?></p>
					</a>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>